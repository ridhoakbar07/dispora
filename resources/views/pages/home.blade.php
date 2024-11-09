@extends('layouts.app')
@section('content')
    {{-- <section class="bg-white dark:bg-gray-900">
        <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1
                    class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">
                    Payments tool for software companies</h1>
                <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">From
                    checkout to global sales tax compliance, companies around the world use Flowbite to simplify their
                    payment stack.</p>
                <a href="#"
                    class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                    Get started
                    <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
                <a href="#"
                    class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-gray-900 border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                    Speak to Sales
                </a>
            </div>
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/hero/phone-mockup.png" alt="mockup">
            </div>
        </div>
    </section> --}}

    {{-- Banner Section --}}
    <section class="bg-white dark:bg-gray-900 py-4 lg:py-36 h-auto">
        <div id="controls-carousel" class="relative max-w-screen-xl mx-auto " data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="relative h-96 mt-20 lg:h-100 overflow-hidden rounded-lg">
                @foreach ($banners as $banner)
                    <div class="hidden duration-700 px-8 lg:px-36 ease-in-out flex items-center" data-carousel-item>
                        <!-- Content Area (Left Side) -->
                        <div class="w-full lg:w-1/2 text-left text-gray-700 dark:text-gray-400 px-18">
                            <h2 class="text-3xl font-bold mb-2">{{ $banner->judul }}</h2>
                            <p class="text-lg mb-4">{{ $banner->subjudul }}</p>
                            <a href="{{ $banner->link }}"
                                class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-2 rounded-md transition duration-300">
                                {{ $banner->cta }}
                            </a>
                        </div>

                        <!-- Image Area (Right Side) -->
                        <div class="w-1/2 sm:block hidden">
                            <img src="{{ asset("storage/$banner->gambar") }}" class="w-96 h-96 object-contain mx-auto"
                                alt="{{ $banner->judul }}">
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Slider controls -->
            <button type="button"
                class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-gray-800/70 dark:bg-white/70 group-hover:bg-gray-800 dark:group-hover:bg-white group-focus:ring-4 group-focus:ring-gray-800 dark:group-focus:ring-white group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 1 1 5l4 4" />
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button"
                class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-next>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-gray-800/70 dark:bg-white/70 group-hover:bg-gray-800 dark:group-hover:bg-white group-focus:ring-4 group-focus:ring-gray-800 dark:group-focus:ring-white group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>

        <section class="bg-white dark:bg-gray-900 my-4 lg:my-10 py-4 lg:py-6">
            <div class="py-6 lg:py-8 mx-auto max-w-screen-xl px-4 flex justify-center items-center">
                    <div class="grid grid-cols-3 gap-8 text-gray-500 sm:gap-1 dark:text-gray-400">
                        <div class="flex justify-center items-center">
                            <img src="{{ asset('storage/images/kalsel_hitam.png') }}" class="mr-3 h-8 lg:h-12 dark:hidden"
                                alt="Pemprov Kalsel" />
                            <img src="{{ asset('storage/images/kalsel_putih.png') }}"
                                class="mr-3 h-8 lg:h-12 hidden dark:block" alt="Pemprov Kalsel" />
                        </div>
                        <div class="flex justify-center items-center">
                            <img src="{{ asset('storage/images/ASN_hitam.png') }}" class="mr-3 h-8 lg:h-12 dark:hidden"
                                alt="ASN" />
                            <img src="{{ asset('storage/images/ASN_putih.png') }}"
                                class="mr-3 h-8 lg:h-12 hidden dark:block" alt="ASN" />
                        </div>
                        <div class="flex justify-center items-center">
                            <img src="{{ asset('storage/images/Berakhlak_hitam.png') }}"
                                class="mr-3 h-8 lg:h-12 dark:hidden" alt="Berakhlak" />
                            <img src="{{ asset('storage/images/Berakhlak_putih.png') }}"
                                class="mr-3 h-8 lg:h-12 hidden dark:block" alt="Berakhlak" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>

    {{-- Logo Section --}}


    {{-- Blog Section --}}
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-12 lg:px-6">
            <div class="mx-auto max-w-screen-sm text-center lg:mb-16 mb-8">
                <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">
                    <span
                        class="underline underline-offset-3 decoration-8 decoration-blue-400 dark:decoration-blue-600">Postingan
                        Kami</span>
                </h2>
                <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">Menyajikan artikel yang menarik dan
                    terbaru terkait urusan Kepemudaan dan Olahraga di Kalimantan Selatan.</p>
            </div>
            <div class="grid gap-8 lg:grid-cols-2">
                @foreach ($post as $p)
                    <article
                        class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <div class="flex justify-between items-center mb-5 text-gray-500">
                            <span
                                class="bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                                <svg class="mr-1 w-4 h-4 text-gray-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M18.045 3.007 12.31 3a1.965 1.965 0 0 0-1.4.585l-7.33 7.394a2 2 0 0 0 0 2.805l6.573 6.631a1.957 1.957 0 0 0 1.4.585 1.965 1.965 0 0 0 1.4-.585l7.409-7.477A2 2 0 0 0 21 11.479v-5.5a2.972 2.972 0 0 0-2.955-2.972Zm-2.452 6.438a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z" />
                                </svg>

                                @foreach ($p->tags as $tag)
                                    <span
                                        class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-1 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">{{ $tag->name }}</span>
                                @endforeach
                            </span>
                            <span class="text-sm">{{ $p->published_at->diffForHumans() }}</span>
                        </div>
                        <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><a
                                href="#">{{ $p->title }}</a></h2>
                        <p class="mb-5 font-light text-gray-500 dark:text-gray-400">
                            {{ Str::limit(strip_tags($p->body), 100) }}</p>
                        <div class="flex justify-between items-center">
                            <div class="flex items-center space-x-4">
                                <div
                                    class="relative inline-flex items-center justify-center w-10 h-10 overflow-hidden bg-blue-600 rounded-full dark:bg-blue-700">
                                    <span
                                        class="font-medium text-white dark:text-gray-300">{{ strtoupper(substr($p->user->name, 0, 2)) }}</span>
                                </div>
                                <span class="font-medium dark:text-white">
                                    {{ $p->user->name }}
                                </span>
                            </div>
                            <a href="{{ route('filamentblog.post.show', ['post' => $p->slug]) }}"
                                class="inline-flex items-center font-medium text-blue-600 dark:text-blue-500  hover:underline">
                                Read more
                                <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>
            <div class="flex justify-center pt-6">
                <a href="{{ route('filamentblog.post.all') }}"
                    class="flex items-center justify-center md:gap-x-5 rounded-lg bg-slate-100 px-20 py-4 text-sm font-semibold transition-all duration-300 hover:bg-slate-200">
                    <span>Show all blogs</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6" viewBox="0 0 24 24">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="1.5" d="M6 18L18 6m0 0H9m9 0v9" />
                    </svg>
                </a>
            </div>
        </div>
    </section>
@stop
