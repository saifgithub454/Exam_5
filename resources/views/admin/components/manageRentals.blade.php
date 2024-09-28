@extends('admin.layout')

@section('manage_rentals_content')
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
                <td>R123</td>
                <td>John Doe</td>
                <td>BMW X5</td>
                <td>2023-09-01</td>
                <td>2023-09-05</td>
                <td>$500</td>
                <td>Ongoing</td>
                <td><button class="btn btn-primary btn-sm">Edit</button>
                    <button class="btn btn-danger btn-sm">Cancel</button>
                </td>
            </tr>
            <!-- Add more rows similarly -->
        </tbody>
    </table>
</div>

@endsection
