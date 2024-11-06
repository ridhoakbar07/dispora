<nav id="navbar"
    class="sticky z-10 top-0 top-0 left-0 w-full bg-white bg-opacity-50 backdrop-blur-md shadow-none dark:bg-gray-900/70">
    <div
        class="max-w-screen-xl flex flex-wrap items-center justify-between border-b border-gray-200 dark:border-gray-700 mx-auto p-4">

        <a href="https://dispora.kalselprov.go.id" class="flex items-center space-x-3 rtl:space-x-reverse antialiased">
            <img src="{{ asset('storage/images/logo-kalsel.png') }}" class="h-10 transition-transform transform"
                alt="Dispora Logo" />
            <span id="website-title"
                class="self-center text-2xl font-bold whitespace-nowrap dark:text-white transition-transform transform">DISPORA</span>
        </a>

        <div class="flex md:order-2 space-x-3 md:space-x-3 rtl:space-x-reverse">
            <button id="theme-toggle" type="button"
                class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
                <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                </svg>
                <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                        fill-rule="evenodd" clip-rule="evenodd"></path>
                </svg>
            </button>
            <button data-collapse-toggle="navbar-sticky" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>

            @if (Route::has('filament.admin.auth.login'))
                <nav class="mx-3 flex flex-1 justify-end">
                    @auth
                        <div class="relative">
                            <button id="avatarDropdownLink" data-dropdown-toggle="avatarDropdown"
                                class="flex items-center justify-center w-8 h-8 bg-blue-600 text-white rounded-full">
                                <!-- Display Initials of the User -->
                                <span
                                    class="font-semibold text-lg">{{ strtoupper(substr(auth()->user()->name, 0, 2)) }}</span>
                            </button>
                            <!-- Dropdown Menu for Logout -->
                            <div id="avatarDropdown"
                                class="z-10 hidden absolute right-2 mt-2 bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                    aria-labelledby="avatarDropdownLink">
                                    <li>
                                        <a href="{{ route('filament.admin.auth.logout') }}"
                                            class="block px-4 py-2 text-red-600 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                            Logout
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    @else
                        <a href="{{ route('filament.admin.auth.login') }}"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 hidden sm:block">Login</a>

                        @if (Route::has('filament.admin.auth.register'))
                            <a href="{{ route('filament.admin.auth.login') }}"
                                class="text-white bg-orange-500 hover:bg-orange-600 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-orange-600 dark:hover:bg-orange-700 dark:focus:ring-orange-800 hidden sm:block">Register</a>
                        @endif
                    @endauth
                </nav>
            @endif

        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
            <ul
                class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 dark:border-gray-700">
                <li>
                    <a href="{{ route('home') }}"
                        class="block py-2 px-3 text-whiterounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500 dark:bg-blue-600 md:dark:bg-transparent"
                        aria-current="page">Beranda</a>
                </li>
                <li>
                    <button id="profileDropdownLink" data-dropdown-toggle="profileDropdown"
                        class="flex items-center justify-between w-full py-2 px-3 text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Profile
                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg></button>
                    <!-- Dropdown menu -->
                    <div id="profileDropdown"
                        class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownLargeButton">
                            <li>
                                <a href="{{ route('visi-misi') }}"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Visi
                                    Misi</a>
                            </li>
                            <li>
                                <a href="{{ route('tujuan-sasaran') }}"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Tujuan
                                    dan Sasaran</a>
                            </li>
                            <li>
                                <a href="{{ route('struktur-organisasi') }}"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Struktur
                                    Organisasi</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <button id="transparansiDropdownLink" data-dropdown-toggle="transparansiDropdown"
                        class="flex items-center justify-between w-full py-2 px-3 text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Transparansi
                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg></button>
                    <!-- Dropdown menu -->
                    <div id="transparansiDropdown"
                        class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                            aria-labelledby="dropdownLargeButton">
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Produk
                                    Hukum</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dokumen
                                    Kinerja</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <button id="layananDropdownLink" data-dropdown-toggle="layananDropdown"
                        class="flex items-center justify-between w-full py-2 px-3 text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Layanan
                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg></button>
                    <!-- Dropdown menu -->
                    <div id="layananDropdown"
                        class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                            aria-labelledby="dropdownLargeButton">
                            <li>
                                <a href="/sispora" target="_BLANK"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">SISPORA
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="/blog"
                        class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Blog</a>
                </li>
                <li>
                    <a href="{{ route('kontak-kami') }}"
                        class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Kontak
                        Kami</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

@push('scripts')
    <script>
        // JavaScript untuk menambahkan kelas saat di-scroll
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('navbar');
            const logo = navbar.querySelector('img');
            const title = document.getElementById('website-title');
            if (window.scrollY > 50) {
                navbar.classList.add('shadow-lg', 'border-gray-400/50', 'bg-opacity-70');
                title.classList.add('scale-110', 'animate-bounce', 'bg-blue-100', 'text-blue-800', 'me-2', 'px-2.5',
                    'py-0.5', 'rounded', 'dark:bg-blue-900', 'dark:text-blue-300'); // Efek grow pada teks
            } else {
                navbar.classList.remove('shadow-lg', 'border-gray-400/50', 'bg-opacity-50');
                title.classList.remove('scale-110', 'animate-bounce', 'bg-blue-100', 'text-blue-800', 'me-2',
                    'px-2.5', 'py-0.5', 'rounded', 'dark:bg-blue-900', 'dark:text-blue-300'
                ); // Mengembalikan ukuran teks
            }
        });

        // JavaScript untuk toggle menu mobile
        document.getElementById('menu-toggle').addEventListener('click', function() {
            const menu = document.querySelector('.md\\:flex');
            menu.classList.toggle('hidden');
        });
    </script>
@endpush
