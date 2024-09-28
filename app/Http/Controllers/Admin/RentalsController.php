<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RentalsController extends Controller
{
    function manageRentals()
    {
        return view('admin.components.manageRentals');
    }


    // Edit Manage Rentals========================

    function editManageRentals()
    {
        return view('admin.components.subcomponents.editmanageRentals');
    }
}
