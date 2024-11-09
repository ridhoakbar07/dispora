@extends('layouts.app')

@section('content')
    <section class="bg-white dark:bg-gray-900 pb-6 flex items-center justify-center h-auto">
        <div class="text-center max-w-screen-xl mx-auto p-4">
            {{-- Pejabat Struktural --}}
            <div class="inline-flex items-center justify-center w-full">
                <span
                    class="px-3 py-4 font-bold text-lg uppercase text-gray-900 dark:text-white dark:bg-gray-900">Pejabat
                    Struktural</span>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-3 lg:grid-cols-5 gap-6">
                <div class="sm:col-span-3 lg:col-span-5 flex justify-center">
                    <a href="#"
                        class="flex flex-col items-center bg-red-500 border border-gray-300 rounded-lg shadow-md md:flex-row md:max-w-xl 
                                hover:bg-red-600 dark:border-red-400 dark:bg-red-600 dark:hover:bg-red-700 w-full cursor-default">
                        <img class="object-cover w-full rounded-t-lg h-48 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg"
                            src="{{ asset("storage/$kepalaDinas->photo") }}" alt="Foto">
                        <div class="flex flex-col text-justify justify-between p-2 leading-normal">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                {{ $kepalaDinas->nama }}
                            </h5>
                            <span class="text-md text-white dark:text-gray-200">{{ $kepalaDinas->jabatan }}</span>
                            <h6 class="mb-1 text-sm font-normal text-white dark:text-white">{{ $kepalaDinas->pangkat_gol }}
                            </h6>
                            <h6 class="mb-1 text-sm font-normal text-white dark:text-white">NIP. {{ $kepalaDinas->NIP }}
                            </h6>
                        </div>
                    </a>
                </div>
            </div>

            <form action="{{ route('pegawai') }}" method="GET" id="filterForm" class="mb-4">
                <div class="flex items-center justify-center py-4 md:py-8 flex-wrap">
                    <!-- Filter for All -->
                    <a href="{{ route('pegawai', ['filter' => '']) }}"
                        class="filter-link text-blue-700 hover:text-white border border-blue-600 bg-white hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:bg-gray-900 dark:focus:ring-blue-800">
                        Semua
                    </a>

                    <!-- Filter for each Unit Kerja -->
                    @foreach ($unitKerja as $uk)
                        <a href="{{ route('pegawai', ['filter' => urlencode($uk->nama_bidang)]) }}"
                            class="filter-link text-blue-700 hover:text-white border border-blue-600 bg-white hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:bg-gray-900 dark:focus:ring-blue-800">
                            {{ $uk->nama_bidang }}
                        </a>
                    @endforeach
                </div>
            </form>

            <div class="grid grid-cols-1 sm:grid-cols-3 lg:grid-cols-5 gap-6 mt-6">
                @foreach ($pegawai as $p)
                    @if ($p->jenis_jabatan === 'Jabatan Administrator')
                        <div
                            class="w-full max-w-sm bg-blue-500 border border-blue-500 rounded-lg shadow-md dark:bg-blue-600 dark:border-blue-400 hover:bg-blue-600 dark:hover:bg-blue-700 cursor-default">
                            <div class="flex flex-col items-center py-4">
                                <img class="w-24 h-24 mb-3 rounded-full border border-blue-400 dark:border-blue-500 shadow-lg"
                                    src="{{ asset("storage/$p->photo") }}" alt="Foto" />
                                <h5 class="mb-2 text-sm font-semibold text-gray-900 dark:text-white">{{ $p->nama }}
                                </h5>

                                <div class="flex flex-col items-center space-y-1">
                                    <span class="text-sm text-white dark:text-gray-200">{{ $p->jabatan }}</span>
                                    <h6 class="mb-1 text-xs font-normal text-white dark:text-white">{{ $p->pangkat_gol }}
                                    </h6>
                                    <h6 class="mb-1 text-xs font-normal text-white dark:text-white">NIP.
                                        {{ $p->NIP }}
                                    </h6>
                                </div>
                            </div>
                        </div>
                    @elseif($p->jenis_jabatan === 'Jabatan Pengawas')
                        <div
                            class="w-full max-w-sm bg-green-500 border border-green-500 rounded-lg shadow-md dark:bg-green-600 dark:border-green-400 hover:bg-green-600 dark:hover:bg-green-700 cursor-default">
                            <div class="flex flex-col items-center py-4">
                                <img class="w-24 h-24 mb-3 rounded-full border border-green-400 dark:border-green-500 shadow-lg"
                                    src="{{ asset("storage/$p->photo") }}" alt="Foto" />
                                <h5 class="mb-2 text-sm font-semibold text-gray-900 dark:text-white">{{ $p->nama }}
                                </h5>

                                <div class="flex flex-col items-center space-y-1">
                                    <span class="text-sm text-white dark:text-gray-200">{{ $p->jabatan }}</span>
                                    <h6 class="mb-1 text-xs font-normal text-white dark:text-white">{{ $p->pangkat_gol }}
                                    </h6>
                                    <h6 class="mb-1 text-xs font-normal text-white dark:text-white">NIP.
                                        {{ $p->NIP }}
                                    </h6>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>

            {{-- Staff section card --}}
            <hr class="h-px mt-8 bg-gray-200 border-0 dark:bg-gray-700">
            <div class="inline-flex items-center justify-center w-full">
                <span
                    class="px-3 py-4 font-bold text-lg uppercase text-gray-900 dark:text-white dark:bg-gray-900">Staf</span>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-3 lg:grid-cols-5 gap-6">
                @php
                    $noData = true; 
                @endphp

                @foreach ($pegawai as $p)
                    @if (
                        $p->jenis_jabatan !== 'Jabatan Tinggi Pratama' &&
                            $p->jenis_jabatan !== 'Jabatan Administrator' &&
                            $p->jenis_jabatan !== 'Jabatan Pengawas')
                        @php
                            $noData = false;
                        @endphp
                        <div
                            class="w-full max-w-sm bg-yellow-300 border border-yellow-200 rounded-lg shadow-md dark:bg-yellow-400 dark:border-yellow-300 hover:bg-yellow-200 dark:hover:bg-yellow-500 cursor-default">
                            <div class="flex flex-col items-center py-4">
                                <img class="w-24 h-24 mb-3 rounded-full border border-yellow-400 dark:border-yellow-500 shadow-lg"
                                    src="{{ asset("storage/$p->photo") }}" alt="Foto" />
                                <h5 class="mb-2 text-sm font-semibold text-gray-900 dark:text-white">{{ $p->nama }}
                                </h5>

                                <div class="flex flex-col items-center space-y-1">
                                    <span class="text-sm text-dark dark:text-gray-200">{{ $p->jabatan }}</span>
                                    <h6 class="mb-1 text-xs font-normal text-dark dark:text-white">{{ $p->pangkat_gol }}
                                    </h6>
                                    <h6 class="mb-1 text-xs font-normal text-dark dark:text-white">NIP:
                                        {{ $p->NIP }}</h6>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach

                @if ($noData)
                    <div class="w-full col-span-5 text-center text-gray-900 dark:text-white">
                        <h5 class="text-sm font-semibold">No Data Available</h5>
                    </div>
                @endif
            </div>

        </div>
    </section>
@stop
