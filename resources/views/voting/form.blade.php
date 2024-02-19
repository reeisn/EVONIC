<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Halaman Voting') }}
        </h2>
    </x-slot>

    <div class="p-4">
        <h2 class="max-w-7xl text-lg text-center font-semibold text-gray-900 mx-auto py-2 sm:px-6 lg:px-8">Formulir
            Pemilihan</h2>

        <div class="p-2">
            @error('nis')
                <div class="flex p-4 text-sm text-gray-800 border border-gray-300 rounded-lg bg-gray-50 dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600"
                    role="alert">
                    <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Info</span>
                    <div>
                        <span class="font-bold">Voting Gagal!</span> <span class="font-medium"> {{ $message }} </span>
                    </div>
                </div>
            @enderror
        </div>

        <div
            class="container bg-blue-100 max-w-7xl mx-auto py-10 sm:px-6 lg:px-8 shadow-md overflow-hidden sm:rounded-lg">

            <div class="p-2">

                <form method="post" action="/voting">
                    @csrf
                    <div class="row mb-3">
                        <label for="nama" class="col-sm-2 col-form-label font-semibold">Nama</label>
                        <div class="col-sm-10">
                            <input type="text"
                                class="form-control border border-gray-300 shadow-md overflow-hidden sm:rounded-lg @error('name') is-invalid @enderror"
                                value="{{ Auth::user()->name }}" name="name" id="name" readonly>
                            @error('name')
                                <div class="invalid-feedback">{{ 'Nama wajib diisi !' }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="kelas" class="col-sm-2 col-form-label font-semibold">Kelas</label>
                        <div class="col-sm-10">
                            <input type="text"
                                class="form-control border border-gray-300 shadow-md overflow-hidden sm:rounded-lg @error('kelas') is-invalid @enderror"
                                value="{{ Auth::user()->kelas }}" name="kelas" id="kelas" readonly>
                            @error('kelas')
                                <div class="invalid-feedback">{{ 'Kelas wajib diisi !' }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="nis" class="col-sm-2 col-form-label font-semibold">NIS</label>
                        <div class="col-sm-10">
                            <input type="number"
                                class="form-control border border-gray-300 shadow-md overflow-hidden sm:rounded-lg @error('nis') @enderror"
                                value="{{ Auth::user()->nis }}" name="nis" id="nis" readonly>
                        </div>
                    </div>

                    <fieldset class="row mb-3">
                        <div class="col-sm-10">
                            <div class="p-2">
                                <h3 class="mb-3 text-gray-900 dark:text-white font-semibold">Pilihan Kandidat</h3>
                                <div class="p-10 row gap-10 ml-10">
                                    @foreach ($kandidat as $cdt)
                                        <ul
                                            class="items-center w-60 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                            <li
                                                class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                                <div class="flex items-center pl-3">
                                                    <input id="candidate_id" type="radio" value="{{ $cdt->id }}"
                                                        name="candidate_id"
                                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 
                          dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                    <label for="candidate_id"
                                                        class="w-full col py-2 ml-2 text-sm text-gray-900 dark:text-gray-300 font-bold">
                                                        <div class="max-w-sm rounded overflow-hidden shadow-lg">
                                                            <img class="w-full" src="/storage/{{ $cdt->photo }}"
                                                                alt="Sunset in the mountains">
                                                            <div class="px-6 py-4">
                                                                <div class="font-bold text-xl mb-2">
                                                                    0{{ $loop->iteration }}
                                                                </div>
                                                                <div class="text-gray-700 text-base">
                                                                    {{ $cdt->nama }}
                                                                </div>

                                                            </div>
                                                        </div>

                                                    </label>

                                                </div>
                                            </li>
                                        </ul>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                    </fieldset>

                    <div class="mx-10">
                        <a class="inline-flex items-center px-4 py-2 hover:no-underline border border-transparent rounded-md font-semibold text-xs ml-12 text-blue-700 uppercase tracking-widest 
            active:bg-red-700 focus:outline-none hover:text-red-400 disabled:opacity-25 transition"
                            href="/candidate-adm" onclick="return confirm('yakin mau kembali?')">
                            {{ __('<- Kembali') }}
                        </a>
                        <x-jet-button class="mr-6 justify-left">
                            {{ __('Vote') }}
                        </x-jet-button>
                    </div>
                </form>


            </div>
</x-app-layout>
