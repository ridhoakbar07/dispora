@extends('layouts.app')
@section('content')
{{-- Banner Section --}}
<section
    class="backdrop-blur-sm backdrop-grayscale backdrop-saturate-200 h-screen flex flex-col justify-center items-center">
    <div
        class="bg-gradient-to-b from-blue-400 to-transparent dark:from-blue-900 w-full h-full absolute top-0 left-0 z-0">
    </div>
    <div class="container mx-auto my-auto">
        <div id="controls-carousel" class="relative max-w-screen-xl mx-auto h-vh" data-carousel="slide">
            <!-- Carousel -->
            <div class="relative overflow-hidden h-96 content-center">
                @foreach ($banners as $banner)
                    <div class="hidden duration-1000 px-8 w-full lg:px-36 ease-in-out flex items-center" data-carousel-item>
                        <div class="w-full lg:w-1/2 text-left text-gray-700 dark:text-gray-400">
                            <h1
                                class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
                                {{ $banner->judul }}
                            </h1>
                            <p class="text-lg mb-4">{{ $banner->subjudul }}</p>
                            <a href="{{ $banner->link }}"
                                class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-2 rounded-md transition duration-300">
                                {{ $banner->cta }}
                            </a>
                        </div>

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
    </div>
    <div class="container mx-auto mb-12 px-2">
        <!-- Brand Logos at the bottom -->
        <div class="grid grid-cols-3 text-gray-500 dark:text-gray-400 justify-center">
            <div class="flex justify-center items-center">
                <img src="{{ asset('storage/images/kalsel_hitam.png') }}" class="h-6 lg:h-12 dark:hidden"
                    alt="Pemprov Kalsel" />
                <img src="{{ asset('storage/images/kalsel_putih.png') }}" class="h-6 lg:h-12 hidden dark:block"
                    alt="Pemprov Kalsel" />
            </div>
            <div class="flex justify-center items-center">
                <img src="{{ asset('storage/images/ASN_hitam.png') }}" class="h-6 lg:h-12 dark:hidden" alt="ASN" />
                <img src="{{ asset('storage/images/ASN_putih.png') }}" class="h-6 lg:h-12 hidden dark:block"
                    alt="ASN" />
            </div>
            <div class="flex justify-center items-center">
                <img src="{{ asset('storage/images/Berakhlak_hitam.png') }}" class="h-6 lg:h-12 dark:hidden"
                    alt="Berakhlak" />
                <img src="{{ asset('storage/images/Berakhlak_putih.png') }}" class="h-6 lg:h-12 hidden dark:block"
                    alt="Berakhlak" />
            </div>
        </div>
    </div>
</section>

<!-- Profile Section -->
<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 grid lg:grid-cols-2 gap-8 lg:gap-16">
        <div class="flex flex-col justify-center">
            <h1
                class="mb-4 text-3xl font-extrabold tracking-tight leading-none text-gray-900 md:text-4xl lg:text-5xl dark:text-white">
                Dinas Kepemudaan dan Olahraga Provinsi Kalimantan Selatan</h1>

            <blockquote class="text-sm lg:text-lg text-justify italic font-semibold text-gray-900 dark:text-white">
                <svg class="w-8 h-8 text-gray-400 dark:text-gray-600 mb-4" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 14">
                    <path
                        d="M6 0H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3H2a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Zm10 0h-4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3h-1a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Z" />
                </svg>
                <p>"Adalah Satuan Perangkat Kerja Daerah yang melaksanakan urusan pemerintahan yang menjadi kewenangan
                    Daerah dan tugas
                    pembantuan di bidang Kepemudaan dan Olahraga."</p>
            </blockquote>

            <p class="mt-4 text-xs lg:text-sm font-normal text-gray-500 dark:text-gray-400">Peraturan Gubernur
                Kalimantan Selatan Nomor 39 Tahun 2023 tentang Tugas, Fungsi, dan Uraian Tugas Dinas Kepemudaan dan
                Olahraga
            </p>
        </div>
        <div>
            <iframe class="mx-auto w-full lg:max-w-xl h-64 rounded-lg sm:h-96 shadow-xl"
                src="https://www.youtube.com/embed/FKwoIN1INv4?si=VaragXv-cndeiyDq" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
    </div>
</section>

