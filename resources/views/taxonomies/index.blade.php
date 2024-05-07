@extends('layouts.main')
@section('content')
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <title>{{ 'Taxonomies :: Cedar' }}</title>
    <div class="page-wrapper max-w-xl" bis_skin_checked="1">
        <div class="flex mb-6" bis_skin_checked="1">
            <h1 class="flex-1">{{ 'Taxonomies' }}</h1>
            @role('superadmin')
                <a href="{{ route('taxonomies.add') }}" class="btn-primary">Create Taxonomy</a>
            @endrole

        </div>
        <div class="card p-0" endpoints="[object Object]" bis_skin_checked="1">
            <table data-size="sm" tabindex="0" class="data-table">
                <x-table-head :firstcol="$firstCol" :secondcol="$secondCol" />
                <thead>

                </thead>
                <tbody tabindex="0">
                    @foreach ($data as $taxonomies)
                        <tr class="sortable-row outline-none" tabindex="0"><!----><!---->
                            <td class=""><a
                                    href="https://demo.statamic.com/cp/taxonomies/tags">{{ $taxonomies->handle }}</a></td>
                            <td class="rtl:text-left ltr:text-right rtl:pl-8 ltr:pr-8">
                                <div bis_skin_checked="1">
                                    <div handle="terms" values="[object Object]" class="" bis_skin_checked="1">8</div>
                                </div>
                            </td><!---->
                            <th class="actions-column">
                                <div class="w-8 dropdown-list" bis_skin_checked="1">
                                    @php
                                        $menuItems = [
                                            [
                                                'label' => 'Edit',
                                                'route' => route('navigations.edit'),
                                            ],
                                            [
                                                'label' => 'Delete',
                                                'route' => route('dashboard'),
                                            ],
                                            // Add more menu items as needed
                                        ];
                                    @endphp
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
