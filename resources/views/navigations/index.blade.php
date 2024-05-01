
@extends('layouts.main')
@section('content')
    <title>Navigation :: Cedar</title>
    <div class="page-wrapper max-w-xl" bis_skin_checked="1">
        <header class="flex items-center justify-between mb-6">
            <h1>Navigation</h1> <a href="https://demo.statamic.com/cp/navigation/create" class="btn-primary">Create
                Navigation</a>
        </header>
        <div class="card p-0" bis_skin_checked="1">
            <table data-size="sm" tabindex="0" class="data-table"><!---->
                <tbody tabindex="0">
                    <tr class="sortable-row outline-none" tabindex="0"><!----><!---->
                        <td class=""><a href="https://demo.statamic.com/cp/navigation/footer"
                                class="flex items-center">Footer</a></td><!---->
                        <th class="actions-column">
                            <div class="w-8 dropdown-list" bis_skin_checked="1">
                                <div aria-haspopup="true" bis_skin_checked="1">
                                            <x-customDropdown :menuItems="$menuItems"></x-customDropdown>
                                        </div>
                                <div class="v-portal" style="display: none;" bis_skin_checked="1"></div>
                            </div>
                        </th>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
