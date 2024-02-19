<?php

namespace App\Http\Controllers;
use App\Models\Candidate;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $candidate = Candidate::all();
        $user = User::paginate(5);
        return view('admin.dashboard',[
            'kandidat'=>$candidate, 'user'=>$user
        ]);

    }
}
