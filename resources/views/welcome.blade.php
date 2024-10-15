<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
        <script src="{{ asset('js/menu.js') }}"></script>
        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <x-nav>

    </x-nav>
                        </div>
                        @if (Route::has('login'))
                            <livewire:welcome.navigation />
                        @endif
                    </header>
    <!-- hero -->
    <section id="gambar" alt="">
      <div class="container mx-auto text-center text-white h-screen flex items-center">
        <div class="mx-auto w-3/4 md:w-2/4">
          <h3 class="text-5xl font-bold text-center mb-5">Selamat datang di website Reservasi kami</h3>
          <p class="text-white mb-5">Yokoso watasinonawa soul society rasenggan gomu gomuno pistol</p>
          <a href="#portofolio" class="bg-red-500 text-white py-2 px-5 rounded-xl hover:bg-red-800">See All Kegiatan</a>
        </div>
      </div>
    </section>

    <!-- services -->
    <section id="services" class="bg-gray-200 py-20">
      <div class="w-11/12 md:container mx-auto">
        <h4 class="text-5xl font-bold text-center mb-5">Layanan Kami</h4>
        <p class="text-gray-500 text-center mb-5">Layanan yang kami berikan untuk Masyarakat</p>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
          <!-- service 1-->
          <div class="flex space-x-5 py-8 px-8 bg-white rounded-xl items-start">
            <img src="https://placehold.co/100" />
            <div>
              <h4 class="text-2xl font-bold mb-5">Informasi Gedung</h4>
              <p class="text-gray-500 mb-5">Ketersedian tempat di Kampus Politeknik NEST untuk anda yang ingin mengadakan event</p>
              @if (Route::has('login'))
          @auth
              <a href="/web" class="hover:text-blue-700 font-bold">Selengkapnya--></a>
          @else
             <a href="javascript:void(0);" onclick="alert('Anda harus login untuk mengakses halaman ini!')" class="hover:text-blue-700 font-bold">Selengkapnya--></a>
          @endauth
          @endif
            </div>
          </div>

          <!-- service 2-->
          <div class="flex space-x-5 py-8 px-8 bg-white rounded-xl items-start">
            <img src="https://placehold.co/100" />
            <div>
              <h4 class="text-2xl font-bold mb-5">Layanan NEST</h4>
              <p class="text-gray-500 mb-5">Layanan yang kami berikan untuk medukung kegiatan masyarakat untuk menyelenggarakan event</p>
              <a href="" class="hover:text-blue-700 font-bold">Selengkapnya--></a>
            </div>
          </div>

          <!-- service 3-->
          <div class="flex space-x-5 py-8 px-8 bg-white rounded-xl items-start">
            <img src="https://placehold.co/100" />
            <div>
              <h4 class="text-2xl font-bold mb-5">Sampaikan Kebutuhanmu</h4>
              <p class="text-gray-500 mb-5">Segera hubungi kami jika anda ingin mengadakan event di Kampus Politeknik NEST Surakarta !</p>
              <a href="" class="hover:text-blue-700 font-bold">Selengkapnya--></a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- portofolio -->
    <section id="portofolio" class="py-20 bg-white">
      <h3 class="text-5xl font-bold text-center mb-5">Kegiatan</h3>
      <p class="text-gray-500 mb-5 text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Neque, iure.</p>
      <div class="grid grid-cols-2 md:grid-cols-4 w-11/12 md:container mx-auto gap-6">
        <!-- portofolio 1-->
        <div class="shadow-xl">
          <a href="">
            <img src="https://placehold.co/600x400" class="w-full" />
            <div class="py-3 px-5">
              <h4 class="text-center font-bold">Website 1</h4>
            </div>
          </a>
        </div>
        <!-- portofolio 2-->
        <div class="shadow-xl">
          <a href="">
            <img src="https://placehold.co/600x400" class="w-full" />
            <div class="py-3 px-5">
              <h4 class="text-center font-bold">Website 2</h4>
            </div>
          </a>
        </div>
        <!-- portofolio 3-->
        <div class="shadow-xl">
          <a href="">
            <img src="https://placehold.co/600x400" class="w-full" />
            <div class="py-3 px-5">
              <h4 class="text-center font-bold">Website 3</h4>
            </div>
          </a>
        </div>
        <!-- portofolio 4-->
        <div class="shadow-xl">
          <a href="">
            <img src="https://placehold.co/600x400" class="w-full" />
            <div class="py-3 px-5">
              <h4 class="text-center font-bold">Website 4</h4>
            </div>
          </a>
        </div>
      </div>
    </section>
    <!-- about -->
    <section id="about" class="w-11/12 md:container mx-auto py-20">
      <div class="flex space-x-10 items-start">
        <img src="https://placehold.co/300" class="w-24 md:w-1/3" />
        <div>
          <p class="mb-5">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos, ipsam!</p>
          <h3 class="text-5xl font-bold mb-5">Tentang Kampus Politeknik NEST</h3>
          <p class="mb-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere, in. Voluptatum labore voluptatibus officia nemo quo repellat cupiditate facere? Recusandae, harum fugit veniam dolores fugiat in optio odio beatae minima.</p>
          <p class="mb-5 pb-5 border-b border-gray-900">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia voluptate a dignissimos recusandae id illo dicta neque sit, magni tempore modi asperiores sapiente dolorum perferendis?</p>
          <ul class="md:flex md:space-x-5">
            <li>
              <a href="" class="hover:text-blue-700"><i class="fa-brands fa-tiktok"></i> Tiktok</a>
            </li>
            <li>
              <a href="" class="hover:text-blue-700"><i class="fa-brands fa-instagram"></i> Instagram</a>
            </li>
            <li>
              <a href="" class="hover:text-blue-700"><i class="fa-brands fa-twitter"></i> Twitter</a>
            </li>
            <li>
              <a href="" class="hover:text-blue-700"><i class="fa-brands fa-youtube"></i> YouTube</a>
            </li>
          </ul>
        </div>
      </div>
    </section>
    <x-foot>
        
    </x-foot>
                </div>
            </div>
        </div>
    </body>
</html>
