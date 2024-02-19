<!-- Menghubungkan dengan view template master -->
@extends('master')
 
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Halaman Tambah Data Kandidat')
 
 
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
 <div class="p-4">
    <h2 class="max-w-7xl text-lg text-center font-semibold text-gray-900 mx-auto py-2 sm:px-4 lg:px-8">Tambah Data Kandidat</h2>
    <div class="container bg-blue-100 max-w-7xl mx-auto py-10 sm:px-6 lg:px-8 shadow-md overflow-hidden sm:rounded-lg"> 

    <div class="p-2">

    <form method="post" action="/candidate-adm" enctype="multipart/form-data">
    @csrf
            <div class="row mb-3">
              <label for="nama" class="col-sm-2 col-form-label font-semibold">Nama</label>
              <div class="col-sm-10">
                <input type="text" class="form-control border border-gray-300 shadow-md overflow-hidden sm:rounded-lg @error('nama') is-invalid @enderror" value="{{ old('nama') }}" name="nama" id="nama" >
                @error('nama')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
              </div>
            </div>

            <div class="row mb-3">
              <label for="kelas" class="col-sm-2 col-form-label font-semibold">Kelas</label>
              <div class="col-sm-10">
                <input type="text" class="form-control shadow-md border border-gray-300 bg-white overflow-hidden sm:rounded-lg @error('kelas') is-invalid @enderror" value="{{ old('kelas') }}" name="kelas" id="kelas" >
                  @error('kelas')
                  <div class="invalid-feedback">{{$message}}</div>
                  @enderror
              </div>
            </div>

            <div class="row mb-3">
              <label for="visi" class="col-sm-2 col-form-label font-semibold">Visi</label>
              <div class="col-sm-10">
                <input text-area type="text-area" class="form-control border border-gray-300 shadow-md overflow-hidden sm:rounded-lg @error('visi') is-invalid @enderror" value="{{ old('visi') }}" name="visi" id="visi" >
                @error('visi')
                  <div class="invalid-feedback">{{$message}}</div>
                  @enderror
              </div>
            </div>

            <div class="row mb-3">
              <label for="misi" class="col-sm-2 col-form-label font-semibold">Misi</label>
              <div class="col-sm-10">
                <input type="text-area" class="form-control border border-gray-300 shadow-md overflow-hidden sm:rounded-lg @error('misi') is-invalid @enderror" value="{{ old('misi') }}" name="misi" id="misi" >
                @error('misi')
                  <div class="invalid-feedback">{{$message}}</div>
                  @enderror
              </div>
            </div>


            <div class="row mb-3">
              <label for="photo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white col-form-label col-sm-2 font-semibold">Upload foto kandidat</label>
              <div class="col-sm-10">
              <div class="w-full justify-start rounded-t-lg object-cover md:h-auto md:w-52 md:rounded-none md-rounded-l-lg p-2">
              <img id="img-preview" class="img-preview img-fluid">
              </div>
              <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 
              focus:outline-none dark:bg-gray-700 dark:border-gray-600 shadow-md overflow-hidden sm:rounded-lg dark:placeholder-gray-400 @error('photo') is-invalid @enderror" 
               id="photo" name="photo" type="file" onChange="previewImage()">
              @error('photo')
              <div class="invalid-feedback">{{$message}}</div>
              @enderror
              <p class="mt-1 text-sm text-gray-500" id="photo"> PNG, JPG, JPEG, atau SVG maximal 2mb </p>
              </div>
            </div>

            <div class="ml-40">
            <a class="inline-flex items-center px-4 py-2 bg-slay border border-transparent rounded-md font-semibold text-xs ml-12 text-white uppercase tracking-widest bg-gray-700 
            active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition" href="/candidate-adm" onclick="return confirm('yakin mau kembali?')">
                    {{ __('Kembali') }}
                </a>
            <x-jet-button class="mr-6">
                    {{ __('Tambah Kandidat') }}
                </x-jet-button>
            </div>
          </form>
            
            </div>
	
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  <script>
  function previewImage(){
  const photo = document.querySelector('#photo');
  const imgPreview = document.querySelector('.img-preview');

  imgPreview.style.display = 'block';

  const oFReader = new FileReader();
  oFReader.readAsDataURL(photo.files[0]);

  oFReader.onload = function(oFREvent) {
    imgPreview.src = oFREvent.target.result;
  }
}
  </script>

<script>
  const $prevButton = document.getElementById('data-carousel-prev');
const $nextButton = document.getElementById('data-carousel-next');

$prevButton.addEventListener('click', () => {
    carousel.prev();
});

$nextButton.addEventListener('click', () => {
    carousel.next();
});
</script>
 
@endsection