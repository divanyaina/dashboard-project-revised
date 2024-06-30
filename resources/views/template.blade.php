@extends('head')

@section('template')

    <body>

        <!-- ========== HEADER ========== -->

        <header
            class="sm:p-2 sticky top-0 inset-x-0 flex flex-wrap sm:justify-start sm:flex-nowrap z-[48] w-full bg-white border-b text-sm py-2.5 sm:py-4 lg dark:bg-neutral-800 dark:border-neutral-700">
            <nav class="flex basis-full items-center w-full mx-auto px-4 sm:px-6" aria-label="Global">
                <div class="w-full flex items-center justify-end ms-auto sm:justify-between sm:gap-x-3 sm:order-3">

                    <div class="sm:block">
                        <h1 class="text-2xl font-semibold tracking-normal text-gray-800">Virtual Power Plant Monitoring
                            Systems
                        </h1>
                    </div>

                    <!-- User Profile -->
                    <div class="flex flex-row items-center justify-end gap-2">
                        <div class="hs-dropdown [--placement:bottom-right] relative inline-flex">
                            <button id="hs-dropdown-with-header" type="button"
                                class="w-[2.375rem] h-[2.375rem] inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700">
                                <img class="inline-block size-[38px] rounded-full ring-2 ring-white dark:ring-neutral-800"
                                    src={{ asset('img/user.png') }} alt="Image Description">
                            </button>

                            <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-60 bg-white shadow-md rounded-lg p-2 dark:bg-neutral-900 dark:border dark:border-neutral-700"
                                aria-labelledby="hs-dropdown-with-header">
                                <div class="py-3 px-5 -m-2 bg-gray-100 rounded-t-lg dark:bg-neutral-800">
                                    <p class="text-sm text-gray-500 dark:text-neutral-400">Signed in as</p>
                                    <p class="text-sm font-medium text-gray-800 dark:text-neutral-300">
                                        {{ auth()->user()->email }}</p>
                                </div>

                                <div class="mt-2 py-2 first:pt-0 last:pb-0">
                                    <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300"
                                        href="{{ route('logout') }}">
                                        <img class="flex-shrink-0 size-4" src={{ asset('img/sign-out.png') }}
                                            alt="Sign Out">
                                        Sign Out
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- End User Profile -->
                    </div>
                </div>
            </nav>
        </header>

        <!-- ========== END HEADER ========== -->

        <!-- ========== MINIMIZE ========== -->

        <div
            class="sticky top-0 inset-x-0 z-20 bg-white border-y px-4 sm:px-6 md:px-8 lg dark:bg-neutral-800 dark:border-neutral-700">
            <div class="flex justify-between items-center py-2">
                <!-- Breadcrumb -->
                <ol class="ms-3 flex items-center whitespace-nowrap">
                    <li class="flex items-center text-sm text-gray-800 dark:text-neutral-400">
                        Page
                        <svg class="flex-shrink-0 mx-3 overflow-visible size-2.5 text-gray-400 dark:text-neutral-500"
                            width="16" height="16" viewBox="0 0 16 16" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                        </svg>
                    </li>
                    <li class="text-sm font-semibold text-gray-800 truncate dark:text-neutral-400" aria-current="page">
                        @yield('title')
                    </li>
                </ol>
                <!-- End Breadcrumb -->

                <!-- Sidebar -->
                <button type="button"
                    class="py-2 px-3 flex justify-center items-center gap-x-1.5 text-xs rounded-lg border border-gray-200 text-gray-500 hover:text-gray-600 dark:border-neutral-700 dark:text-neutral-400 dark:hover:text-neutral-200"
                    data-hs-overlay="#application-sidebar" aria-controls="application-sidebar" aria-label="Sidebar">
                    <img class="flex-shrink-0 size-3.5" width="24" height="24" src="img/menu.png" alt="Menu">
                    <span class="sr-only">Sidebar</span>
                </button>
                <!-- End Sidebar -->
            </div>
        </div>

        <!-- ========== END MINIMIZE ========== -->

        <!-- ========== SIDEBAR ========== -->
        <div id="application-sidebar"
            class="hs-overlay-open:translate-x-0
            -translate-x-full transition-all duration-300 transform
            w-[260px]
            hidden
            fixed inset-y-0 start-0 z-[60]
            bg-white border-e border-gray-200
            translate-x end-auto bottom-0
            dark:bg-neutral-800 dark:border-neutral-700">

            <!-- Logo -->
            <div class="px-8 pt-4">
                <a class="flex-none rounded-xl text-xl inline-block font-semibold focus:outline-none focus:opacity-80"
                    aria-label="Preline">
                    <img class="w-35 h-auto" width="116" height="32" src={{ asset('img/logo-its-warna.png') }}
                        alt="Logo ITS">
                </a>
            </div>
            <!-- End Logo -->

            <nav class="hs-accordion-group p-6 w-full flex flex-col flex-wrap" data-hs-accordion-always-open>
                <ul class="space-y-1.5">
                    <!-- Home -->
                    @if (auth()->user()->level == 'admin' || auth()->user()->level == 'pengelola' || auth()->user()->level == 'eksekutif')
                        <li>
                            <a class="flex items-center gap-x-3.5 py-2 px-2.5  font-medium text-sm text-neutral-900 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:text-white"
                                href="home">
                                <img width="21" height="21" src={{ asset('img/home.png') }} alt="Icon Home">
                                Home
                            </a>
                        </li>
                    @endif

                    <!-- ITS Dropdown -->
                    @if (auth()->user()->level == 'admin' || auth()->user()->level == 'pengelola')
                        <li class="hs-accordion" id="account-accordion">
                            <button type="button"
                                class="hs-accordion-toggle w-full text-start flex font-medium  items-center gap-x-3.5 py-2 px-2.5 hs-accordion-active:text-blue-600 hs-accordion-active:hover:bg-transparent text-sm text-neutral-900 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:text-neutral-400 dark:hover:text-neutral-300 dark:hs-accordion-active:text-white">
                                <img width="24" height="24" src={{ asset('img/gps.png') }} alt="Icon ITS"> ITS
                                <svg class="hs-accordion-active:block ms-auto hidden size-4"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="m18 15-6-6-6 6" />
                                </svg>
                                <svg class="hs-accordion-active:hidden ms-auto block size-4"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="m6 9 6 6 6-6" />
                                </svg>
                            </button>

                            <div id="account-accordion-child"
                                class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden">
                                <ul class="pt-2 ps-2">
                                    <li>
                                        <a class="flex items-center gap-x-3.5 py-2 px-2.5 font-medium text-sm text-neutral-900 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:text-neutral-400 dark:hover:text-neutral-300"
                                            href="vpp-its">
                                            VPP
                                        </a>
                                    </li>
                                    <li>
                                        <a class="flex items-center gap-x-3.5 py-2 px-2.5 font-medium text-sm text-neutral-900 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:text-neutral-400 dark:hover:text-neutral-300"
                                            href="der1-its">
                                            DER 1
                                        </a>
                                    </li>
                                    <li>
                                        <a class="flex items-center gap-x-3.5 py-2 px-2.5 font-medium text-sm text-neutral-900 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:text-neutral-400 dark:hover:text-neutral-300"
                                            href="der2-its">
                                            DER 2
                                        </a>
                                    </li>
                                    <li>
                                        <a class="flex items-center gap-x-3.5 py-2 px-2.5 font-medium text-sm text-neutral-900 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:text-neutral-400 dark:hover:text-neutral-300"
                                            href="der3-its">
                                            DER 3
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <!-- Bawean Dropdown -->
                        <li class="hs-accordion" id="projects-accordion">
                            <button type="button"
                                class="hs-accordion-toggle font-medium w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 hs-accordion-active:text-blue-600 hs-accordion-active:hover:bg-transparent text-sm text-neutral-900 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:text-neutral-400 dark:hover:text-neutral-300 dark:hs-accordion-active:text-white">
                                <img width="24" height="24" src={{ asset('img/gps.png') }} alt="Icon Bawean">
                                Bawean
                                <svg class="hs-accordion-active:block ms-auto hidden size-4"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="m18 15-6-6-6 6" />
                                </svg>
                                <svg class="hs-accordion-active:hidden ms-auto block size-4"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="m6 9 6 6 6-6" />
                                </svg>
                            </button>

                            <div id="projects-accordion-child"
                                class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden">
                                <ul class="pt-2 ps-2">
                                    <li>
                                        <a class="flex items-center gap-x-3.5 py-2 px-2.5 font-medium text-sm text-neutral-900 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:text-neutral-400 dark:hover:text-neutral-300"
                                            href="vpp-bawean">
                                            VPP
                                        </a>
                                    </li>
                                    <li>
                                        <a class="flex items-center gap-x-3.5 py-2 px-2.5 font-medium text-sm text-neutral-900 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:text-neutral-400 dark:hover:text-neutral-300"
                                            href="balaidesa-bawean">
                                            Balai Desa
                                        </a>
                                    </li>
                                    <li>
                                        <a class="flex items-center gap-x-3.5 py-2 px-2.5 font-medium text-sm text-neutral-900 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:text-neutral-400 dark:hover:text-neutral-300"
                                            href="pesantren-bawean">
                                            Pesantren
                                        </a>
                                    </li>
                                    <li>
                                        <a class="flex items-center gap-x-3.5 py-2 px-2.5 font-medium text-sm text-neutral-900 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:text-neutral-400 dark:hover:text-neutral-300"
                                            href="masjidalkautsar-bawean">
                                            Masjid Al-Kautsar
                                        </a>
                                    </li>
                                </ul>
                            </div>
                    @endif

                    @if (auth()->user()->level == 'eksekutif' || auth()->user()->level == 'admin')
                        <li>
                            <a class="flex items-center gap-x-3.5 py-2 px-2.5  font-medium text-sm text-neutral-900 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:text-white"
                                href="its">
                                <img width="24" height="24" src={{ asset('img/gps.png') }} alt="Icon ITS">
                                VPP ITS
                            </a>
                        </li>

                        <li>
                            <a class="flex items-center gap-x-3.5 py-2 px-2.5  font-medium text-sm text-neutral-900 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:text-white"
                                href="bawean">
                                <img width="24" height="24" src={{ asset('img/gps.png') }} alt="Icon Bawean">
                                VPP Bawean
                            </a>
                        </li>
                    @endif

                    @if (auth()->user()->level == 'pemilik' || auth()->user()->level == 'admin')
                        <li>
                            <a class="flex items-center gap-x-3.5 py-2 px-2.5  font-medium text-sm text-neutral-900 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:text-white"
                                href="home-pemilik">
                                <img width="21" height="21" src={{ asset('img/home.png') }} alt="Icon Home">
                                Home
                            </a>
                        </li>
                        <li>
                            <a class="flex items-center gap-x-3.5 py-2 px-2.5  font-medium text-sm text-neutral-900 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:text-white"
                                href="der1-its">
                                <img width="24" height="24" src={{ asset('img/der1.png') }} alt="DER 1 ITS">
                                DER 1 ITS
                            </a>
                        </li>

                        <li>
                            <a class="flex items-center gap-x-3.5 py-2 px-2.5  font-medium text-sm text-neutral-900 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:text-white"
                                href="der2-its">
                                <img width="24" height="24" src={{ asset('img/der2.png') }} alt="DER 2 ITS">
                                DER 2 ITS
                            </a>
                        </li>

                        <li>
                            <a class="flex items-center gap-x-3.5 py-2 px-2.5  font-medium text-sm text-neutral-900 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:text-white"
                                href="der3-its">
                                <img width="22" height="22" src={{ asset('img/batt.png') }} alt="DER 3 ITS">
                                DER 3 ITS
                            </a>
                        </li>
                    @endif
                </ul>
            </nav>

            <div class="fixed bottom-3 left-0 w-full px-6">
                <a class="flex-none rounded-sm text-xs inline-block font-medium focus:outline-none focus:opacity-80"
                    aria-label="Preline">
                    <img class="w-auto h-auto" width="116" height="32" src={{ asset('img/logo-gabungan.png') }}
                        alt="Logo Gabungan">
                </a>
            </div>

        </div>
        <!-- ========== END SIDEBAR ========== -->

        <!-- ========== MAIN CONTENT ========== -->
        <!-- Content -->
        <div class="w-full lg">
            <div class="sm:p-2 space-y-4 sm:space-y-6">
                @yield('content')
            </div>
        </div>
        <!-- End Content -->
        <!-- ========== END MAIN CONTENT ========== -->

    </body>

@stop
