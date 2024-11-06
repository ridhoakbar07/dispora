<header @click.outside="showSearchModal = false" x-data="{ showSearchModal: false }" class="sticky top-0 mb-4 z-30">
    {{-- Primary navbar --}}
    @include('layouts.partials.navbar')
</header>

<nav
    class="max-w-screen-xl w-full flex items-center justify-between mx-auto bg-white z-10 my-1 px-2 py-1 dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700 sticky top-[73px]">
    <div class="w-full flex flex-wrap justify-between items-stretch">
        <div class="inline-flex rounded-md shadow-sm flex-shrink-0 mb-4 sm:mb-0 w-full sm:w-auto" role="group">
            <!-- Home Blog Button -->
            <a href="{{ route('filamentblog.post.all') }}"
                class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-blue border border-gray-200 rounded-s-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-blue-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-blue-700 dark:focus:ring-blue-500 dark:focus:text-white w-1/2 h-full">
                <svg class="w-6 h-6 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                    height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m4 12 8-8 8 8M6 10.5V19a1 1 0 0 0 1 1h3v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h3a1 1 0 0 0 1-1v-8.5" />
                </svg>
                All Posts
            </a>

            <!-- Category Button with Dropdown -->
            <div class="relative h-full z-20 w-1/2">
                <button type="button" id="buttonCategory" aria-expanded="false"
                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-blue border border-gray-200 rounded-e-lg hover:bg-gray-100 hover:text-blue-700 focus:z-20 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-blue-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-blue-700 dark:focus:ring-blue-500 dark:focus:text-white w-full h-full">
                    <svg class="w-6 h-6 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                            d="M18.796 4H5.204a1 1 0 0 0-.753 1.659l5.302 6.058a1 1 0 0 1 .247.659v4.874a.5.5 0 0 0 .2.4l3 2.25a.5.5 0 0 0 .8-.4v-7.124a1 1 0 0 1 .247-.659l5.302-6.059c.566-.646.106-1.658-.753-1.658Z" />
                    </svg>
                    Categories
                </button>

                <!-- Dropdown Menu -->
                <div id="dropdownCategory"
                    class="absolute hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 z-20">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">
                        <x-blog-header-category />
                    </ul>
                </div>
            </div>

        </div>
        <!-- Right section: Search Box -->
        <form action="{{ route('filamentblog.post.search') }}" method="GET"
            class="flex items-center w-full sm:w-auto flex-shrink-0 h-full">
            <label for="simple-search" class="sr-only">Search</label>
            <div class="relative w-full flex items-center">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 5v10M3 5a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm0 10a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm12 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm0 0V6a3 3 0 0 0-3-3H9m1.5-2-2 2 2 2" />
                    </svg>
                </div>
                <input type="text" id="simple-search" name="query" value="{{ request()->get('query') }}"
                    placeholder="Search"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 h-full" required/>
            </div>
            @error('query')
                <span class="text-xs text-red-500 mt-1">{{ $message }}</span>
            @enderror

            <button type="submit"
                class="p-2.5 ms-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 h-full">
                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
                <span class="sr-only">Search</span>
            </button>
        </form>
    </div>
</nav>
