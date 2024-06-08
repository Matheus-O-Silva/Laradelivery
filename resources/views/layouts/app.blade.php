<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laradelivery') }}</title>

    <!-- Scripts -->
    <script type="text/javascript" src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
    <div id="app" class="min-h-screen flex flex-col">
        <nav class="navbar navbar-expand-md navbar-light bg-danger shadow-sm">
            <div class="container">
                <a class="navbar-brand font-bold text-white" href="{{ url('/') }}">
                    {{ __('Laradelivery') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <!-- <ul class="navbar-nav me-auto">

                    </ul> -->
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item active relative">
                            <a style="color: white;" class="nav-link" href="{{ url('home') }}">
                                <div class="flex" id="navbtnhome" aria-describedby="tooltiphome" data-tooltip-text="Home">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                    </svg>
                                    <div class="text-md mt-2 bg-gray-600 text-white absolute rounded bg-opacity-50 shadow-xl hidden top-8 py-1 px-2 whitespace-pre" id="tooltiphome">    
                                    </div>
                                    <span class="sr-only">
                                </div>
                            </a>
                        </li>
                        <!-- disabled link for spacing -->
                        <li class="nav-item disabled">
                            <a class="nav-link" style="color: white;" href=""><span class="sr-only"></a>
                        </li>

                        <li class="nav-item active relative">
                            <a style="color: white;" class="nav-link" href="{{ url('order') }}">
                                <div class="flex" id="navbtnorderhistory" aria-describedby="tooltiporderhistory" data-tooltip-text="Order History">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                                    </svg>
                                    <div class="text-md mt-2 bg-gray-600 text-white absolute rounded bg-opacity-50 shadow-xl hidden top-8 py-1 px-2 whitespace-pre" id="tooltiporderhistory">    
                                    </div>
                                    <span class="sr-only">
                                </div>
                            </a>
                        </li>
                        <!-- disabled link for spacing -->
                        <li class="nav-item disabled">
                            <a style="color: white;" class="nav-link" href=""><span class="sr-only"></a>
                        </li>

                        <li class="nav-item active relative ">
                            <a style="color: white;" class="nav-link" href="{{ url('cart') }}">
                                <div class="flex" id="navbtncart" aria-describedby="tooltipcart" data-tooltip-text="Cart">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                    <div class="text-md mt-2 bg-gray-600 text-white absolute rounded bg-opacity-50 shadow-xl hidden top-8 py-1 px-2 whitespace-pre" id="tooltipcart">    
                                    </div>
                                    <span class="sr-only">
                                </div>
                                <div class="absolute top-0.5 right-0">
                                    @if (session('cart') != null)
                                        <span class="text-xs text-black font-bold rounded-lg px-1 bg-red-400 opacity-80">
                                            {{count(session('cart'))}}
                                        </span>
                                    @endif
                                </div>
                            </a>
                        </li>
                        <!-- disabled link for spacing -->
                        <li class="nav-item disabled">
                            <a style="color: white;" class="nav-link" href=""><span class="sr-only"></a>
                        </li>

                        @can('isAdmin')
                            <li class="nav-item active relative">
                                <a class="nav-link" href="{{ url('food/viewfood') }}">
                                    <div class="flex" id="navbtnviewfood" aria-describedby="tooltipviewfood" data-tooltip-text="View Food">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                        <div class="text-md mt-2 bg-gray-600 text-white absolute rounded bg-opacity-50 shadow-xl hidden top-8 py-1 px-2 whitespace-pre" id="tooltipviewfood">    
                                        </div>
                                        <span class="sr-only">
                                    </div>
                                </a>
                            </li>
                            <!-- disabled link for spacing -->
                            <li class="nav-item disabled">
                                <a class="nav-link" href=""><span class="sr-only"></a>
                            </li>
                        @endcan
                        <!-- Right Side Of Navbar -->

                        <!-- Authentication Links -->
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a style="color: white;" class="nav-link" href="{{ route('login') }}">{{ __('Entrar') }}</a>
                        </li>
                        <!-- disabled link for spacing -->
                        <li class="nav-item disabled">
                            <a class="nav-link" href=""><span class="sr-only"></a>
                        </li>
                        @endif

                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a style="color: white;" class="nav-link" href="{{ route('register') }}">{{ __('Cadastrar-se') }}</a>
                        </li>

                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ url('user/edit') }}">
                                    {{ __('Configurações de Usuário') }}
                                </a>
                                <a id="deleteuser" class="dropdown-item" href="#">
                                    {{ __('Excluir conta de usuário') }}
                                </a>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                                document.getElementById('logout-form').submit();">
                                    {{ __('Sair') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="flex-grow h-full">
            @include('components.flash_message')
            
            @yield('content')
        </main>
        <x-footer />
    </div>

    <script>
        window.addEventListener('DOMContentLoaded', () =>{
            const btnDeleteUser = document.querySelector('#deleteuser');
            const btncancelDelete = document.querySelector('#canceldelete');
            const removeModal = document.querySelector('#remove-user-modal');
            const btnhome = document.querySelector('#navbtnhome');
            const tooltiphome = document.querySelector('#tooltiphome');
            const btnviewfood = document.querySelector('#navbtnviewfood');
            const tooltipviewfood = document.querySelector('#tooltipviewfood');
            const btnorderhistory = document.querySelector('#navbtnorderhistory');
            const tooltiporderhistory = document.querySelector('#tooltiporderhistory');
            const btncart = document.querySelector('#navbtncart');
            const tooltipcart = document.querySelector('#tooltipcart');

            btnDeleteUser.addEventListener('click', () => {
                removeModal.classList.remove('invisible');
            })
            btncancelDelete.addEventListener('click', () => {
                removeModal.classList.add('invisible');
            })

            tooltiphome.innerHTML = btnhome.dataset.tooltipText
            btnhome.addEventListener('mouseenter', () => {
                tooltiphome.classList.remove('hidden');
            })
            btnhome.addEventListener('mouseenter', () => {
                tooltiphome.classList.remove('hidden');
            })
            btnhome.addEventListener('mouseleave', () => {
                tooltiphome.classList.add('hidden');
            })

            if(btnviewfood != null) {
                tooltipviewfood.innerHTML = btnviewfood.dataset.tooltipText
                btnviewfood.addEventListener('mouseenter', () => {
                    tooltipviewfood.classList.remove('hidden');
                })
                btnviewfood.addEventListener('mouseleave', () => {
                    tooltipviewfood.classList.add('hidden');
                })
            }

            tooltiporderhistory.innerHTML = btnorderhistory.dataset.tooltipText
            btnorderhistory.addEventListener('mouseenter', () => {
                tooltiporderhistory.classList.remove('hidden');
            })
            btnorderhistory.addEventListener('mouseleave', () => {
                tooltiporderhistory.classList.add('hidden');
            })

            tooltipcart.innerHTML = btncart.dataset.tooltipText
            btncart.addEventListener('mouseenter', () => {
                tooltipcart.classList.remove('hidden');
            })
            btncart.addEventListener('mouseleave', () => {
                tooltipcart.classList.add('hidden');
            })


        })

    </script>
</body>

</html>
