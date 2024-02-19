<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\PetunjukController;

class PetunjukController extends Controller
{
    public function index()
    {
        return view('penggunaan');
    }
}
