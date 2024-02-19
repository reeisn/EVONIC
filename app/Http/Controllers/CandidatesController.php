<?php

namespace App\Http\Controllers;

use App\Http\Controllers\CandidateController;
use Illuminate\Http\Request;
use App\Models\Candidate;
use App\Models\Vote;

class CandidatesController extends Controller
{
    public function index()
    {
        $candidate = Candidate::all();
        $c1 = Vote::where('candidate_id', '1')->count();
        $c2 = Vote::where('candidate_id', '2')->count();
        $c3 = Vote::where('candidate_id', '3')->count();
        return view('candidate.index',[
            'kandidat'=>$candidate, 'c1'=>$c1, 'c2'=>$c2, 'c3'=>$c3
        ]);
    }

    public function search(Request $request)
    {
        $keyword = $request->search;
        $kandidat = Candidate::where('nama', 'like', "%" . $keyword . "%")->paginate(5);
        return view('candidate.index', compact('kandidat'))->with('i', (request()->input('page', 1) - 1) * 5);
    }


    public function create()
    {
        return view('candidate.createcd'
        );
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'kelas' => 'required',
            'visi' => 'required',
            'misi' => 'required',
            'photo' => 'required|image|file|max:1080',
        ], [
            'nama.required'=>'Nama Kandidat wajib diisi!',
            'kelas.required'=>'Kelas Kandidat wajib diisi!',
            'visi.required'=>'Visi Kandidat wajib diisi!',
            'misi.required'=>'Misi Kandidat wajib diisi!',
            'photo.required'=>'Foto Kandidat wajib di upload!',
            'photo.image' =>'Format file harus berupa PNG,JPG atau JPEG',
            'photo.max' =>'Ukuran maksimal foto yang di upload adalah 2mb.',
        ]);
        if($request->file('photo')){
            $validated['photo'] = $request->file('photo')->store('images');
        }

        Candidate::create($validated);

        // Candidate::create($request->all());
        return redirect('/candidate-adm')->with('berhasil', 'Kandidat berhasil ditambahkan!');
    }

    public function show()
    {
        $candidate = Candidate::all();
        $c1 = Vote::where('candidate_id', '1')->count();
        $c2 = Vote::where('candidate_id', '2')->count();
        $c3 = Vote::where('candidate_id', '3')->count();
        return view('candidate.show',[
            'kandidat'=>$candidate, 'c1'=>$c1, 'c2'=>$c2, 'c3'=>$c3
        ]);
    }

    public function edit($id)
    {
        return view ('candidate.edit',[
            'kandidat' => Candidate::find($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        $candidate = Candidate::findorfail($id);
        $validated = $request->validate([
            'nama' => 'required',
            'kelas' => 'required',
            'visi' => 'required',
            'misi' => 'required',
            'photo' => 'image|file|max:1080',
            'result' => 'int'
        ], [
            'nama.required'=>'Nama Kandidat wajib diisi!',
            'kelas.required'=>'Kelas Kandidat wajib diisi!',
            'visi.required'=>'Visi Kandidat wajib diisi!',
            'misi.required'=>'Misi Kandidat wajib diisi!',
            'photo.image' =>'Format file harus berupa PNG,JPG atau JPEG',
            'photo.max' =>'Ukuran maksimal foto yang di upload adalah 2mb.',
            'result.int' => 'Hasil harus berupa angka'
    ]);

    if($request->file('photo')){
        if($request->oldImage){
            $storage::delete($request->oldImage);
        }
        $validated['photo'] = $request->file('photo')->store('images');
    }
        $candidate->update($validated);
        return redirect('/candidate-adm')->with('sukses', 'Data kandidat berhasil terubah!');
    }

    public function destroy($id)
    {
       candidate::destroy($id);
        return redirect('/candidate-adm')->with('hapus', 'Data Berhasil Dihapus!');
    }

}
