@extends('layouts.main')
@section('content')
    <title>Globals :: Cedar</title>
    <div class="page-wrapper max-w-xl" bis_skin_checked="1">
        <div class="flex items-center mb-6" bis_skin_checked="1">
            <h1 class="flex-1">Globals</h1> <a href="https://demo.statamic.com/cp/globals/create" class="btn-primary">Create
                Global Set</a>
        </div>
        <div class="card p-0" bis_skin_checked="1">
            <table data-size="sm" tabindex="0" class="data-table">
                <thead>
                    <tr><!---->
                        <th class="group current-column"><span>Title</span><!----></th>
                        <th class="group"><span>Handle</span><!----></th><!---->
                        <th class="actions-column"></th>
                    </tr>
                </thead>
                <tbody tabindex="0">
                    <tr class="sortable-row outline-none" tabindex="0"><!----><!---->
                        <td class=""><a href="https://demo.statamic.com/cp/globals/company">Company</a></td>
                        <td class=""><span class="font-mono text-2xs">company</span></td><!---->
                        <th class="actions-column">
                            <div class="dropdown-list" bis_skin_checked="1">
                                <div aria-haspopup="true" bis_skin_checked="1"><button aria-label="Open Dropdown"
                                        class="rotating-dots-button"><svg width="12" viewBox="0 0 24 24"
                                            class="rotating-dots fill-current">
                                            <circle cx="3" cy="12" r="3"></circle>
                                            <circle cx="12" cy="12" r="3"></circle>
                                            <circle cx="21" cy="12" r="3"></circle>
                                        </svg></button></div>
                                <div class="v-portal" style="display: none;" bis_skin_checked="1"></div>
                            </div>
                        </th>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
