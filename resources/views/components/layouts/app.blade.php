<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body class="min-h-screen font-sans antialiased">

        <!-- The navbar with `sticky` -->
        <header class="md:container md:mx-auto">
            <nav>
                <div class="navbar bg-base-100">
                    <div class="navbar-start">
                      <div class="dropdown">
                        <label tabindex="0" class="btn btn-ghost btn-circle">
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" /></svg>
                        </label>
                        <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                          <li><a>Homepage</a></li>
                          <li><a>Portfolio</a></li>
                          <li><a>About</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="navbar-center">
                      <a href="{{ route('dashboard') }}" class="btn btn-ghost normal-case text-xl" wire:navigate>Kataris Teenweb</a>
                    </div>
                    <div class="navbar-end">
                        <x-dropdown>
                            <x-slot:trigger>
                                <x-button icon="o-bell" class="btn-circle btn-outline" />
                            </x-slot:trigger>

                            <x-menu-item title="Archive" />
                            <x-menu-item title="Move" />
                        </x-dropdown>

                    </div>
                </div>
            </nav>
        </header>


        <!-- The main content -->
        <x-main>
            <!-- It is a sidebar that works also as a drawer at small screens -->
            <!-- Note `main-drawer` reference here -->

            <!-- The `$slot` goes here -->
            <x-slot:content>
                {{ $slot }}
                <div class="btm-nav">
                    <a class="active" role="button" href="{{ route('dashboard') }}" wire:navigate>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" /></svg>
                        <span class="btm-nav-label">Home</span>
                    </a>
                    <button >
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                      <span class="btm-nav-label">Warnings</span>
                    </button>
                    <button>
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" /></svg>
                      <span class="btm-nav-label">Statics</span>
                    </button>
                  </div>
            </x-slot:content>


        </x-main>
    </body>
</html>
