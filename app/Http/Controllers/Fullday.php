<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Fullday extends Controller
{
    public function fullDayTour()
    {
        return view('fullday');
    }
}
