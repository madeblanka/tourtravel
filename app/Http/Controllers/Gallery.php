<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Gallery extends Controller
{
    public function gallery()
    {
        return view('gallery');
    }
}
