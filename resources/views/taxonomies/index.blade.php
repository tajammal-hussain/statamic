@extends('layouts.main')
@section('content')
    <title>Taxonomies :: Cedar</title>
    <div class="page-wrapper max-w-xl" bis_skin_checked="1">
        <div class="flex mb-6" bis_skin_checked="1">
            <h1 class="flex-1">Taxonomies</h1> <a href="https://demo.statamic.com/cp/taxonomies/create"
                class="btn-primary">Create Taxonomy</a>
        </div>
        <div class="card p-0" endpoints="[object Object]" bis_skin_checked="1">
            <table data-size="sm" tabindex="0" class="data-table">
                <thead>
                    <tr><!---->
                        <th class="group current-column sortable-column"><span>Title</span><svg height="8"
                                width="8" viewBox="0 0 10 6.5"
                                class="rtl:mr-1 ltr:ml-1 opacity-0 group-hover:opacity-100 asc opacity-100 pointer-events-none">
                                <path d="M9.9,1.4L5,6.4L0,1.4L1.4,0L5,3.5L8.5,0L9.9,1.4z" fill="currentColor"></path>
                            </svg></th>
                        <th class="group sortable-column rtl:text-left ltr:text-right rtl:pl-8 ltr:pr-8">
                            <span>Terms</span><svg height="8" width="8" viewBox="0 0 10 6.5"
                                class="rtl:mr-1 ltr:ml-1 opacity-0 group-hover:opacity-100 asc">
                                <path d="M9.9,1.4L5,6.4L0,1.4L1.4,0L5,3.5L8.5,0L9.9,1.4z" fill="currentColor"></path>
                            </svg>
                        </th><!---->
                        <th class="actions-column"></th>
                    </tr>
                </thead>
                <tbody tabindex="0">
                    <tr class="sortable-row outline-none" tabindex="0"><!----><!---->
                        <td class=""><a href="https://demo.statamic.com/cp/taxonomies/tags">Tags</a></td>
                        <td class="rtl:text-left ltr:text-right rtl:pl-8 ltr:pr-8">
                            <div bis_skin_checked="1">
                                <div handle="terms" values="[object Object]" class="" bis_skin_checked="1">8</div>
                            </div>
                        </td><!---->
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
                about <a href="https://statamic.dev/taxonomies" target="_blank" rel="noopener noopener"
                    class="text-blue hover:text-blue-700">Taxonomies</a></div>
        </div>
    </div>
@endsection
