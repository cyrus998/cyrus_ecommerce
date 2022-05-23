<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User Dashboard') }}
        </h2>
    </x-slot>

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    
<main class="relative overflow-hidden h-screen">
    <div class="thebody flex relative z-20 items-center overflow-hidden">
        <div class="container mx-auto px-6 flex relative py-16">
            <div class="ml-8 sm:w-2/3 lg:w-2/5 flex flex-col relative z-20">
                <span class="w-20 h-2 bg-gray-800 dark:bg-white mb-12">
                </span>
                <h1 class="font-bebas-neue uppercase text-5xl sm:text-5xl font-black flex flex-col leading-none dark:text-white text-gray-800">
                    High class furnitures
                    <span class="text-5xl sm:text-7xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-cyan-500 to-blue-500">
                        Made Accessible.
                    </span>
                </h1>
                <p class="mt-5 text-2xl text-gray-700 dark:text-white">
                    We are commited to bring you top notch furnitures from the best craftsmakers..    
                </p>

                    <a href="{{ url('/products') }}" class="mt-5 uppercase py-2 px-4 rounded-lg bg-pink-500 border-2 border-transparent text-white text-md mr-4 hover:bg-pink-400">
                        Shop NOW
                    </a>

            </div>
            <div class="hidden sm:block sm:w-1/3 lg:w-3/5 relative">
                <img src="https://cdn.discordapp.com/attachments/971130306751000636/977882961380798474/kindpng_2879343.png" class="max-w-xs md:max-w-sm m-auto"/>
            </div>
        </div>
    </div>
</main>


</body>
</html>

<style>
    .thebody{
    background-image:url('https://images.unsplash.com/photo-1541746972996-4e0b0f43e02a?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1740');
    height: 100%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    }
</style>
</x-app-layout>
