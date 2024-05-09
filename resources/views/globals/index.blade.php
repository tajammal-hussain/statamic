@extends('layouts.main')

@section('title', 'Globals')

@section('content')
    <div class="page-wrapper max-w-xl" bis_skin_checked="1">
        <div class="flex items-center mb-6" bis_skin_checked="1">
            <h1 class="flex-1">Globals</h1>
            <a href="{{ route('globals.add') }}" class="btn-primary">
                Create Global Set
            </a>
        </div>
        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                {{ session('success') }}
            </div>
        @endif
        @if (session('error'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                {{ session('error') }}
            </div>
        @endif
        <div class="card p-0" bis_skin_checked="1">
            <table data-size="sm" tabindex="0" class="data-table">
                {{-- Head content goes here --}}
                <x-table-head :columns="$columns" />
                <tbody tabindex="0">
                    @foreach ($data as $globals)
                        <tr class="sortable-row outline-none" tabindex="0">
                            <td class="">
                                <a href="{{ route('globals.edit', ['id' => $globals->id]) }}">
                                    {{ $globals->title }}
                                </a>
                            </td>
                            <td class="rtl:text-left ltr:text-right rtl:pl-8 ltr:pr-8">
                                <div bis_skin_checked="1">
                                    <div handle="entries" values="" class="" bis_skin_checked="1">
                                        {{ $globals->handle }}
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div>
                                    @php
                                        $menuItems = [
                                            [
                                                'label' => 'Edit',
                                                'route' => route('globals.edit', ['id' => $globals->id]),
                                            ],
                                            [
                                                'label' => 'Delete',
                                                'route' => route('globals.delete', ['id' => $globals->id]),
                                            ],
                                        ];
                                    @endphp
                                    <x-customDropdown :menuItems="$menuItems" />
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
