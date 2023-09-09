<!-- <section class="pb_cover_v3 overflow-hidden cover-bg-opacity text-left pb_slant-light" id="section-home">
    <div class="container"> -->
<div class="row align-items-center justify-content-center">
    <div class="col-md-1"></div>

    <!-- Add Three Rectangular Boxes Here -->
    <div class="col-md-6">
        <div id="electricians-container">
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

    /* Responsive handling */
    @media (max-width: 768px) {
        .electrician-card {
            margin-bottom: 10px;
        }
    }
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script>
    $(document).ready(function() {
        let postCode = '{{$responseData->result->postcode}}';
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
                url: '{{route("get_electricians_data")}}', // Replace with your API endpoint
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

            electricians.forEach(function(electrician) {
                count++;
                const card = `
                
                    <div class="electrician-card">
                    <h5 class="card-title">
                            <div class="icon-text">
                                <i class="fas fa-user icon"></i> Person ${count}
                            </div>
                            <div class="icon-text">
                                <i class="fas fa-user icon"></i> ${electrician.name}
                            </div>
                        </h5>
                        <p class="card-text">
                            <div class="icon-text">
                                <i class="fas fa-map-marker-alt icon"></i> Distance: ${electrician.distance}
                            </div>
                            <div class="icon-text">
                                <i class="far fa-clock icon"></i> Time to Reach: ${electrician.time_to_reach}
                            </div>
                        </p>
                    </div>
                `;
                container.append(card);
            });
        }
    });
</script>