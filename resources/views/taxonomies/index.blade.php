@extends('layouts.main')

@section('title', 'Taxonomies')

@section('content')    
    <div class="page-wrapper max-w-xl" bis_skin_checked="1">
        <div class="flex mb-6" bis_skin_checked="1">
            <h1 class="flex-1">{{ 'Taxonomies' }}</h1>
            @role('superadmin')
                <a href="{{ route('taxonomies.add') }}" class="btn-primary">Create Taxonomy</a>
            @endrole
        </div>
        <div class="card p-0" endpoints="" bis_skin_checked="1">
            <table data-size="sm" tabindex="0" class="data-table">
                {{-- Head content goes here --}}
                <x-table-head :columns="$columns" />
                <tbody tabindex="0">
                    @foreach ($data as $taxonomies)
                        <tr class="sortable-row outline-none" tabindex="0">
                            <td class="">
                                <a href="{{ route('taxonomies.table', ['handle' => $taxonomies->handle]) }}">
                                    {{ $taxonomies->title }}
                                </a>
                            </td>
                            <td class="rtl:text-left ltr:text-right rtl:pl-8 ltr:pr-8">
                                <div bis_skin_checked="1">
                                    <div handle="terms" values="" class="" bis_skin_checked="1">8</div>
                                </div>
                            </td>
                            <th class="actions-column">
                                <div class="w-8 dropdown-list" bis_skin_checked="1">
                                    @php
                                        $menuItems = [
                                            [
                                                'label' => 'Edit',
                                                'route' => route('taxonomies.edit', ['id' => $taxonomies->id]),
                                            ],
                                            [
                                                'label' => 'Delete',
                                                'route' => route('dashboard'),
                                            ],
                                        ];
                                    @endphp
                                    <x-customDropdown :menuItems="$menuItems"></x-customDropdown>
                                </div>
                            </th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
@section('title', 'Page Title :: Cedar')
