<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PetunjukController;
use App\Http\Controllers\VoteController;
use App\Http\Controllers\CandidatesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ResultController;
use App\Http\Middleware\AdminRedirectIfAuthenticated;
use App\Models\Candidate;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});



Route::middleware('admin:admin')->group(function () {
    Route::get('admin/login', [AdminController::class, 'loginForm']);
    Route::post('admin/login', [AdminController::class, 'store'])->name('admin.login');
});

// Route::middleware(['auth:sanctum,admin', config('jetstream.auth_session'), 'verified'
// ])->group(function () {
//     Route::get('/admin/dashboard', function () {
//         return view('admin.dashboard');
//     })->name('dashboard')->middleware('auth:admin');

Route::middleware(['auth:sanctum,admin', config('jetstream.auth_session'), 'verified'
])->group(function () {
    Route::get('/admin/dashboard', function () {
        $candidate = Candidate::all();
        $user = User::paginate(5);
        return view('admin.dashboard',[
            'kandidat'=>$candidate, 'user'=>$user
        ]);
    })->name('dashboard')->middleware('auth:admin');

    //route halaman data user
    Route::get('/data-user',[UserController::class, 'index'])->middleware('auth:admin')->name('data-user');
    Route::get('/data-user/search',[UserController::class, 'search'])->middleware('auth:admin')->name('search.user');
    Route::get('/user-create',[UserController::class, 'create'])->middleware('auth:admin');
    Route::post('/data-user',[UserController::class, 'store'])->middleware('auth:admin');
    Route::get('/data-user/{id}/edit', [UserController::class,'edit'])->middleware('auth:admin');
    Route::put('/data-user/{id}/edit', [UserController::class,'update'])->middleware('auth:admin');
    Route::delete('/data-user/{id}', [UserController::class,'destroy'])->middleware('auth:admin');


    //route halaman voting 
    Route::get('/voting-adm',[VoteController::class, 'index'])->middleware('auth:admin')->name('voting-adm');
    Route::delete('/voting-adm/{id}',[VoteController::class, 'destroy'])->middleware('auth:admin');
    Route::get('/voting-adm/search',[VoteController::class, 'search'])->middleware('auth:admin')->name('search.vote');

    //Route halaman Kandidat
    Route::get('/candidate-adm',[CandidatesController::class, 'index'])->middleware('auth:admin')->name('candidate-adm');
    Route::get('/candidate-create',[CandidatesController::class, 'create'])->middleware('auth:admin');;
    Route::post('/candidate-adm',[CandidatesController::class, 'store'])->middleware('auth:admin');;
    Route::get('/candidate-adm/{id}/edit', [CandidatesController::class,'edit'])->middleware('auth:admin');;
    Route::put('/candidate-adm/{id}/edit', [CandidatesController::class,'update'])->middleware('auth:admin');;
    Route::delete('/candidate-adm/{id}', [CandidatesController::class,'destroy'])->middleware('auth:admin');;  
    Route::get('/candidate-adm/search',[CandidatesController::class, 'search'])->middleware('auth:admin')->name('search.cdt');  

});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/penggunaan',[PetunjukController::class, 'index']);

Route::get('/voting',[VoteController::class, 'show'])->name('voting');
Route::get('/voting/form',[VoteController::class, 'create']);
Route::post('/voting',[VoteController::class, 'store']);


Route::get('/candidate',[CandidatesController::class, 'show'])->name('candidate');

Route::get('/ya',[ResultController::class, 'index'])->name('ya');



