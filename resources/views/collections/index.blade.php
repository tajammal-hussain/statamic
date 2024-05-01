@php
    $menuItems = [
            ['label' => 'View', 'route' => route('collections.table')],
            ['label' => 'Visit URL', 'route' => route('dashboard')],
            ['label' => 'Edit Blueprints', 'route' => route('dashboard')],
            // Add more menu items as needed
        ];
@endphp
@extends('layouts.main')
@section('content')
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <title>{{ 'Collections :: Cedar' }}</title>
    <div class="page-wrapper max-w-xl" bis_skin_checked="1">
        <div class="flex items-center justify-between mb-6" bis_skin_checked="1">
            <h1>{{ 'Collections' }}</h1>
            @role('superadmin')
            <a href="{{ route('collections.addCollection') }}" class="btn-primary">Create Collection</a>
            @endrole
        </div>
        <div class="card overflow-hidden p-0" endpoints="" bis_skin_checked="1">
            <table data-size="sm" tabindex="0" class="data-table">
                <x-table-head :firstcol="$firstCol" :secondcol="$secondCol" />
                <tbody tabindex="0">
                @foreach ($data as $collection)
                    <tr class="sortable-row outline-none" tabindex="0">
                        <td class=""><a
                                    href="https://demo.statamic.com/cp/collections/news">{{ $collection->handle }}</a></td>
                        <td class="rtl:text-left ltr:text-right rtl:pl-8 ltr:pr-8">
                            <div bis_skin_checked="1">
                                <div handle="entries" values="" class="" bis_skin_checked="1">6
                                </div>
                            </div>
                        </td>
                        <td class="flex justify-center align-center text-start items-center">
                            <div x-data="{ dropdownOpen: false }">
                                <button @click="dropdownOpen = !dropdownOpen" class="relative z-10 block rounded-md bg-white p-2 focus:outline-none">
                                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 3">
                                        <path d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z"/>
                                    </svg>
                                </button>

                                <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10"></div>

                                <div x-show="dropdownOpen" class="absolute right-0 md:right-[2rem] lg:right-96  mt-5 py-2 w-48 bg-white rounded-md shadow-xl z-20">
                                    @foreach($menuItems as $menuItem)
                                        @if($menuItem['label'] == 'Delete')
                                            <a href="{{ $menuItem['route'] }}" class="block px-4 py-2 text-sm capitalize hover:text-white text-black hover:bg-red-500" style="text-align: start;">
                                                <span class="hover:text-white"> {{ $menuItem['label'] }} </span>
                                            </a>
                                        @else
                                            <a href="{{ $menuItem['route'] }}" class="block px-4 py-2 text-sm capitalize text-black hover:bg-blue-500" style="text-align: start;">
                                                <span class="hover:text-white"> {{ $menuItem['label'] }} </span>
                                            </a>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

