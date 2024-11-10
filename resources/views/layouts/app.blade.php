<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark scroll-smooth focus:scroll-auto">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dinas Kepemudaan dan Olahraga Provinsi Kalimantan Selatan</title>

    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="icon" type="image/x-icon" href="{{ asset('storage/images/favicon.png') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        /* Tambahkan style untuk transisi */
        .navbar {
            transition: all 0.3s ease;
        }
    </style>

    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
            '(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>

    @stack('styles')
</head>

<body class="bg-white dark:bg-gray-900 overscroll-contain flex flex-col min-h-screen">

    <header>
        @include('layouts.partials.navbar')
    </header>

    <div id="main" class="flex-1 pt-8 bg-fixed bg-white bg-cover bg-center" style="
    background-image: url('{{ asset('storage/web_profile/background/kantor-dispora.jpg') }}');">
        @yield('content')
    </div>

    <!-- Go to Top Button -->
    <button id="goToTopButton" onclick="scrollToTop()"
        class="fixed bottom-6 right-6 bg-blue-600 text-white p-3 rounded-full shadow-lg hover:bg-blue-700 transition">
        <!-- Up arrow icon -->
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
        </svg>
    </button>

    <footer class="p-4 bg-gray-100 sm:p-6 dark:bg-gray-800">
        @include('layouts.partials.footer')
    </footer>

    <script>
        var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
        var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

        // Change the icons inside the button based on previous settings
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
            '(prefers-color-scheme: dark)').matches)) {
            themeToggleLightIcon.classList.remove('hidden');
        } else {
            themeToggleDarkIcon.classList.remove('hidden');
        }

        var themeToggleBtn = document.getElementById('theme-toggle');

        themeToggleBtn.addEventListener('click', function () {

            // toggle icons inside button
            themeToggleDarkIcon.classList.toggle('hidden');
            themeToggleLightIcon.classList.toggle('hidden');

            // if set via local storage previously
            if (localStorage.getItem('color-theme')) {
                if (localStorage.getItem('color-theme') === 'light') {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('color-theme', 'dark');
                } else {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('color-theme', 'light');
                }

                // if NOT set via local storage previously
            } else {
                if (document.documentElement.classList.contains('dark')) {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('color-theme', 'light');
                } else {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('color-theme', 'dark');
                }
            }
        });
    </script>

    <!-- JavaScript to handle button visibility and scroll -->
    <script>
        const goToTopButton = document.getElementById("goToTopButton");

        // Show the button when the user scrolls down
        window.addEventListener("scroll", () => {
            if (window.scrollY > 200) {
                goToTopButton.classList.remove("hidden");
            } else {
                goToTopButton.classList.add("hidden");
            }
        });

        // Function to scroll to the top of the page
        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        }
    </script>

    @stack('scripts')
</body>

</html>