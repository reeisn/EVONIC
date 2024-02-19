<!-- Menghubungkan dengan view template master -->
@extends('master')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Halaman Data Voting')


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
    <br>
    @if (Session::has('hapus'))
        <div class="flex p-4 mb-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800"
            role="alert">
            <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                    clip-rule="evenodd"></path>
            </svg>
            <span class="sr-only">Info</span>
            <div>
                <span class="font-medium">Hapus Berhasil!</span> {{ Session::get('hapus') }}
    @endif
    </div>
    </div>

    <div class="p-2 sm:ml-64 flex">
        <div class="container bg-blue-100 rounded-lg">

            <div class="p-4">
                <div class="flex grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-2 mb-3">

                    <!-- component -->
                    <div class="flex-1 bg-gradient-to-r from-green-500 to-green-700 py-4 px-4 rounded-md w-64 h-32 shadow">
                        <div class="flex">
                            <div>
                                <h2
                                    class="text-base md:text-lg lg:text-lg px-2 whitespace-no-wrap text-white font-semibold">
                                    Total Siswa Terdaftar</h2>
                                <h2 class="ltext-base md:text-lg lg:text-lg lg:px-8 text-gray-200 text-white font-semibold">
                                    {{ $user->count() }}</h2>
                            </div>
                            <div class="flex justify-center items-center">
                                <svg class="w-10 h-10 md:w-20 md:h-20 lg:w-10 lg:h-10 text-white font-semibold "
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                    <path
                                        d="M96 224c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm448 0c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm32 32h-64c-17.6 
            0-33.5 7.1-45.1 18.6 40.3 22.1 68.9 62 75.1 109.4h66c17.7 0 32-14.3 32-32v-32c0-35.3-28.7-64-64-64zm-256 0c61.9 0 112-50.1 112-112S381.9 32 320 32 208 82.1 208 144s50.1
             112 112 112zm76.8 32h-8.3c-20.8 10-43.9 16-68.5 16s-47.6-6-68.5-16h-8.3C179.6 288 128 339.6 128 403.2V432c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 
             48-48v-28.8c0-63.6-51.6-115.2-115.2-115.2zm-223.7-13.4C161.5 263.1 145.6 256 128 256H64c-35.3 0-64 28.7-64 64v32c0 17.7 14.3 32 32 32h65.9c6.3-47.4 
             34.9-87.3 75.2-109.4z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="flex-1 bg-gradient-to-r from-pink-400 to-pink-600  py-4 px-2 rounded-md w-64 h-32 shadow">
                        <div class="flex">
                            <div>
                                <h2 class="text-base text-lg px-2 whitespace-no-wrap text-white font-semibold">Total Sudah
                                    Vote</h2>
                                <h2 class="ltext-base text-lg lg:px-8 text-white font-semibold">{{ $vote->count() }}</h2>
                            </div>
                            <div class="flex justify-center items-center">
                                <svg class="w-10 h-10 md:w-20 md:h-20 lg:w-10 lg:h-10 text-white font-semibold "
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                    <path
                                        d="M96 224c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm448 0c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm32 32h-64c-17.6 0-33.5 7.1-45.1 18.6 40.3 22.1 68.9 62 75.1 109.4h66c17.7 0 32-14.3 32-32v-32c0-35.3-28.7-64-64-64zm-256 0c61.9 0 112-50.1 112-112S381.9 32 320 32 208 82.1 208 144s50.1 112 112 112zm76.8 32h-8.3c-20.8 10-43.9 16-68.5 16s-47.6-6-68.5-16h-8.3C179.6 288 128 339.6 128 403.2V432c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48v-28.8c0-63.6-51.6-115.2-115.2-115.2zm-223.7-13.4C161.5 263.1 145.6 256 128 256H64c-35.3 0-64 28.7-64 64v32c0 17.7 14.3 32 32 32h65.9c6.3-47.4 34.9-87.3 75.2-109.4z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>


                    <div
                        class="flex-1 bg-gray-100 py-6 px-10 rounded-md w-72 h-72 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-1 xl:grid-cols-3 gap-5 text-center shadow">
                        <div class="flex">
                            <div>
                                <h2
                                    class="text-base ml-2 md:text-lg lg:text-lg text-center text-gray-800 font-bold">
                                    Perolehan Vote Berjalan</h2>

                                <div
                                    class="p-2 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer bg-gray-200 hover:bg-gray-200 text-zinc-700">
                                    <i class="bi bi-person-fill bg-blue-200 rounded-md px-3 py-2"></i>
                                    <span class="text-sm ml-4 text-zinc-700 font-semibold">Kandidat 01 :
                                        {{ $c1 }}</span>
                                </div>

                                <div
                                    class="p-2 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer bg-gray-200 hover:bg-gray-200 text-zinc-700">
                                    <i class="bi bi-person-fill bg-blue-200 rounded-md px-3 py-2"></i>
                                    <span class="text-sm ml-4 text-stone-800 font-semibold">Kandidat 02 :
                                        {{ $c2 }}</span>
                                </div>

                                <div
                                    class="p-2 mt-2 mb-2 flex items-center rounded-md px-4 duration-300 cursor-pointer bg-gray-200 hover:bg-gray-200 text-zinc-700">
                                    <i class="bi bi-person-fill bg-blue-200 rounded-md px-3 py-2"></i>
                                    <span class="text-sm ml-4 text-zinc-700 font-semibold">Kandidat 03 :
                                        {{ $c3 }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <form class="form" method="get" action="{{ route('search.vote') }}">
                <div class="flex justify-left">
                    <div class="mb-3 xl:w-96">
                        <div class="relative mb-4 flex w-full flex-wrap items-stretch">
                            <input type="text" name="search" id="search"
                                class="relative m-0 -mr-px block w-[1%] min-w-0 flex-auto rounded-l border border-solid border-neutral-300 bg-clip-padding px-3 py-1.5 
        text-base font-normal text-neutral-700 outline-none transition duration-300 ease-in-out focus:border-primary focus:text-neutral-700 focus:shadow-te-primary 
        focus:outline-none dark:text-neutral-200 dark:placeholder:text-neutral-200 rounded-lg bg-gray-100 shadow"
                                placeholder="Cari user" aria-label="Search" aria-describedby="button-addon1" />
                            <button
                                class="relative z-[2] flex items-center rounded-r bg-primary px-6 py-2.5 text-xs font-medium uppercase leading-tight text-white shadow-md transition 
        duration-150 ease-in-out hover:bg-primary-700 hover:shadow-lg focus:bg-primary-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-primary-800 
        active:shadow-lg"
                                type="submit" data-te-ripple-init data-te-ripple-color="light">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="h-5 w-5">
                                    <path fill-rule="evenodd"
                                        d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </form>

            <div class="pb-6">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    No
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Nama
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Kelas
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Nis
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Pilihan
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Status
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($vote as $vt)
                                {{-- @php
        //if userid changed from last iteration, store new userid and change color
          if ($lastid !== $cdt->payment->userid)
          {
              $lastid = $detail->payment->userid;
              if ($rowclass == 'white') $rowclass = 'gray-50';
              else $rowclass = 'white';
          }
        @endphp --}}

                                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $loop->iteration }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $vt->name }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $vt->kelas }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $vt->nis }}
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        {{ $vt->candidate_id }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <p class="text-green-600 font-semibold"> sudah vote</p>
                                    </td>
                                    <td class="px-6 py-4">
                                        {{-- hapus --}}
                                        <form action="/voting-adm/{{ $vt->id }}" method="post" class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger text-red-600 bi bi-trash3-fill"
                                                data-id="{{ $vt->id }}"
                                                onclick="return confirm('want to delete this data?')"></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

@endsection
