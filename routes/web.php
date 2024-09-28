<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CarsController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\RentalsController;
use App\Http\Controllers\Frontend\CarController;
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\Frontend\RentalController;
use App\Http\Controllers\Auth\AuthController;

Route::get('/layout', function () {
    return view('frontend.layout');
});

// Routes for Auth:
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');





// Routes for Admin:

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {    
Route::get('/dashboard', [CarsController::class, 'dashboard'])->name('dashboard');
Route::get('/manage_cars', [CarsController::class, 'manageCars'])->name('manage_cars');
Route::get('/manage_rentals', [RentalsController::class, 'manageRentals'])->name('manage_rentals');
Route::get('/manage_customers', [CustomerController::class, 'manageCustomers'])->name('manage_customers');

Route::get('/add_cars', [CarsController::class, 'addCars'])->name('add_cars');
Route::get('/edit_manage_cars', [CarsController::class, 'editManageCars'])->name('edit_manage_cars');
Route::get('/edit_manage_rentals', [RentalsController::class, 'editManageRentals'])->name('edit_manage_rentals');
Route::get('/view_details', [CustomerController::class, 'viewDetails'])->name('view_details');

});

// Routes for Frontend:
Route::get('/home', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

Route::get('/mybookings', [RentalController::class, 'mybookings'])->name('mybookings');
Route::get('/bookcar', [CarController::class, 'bookcar'])->name('bookcar');