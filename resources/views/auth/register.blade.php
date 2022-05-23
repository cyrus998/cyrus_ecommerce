<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
          PayRoll
        </h2>
        <h2 class="mt-15 mb-10 text-5xl leading-9 font-extrabold text-white">
          User Register
        </h2>
        <p class="mt-2 text-sm leading-5 text-gray-200 max-w">
          Already Registered?
          @if (Route::has('login'))
          @if (Route::has('register'))
          <a href="{{ route('login') }}" class="font-medium text-indigo-400 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">
            Log In.
          </a>
          @endif
          @endauth
        </p>
      </div>

      <div class="mt-8">

        <div class="mt-6">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div>
              <label for="name" class="block text-sm font-medium leading-5 text-gray-300">
                Name
              </label>
              <div class="mt-1 rounded-md shadow-sm">
              <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />              </div>
            </div>

            <div class="mt-6">
              <label for="email" class="block text-sm font-medium leading-5 text-gray-300">
                Email address
              </label>
              <div class="mt-1 rounded-md shadow-sm">
              <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />              </div>
            </div>

            <div class="mt-6">
              <label for="password" class="block text-sm font-medium leading-5 text-gray-300">
                Password
              </label>
              <div class="mt-1 rounded-md shadow-sm">
              <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" autocomplete="current-password" />
              </div>
            </div>

            <div class="mt-6">
              <label for="password" class="block text-sm font-medium leading-5 text-gray-300">
                Confirm Password
              </label>
              <div class="mt-1 rounded-md shadow-sm">
              <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" autocomplete="current-password" />
              </div>
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-300 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-300 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <x-jet-button class="w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
            <x-jet-validation-errors class="mt-5 mb-4" />
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="hidden lg:block relative w-0 flex-1">
    <img class="absolute inset-0 h-full w-full object-cover" src="https://images.unsplash.com/photo-1556742502-ec7c0e9f34b1?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1887" alt="" />
  </div>
</div>
</body>
</html>



