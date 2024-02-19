@extends('master')
 
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Halaman Kandidat')
 
 
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


    </div>

    
<div class="p-4 sm:ml-64">

<form class="form" method="get" action="{{ route('search.cdt') }}">
<div class="flex justify-left">
  <div class="mb-3 xl:w-96">
    <div class="relative mb-4 flex w-full flex-wrap items-stretch">
      <input
        type="text" name="search" id="search"
        class="relative m-0 -mr-px block w-[1%] min-w-0 flex-auto rounded-l border border-solid border-neutral-300 bg-clip-padding px-3 py-1.5 
        text-base font-normal text-neutral-700 outline-none transition duration-300 ease-in-out focus:border-primary focus:text-neutral-700 focus:shadow-te-primary 
        focus:outline-none dark:text-neutral-200 dark:placeholder:text-neutral-200 rounded-lg bg-gray-100"
        placeholder="Cari kandidat"
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

    <div class="container bg-blue-100 rounded-lg">           
<div class="p-4">           

<div class="p-6 ml-2">
<a href="/candidate-create" class="text-white font-bold bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none 
focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-4 py-2.5 text-center">
+ kandidat
</a>
</div>

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    NO Urut
                </th>
                <th scope="col" class="px-10 py-3">
                    Foto Kandidat
                </th>
                <th scope="col" class="px-6 py-3">
                    Nama
                </th>
                <th scope="col" class="px-6 py-3">
                    Kelas
                </th>
                <th scope="col" class="px-6 py-3">
                    Visi
                </th>
                <th scope="col" class="px-6 py-3">
                    Misi
                </th>
                <th scope="col" class="px-6 py-3">
                    Hasil
                </th>
                <th scope="col" class="px-6 py-4">
                    Aksi
                </th>
            </tr>
        </thead>
        <tbody>
        
        @foreach ($kandidat as $cdt)

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
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $loop->iteration }}
                </th>
                <td class="px-6 py-4">
                    <img src="/storage/{{ $cdt->photo }}" class="img-fluid rounded-start w-28 h-28" alt="...">
                </td>
                <td class="px-6 py-4">
                    {{ $cdt->nama }}
                </td>
                <td class="px-6 py-4">
                    {{ $cdt->kelas }}
                </td>
                <td class="px-6 py-4">
                    {{ $cdt->visi }}
                </td>
                <td class="px-6 py-4">
                    {{ $cdt->misi }}
                </td>
                <td class="px-6 py-4">
                    @if($cdt->id == 1)
        <div class="px-6 pt-4 pb-2">
          <span class="inline-block bg-green-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{ $c1 }}</span>
        </div>
        @elseif($cdt->id == 2)
        <div class="px-6 pt-4 pb-2">
          <span class="inline-block bg-green-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{ $c2 }}</span>
        </div>
        @elseif($cdt->id == 3)
        <div class="px-6 pt-4 pb-2">
          <span class="inline-block bg-green-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{ $c3 }}</span>
        </div>
        @else
        <div class="px-6 pt-4 pb-2">
          <span class="inline-block bg-red-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Hasil belum tersedia.</span>
        </div>
        @endif
                </td>
                <td class="px-6 py-3">

                    {{-- menuju hal edit --}}
                    <a type="button" href="/candidate-adm/{{ $cdt->id }}/edit" class="font-semibold bi bi-pencil-square text-green-600 btn btn-success bg-rounded dark:text-blue-500 hover:underline"></a>
                    {{-- hapus --}}
                    <form action="/candidate-adm/{{ $cdt->id }}" method="post" class="d-inline">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger text-red-600 bi bi-trash3-fill" data-id="{{ $cdt->id }}"
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


    {{-- sweet alert delete --}}
    <script>
    window.addEventListener('show-delete-confirmation', event  => {
        swalWithBootstrapButtons.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'No, cancel!',
        reverseButtons: true
        }).then((result) => {
        if (result.isConfirmed) {
            swalWithBootstrapButtons.fire(
            'Deleted!',
            'Your file has been deleted.',
            'success'
            )
        } else if (
            /* Read more about handling dismissals below */
            result.dismiss === Swal.DismissReason.cancel
        ) {
            swalWithBootstrapButtons.fire(
            'Cancelled',
            'Your imaginary file is safe :)',
            'error'
            )
        }
        })

    })
    const swalWithBootstrapButtons = Swal.mixin({
  customClass: {
    confirmButton: 'btn btn-success',
    cancelButton: 'btn btn-danger'
  },
  buttonsStyling: false
})


</script>
@endsection