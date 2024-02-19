<!-- Menghubungkan dengan view template master -->
@extends('master')
 
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Halaman Data User')
 
 
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

    <div class="p-2 ml-2">

    @if (Session::has('berhasil'))
    <div class="flex p-4 mb-4 text-sm text-blue-800 border border-blue-300 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400 dark:border-blue-800" role="alert">
    <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
    <span class="sr-only">Info</span>
    <div>
        <span class="font-medium">Berhasil!</span>
    {{ Session::get('berhasil') }}
    @endif
    </div>
    </div>

    </div>

    <div class="p-2 sm:ml-64">

    @if (Session::has('hapus'))
    <div class="flex p-4 mb-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800" role="alert">
    <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
    <span class="sr-only">Info</span>
    <div>
        <span class="font-medium">Hapus Berhasil!</span> {{ Session::get('hapus') }}
        @endif
    </div>
    </div>

    </div>

    <div class="p-2 sm:ml-64">

    @if (Session::has('sukses'))
    <div class="flex p-4 text-sm text-gray-800 border border-gray-300 rounded-lg bg-gray-50 dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600" role="alert">
    <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
    <span class="sr-only">Info</span>
    <div>
        <span class="font-medium">Edit Berhasil!</span> {{ Session::get('sukses') }}
        @endif
    </div>
    </div>

    </div>

 
    <div class="px-4 py-2 sm:ml-64">

    {{-- <!-- Start kode untuk form pencarian -->
<form class="form" method="get" action="{{ route('search.user') }}">
    <div class="form-group w-100 mb-3">
        <label for="search" class="d-block mr-2">Pencarian</label>
        <input type="text" name="search" class="form-control w-75 d-inline" id="search" placeholder="Masukkan keyword">
        <button type="submit" class="btn btn-primary mb-1">Cari</button>
    </div>
</form>
<!-- Start kode untuk form pencarian -->
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif --}}

<form class="form" method="get" action="{{ route('search.user') }}">
<div class="flex justify-left">
  <div class="mb-3 xl:w-96">
    <div class="relative mb-4 flex w-full flex-wrap items-stretch">
      <input
        type="text" name="search" id="search"
        class="relative m-0 -mr-px block w-[1%] min-w-0 flex-auto rounded-l border border-solid border-neutral-300 bg-clip-padding px-3 py-1.5 
        text-base font-normal text-neutral-700 outline-none transition duration-300 ease-in-out focus:border-primary focus:text-neutral-700 focus:shadow-te-primary 
        focus:outline-none dark:text-neutral-200 dark:placeholder:text-neutral-200 rounded-lg bg-gray-100"
        placeholder="Cari user"
        aria-label="Search"
        aria-describedby="button-addon1" />
      <button
        class="relative z-[2] flex items-center rounded-r bg-primary px-6 py-2.5 text-xs font-medium uppercase leading-tight text-white shadow-md transition 
        duration-150 ease-in-out hover:bg-primary-700 hover:shadow-lg focus:bg-primary-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-primary-800 
        active:shadow-lg"
        type="submit"
        data-te-ripple-init
        data-te-ripple-color="light">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 20 20"
          fill="currentColor"
          class="h-5 w-5">
          <path
            fill-rule="evenodd"
            d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z"
            clip-rule="evenodd" />
        </svg>
      </button>
    </div>
  </div>
</div>
</form>
    
    <div class="container bg-blue-100 max-w-7xl mx-auto py-10 sm:px-6 lg:px-8 shadow-md overflow-hidden sm:rounded-lg"> 
    <div class="p-4 ml-2">
    <a href="/user-create" class="text-white font-bold bg-gradient-to-r from-blue-500 via-blue-600 
    to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 
    dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-4 py-2.5 text-center">+ USER</a>
    </div>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    No
                </th>
                <th scope="col" class="px-6 py-3">
                    Foto Profil
                </th>
                <th scope="col" class="px-6 py-3">
                    Nama
                </th>
                <th scope="col" class="px-6 py-3">
                    Nis
                </th>
                <th scope="col" class="px-6 py-3">
                    Nisn
                </th>
                <th scope="col" class="px-6 py-3">
                    Kelas
                </th>
                <th scope="col" class="px-6 py-4">
                    Aksi
                </th>
            </tr>
        </thead>
        <tbody>
        
        @foreach ($user as $usr)

            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $loop->iteration }}
                </th>
                <td class="px-6 py-4">
              @if($usr->profile_photo_path)
              <img src="{{ asset('/storage/' . $usr->profile_photo_path) }}" id="img-preview" class="img-preview img-fluid mb-3 w-11 d-block">
              @else
              <img src="storage/profile-photos/ava.jpg" id="img-preview" class="img-preview img-fluid mb-3 w-11">
              @endif
                </td>
                <td class="px-6 py-4">
                    {{ $usr->name }}
                </td>
                <td class="px-6 py-4">
                    {{ $usr->nis }}
                </td>
                <td class="px-6 py-4">
                    {{ $usr->nisn }}
                </td>
                <td class="px-6 py-4">
                    {{ $usr->kelas }}
                </td>
                <td class="px-6 py-3">

                    {{-- menuju hal edit --}}
                     <a type="button" href="/data-user/{{ $usr->id }}/edit" class="font-semibold bi bi-pencil-square text-green-600 btn btn-success bg-rounded dark:text-blue-500 hover:underline"></a>
                    {{-- hapus --}}
                    <form action="/data-user/{{ $usr->id }}" method="post" class="d-inline">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger text-red-600 bi bi-trash3-fill" data-id=""
                    onclick="return confirm('Yakin mau menghapus?')"></button>
                </form>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>
<div class="p-2">
{{ $user->links() }}
</div>
</div>
{{-- Current Page: {{ $user->currentPage() }}<br>
        Jumlah Data: {{ $user->total() }}<br>
        Data perhalaman: {{ $user->perPage() }}<br>
        <br> --}}
        
    </div>
    </div>
    </div>
        
    </div>
    </div>


@endsection