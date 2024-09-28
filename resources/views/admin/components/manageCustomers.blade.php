@extends('admin.layout')

@section('content')
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
                                <td>John Doe</td>
                                <td>johndoe@example.com</td>
                                <td>+123456789</td>
                                <td>123 Street, City</td>
                                <td><button class="btn btn-info btn-sm">View Details</button></td>
                            </tr>
                            <!-- Add more rows similarly -->
                        </tbody>
                    </table>

                </div>

@endsection   

