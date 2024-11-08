@extends('layouts.app')

@section('content')
    <section class="bg-white dark:bg-gray-900 pb-6 flex items-center justify-center h-auto">
        <div class="text-center max-w-screen-xl mx-auto p-4">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach ($pegawai as $p)
                    <div
                        class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <div class="flex flex-col items-center pb-10">
                            <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="/docs/images/people/profile-picture-3.jpg"
                                alt="Bonnie image" />
                            <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">{{ $p->nama }}</h5>
                            <span class="text-sm text-gray-500 dark:text-gray-400">{{ $p->jabatan }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@stop
