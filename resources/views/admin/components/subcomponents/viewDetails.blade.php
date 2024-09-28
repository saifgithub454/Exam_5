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


                <!-- Manage Customers -->
                <!-- View Rental History -->
                <div id="customers" class="content">
                    <h3>View Rental History</h3>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Customer Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>John Doe</td>
                                <td>johndoe@example.com</td>
                                <td>+123456789</td>
                                <td>123 Street, City</td>
                                <td>2024-09-01 </td>
                                <td>2024-09-30</td>
                            </tr>
                            <!-- Add more rows similarly -->
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

    <script>
        function showContent(section) {
            document.querySelectorAll('.content').forEach(div => div.classList.remove('active'));
            document.getElementById(section).classList.add('active');
            document.querySelectorAll('.nav-link').forEach(link => link.classList.remove('active'));
            document.querySelector(`[onclick="showContent('${section}')"]`).classList.add('active');
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>