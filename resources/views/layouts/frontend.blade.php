<x-app-layout>
<script src="https://cdn.tailwindcss.com"></script>

               <nav  class="p-6 mt-4 text-white bg-slate-600 sm:flex sm:justify-center sm:items-center">
               <div class="flex items-center flex-shrink-0 text-white mr-6">
                  <h1>My Cart</h1>
                </div>
                  <div class="flex flex-col sm:flex-row">
                     <a href="{{ route('cart.list') }}" class="flex items-center">
                        <svg class="w-5 h-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                           <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                        {{ Cart::getTotalQuantity()}}
                     </a>
                  </div>
               </nav>
               <main class="my-8">
            @yield('content')
         </main>
         </div>
         

</x-app-layout>
