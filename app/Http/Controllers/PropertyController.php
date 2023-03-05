<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PropertyController extends Controller
{
    //

    public function PropertyListShow()
    {
        # code...
        return view('admin.property.property_show');
    }

    
    public function PropertyListAdd()
    {
        # code...
        return view('admin.property.property_add');
    }
}
