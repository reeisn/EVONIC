<?php

namespace App\Http\Controllers;
use App\Models\Vote;
use App\Models\Candidate;
use App\Models\User;
use Illuminate\Http\Request;

class VoteController extends Controller
{
    public function index()
    {
        $vote = Vote::paginate(10);
        $user = User::paginate(10);
        $c1 = Vote::where('candidate_id', '1')->count();
        $c2 = Vote::where('candidate_id', '2')->count();
        $c3 = Vote::where('candidate_id', '3')->count();
        $candidate = Candidate::all();
        return view('voting.index',[
        'vote'=>$vote, 'user'=>$user, 'c1'=>$c1, 'c2'=>$c2, 'c3'=>$c3, 'kandidat'=>$candidate
        ]);
    
    }

    public function search(Request $request)
    {
        $keyword = $request->search;
        $vote = Vote::where('name', 'like', "%" . $keyword . "%")->paginate(5);
        return view('voting.index', compact('vote'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        $candidate = Candidate::all();
        return view('voting.form',[
            'kandidat'=>$candidate,
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'kelas' => 'required',
            'nis' => 'required|unique:votes|max:10',
            'candidate_id' => 'required'
        ], [
                'name.required'=>'Nama wajib diisi!',
                'kelas.required'=>'Kelas wajib diisi!',
                'nis.required'=>'NIS wajib diisi!',
                'nis.unique'=>'Maaf, Kamu sudah pernah memilih. Setiap siswa hanya memiliki satu kesempatan saja untuk melakukan Pemilihan!',
                'nis.max'=>'Nis berisi 10 karakter angka',
                'candidate_id.required'=> 'Kamu wajib pilih Kandidat!'
            ]);

        Vote::create($validated);
        return redirect('/voting')->with('berhasil', 'Voting berhasil ditambahkan!');
    }

    public function show()
    {
        $candidate = Candidate::all();
        $vote = Vote::all();
        $c1 = Vote::where('candidate_id', '1')->count();
        $c2 = Vote::where('candidate_id', '2')->count();
        $c3 = Vote::where('candidate_id', '3')->count();
        return view('voting.show',[
        'kandidat'=>$candidate, 'vote'=>$vote, 'c1'=>$c1, 'c2'=>$c2, 'c3'=>$c3
        ]);
    }

    public function destroy($id)
    {
        vote::destroy($id);
        return redirect('/voting-adm')->with('hapus', 'Data Vote Berhasil Dihapus!');
    }


}
