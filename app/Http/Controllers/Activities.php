<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Activities extends Controller
{
    public function activities()
    {
        return view('activities');
    }
}
