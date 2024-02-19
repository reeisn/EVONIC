<!-- Menghubungkan dengan view template master -->
@extends('master')
 
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Halaman Tambah Data User')
 
 
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
 <div class="p-4">
    <h2 class="max-w-7xl text-lg text-center font-semibold text-gray-900 mx-auto py-2 sm:px-4 lg:px-8">Tambah Data Kandidat</h2>
    <div class="container bg-blue-100 max-w-7xl mx-auto py-10 sm:px-6 lg:px-8 shadow-md overflow-hidden sm:rounded-lg"> 

    <div class="p-2">

    <form method="post" action="/data-user/{{ $user->id }}/edit" enctype="multipart/form-data">
    @csrf
    @method('PUT')
            <div class="row mb-3">
              <label for="nama" class="col-sm-2 col-form-label font-semibold">Nama</label>
              <div class="col-sm-10">
                <input type="text" class="form-control border border-gray-300 shadow-md overflow-hidden sm:rounded-lg @error('name') is-invalid @enderror" value="{{ old('name', $user->name) }}" name="name" id="name" autofocus autocomplete="name">
                @error('name')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
              </div>
            </div>

            <div class="row mb-3">
              <label for="nis" class="col-sm-2 col-form-label font-semibold">Nis</label>
              <div class="col-sm-10">
                <input type="text" class="form-control shadow-md border border-gray-300 bg-white overflow-hidden sm:rounded-lg @error('nis') is-invalid @enderror" value="{{ old('nis', $user->nis) }}" name="nis" id="nis" >
                  @error('nis')
                  <div class="invalid-feedback">{{$message}}</div>
                  @enderror
              </div>
            </div>

            <div class="row mb-3">
              <label for="nisn" class="col-sm-2 col-form-label font-semibold">Nisn</label>
              <div class="col-sm-10">
                <input type="text" class="form-control border border-gray-300 shadow-md overflow-hidden sm:rounded-lg @error('nisn') is-invalid @enderror" value="{{ old('nisn', $user->nisn) }}" name="nisn" id="nisn" >
                @error('nisn')
                  <div class="invalid-feedback">{{$message}}</div>
                  @enderror
              </div>
            </div>

            <div class="row mb-3">
              <label for="kelas" class="col-sm-2 col-form-label font-semibold">Kelas</label>
              <div class="col-sm-10">
                <input type="text" class="form-control border border-gray-300 shadow-md overflow-hidden sm:rounded-lg @error('kelas') is-invalid @enderror" value="{{ old('kelas', $user->kelas) }}" name="kelas" id="kelas" >
                @error('kelas')
                  <div class="invalid-feedback">{{$message}}</div>
                  @enderror
              </div>
            </div>

            <div class="row mb-3">
              <label for="email" class="col-sm-2 col-form-label font-semibold">E-Mail</label>
              <div class="col-sm-10">
                <input type="text" class="form-control border border-gray-300 shadow-md overflow-hidden sm:rounded-lg @error('email') is-invalid @enderror" value="{{ old('email', $user->email) }}" name="email" id="email" >
                @error('email')
                  <div class="invalid-feedback">{{$message}}</div>
                  @enderror
              </div>
            </div>

            <div class="ml-40">
            <a class="inline-flex items-center px-4 py-2 bg-gray-700 border border-transparent rounded-md font-semibold text-xs ml-12 text-white uppercase tracking-widest hover:bg-gray-700 
            active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition" href="/data-user" onclick="return confirm('yakin mau kembali?')">
                    {{ __('Kembali') }}
                </a>
            <x-jet-button class="mr-6">
                    {{ __('Ubah User') }}
                </x-jet-button>
            </div>
          </form>
            
            </div>
@endsection