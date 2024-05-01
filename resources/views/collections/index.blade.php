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
                        <td>
                            <x-customDropdown :menuItem="$menuItems" />
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

