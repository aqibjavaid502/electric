<section class="pb_cover_v3 overflow-hidden cover-bg-indigo cover-bg-opacity text-left pb_gradient_v1 pb_slant-light" id="section-home">
        <div class="container">
            <div class="row align-items-center justify-content-center">
               
                <div class="col-md-1">
                </div>
                <div class="col-md-5 relative align-self-center">
                    <form action="{{ route('call') }}" class="bg-white rounded pb_form_v1" method="POST" id="immediate-form">
                        @csrf <!-- Add CSRF token for security -->
                        <h3 class="mb-4 mt-0 text-center"> Immediate, 24/7 electrical repair and troubleshooting services</h3>
                        <div class="form-group">
                            <input type="text" class="form-control pb_height-50 reverse" name="postcode" id="postcodeImmediate" placeholder="Your Postcode">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control pb_height-50 reverse" id="contactnoImmediate" placeholder="Your Contact Number" name="contactno">
                        </div>
                        <div class="form-group">
                            <input id="changeURLImmediate" type="submit" name="submit" class="btn btn-primary btn-lg btn-block pb_btn-pill btn-shadow-blue" value="Request a call back" disabled>
                        </div>
                        @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif
                    </form>
                </div>


            </div>
        </div>
    </section>
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script>
    document.getElementById("immediate-form").addEventListener("submit", function(event) {
        var postcodeImmediate = document.getElementById("postcodeImmediate").value;
        var contactnoImmediate = document.getElementById("contactnoImmediate").value;

        if (postcodeImmediate.trim() === "" || contactnoImmediate.trim() === "") {
            event.preventDefault(); // Prevent form submission
            alert("Please fill in all required fields.");
        }
    });

    // Enable the submit button when both fields have input
    document.getElementById("postcodeImmediate").addEventListener("input", toggleSubmitButton);
    document.getElementById("contactnoImmediate").addEventListener("input", toggleSubmitButton);

    function toggleSubmitButton() {
        var postcodeImmediate = document.getElementById("postcodeImmediate").value;
        var contactnoImmediate = document.getElementById("contactnoImmediate").value;
        var changeURLImmediate = document.getElementById("changeURLImmediate");

        if (postcodeImmediate.trim() !== "" && contactnoImmediate.trim() !== "") {
            changeURLImmediate.disabled = false;
        } else {
            changeURLImmediate.disabled = true;
        }
    }
</script>
<script>
      @if(Session::has('message'))
    toastr.options = {
        "closeButton": true,
        "progressBar": true
    }
   
    toastr.success("{{ session('message') }}");
    @endif

    @if(Session::has('error'))
    toastr.options = {
        "closeButton": true,
        "progressBar": true
    }
    toastr.error("{{ session('error') }}");
    @endif
</script>