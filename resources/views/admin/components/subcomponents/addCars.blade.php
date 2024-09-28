<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }

        .navbar {
            height: 90px;
            background-color: #343a40;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .navbar .company-logo img {
            height: 50px;
            margin-right: 10px;
        }

        .sidebar {
            height: calc(100vh - 90px);
            background-color: #1c2331;
            color: white;
            padding: 20px;
        }

        .sidebar .user-box {
            background-color: #3a3f44;
            padding: 20px;
            margin-bottom: 20px;
            text-align: center;
            border-radius: 10px;
        }

        .sidebar .user-box img {
            width: 60px;
            border-radius: 50%;
            margin-bottom: 10px;
        }

        .sidebar .nav-link {
            color: #ddd;
            margin-bottom: 10px;
        }

        .sidebar .nav-link.active {
            background-color: #007bff;
            color: white;
            border-radius: 5px;
        }

        .logout-btn {
            /* position: absolute; */
            bottom: 20px;
            left: 10%;
            right: 10%;
            width: 100%;
        }

        .main-content {
            padding: 20px;
            height: calc(100vh - 90px);
            overflow-y: auto;
        }

        .dashboard-stats {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .dashboard-stats .card {
            width: 23%;
            background-color: #00695c;
            color: white;
            text-align: center;
            padding: 20px;
            border-radius: 10px;
        }

        .dashboard-stats .card i {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .table-responsive {
            margin-top: 20px;
        }

        .content {
            display: none;
        }

        .content.active {
            display: block;
        }
    </style>
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

                <!-- Manage Cars -->
                <div id="cars" class="content">
                    <h3>Add Cars</h3>
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
                                <td>
                                    <select class="form-select" aria-label="Car Type">
                                        <option selected>Select Type</option>
                                        <option value="SUV">SUV</option>
                                        <option value="Sedan">Sedan</option>
                                    </select>
                                </td>
                                <td><input type="text" class="form-control" placeholder="Enter Brand"></td>
                                <td><input type="text" class="form-control" placeholder="Enter Car Name"></td>
                                <td><input type="file" class="form-control"></td>
                                <td><input type="number" class="form-control" placeholder="Enter Rent"></td>
                                <td>
                                    <select class="form-select" aria-label="Car Status">
                                        <option selected>Select Status</option>
                                        <option value="Available">Available</option>
                                        <option value="Unavailable">Unavailable</option>
                                    </select>
                                </td>
                                <td>
                                    <button class="btn btn-primary btn-sm">OK</button>
                                </td>
                            </tr>
                            <!-- Add more rows similarly if needed -->
                        </tbody>
                    </table>

                    
                    <a href="{{ url('/manage_cars') }}" class="btn btn-success mb-3">Back to Manage Cars</a>
                </div>


            </div>
        </div>
    </div>

    @include('admin.includes.script')
    
</body>

</html>