<!-- kinerja utama kami -->
<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-12">
        <!-- Flex container to hold both the text and image sections -->
        <div class="flex flex-wrap">
            <!-- Image Section -->
            <div class="w-full lg:w-1/2 grid grid-cols-1 lg:grid-cols-2 gap-4 pr-8 hidden lg:flex">
                <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/office-long-1.png"
                    alt="Team Working" class="rounded-lg shadow-lg w-full h-full object-cover mb-8">
                <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/office-long-2.png"
                    alt="Office Setup" class="rounded-lg shadow-lg w-full h-full object-cover mt-8">
            </div>

            <!-- Text Section -->
            <div class="w-full lg:w-1/2">
                <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-4">Strategi Kinerja Kami</h2>
                <ol class="space-y-4 text-gray-500 list-decimal list-inside dark:text-gray-400">
                    <li class="font-semibold">
                        Meningkatnya Partisipasi Pemuda Dalam Kegiatan Ekonomi Mandiri
                        <ul class="ps-5 mt-1 font-normal list-disc list-inside">
                            <li>Meningkatkan peran serta pemuda dalam kewirausahaan pemuda</li>
                        </ul>
                    </li>
                    <li class="font-semibold">
                        Meningkatnya Peran Serta Pemuda Dalam Organisasi Kepemudaan dan Sosial Kemasyarakatan
                        <ul class="ps-5 mt-1 font-normal list-disc list-inside">
                            <li>Meningkatkan partisipasi pemuda dalam kegiatan organisasi kepemudaan</li>
                            <li>Meningkatkan partisipasi pemuda untuk berpendapat dalam rapat kepemudaan</li>
                        </ul>
                    </li>
                    <li class="font-semibold">
                        Meningkatnya Masyarakat Dalam Melaksanakan Kegiatan Olahraga
                        <ul class="ps-5 mt-1 font-normal list-disc list-inside">
                            <li>Meningkatkan minat masyarakat untuk berolahraga melalui kegiatan keolahragaan</li>
                        </ul>
                    </li>
                    <li class="font-semibold">
                        Meningkatnya Peran Serta Pemuda Dalam Organisasi Kepemudaan dan Sosial Kemasyarakatan
                        <ul class="ps-5 mt-1 font-normal list-disc list-inside">
                            <li>Meningkatkan kualitas daya saing atlet dan tenaga keolahragaan lainnya</li>
                            <li>Meningkatkan standarisasi sarana dan prasarana olahraga</li>
                            <li>Pemberian penghargaan terhadap atlet dan organisasi olahraga berprestasi</li>
                        </ul>
                    </li>
                </ol>
            </div>
        </div>
    </div>
</section>

<!-- Event -->
<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-20 lg:px-6">
        <hr class="w-48 h-1 mx-auto my-4 bg-gray-100 border-0 rounded md:my-10 dark:bg-gray-700">
        <div class="mx-auto max-w-screen-sm text-center lg:mb-16 mb-8">
            <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">
                <div class="flex justify-center mb-4">
                    <div class="w-24 h-24 rounded-full bg-blue-500 flex items-center justify-center">
                        <svg class="w-12 h-12 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 10h16m-8-3V4M7 7V4m10 3V4M5 20h14a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Zm3-7h.01v.01H8V13Zm4 0h.01v.01H12V13Zm4 0h.01v.01H16V13Zm-8 4h.01v.01H8V17Zm4 0h.01v.01H12V17Zm4 0h.01v.01H16V17Z" />
                        </svg>
                    </div>
                </div>
                <span
                    class="underline underline-offset-3 decoration-8 decoration-blue-400 dark:decoration-blue-600">Upcoming
                    Event</span>
            </h2>
            <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">Mari bergabung dengan kami untuk
                berpartisipasi dan turut serta memeriahkan Event Kepemudaan dan Olahraga di Daerah</p>
        </div>
        <ol class="relative border-s border-gray-200 dark:border-gray-700">
            <li class="mb-10 ms-4">
                <div
                    class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-gray-700">
                </div>
                <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">February
                    2022</time>
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Application UI code in Tailwind CSS</h3>
                <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">Get access to over 20+ pages
                    including a dashboard layout, charts, kanban board, calendar, and pre-order E-commerce & Marketing
                    pages.</p>
            </li>
            <li class="mb-10 ms-4">
                <div
                    class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-gray-700">
                </div>
                <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">March 2022</time>
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Marketing UI design in Figma</h3>
                <p class="text-base font-normal text-gray-500 dark:text-gray-400">All of the pages and components are
                    first designed in Figma and we keep a parity between the two versions even as we update the project.
                </p>
            </li>
            <li class="ms-4">
                <div
                    class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-gray-700">
                </div>
                <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">April 2022</time>
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">E-Commerce UI code in Tailwind CSS</h3>
                <p class="text-base font-normal text-gray-500 dark:text-gray-400">Get started with dozens of web
                    components and interactive elements built on top of Tailwind CSS.</p>
            </li>
        </ol>
    </div>
