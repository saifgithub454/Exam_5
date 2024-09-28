<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    function dashboard()
    {
        return view('admin.components.dashboard');
    }

    function manageCars()
    {
        return view('admin.components.manageCars');
    }

    


    // ADD Cars ===========================================

    function addCars()
    {
        return view('admin.components.subcomponents.addCars');
    }


    // EDIT Manage Cars ====================================

    function editManageCars()
    {
        return view('admin.components.subcomponents.editManageCars');
    }
}
