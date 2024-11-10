@extends('layouts.app')

@section('content')
    <section class="pt-12 bg-white dark:bg-gray-900 pb-6 flex items-center justify-center h-auto">
        <div class="text-center max-w-screen-xl mx-auto p-4">
            <p class="mb-4 md:mb-4 text-md lg:text-2xl font-bold text-center dark:text-white">
                Peraturan Gubernur Kalimantan Selatan Nomor 39 Tahun 2023 tentang Tugas, Fungsi, dan Uraian Tugas Dinas
                Kepemudaan dan Olahraga
            </p>

            <!-- Center the image and caption within the figure -->
            <figure class="max-w-screen-lg mx-auto py-auto text-center overflow-hidden">
                <img class="h-auto max-w-full rounded-xl mx-auto" src="{{ asset("storage/$profile->struktur_organisasi") }}" alt="image description">
                <figcaption class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400">Struktur Organisasi</figcaption>
            </figure>

        </div>
    </section>
@stop
