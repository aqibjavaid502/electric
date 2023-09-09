@extends('layouts.admin')
@section('title', 'Cities')
@section('css')

    @include('admin.includes.datatables-css')

@endsection
@section('content')

    <div class="d-flex flex-column flex-md-row align-items-center jobTitlePadding">
        <h2 class="my-0 mr-md-auto">Manage Cities</h2>
        <button class="btn btn-lg btn-primary my-2 my-md-0 " data-toggle="modal" data-target="#add-city">Add City</button>
    </div>

    <div class="row">
        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
            <div class="widget-content widget-content-area br-6">
                {{--<a class="btn btn-info"--}}
                   {{--href="{{ route('city-export') }}" style="float: right;margin-right: 32px;">--}}
                    {{--Export City Data--}}
                {{--</a>--}}
                <div class="table-responsive mb-4 mt-4">
                    <div id="html5-extension_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                        <table id="html5-extension" class="table table-hover non-hover dataTable no-footer" role="grid" aria-describedby="html5-extension_info">
                            <thead>
                                <tr role="row">
                                    <th class="sorting">ID</th>
                                    <th class="sorting">Country</th>
                                    <th class="sorting">State</th>
                                    <th class="sorting">County</th>
                                    <th class="sorting">City</th>
                                    <th class="sorting">Action</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="add-city" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add City</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('cities.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Country</label>
                            <span class="text-danger"> *</span>
                            <select name="country" id="country" class="form-control" required>
                                <option value="">--Select--</option>
                           @foreach($countries as $country)
                                    <option value="{{ $country->name }}">{{ $country->name }}</option>
                               @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">State</label>
                            <span class="text-danger"> *</span>
                            <select name="state" id="state" class="form-control" onchange="stateFun()" required>
                                <option value="">--Select--</option>
                           @foreach($states as $state)
                                    <option value="{{ $state->name }}">{{ $state->name }}</option>
                               @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">County</label>
                            <span class="text-danger"> *</span>
                            <select name="county" id="county" class="form-control" required>
                                <option value="">--Select--</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">City</label>
                            <span class="text-danger"> *</span>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">
                            Submit
                            <div class="spinner-border d-none" role="status"></div>
                        </button>
                        <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal" id="delete-city" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Delete City</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Are you sure to delete?</p>
                </div>
                <div class="modal-footer">
                    <form action="" method="POST" id="delete-city-form">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-primary">
                            Submit
                            <div class="spinner-border d-none" role="status"></div>
                        </button>
                    </form>
                    <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('js')

    @include('admin.includes.datatables-js')
    <script>
        $(document).ready(function() {
            $('#html5-extension').DataTable({
                dom: '<"row"<"col-md-12"<"row"  <"col-md-4"l>  <"col-md-4 text-center"B>  <"col-md-4"f>>>' +
                    '<"col-md-12"tr>' +
                    '<"col-md-12 mt-2"<"row mt-3"  <"col-md-5"i>  <"col-md-7 text-right"p>>> >',
                buttons: {
                    buttons: [
                    //     {
                    //     extend: 'csv',
                    //     className: 'btn'
                    // }, {
                    //     extend: 'excel',
                    //     className: 'btn'
                    // }
                    ]
                },
                "processing": true,
                "serverSide": true,
                "responsive": true,
                order: [
                    [0, "desc"]
                ],
                "pageLength": 4,
                lengthMenu: [
                    [4, 10, 20, -1],
                    [4, 10, 20, 'All']
                ],
                citySave: true,
                columnDefs: [{
                    'visible': false,
                    'targets': [0]
                }],
                "ajax": {
                    "url": SITE_URL + "/cities-list",
                    "dataType": "json",
                    "type": "POST",
                    "data": {
                        _token: CSRF_TOKEN
                    }
                },
                "columns": [{
                        "data": "id",
                        orderable: false
                    },
                    {
                        "data": "country",
                        orderable: true
                    },
                    {
                        "data": "state",
                        orderable: true
                    },
                    {
                        "data": "county",
                        orderable: true
                    },
                    {
                        "data": "city",
                        orderable: true
                    },
                    {
                        "data": "action",
                        orderable: false
                    }
                ]
            });
        });
        // $('.edit-county').click(function() {
        //     $("#edit-county-form").prop('action', $(this).data('action'));
        //     $("#name").val($(this).data('name'));
        // });

        $(document).on('click', '.delete-city', function() {
            $("#delete-city-form").prop('action', $(this).data('action'));
        });
    </script>

    <script>
        function stateFun(){
            var state = $('#state').val();
            $.ajax({
                url : "{{ url('get-county') }}",
                type: 'get',
                data: {
                    state : state
                },
                success: function(res)
                {
                  $('#county').html(res);
                },
                error: function()
                {
                    // alert('failed...');

                }
            });
        }
    </script>

@endsection
