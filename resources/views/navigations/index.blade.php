@php
    $menuItems = [
          ['label' => 'Edit', 'route' => route('navigations.edit')],
          ['label' => 'Delete', 'route' => route('dashboard')],
          // Add more menu items as needed
      ];
@endphp@extends('layouts.main')
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
                        <td><a href="https://demo.statamic.com/cp/navigation/footer" class="flex items-center">{{ $navigation->handle }}</a></td>
                        <th class="actions-column">
                            <div class="w-8 dropdown-list">
                                <div aria-haspopup="true">
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
