@extends('layouts.app')

@section('content')
    <section class="pt-12 bg-white dark:bg-gray-900 pb-6 flex items-center justify-center h-auto">
        <div class="text-center max-w-screen-xl mx-auto p-4">
            <p class="mb-4 md:mb-4 text-md lg:text-2xl font-bold text-center dark:text-white">
                Mengacu pada Visi & Misi Gubernur Kalimantan Selatan Tahun 2021 – 2026, maka dirumuskan lah tujuan dan
                sasaran pembangunan
                yang hendak dicapai oleh Dinas Kepemudaan dan Olahraga
                Provinsi Kalimantan Selatan yaitu sebagai berikut :
            </p>

            {!! str($profile->tujuan_sasaran)->markdown()->sanitizeHtml()
                ->replace(
                    '<h2>',
                    '<h2 class="mb-4 mt-4 text-2xl font-extrabold text-left dark:text-white">',
                )
                ->replace(
                    '<p>',
                    '<p class="mb-6 mt-6 text-md font-bold text-left text-gray-500 dark:text-gray-400">',
                )->replace('<ol>', '<ol class="list-decimal text-gray-500 list-inside dark:text-gray-400">')->replace('<li>', '<li class="my-2 text-justify">') !!}
        </div>
    </section>
@stop
