<!-- Menghubungkan dengan view template master -->
@extends('master')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Dashboard')


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

    <div class="p-4">
        <a href="/admin/dashboard"
            class="hover:no-underline flex flex-row items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
            <img class="object-left w-48 rounded-t-lg h-48 md:h-auto md:rounded-none md:rounded-l-lg"
                src="/storage/images/dasmin.png" alt="">
            <div class="flex flex-col justify-between p-4 leading-normal">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Halo Admin!</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Selamat datang kembali di E-Vonic.</p>
            </div>
        </a>
    </div>

    <div class="px-4">

        <div class="flex grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-2 xl:grid-cols-2 gap-2 mb-3">

            {{-- <div
                class="flex-1 max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <div class="overflow-hidden rounded-lg shadow-lg">
                    <div class="bg-neutral-50 py-3 px-5 dark:bg-neutral-700 dark:text-neutral-200">
                        Voting Chart
                    </div>
                    <canvas class="p-10" id="chartDoughnut"></canvas>
                </div>
            </div> --}}

            <div
                class="bg-white border rounded-lg">
                    <table class="w-full text-xs text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-4 py-3">
                    No
                </th>
                <th scope="col" class="px-4 py-3">
                    Foto Profil
                </th>
                <th scope="col" class="px-4 py-3">
                    Nama
                </th>
                <th scope="col" class="px-4 py-3">
                    Nis
                </th>
                <th scope="col" class="px-4 py-3">
                    Nisn
                </th>
                <th scope="col" class="px-4 py-3">
                    Kelas
                </th>
            </tr>
        </thead>
        <tbody>
        
        @foreach ($user as $usr)

            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $loop->iteration }}
                </th>
                <td class="px-4 py-3">
              @if($usr->profile_photo_path)
              <img src="{{ asset('/storage/' . $usr->profile_photo_path) }}" id="img-preview" class="img-preview img-fluid w-8 d-block">
              @else
              <img src="storage/profile-photos/ava.jpg" id="img-preview" class="img-preview img-fluid w-8">
              @endif
                </td>
                <td class="px-4 py-3">
                    {{ $usr->name }}
                </td>
                <td class="px-4 py-3">
                    {{ $usr->nis }}
                </td>
                <td class="px-4 py-3">
                    {{ $usr->nisn }}
                </td>
                <td class="px-4 py-3">
                    {{ $usr->kelas }}
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>

    <div class="text-center">
    <i><a href="/data-user" class="text-blue-600 text-xs"> lihat user lainnya... </a></i>
            </div>
            </div>

            
            <div class="px-32">

            <div
                class="flex-1 max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <div class="">
                    <div>
                        <h2
                            class="text-base md:text-xl lg:text-xl px-2 py-4 whitespace-no-wrap text-gray-800 text-center font-bold">
                            Daftar Kandidat</h2>

                        @foreach ($kandidat as $c)
                            <div
                                class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer bg-gray-100 hover:bg-gray-100 text-zinc-700">
                                <img src="/storage/{{ $c->photo }}" class="bi bi-stars bg-blue-600 rounded-md w-16"></i>
                                <span class="text-[15px] ml-4 text-zinc-700 font-semibold">Kandidat 0{{ $loop->iteration }}
                                    : </span>
                                <span class="text-[15px] ml-4 text-blue-800 font-semibold">{{ $c->nama }} </span>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
</div>
    </div>
    </div>

    </div>





    </div>


    <!-- Required chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Chart doughnut -->
    <script>
        const dataDoughnut = {
            labels: ["Kandidat 1", "Kandidat 2", "Kandidat 3"],
            datasets: [{
                label: "My First Dataset",
                data: [300, 50, 100],
                backgroundColor: [
                    "rgb(133, 105, 241)",
                    "rgb(164, 101, 241)",
                    "rgb(101, 143, 241)",
                ],
                hoverOffset: 4,
            }, ],
        };

        const configDoughnut = {
            type: "doughnut",
            data: dataDoughnut,
            options: {},
        };

        var chartBar = new Chart(
            document.getElementById("chartDoughnut"),
            configDoughnut
        );
    </script>

@endsection
