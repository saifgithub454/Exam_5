@extends('admin.layout')

@section('manage_cars_content')


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
                <td><img src="assets/range-rover.jpg" alt="Car Image" width="50"></td>
                <td>$100</td>
                <td>Available</td>
                <td><button class="btn btn-primary btn-sm">Edit</button> <button
                        class="btn btn-danger btn-sm">Delete</button></td>
            </tr>
            <tr>
                <td>Sedan</td>
                <td>BMW</td>
                <td>Series-3</td>
                <td><img src="assets/bmw-3-series.png" alt="Car Image" width="50"></td>
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

@endsection