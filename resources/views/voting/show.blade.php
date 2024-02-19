<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Halaman Voting') }}
        </h2>
    </x-slot>

<div class="p-4 sm:ml-2">
    @if (Session::has('berhasil'))
    <div class="flex p-4 mb-4 text-sm text-blue-800 border border-blue-300 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400 dark:border-blue-800" role="alert">
    <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" 
    clip-rule="evenodd"></path></svg>
    <span class="sr-only">Info</span>
    <div>
        <span class="font-medium">Berhasil!</span>
    {{ Session::get('berhasil') }}
    @endif
    </div>
    </div>
    </div>
    </div>

    <div class="px-4 py-2 sm:ml-64">
    <div class="container bg-gray-100 max-w-7xl mx-auto py-10 sm:px-6 lg:px-8 shadow-md overflow-hidden sm:rounded-lg">
      <div class="p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-7">
    <!--Card 1-->
    @foreach ($kandidat as $c )
    <div class="rounded overflow-hidden shadow-lg bg-white">
      <img class="w-full" src="/storage/{{ $c->photo }}" alt="Mountain">
      <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2">0{{ $loop->iteration }}</div>
        <p class="text-base font-semibold text-blue-800">
          {{ $c->nama }}
        </p>
        @if($c->id == 1)
        <p>Perolehan suara: </p>
        <div class="px-6 pt-4 pb-2">
          <span class="inline-block bg-green-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{ $c1 }}</span>
        </div>
        @elseif($c->id == 2)
        <p>Perolehan suara: </p>
        <div class="px-6 pt-4 pb-2">
          <span class="inline-block bg-green-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{ $c2 }}</span>
        </div>
        @elseif($c->id == 3)
        <p>Perolehan suara: </p>
        <div class="px-6 pt-4 pb-2">
          <span class="inline-block bg-green-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{ $c3 }}</span>
        </div>
        @else
        <p>Perolehan suara: </p>
        <div class="px-6 pt-4 pb-2">
          <span class="inline-block bg-red-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Hasil belum tersedia.</span>
        </div>
        @endif
      </div>
    </div>
     @endforeach

    </div>
                <div class="mx-auto mb-2 sm:px-6 lg:px-8">
                <center>
                
                <button class="inline-flex items-center px-4 py-2 bg-red-400 border border-transparent rounded-md font-semibold text-xs ml-12 text-white uppercase tracking-widest hover:bg-gray-400 
            active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 hover:no-underline disabled:opacity-25 shadow transition">
                    <a href="/candidate">{{ __('Ke Halaman Kandidat') }}</a>
                    </button>
                    <button class="inline-flex items-center px-4 py-2 bg-blue-900 border border-transparent rounded-md font-semibold text-xs ml-12 text-white uppercase tracking-widest hover:bg-gray-700 
            active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 hover:no-underline shadow transition">
                    <a href="/voting/form">{{ __('Ke Halaman Form Voting') }}</a>
                    </button>
                    </center>
                </div>
    </div>
    </div>

</x-app-layout>
