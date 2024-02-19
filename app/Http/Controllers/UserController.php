<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;
use App\Actions\Fortify\PasswordValidationRules;


class UserController extends Controller
{
    public function index()
    {
        $user = User::paginate(10);
        return view('profile.tampildata',[
            'user'=>$user
        ]);
    }

    // public function search(Request $request)
	// {
	// 	// menangkap data pensearchan
	// 	$search = $request->search;
    // 		// mengambil data dari table pegawai sesuai pensearchan data
	// 	$user = User::where('name','LIKE', "%" .$request->$search. "%");
    //     $user = User::paginate(1);
    // 		// mengirim data user ke view index
	// 	return view('profile.tampildata', compact('user'));
 
	// }

    public function search(Request $request)
    {
        $keyword = $request->search;
        $user = User::where('name', 'like', "%" . $keyword . "%")->paginate(5);
        return view('profile.tampildata', compact('user'))->with('i', (request()->input('page', 1) - 1) * 5);
    }


	public function create()
    {
        return view('profile.create-user'
        );
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
			'nis' => ['required', 'max:10', 'unique:users'],
			'nisn' => ['required', 'max:10', 'unique:users'],
			'kelas' => ['required'],
            'password' => ['required', 'string', 'min:8'],
        ]);


        // Hash password sebelum disimpan ke dalam database
        $validated['password'] = Hash::make($validated['password']);
        User::create($validated);

        // Candidate::create($request->all());
        return redirect('/data-user')->with('berhasil', 'Siswa berhasil ditambahkan!');
    }

    public function edit($id)
    {
        return view ('profile.edit-user',[
            'user' => User::find($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        $user = User::findorfail($id);
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
			'nis' => ['required', 'max:10'],
			'nisn' => ['required', 'max:10'],
			'kelas' => ['required'],
    ]);

        $user->update($validated);
        return redirect('/data-user')->with('sukses', 'Data user berhasil terubah!');
    }

    public function destroy($id)
    {
       User::destroy($id);
        return redirect('/data-user')->with('hapus', 'Data Berhasil Dihapus!');
    }

 
}
