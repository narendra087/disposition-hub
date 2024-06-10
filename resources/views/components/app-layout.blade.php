<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-gray-100">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Disposition Hub</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
    </head>

    <body class="h-full antialiased">
        <div class="min-h-full">
            <nav class="bg-primary-main">
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <div class="flex h-16 items-center justify-between">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <img class="h-10 sm:h-14 w-auto" src="{{ asset('images/saintek-logo.png') }}"
                                    alt="saintek logo">
                            </div>
                        </div>
                        @auth
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button id="logout" type="submit" class="hidden cursor-pointer md:block">
                                    <p class="text-base font-medium text-white">Keluar</p>
                                </button>
                                <div class="-mr-2 flex md:hidden">
                                    <!-- Mobile menu button -->
                                    <button id="logout-mobile" type="submit"
                                        class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                                        aria-controls="mobile-menu" aria-expanded="false">
                                        <span class="absolute -inset-0.5"></span>
                                        <span class="sr-only">Logout</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                            viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="m17 7l-1.41 1.41L18.17 11H8v2h10.17l-2.58 2.58L17 17l5-5M4 5h8V3H4c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h8v-2H4z" />
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        @endauth
                    </div>
                </div>
            </nav>

            @if (isset($title))
                <header class="bg-white shadow">
                    <div class="mx-auto max-w-7xl px-4 py-4 sm:px-6 lg:px-8">
                        <h1 class="text-center text-2xl font-bold tracking-tight text-gray-900">{{ $title }}
                        </h1>
                    </div>
                </header>
            @endif

            <main>
                <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                    {{ $slot }}
                </div>
            </main>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    </body>

</html>
