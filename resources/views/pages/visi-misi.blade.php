@extends('layouts.app')

@section('content')
    <section class="bg-white dark:bg-gray-900 pb-6 flex items-center justify-center h-auto">
        <div class="text-center max-w-screen-xl mx-auto p-4">
            <p class="mt-4 mb-4 md:mt-8 md:mb-4 text-xl font-bold text-center dark:text-white">
                Berdasarkan Perubahan Rencana Pembangunan Jangka Menengah Daerah (RPJMD) Provinsi Kalimantan Selatan Tahun
                2021 - 2026,
                Visi dan Misi Gubernur dan Wakil Gubernur adalah :
            </p>

            {!! str($profile->visi_misi)->markdown()->sanitizeHtml()
                ->replace(
                    '<h1>',
                    '<h1 class="mb-4 text-2xl font-extrabold leading-none tracking-tight text-gray-900 md:text-3xl lg:text-4xl dark:text-white">',
                )
                ->replace('<p>','<p class="mb-6 mt-6 text-md font-normal text-center text-gray-500 lg:text-lg dark:text-gray-400">')
                ->replace('<ol>', '<ol class="list-decimal text-gray-500 list-inside dark:text-gray-400">') 
                ->replace('<li>', '<li class="my-2">')!!}
        </div>
    </section>
@stop
