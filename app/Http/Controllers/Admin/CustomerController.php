<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    function manageCustomers()
    {
        return view('admin.components.manageCustomers');
    }

    // View Custormers Rental Details=================

    function viewDetails()
    {
        return view('admin.components.subcomponents.viewDetails');
    }
}
