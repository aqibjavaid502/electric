<!-- <section class="pb_cover_v3 overflow-hidden cover-bg-opacity text-left pb_slant-light" id="section-home">
    <div class="container"> -->
<div class="row d-flex align-items-stretch justify-content-center">
    <!-- Add Three Rectangular Boxes Here -->
    <div class="col-md-12">
        <div id="electricians-container" class="row">
            <!-- Data will be populated here -->
        </div>
    </div>
    <!-- End of Three Rectangular Boxes -->
</div>


<!-- </section> -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<!-- Include Font Awesome Icons (Assuming you have Font Awesome linked) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

<style>
    /* Custom styles for cards */
    .electrician-card {
        background-color: #f7f7f7;
        /* Change background color here */
        border: 2px solid #3498db;
        border-radius: 10px;
        padding: 15px;
        size: 20px;
        margin-bottom: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    /* Custom styles for icons */
    .icon {
        font-size: 24px;
        /* Set a fixed size for the icons */
        margin-right: 10px;
        color: #3498db;
    }

    /* Align text vertically with icons */
    .icon-text {
        display: flex;
        align-items: center;
        margin-bottom: 8px;
    }

    .card-title {
        text-align: center;
    }

    /* Responsive handling */

    /* Reduce margin space and adjust column width for mobile screens */
    @media (max-width: 768px) {
        .electrician-card {
            margin-bottom: 10px; /* Adjust margin space between cards */
        }

        /* Adjust column width for smaller screens */
        .col-12.col-md-4 {
            flex-basis: 100%;
            max-width: 100%;
        }

        /* Add some padding to the container */
        #electricians-container {
            padding: 10px;
        }
    }

    /* Further adjustments for smaller screens like iPhone 12 Pro */
    @media (max-width: 375px) {
        .col-12.col-md-4 {
            flex-basis: 100%; /* Full width for small screens */
            max-width: 100%;
        }
    }
</style>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script>
    $(document).ready(function() {
        let postCode = '{{ $responseData->result->postcode }}';
        // Check if the data is in localStorage and not expired
        const cachedData = localStorage.getItem(postCode);
        const cacheTimestamp = localStorage.getItem(postCode + 'electricians_timestamp');
        const currentTime = new Date().getTime();
        if (cachedData !== null && (currentTime - cacheTimestamp) < 180000) { // 30 minutes in milliseconds
            // Use cached data if it's not expired
            const electricians = JSON.parse(cachedData);
            displayElectricians(electricians);
        } else {
            // Fetch new data and store it in localStorage
            $.ajax({
                url: '{{ route('get_electricians_data') }}', // Replace with your API endpoint
                method: 'GET',
                success: function(data) {
                    // Save the modified data object in local storage
                    localStorage.setItem(postCode, JSON.stringify(data));
                    localStorage.setItem(postCode + 'electricians_timestamp', currentTime);
                    displayElectricians(data);
                },
                error: function() {
                    toastr.error('Failed to fetch data.');
                }
            });
        }

        function displayElectricians(electricians) {
            const container = $('#electricians-container');
            container.empty(); // Clear any previous content
            var count = 0;

            electricians.forEach(function(electrician, index) {
                count++;
                const card = `
            <div class="col-12 col-md-4 col-sm-6"> <!-- Use col-md-4 for 3 columns on md and larger screens -->
                <div class="electrician-card">
                    <h5 class="card-title">
                        <div class="icon-text">
                            <i class="fas fa-users  icon"></i> Engineer ${count}
                        </div>
                        <div class="icon-text">
                            <i class="fas fa-user icon"></i> ${electrician.name}
                        </div>
                    </h5>
                    <p class="card-text">
                        <div class="icon-text">
                            <i class="fas fa-map-marker-alt icon"></i> Distance: ${electrician.distance} miles
                        </div>
                        <div class="icon-text">
                            <i class="far fa-clock icon"></i> Time to Reach: ${electrician.time_to_reach}
                        </div>
                    </p>
                </div>
            </div>
        `;
                container.append(card);
            });
        }

    });
</script>
