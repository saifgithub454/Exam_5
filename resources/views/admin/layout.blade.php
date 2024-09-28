<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/')}}Admin/style.css">
</head>

<body>
    <!-- Top Navbar -->
    <nav class="navbar">
        <div class="company-logo">
            <img src="assets/logo.png" alt="Company Logo">
            <span class="navbar-brand mb-0 h1 text-white fs-2">Premium Car Rental</span>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-3 sidebar">
                <div class="user-box">
                    <img src="assets/img.jpeg" alt="Admin Pic">
                    <h5>Admin Name</h5>
                </div>

                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="#" onclick="showContent('dashboard')">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="showContent('cars')">Manage Cars</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="showContent('rentals')">Manage Rentals</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="showContent('customers')">Manage Customers</a>
                    </li>


                    <br><br><br><br><br>

                    <button class="btn btn-danger logout-btn">Logout</button>

                </ul>


            </div>

            <!-- Main Content -->
            <div class="col-9 main-content" id="main-content">

                <!-- Dashboard Overview -->
                <div id="dashboard" class="content active">
                    <h3>Dashboard Overview</h3>
                    <div class="dashboard-stats">
                        <div class="card">
                            <i class="bi bi-car-front-fill"></i>
                            <p>Total Cars</p>
                            <h4>10</h4>
                        </div>
                        <div class="card">
                            <i class="bi bi-check-circle-fill"></i>
                            <p>Available Cars</p>
                            <h4>5</h4>
                        </div>
                        <div class="card">
                            <i class="bi bi-calendar-fill"></i>
                            <p>Total Rentals</p>
                            <h4>12</h4>
                        </div>
                        <div class="card">
                            <i class="bi bi-cash-stack"></i>
                            <p>Total Earnings</p>
                            <h4>$5,000</h4>
                        </div>
                    </div>
                </div>

                <!-- Manage Cars -->
                <div id="cars" class="content">
                    <h3>Manage Cars</h3>
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
                                <td><img src="Admin/assets/range-rover.jpg" alt="Car Image" width="50"></td>
                                <td>$100</td>
                                <td>Available</td>
                                <td><button class="btn btn-primary btn-sm">Edit</button> <button
                                        class="btn btn-danger btn-sm">Delete</button></td>
                            </tr>
                            <tr>
                                <td>Sedan</td>
                                <td>BMW</td>
                                <td>Series-3</td>
                                <td><img src="Admin/assets/bmw-3-series.png" alt="Car Image" width="50"></td>
                                <td>$100</td>
                                <td>Available</td>
                                <td><button class="btn btn-primary btn-sm">Edit</button> <button
                                        class="btn btn-danger btn-sm">Delete</button></td>
                            </tr>
                            <tr>
                                <td>Sedan</td>
                                <td>BMW</td>
                                <td>Series-3</td>
                                <td><img src="Admin/assets/bmw-3-series.png" alt="Car Image" width="50"></td>
                                <td>$100</td>
                                <td>Available</td>
                                <td><button class="btn btn-primary btn-sm">Edit</button> <button
                                        class="btn btn-danger btn-sm">Delete</button></td>
                            </tr>
                            <tr>
                                <td>Sedan</td>
                                <td>BMW</td>
                                <td>Series-3</td>
                                <td><img src="Admin/assets/bmw-3-series.png" alt="Car Image" width="50"></td>
                                <td>$100</td>
                                <td>Available</td>
                                <td><button class="btn btn-primary btn-sm">Edit</button> <button
                                        class="btn btn-danger btn-sm">Delete</button></td>
                            </tr>
                            <tr>
                                <td>Sedan</td>
                                <td>BMW</td>
                                <td>Series-3</td>
                                <td><img src="Admin/assets/bmw-3-series.png" alt="Car Image" width="50"></td>
                                <td>$100</td>
                                <td>Available</td>
                                <td><button class="btn btn-primary btn-sm">Edit</button> <button
                                        class="btn btn-danger btn-sm">Delete</button></td>
                            </tr>
                            <tr>
                                <td>Sedan</td>
                                <td>BMW</td>
                                <td>Series-3</td>
                                <td><img src="Admin/assets/bmw-3-series.png" alt="Car Image" width="50"></td>
                                <td>$100</td>
                                <td>Available</td>
                                <td><button class="btn btn-primary btn-sm">Edit</button> <button
                                        class="btn btn-danger btn-sm">Delete</button></td>
                            </tr>
                            <tr>
                                <td>Sedan</td>
                                <td>BMW</td>
                                <td>Series-3</td>
                                <td><img src="Admin/assets/bmw-3-series.png" alt="Car Image" width="50"></td>
                                <td>$100</td>
                                <td>Available</td>
                                <td><button class="btn btn-primary btn-sm">Edit</button> <button
                                        class="btn btn-danger btn-sm">Delete</button></td>
                            </tr>

                            <!-- Add more rows similarly -->
                        </tbody>
                    </table>

                    <!-- <button class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#addCarModal">Add Car</button> -->
                    <a href="{{ url('/add_cars') }}" class="btn btn-success mb-3">Add Car</a>
                </div>
                <!-- End Manage Cars -->

                <!-- Manage Rentals -->
                <div id="rentals" class="content">
                    <h3>Manage Rentals</h3>
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
                                <td>R101</td>
                                <td>Saiful Islam</td>
                                <td>Range-Rover</td>
                                <td>2023-09-05</td>
                                <td>2023-09-09</td>
                                <td>$700</td>
                                <td>Finished</td>
                                <td><button class="btn btn-primary btn-sm">Edit</button>
                                    <button class="btn btn-danger btn-sm">Cancel</button>
                                </td>
                            </tr>
                            <tr>
                                <td>R102</td>
                                <td>Jahidul Islam</td>
                                <td>BMW X5</td>
                                <td>2023-09-03</td>
                                <td>2023-09-07</td>
                                <td>$400</td>
                                <td>Finished</td>
                                <td><button class="btn btn-primary btn-sm">Edit</button>
                                    <button class="btn btn-danger btn-sm">Cancel</button>
                                </td>
                            </tr>
                            <tr>
                                <td>R103</td>
                                <td>Ishrak Hossain</td>
                                <td>Mersedes Cla</td>
                                <td>2023-09-15</td>
                                <td>2023-09-20</td>
                                <td>$300</td>
                                <td>Finished</td>
                                <td><button class="btn btn-primary btn-sm">Edit</button>
                                    <button class="btn btn-danger btn-sm">Cancel</button>
                                </td>
                            </tr>
                            <tr>
                                <td>R104</td>
                                <td>Mehedi Hasan</td>
                                <td>BMW X5</td>
                                <td>2023-09-29</td>
                                <td>2023-09-30</td>
                                <td>$100</td>
                                <td>Ongoing</td>
                                <td><button class="btn btn-primary btn-sm">Edit</button>
                                    <button class="btn btn-danger btn-sm">Cancel</button>
                                </td>
                            </tr>
                            <tr>
                                <td>R105</td>
                                <td>Touhid Hasan</td>
                                <td>Tesla S</td>
                                <td>2023-10-5</td>
                                <td>2023-10-25</td>
                                <td>$1500</td>
                                <td>Ongoing</td>
                                <td><button class="btn btn-primary btn-sm">Edit</button>
                                    <button class="btn btn-danger btn-sm">Cancel</button>
                                </td>
                            </tr>
                            <!-- Add more rows similarly -->
                        </tbody>
                    </table>
                </div>
                <!-- End Manage Rentals -->

                <!-- Manage Customers -->
                <div id="customers" class="content">
                    <h3>Manage Customers</h3>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Customer Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Rental History</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Saiful Islam</td>
                                <td>saiful@gmail.com</td>
                                <td>+880 1235478446</td>
                                <td>Mohammadpur, Dhaka</td>
                                <td><button class="btn btn-info btn-sm">View Details</button></td>
                            </tr>
                            <tr>
                                <td>Jahidul Islam</td>
                                <td>jahidul@gmail.com</td>
                                <td>+880 45874478446</td>
                                <td>Mohammadpur, Dhaka</td>
                                <td><button class="btn btn-info btn-sm">View Details</button></td>
                            </tr>
                            <tr>
                                <td>Ishrak Hossain</td>
                                <td>ishrak@gmail.com</td>
                                <td>+880 1235478446</td>
                                <td>Azimpur, Dhaka</td>
                                <td><button class="btn btn-info btn-sm">View Details</button></td>
                            </tr>
                            <tr>
                                <td>Touhidul Islam</td>
                                <td>Touhid@gmail.com</td>
                                <td>+880 1235478446</td>
                                <td>Mohammadpur, Dhaka</td>
                                <td><button class="btn btn-info btn-sm">View Details</button></td>
                            </tr>
                            <tr>
                                <td>Mehedi Hasan</td>
                                <td>mehedi@gmail.com</td>
                                <td>+880 1235478446</td>
                                <td>Mohammadpur, Dhaka</td>
                                <td><button class="btn btn-info btn-sm">View Details</button></td>
                            </tr>
                            <!-- Add more rows similarly -->
                        </tbody>
                    </table>

                </div>
                <!-- End Manage Customers -->

            </div>
        </div>
    </div>

    @include('admin.includes.script')


</body>

</html>