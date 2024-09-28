<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/')}}frontend/style.css">
</head>

<body>
    <!-- Top Navbar -->
    @include('frontend.includes.navbar')
    <!-- End of Top Navbar -->

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            @include('frontend.includes.sidebar')
            <!-- End of Sidebar -->


            <!-- Main Content -->
            <div class="col-9 main-content height: calc(100vh - 90px) overflow-y: auto" id="main-content">

                <!-- Home -->
                <div id="home" class="content active">
                    <div class="container">
                        <h3 class="text-center mb-4">Our Available Cars</h3>
                        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                            <div class="col">
                                <div class="card h-100">
                                    <img src="Frontend/assets/range-rover.jpg" class="card-img-top" alt="Car Image">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">Range Rover</h5>
                                        <p class="card-text">$1,200/month</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100">
                                    <img src="Frontend/assets/bmw-3-series.png" class="card-img-top" alt="Car Image">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">BMW 3 Series</h5>
                                        <p class="card-text">$950/month</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100">
                                    <img src="Frontend/assets/cla.png" class="card-img-top" alt="Car Image">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">Mercedes CLA</h5>
                                        <p class="card-text">$1,100/month</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100">
                                    <img src="Frontend/assets/tesla-s.jpg" class="card-img-top" alt="Car Image">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">Tesla S</h5>
                                        <p class="card-text">$1,500/month</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Home -->


                <!-- Book Car -->
                <div id="bookcars" class="content">
                    <h3>Book a Car</h3>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Car Type</th>
                                <th>Brand</th>
                                <th>Car Name</th>
                                <th>Image</th>
                                <th>Daily Rent</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>SUV</td>
                                <td>Land Rover</td>
                                <td>Range Rover</td>
                                <td><img src="assets/range-rover.jpg" alt="Car Image" width="50"></td>
                                <td>$100</td>
                                <td>Available</td>
                                <td><button class="btn btn-primary btn-sm">Book Now</button> </td>
                            </tr>


                            <!-- Add 4 more rows similarly -->
                        </tbody>
                    </table>

                </div>
                <!-- End of Book Car -->

                <!-- My Ongoing Bookings -->
                <div id="mybookings" class="content">
                    <h3>My Ongoing Bookings</h3>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Rental ID</th>
                                <th>Customer Name</th>
                                <th>Car Details</th>
                                <th>Start Dates</th>
                                <th>End Dates</th>
                                <th>Total Cost</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>R123</td>
                                <td>John Doe</td>
                                <td>BMW X5</td>
                                <td>2023-09-01</td>
                                <td>2023-09-05</td>
                                <td>$500</td>
                                <td>Ongoing</td>
                                <td><button class="btn btn-primary btn-sm">Edit</button> <button
                                        class="btn btn-danger btn-sm">Cancel</button></td>
                            </tr>
                            <!-- Add more rows similarly -->
                        </tbody>
                    </table>


                    <hr>
                    <br>

                    <!-- Previous Bookings -->
                    <h3>My Previous Bookings</h3>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Rental ID</th>
                                <th>Customer Name</th>
                                <th>Car Details</th>
                                <th>Start Dates</th>
                                <th>End Dates</th>
                                <th>Total Cost</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>R123</td>
                                <td>John Doe</td>
                                <td>BMW X5</td>
                                <td>2023-09-01</td>
                                <td>2023-09-05</td>
                                <td>$500</td>
                                <td>Finished</td>
                                <td><button class="btn btn-primary btn-sm">View Details</button></td>
                            </tr>
                            <!-- Add more rows similarly -->
                        </tbody>
                    </table>
                    <!-- End of Previous Bookings -->

                </div>

                <!-- About Us -->
                <div id="about" class="content">
                    <h1 class="text-center">About Us</h1>
                    <p>Welcome to <strong>Premium Car Rentals</strong>, your go-to destination for reliable and luxurious car rental services. Established in <strong>[Founding Year]</strong>, we have been dedicated to providing our customers with an unmatched driving experience. Whether you are looking for a compact car for city driving or a premium SUV for a family vacation, we have a fleet of well-maintained, top-notch vehicles that cater to all your needs.</p>

                    <h2>Our Mission</h2>
                    <p>At <strong>Premium Car Rentals</strong>, our mission is simple: to offer the best-in-class vehicles and exceptional customer service. We understand the importance of comfort, safety, and reliability when it comes to transportation. That’s why we strive to make every journey memorable by providing vehicles that are not only stylish but also well-maintained and affordable.</p>

                    <h2>Why Choose Us?</h2>
                    <ul>
                        <li><strong>Wide Selection of Vehicles</strong>: From economy cars to luxury sedans, we offer a variety of options to match your travel style.</li>
                        <li><strong>Affordable Rates</strong>: We provide competitive pricing with flexible rental plans to fit your budget.
                        </li>
                        <li><strong>24/7 Customer Support</strong>: Our team is always ready to assist you, ensuring a smooth rental process from start to finish.
                        </li>
                        <li><strong>Safety First</strong>: All of our vehicles are regularly serviced and inspected to meet the highest safety standards.
                        </li>
                        <li><strong>Flexible Rental Terms</strong>: Whether you need a vehicle for a day, a week, or longer, we offer customizable rental packages that fit your schedule.</li>
                    </ul>

                    <h2>Our Values</h2>
                    <ul>
                        <li><strong>Customer Satisfaction</strong>: We believe in going the extra mile to ensure our customers are happy and satisfied with their experience.</li>
                        <li><strong>Integrity</strong>: Transparency in pricing, no hidden fees, and a straightforward rental process is our promise to you.</li>
                        <li><strong>Innovation</strong>: We continually improve our services and fleet to offer you the latest in automotive technology and comfort.</li>
                    </ul>

                    <h2>Join Us on the Road</h2>
                    <p>Whether you are traveling for business, planning a vacation, or need a vehicle for special occasions, <strong>Premium Car Rentals</strong> is here to meet all your rental needs. We take pride in being a trusted partner for countless happy customers and look forward to serving you on your next journey.</p>
                    <p><strong>Let’s make your next ride unforgettable!</strong></p>

                </div>
                <!-- End of About Us -->

                <!-- Contact Us -->
                <div id="contact" class="content">
                    <h1>Contact Us</h1>
                    <p>If you have any questions or would like to learn more about our services, feel free to reach out to us:</p>
                    <ul>
                        <li><strong>Email:</strong> contact@premiumcarrentals.com</li>
                        <li><strong>Phone:</strong> +1 123-456-7890</li>
                        <li><strong>Address:</strong> 123 Main Street, New York, NY, 10001</li>
                    </ul>
                </div>
                <!-- End of Contact Us -->


            </div>
        </div>
    </div>

    @include('frontend.includes.script')
</body>

</html>