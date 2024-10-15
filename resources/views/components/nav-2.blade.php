<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div class="bg-white">
  <header class="absolute inset-x-0 top-0 z-50">
    <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
      <div class="flex lg:flex-1">
        <a href="#" class="-m-1.5 p-1.5">
          <span class="sr-only">Your Company</span>
          <img class="h-20 w-20" src="css/nest.png" alt="">
        </a>
      </div>
      <div class="flex lg:hidden">
        <!-- Open menu button -->
        <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700" id="open-menu">
          <span class="sr-only">Open main menu</span>
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
        </button>
      </div>
      <div class="hidden lg:flex lg:gap-x-12">
        <a href="#services" class="text-sm font-semibold leading-6 text-gray-900">Layanan</a>
        <a href="#portofolio" class="text-sm font-semibold leading-6 text-gray-900">Kegiatan</a>
        <a href="#about" class="text-sm font-semibold leading-6 text-gray-900">Tentang Kami</a> 
      </div>
      <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                    <x-slot name="content">
                        <x-link :href="route('profile.edit')">
                            {{ __('Profile') }}&nbsp;&nbsp;&nbsp;&nbsp;
                        </x-link>
      </div>
      <div class="hidden lg:flex lg:justify-end">
      <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-link>
      </div>
    </nav>
    
    <!-- Mobile menu -->
    <div class="lg:hidden hidden" id="mobile-menu" aria-modal="true">
      <div class="fixed inset-0 z-50"></div>
      <div class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
        <div class="flex items-center justify-between">
          <a href="#" class="-m-1.5 p-1.5">
            <span class="sr-only">Your Company</span>
            <img class="h-8 w-auto" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=600" alt="">
          </a>
          <!-- Close menu button -->
          <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700" id="close-menu">
            <span class="sr-only">Close menu</span>
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        <div class="mt-6 flow-root">
          <div class="-my-6 divide-y divide-gray-500/10">
            <div class="space-y-2 py-6">
              <a href="#services" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Layanan</a>
              <a href="#portofolio" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Kegiatan</a>
              <a href="#about" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Tentang Kami</a>
            </div>
            <div class="py-6">
              <a href="{{ route('login') }}" class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Log in</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
<script src="{{ asset('/js/menu.js') }}"></script>
</body>
</html>