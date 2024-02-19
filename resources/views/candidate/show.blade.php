<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Kandidat') }}
        </h2>
    </x-slot>

    <br>
    <div class="p-4">
        <div class="container bg-gray-100 rounded-lg">
            @foreach ($kandidat as $cdt)
                <div class="py-4">
                    <div class="card mb-3 align-center bg-blue-50" style="max-width: 2160px;">
                        <div class="row g-0">
                            <div class="col-4 col-md-3 my-20 ml-4">
                                <img src="storage/{{ $cdt->photo }}" class="img-fluid rounded-lg shadow width-50px"
                                    alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body text-center align-center">
                                    <div class="p-5">
                                        <h5 class="card-title font-bold text-blue-800">Nomor Urut : 0{{ $loop->iteration }}</h5>
                                        <h1 class="card-title h-4 font-bold">{{ $cdt->nama }}</h1>
                                        <p class="card-text"><small class="font-semibold text-blue-800">Kelas : </small> <small class="text-blue-800">
                                                {{ $cdt->kelas }}</small></p>
                                        <p class="card-text font-bold">Visi : <small> {{ $cdt->visi }} </small></p>
                                        <p class="card-text font-bold">Misi : <small> {{ $cdt->misi }} </small></p>
                                    </div>

                                    <div class="p-3">
                                        <button
                                            class="button text-white font-bold bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none 
                                                  focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-full text-sm 
                                                  px-4 py-2.5 text-center focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                            <a href="/voting"> Vote sekarang </a>
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


</x-app-layout>
