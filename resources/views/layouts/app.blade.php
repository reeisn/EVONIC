<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <link href="/dist/tailwind.css" rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css"
    />

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="Simple landind page" />
        <meta name="keywords" content="" />
        <meta name="author" content="" />
        

        <title>{{ config('app.name', 'Sipitos') }}</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css"  rel="stylesheet" />
        

            <!-- Styles -->
            @livewireStyles
            <style>
            body {
                font-family: 'Poppins';
                background:linear-gradient(90deg, #A1C4FD 0%, #C2E9FB 100%);
            }
            </style>


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

        
        <!-- Scripts -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="{{ asset('js/app.js') }}" defer></script>

  </head>

  <body> 
  <x-jet-banner />

<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0 text-zinc-700" aria-label="Sidebar">
   <div class="h-full px-3 py-4 overflow-y-auto bg-white dark:bg-gray-800">
      <a href="/dashboard" class="flex items-center pl-2.5 mb-5 hover:no-underline">
         <img src="{{asset('storage/images/evo.png')}}" class="h-20 mr-3 sm:h-12 rounded-full no-underline" alt="Sipitos Logo" />
         <span class="self-center text-xl font-bold whitespace-nowrap dark:text-white no-underline">E-Vonic</span>
      </a>

          <a href="/dashboard" class="hover:no-underline">
      <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-300 text-zinc-700">
        <i class="bi bi-house-door-fill"></i>
        <span href="/dashboard" class="text-[15px] ml-4 text-zinc-700 font-bold">Home</span>
      </div>
      </a>

      <a href="/candidate" class="hover:no-underline">
      <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-300 text-zinc-700">
        <i class="bi bi-card-heading"></i>
        <span class="text-[15px] ml-4 text-zinc-700 font-bold">Kandidat</span>
      </div>
      </a>

      <a href="/voting" class="hover:no-underline">
      <div
        class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-300 text-zinc-700"
      >
        <i class="bi bi-hand-index-fill"></i>
        <span class="text-[15px] ml-4 text-zinc-700 font-bold">Vote</span>
      </div>
      </a>

      <div class="my-4 bg-gray-600 h-[1px]"></div>
      <div
        class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-300 text-zinc-700"
        onclick="dropdown()"
      >
        <i class="bi bi-person-fill"></i>
        <div class="flex justify-between w-full items-center">
          <span class="text-[15px] ml-4 text-zinc-700 font-bold">Akun</span>
          <span class="text-sm rotate-180" id="arrow">
            <i class="bi bi-chevron-down text-zinc-700"></i>
          </span>
        </div>
      </div>
      <div
        class="text-left text-sm mt-2 w-4/5 mx-auto text-zinc-700 font-bold"
        id="submenu"
      >

        <a href="{{ route('profile.show') }}" class="hover:no-underline">
        <h1 class="cursor-pointer p-2 hover:bg-blue-300 rounded-md mt-1">
          Profile
        </h1>
        </a>

        <a href="/penggunaan" class="hover:no-underline">
        <h1 class="cursor-pointer p-2 hover:bg-blue-300 rounded-md mt-1">
          About
        </h1>
        </a>
      </div>

      <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf
      <a href="{{ route('logout') }}" @click.prevent="$root.submit();"  method="POST" class="hover:no-underline">
      <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-300 text-zinc-700" action="{{ route('logout') }}">
        <i class="bi bi-box-arrow-in-right"></i>
        <span class="text-[15px] ml-4 text-zinc-700 font-bold">Logout</span>
      </div>
      </a>
      </form>

      {{-- <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf

                                <x-jet-dropdown-link href="{{ route('logout') }}"
                                         @click.prevent="$root.submit();">
                                    {{ __('Log Out') }}
                                </x-jet-dropdown-link>
                            </form> --}}
      </ul>
   </div>
</aside>



<div class="sm:ml-64">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-blue-300 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

      <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts

      

    <script>
    function previewImage() {
      const image = document.querySelector('#photo');
      const imgPreview = document.querySelector('.img-preview');

      imgPreview.style.display = 'block';

      const ofReader = new FileReader();
      oFReader.readAsDataURL(image.files[0]);
      oFReader.onload = function (oFREvent) {
        imgPreview.src = oFREvent.target.result;
      }
    }
</script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
    <script type="text/javascript">
      function dropdown() {
        document.querySelector("#submenu").classList.toggle("hidden");
        document.querySelector("#arrow").classList.toggle("rotate-0");
      }
      dropdown();

      function openSidebar() {
        document.querySelector(".sidebar").classList.toggle("hidden");
      }
    </script>

  </body>
</html>