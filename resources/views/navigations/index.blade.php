@extends('layouts.main')
@section('content')
    <title>{{ 'Navigation :: Cedar' }}</title>
    <div class="page-wrapper max-w-xl">
        <header class="flex items-center justify-between mb-6">
            <h1>{{ 'Navigation' }}</h1>
            @role('superadmin')
                <a href="{{ route('navigations.add') }}" class="btn-primary">Create Navigation</a>
            @endrole
        </header>
        <div class="card p-0">
            <table data-size="sm" tabindex="0" class="data-table">
                <x-table-head :firstcol="$firstCol" :secondcol="$secondCol" />
                <tbody tabindex="0">
                    @foreach ($data as $navigation)
                        <tr class="sortable-row outline-none" tabindex="0">
                            <td>
                                <a href="javascript:void(0);" class="flex items-center">{{ $navigation->handle }}</a>
                            </td>
                            <td class="rtl:text-left ltr:text-right rtl:pl-8 ltr:pr-8">
                                <div bis_skin_checked="1">
                                    <div handle="entries" values="" class="" bis_skin_checked="1">0</div>
                                </div>
                            </td>
                            <th class="actions-column">
                                <div class="w-8 dropdown-list">
                                    <div aria-haspopup="true">
                                        @php
                                            $menuItems = [
                                                [
                                                    'label' => 'Edit',
                                                    'route' => route('navigations.edit', ['id' => $navigation->id]),
                                                ],
                                                ['label' => 'Delete', 'route' => route('dashboard')],
                                                // Add more menu items as needed
                                            ];
                                        @endphp
                                        <x-customDropdown :menuItems="$menuItems" />
                                    </div>
                                    <div class="v-portal" style="display: none;"></div>
                                </div>
                            </th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