</section>

<!-- Follow Us -->
<section class="bg-white dark:bg-gray-900">
    <h1 class="mb-4 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl text-center">
        <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-500 to-pink-500">Follow Us</span>
    </h1>
    <div class="mx-auto grid max-w-screen-xl grid-cols-3 gap-8 text-gray-500 dark:text-gray-400 sm:gap-12 lg:grid-cols-3 px-4 py-8 lg:py-12 items-center justify-center place-items-center">
        <a href="#" class="flex items-center md:justify-center text-lg dark:text-gray-200 hover:text-blue-500 dark:hover:text-blue-500">
            <svg class="w-[48px] h-[48px]"
                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd"
                    d="M13.135 6H15V3h-1.865a4.147 4.147 0 0 0-4.142 4.142V9H7v3h2v9.938h3V12h2.021l.592-3H12V6.591A.6.6 0 0 1 12.592 6h.543Z"
                    clip-rule="evenodd" />
            </svg>
            Facebook
        </a>
        <a href="#" class="flex items-center md:justify-center text-lg text-gray-700 dark:text-gray-200 hover:text-pink-500 dark:hover:text-pink-500">
            <svg class="w-[48px] h-[48px]"
                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path fill="currentColor" fill-rule="evenodd"
                    d="M3 8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5V8Zm5-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H8Zm7.597 2.214a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2h-.01a1 1 0 0 1-1-1ZM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm-5 3a5 5 0 1 1 10 0 5 5 0 0 1-10 0Z"
                    clip-rule="evenodd" />
            </svg>
            Instagram
        </a>
        <a href="#" class="flex items-center md:justify-center text-lg text-gray-700 dark:text-gray-200 hover:text-red-500 dark:hover:text-red-500">
            <svg class="w-[48px] h-[48px]"
                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd"
                    d="M21.7 8.037a4.26 4.26 0 0 0-.789-1.964 2.84 2.84 0 0 0-1.984-.839c-2.767-.2-6.926-.2-6.926-.2s-4.157 0-6.928.2a2.836 2.836 0 0 0-1.983.839 4.225 4.225 0 0 0-.79 1.965 30.146 30.146 0 0 0-.2 3.206v1.5a30.12 30.12 0 0 0 .2 3.206c.094.712.364 1.39.784 1.972.604.536 1.38.837 2.187.848 1.583.151 6.731.2 6.731.2s4.161 0 6.928-.2a2.844 2.844 0 0 0 1.985-.84 4.27 4.27 0 0 0 .787-1.965 30.12 30.12 0 0 0 .2-3.206v-1.516a30.672 30.672 0 0 0-.202-3.206Zm-11.692 6.554v-5.62l5.4 2.819-5.4 2.801Z"
                    clip-rule="evenodd" />
            </svg>
            Youtube
        </a>
    </div>
</section>

