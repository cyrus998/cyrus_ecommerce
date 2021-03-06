<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
<div class="min-h-screen bg-gray-900 flex">
  <div class="flex-1 flex flex-col justify-center py-12 px-4 sm:px-6 lg:flex-none lg:px-20 xl:px-24">
    <div class="mx-auto w-full max-w-sm">
      <div>
      <h2 class="mt-15 mb-10 text-5xl leading-9 font-extrabold text-cyan-300">
          Furnitura
        </h2>
        <h2 class="mt-15 mb-10 text-5xl leading-9 font-extrabold text-white">
          User Sign In
        </h2>
        <p class="mt-2 text-sm leading-5 text-gray-200 max-w">
          No account yet?
          @if (Route::has('login'))
          @if (Route::has('register'))
          <a href="{{ route('register') }}" class="font-medium text-indigo-400 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">
            Sign Up Now.
          </a>
          @endif
          @endauth
        </p>
      </div>

      <div class="mt-8">

        <div class="mt-6">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div>
              <label for="email" class="block text-sm font-medium leading-5 text-gray-300">
                Email address
              </label>
              <div class="mt-1 rounded-md shadow-sm">
              <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />              </div>
            </div>

            <div class="mt-6">
              <label for="password" class="block text-sm font-medium leading-5 text-gray-300">
                Password
              </label>
              <div class="mt-1 rounded-md shadow-sm">
              <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" autocomplete="current-password" />
              </div>
            </div>

            <div class="mt-6 flex items-center justify-between">
              <div class="flex items-center">
                <x-jet-checkbox id="remember_me" name="remember" type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" />
                <label for="remember_me" class="ml-2 block text-sm leading-5 text-white">
                  Remember me
                </label>
              </div>

              <div class="text-sm leading-5">
              @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                {{ __('Forgot your password?') }}
                </a>
                @endif
              </div>
            </div>

            <div class="mt-6">
              <span class="block w-full rounded-md shadow-sm">
                <x-jet-button class="w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                {{ __('Log in') }}
                </x-jet-button>
              </span>
            </div>
            <x-jet-validation-errors class="mt-5 mb-4" />
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="hidden lg:block relative w-0 flex-1">
    <img class="absolute inset-0 h-full w-full object-cover" src="https://images.unsplash.com/photo-1583847268964-b28dc8f51f92?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1887" alt="" />
  </div>
</div>
</body>
</html>



