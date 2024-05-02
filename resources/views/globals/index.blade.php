@php
    $menuItems = [
        ['label' => 'Edit', 'route' => route('navigations.edit')],
        ['label' => 'Delete', 'route' => route('dashboard')],
        // Add more menu items as needed
    ];
@endphp
@extends('layouts.main')
@section('content')
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <title>{{'Globals :: Cedar'}}</title>
    <div class="page-wrapper max-w-xl" bis_skin_checked="1">
        <div class="flex items-center mb-6" bis_skin_checked="1">
            <h1 class="flex-1">Globals</h1>
            @role('superadmin')
            <a href="{{ route('globals.add') }}" class="btn-primary">Create
                Global Set</a>
            @endrole

        </div>
        <div class="card p-0" bis_skin_checked="1">
            <table data-size="sm" tabindex="0" class="data-table">
                <x-table-head :firstcol="$firstCol" :secondcol="$secondCol" />
                <thead>
                    <tr><!---->
                        <th class="group current-column"><span>Title</span><!----></th>
                        <th class="group"><span>Handle</span><!----></th><!---->
                        <th class="actions-column"></th>
                    </tr>
                </thead>
                <tbody tabindex="0">
                @foreach($data as $globals)
                    <tr class="sortable-row outline-none" tabindex="0"><!----><!---->
                        <td class=""><a href="https://demo.statamic.com/cp/globals/company">{{  $globals->handle }}</a></td>
                        <td class=""><span class="font-mono text-2xs">company</span></td><!---->
                        <th class="actions-column">
                            <div class="dropdown-list" bis_skin_checked="1">
                                <x-customDropdown :menuItems="$menuItems"></x-customDropdown>
                                <div class="v-portal" style="display: none;" bis_skin_checked="1"></div>
                            </div>
                        </th>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