{{-- Blog Section --}}
<section class="bg-white dark:bg-gray-900">
    <hr class="w-48 h-1 mx-auto bg-gray-100 border-0 rounded dark:bg-gray-700">
    <div class="flex justify-center mb-4">
        <div class="w-24 h-24 mt-12 rounded-full bg-blue-500 flex items-center justify-center">
            <svg class="w-12 h-12 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M19 7h1v12a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V5a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h11.5M7 14h6m-6 3h6m0-10h.5m-.5 3h.5M7 7h3v3H7V7Z" />
            </svg>
        </div>
    </div>
    <div class="mx-auto max-w-screen-sm text-center lg:mb-16 mb-8">
        <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">
            <span class="underline underline-offset-3 decoration-8 decoration-blue-400 dark:decoration-blue-600">Latest
                News</span>
        </h2>
        <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">Menyajikan artikel yang menarik dan
            terbaru tentang Kepemudaan dan Olahraga di Kalimantan Selatan.</p>
    </div>

    <!-- Flex/Grid container for main and sidebar articles -->
    <div class="flex flex-col md:grid md:grid-cols-2 mx-auto max-w-screen-xl gap-8">

        <!-- Main article -->
        <div class="w-full">
            @foreach ($post as $index => $p)
                @if($index == 0)
                    <div
                        class="bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-600 hover:bg-gray-200 rounded-lg shadow-md overflow-hidden">
                        <img class="w-full h-48 object-cover rounded-t-lg" src="{{asset("storage/$p->cover_photo_path")}}"
                            alt="Article Image">
                        <div class="p-6">
                            @foreach ($p->tags as $tag)
                                <span
                                    class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-1 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">{{ $tag->name }}</span>
                            @endforeach
                            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mt-2"><a
                                    href="{{ route('filamentblog.post.show', ['post' => $p->slug]) }}">{{ $p->title }}</a></h2>
                            <div class="flex items-center mt-4">
                                <div
                                    class="relative mr-2 inline-flex items-center justify-center w-10 h-10 overflow-hidden bg-blue-600 rounded-full dark:bg-blue-700">
                                    <span
                                        class="font-medium text-white dark:text-gray-300">{{ strtoupper(substr($p->user->name, 0, 2)) }}</span>
                                </div>
                                <div>
                                    <p class="text-gray-700 dark:text-gray-300 font-medium">{{ $p->user->name }}</p>
                                    <span
                                        class="text-sm text-gray-600 dark:text-gray-200">{{ $p->published_at->diffForHumans() }}</span>
                                </div>
                            </div>
                            <p class="text-gray-500 dark:text-gray-400 mt-4"> {{ Str::limit(strip_tags($p->body), 300) }}</p>
                            <a href="{{ route('filamentblog.post.show', ['post' => $p->slug]) }}"
                                class="inline-flex items-center font-medium text-blue-600 dark:text-blue-500  hover:underline">Read
                                more <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M12.293 9.293a1 1 0 0 1 1.414 1.414l-4 4a1 1 0 0 1-1.414-1.414L10.586 11H3a1 1 0 1 1 0-2h7.586l-2.293-2.293a1 1 0 0 1 1.414-1.414l4 4z" />
                                </svg></a>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>

        <!-- Sidebar articles -->
        <div class="w-full space-y-6">
            @foreach ($post as $index => $p)
                @if($index > 0)
                    <div class="bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-600 hover:bg-gray-200 rounded-lg shadow-md p-6">
                        @foreach ($p->tags as $tag)
                            <span
                                class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-1 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">{{ $tag->name }}</span>
                        @endforeach
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white mt-2"><a
                                href="{{ route('filamentblog.post.show', ['post' => $p->slug]) }}">{{ $p->title }}</a></h3>
                        <p class="text-gray-500 dark:text-gray-400 mt-2">{{ Str::limit(strip_tags($p->body), 100) }}</p>
                        <span
                            class="text-sm text-gray-600 dark:text-gray-200 py-2 block">{{ $p->published_at->diffForHumans() }}</span>
                        <a href="{{ route('filamentblog.post.show', ['post' => $p->slug]) }}"
                            class="inline-flex items-center font-medium text-blue-600 dark:text-blue-500  hover:underline">Read
                            more <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M12.293 9.293a1 1 0 0 1 1.414 1.414l-4 4a1 1 0 0 1-1.414-1.414L10.586 11H3a1 1 0 1 1 0-2h7.586l-2.293-2.293a1 1 0 0 1 1.414-1.414l4 4z" />
                            </svg></a>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
    <div class="flex justify-center py-8">
        <a href="{{ route('filamentblog.post.all') }}"
            class="flex items-center justify-center md:gap-x-5 rounded-md bg-slate-100 px-10 py-4 text-sm font-semibold transition-all duration-300 hover:bg-slate-200">
            <span>Show all blogs</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6" viewBox="0 0 24 24">
                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="1.5" d="M6 18L18 6m0 0H9m9 0v9" />
            </svg>
        </a>
    </div>
</section>

@stop