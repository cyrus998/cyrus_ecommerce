<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'IT32S2 Cyrus App') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <script src="https://cdn.tailwindcss.com"></script>

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />


        <div class="min-h-screen bg-gray-100">
            @livewire('admin-navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
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

        <footer class="p-4 bg-white shadow md:px-6 md:py-8 dark:bg-gray-800">
      <div class="sm:flex sm:items-center sm:justify-between">
        <a href="" class="flex items-center mb-4 sm:mb-0">
          <img src="https://cdn.discordapp.com/avatars/297376424204173312/ddd22f2f34c239bd9d7054c7107603d5.webp?size=80" class="mr-3 h-8 rounded-full" alt="Flowbite Logo">
          <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Cyrus Payroll</span>
        </a>
        <ul class="flex flex-wrap items-center mb-6 text-sm text-gray-500 sm:mb-0 dark:text-gray-400">
          <li>
            <a href="#" class="mr-4 hover:underline md:mr-6 ">About</a>
          </li>
          <li>
            <a href="#" class="mr-4 hover:underline md:mr-6">Privacy Policy</a>
          </li>
          <li>
            <a href="#" class="mr-4 hover:underline md:mr-6 ">Contact</a>
          </li>
          <li>
            <a href="#" class="hover:underline">Other Stuff</a>
          </li>
        </ul>
      </div>
      <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8">
      <span class="block text-sm text-white sm:text-center dark:text-white">© 2022 <a href="https://www.facebook.com/cyrus998/" class="hover:underline"><span class="text-cyan-300">Cyrus Francisco</span></a>. IT32S2 </span>
      <spa class="text-sm text-gray-500 sm:text-center dark:text-gray-400">Made with Laravel, Tailwind CSS, and lots of insanity. </span>
    </footer>

        @stack('modals')

        @livewireScripts
    </body>
</html>
