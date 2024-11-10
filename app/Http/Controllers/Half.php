<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Half extends Controller
{
    public function halfDayTour()
    {
        return view('half');
    }
}
