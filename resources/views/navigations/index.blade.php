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
        <div class="flex justify-center text-center mt-16" bis_skin_checked="1">
            <div class="bg-white rounded-full px-6 py-2 shadow-sm text-sm text-gray-700" bis_skin_checked="1">Learn more
                about <a href="https://statamic.dev/navigation" target="_blank" rel="noopener noopener"
                    class="text-blue hover:text-blue-700">Navigation</a></div>
        </div>
    </div>
@endsection
