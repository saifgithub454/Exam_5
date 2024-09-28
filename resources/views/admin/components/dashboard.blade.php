@extends('admin.layout')

@section('dashboard_content')

<div id="dashboard" class="content active">
    <h3>Dashboard Overview</h3>
    <div class="dashboard-stats">
        <div class="card">
            <i class="bi bi-car-front-fill"></i>
            <p>Total Cars</p>
            <h4>50</h4>
        </div>
        <div class="card">
            <i class="bi bi-check-circle-fill"></i>
            <p>Available Cars</p>
            <h4>20</h4>
        </div>
        <div class="card">
            <i class="bi bi-calendar-fill"></i>
            <p>Total Rentals</p>
            <h4>120</h4>
        </div>
        <div class="card">
            <i class="bi bi-cash-stack"></i>
            <p>Total Earnings</p>
            <h4>$25,000</h4>
        </div>
    </div>
</div>

@endsection