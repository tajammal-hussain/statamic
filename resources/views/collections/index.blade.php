@extends('layouts.main')
@section('content')
    <title>Collections :: Cedar</title>
    <div class="page-wrapper max-w-xl" bis_skin_checked="1">
        <div class="flex items-center justify-between mb-6" bis_skin_checked="1">
            <h1>Collections</h1>   
            <a href="{{ route('collections.addCollection') }}" class="btn-primary">Create Collection</a> 
        </div>
        <div class="card overflow-hidden p-0" endpoints="[object Object]" bis_skin_checked="1">
            <table data-size="sm" tabindex="0" class="data-table">
                <thead>
                    <tr>
                        <th class="group current-column sortable-column"><span>Title</span><svg height="8"
                                width="8" viewBox="0 0 10 6.5"
                                class="rtl:mr-1 ltr:ml-1 group-hover:opacity-100 asc opacity-100 pointer-events-none">
                                <path d="M9.9,1.4L5,6.4L0,1.4L1.4,0L5,3.5L8.5,0L9.9,1.4z" fill="currentColor"></path>
                            </svg></th>
                        <th class="group sortable-column rtl:text-left ltr:text-right rtl:pl-8 ltr:pr-8">
                            <span>Entries</span><svg height="8" width="8" viewBox="0 0 10 6.5"
                                class="rtl:mr-1 ltr:ml-1 opacity-0 group-hover:opacity-100 asc">
                                <path d="M9.9,1.4L5,6.4L0,1.4L1.4,0L5,3.5L8.5,0L9.9,1.4z" fill="currentColor"></path>
                            </svg>
                        </th>
                    </tr>
                </thead>
                <tbody tabindex="0">
                    <tr class="sortable-row outline-none" tabindex="0"><!----><!---->
                        <td class=""><a href="https://demo.statamic.com/cp/collections/news">News Articles</a></td>
                        <td class="rtl:text-left ltr:text-right rtl:pl-8 ltr:pr-8">
                            <div bis_skin_checked="1">
                                <div handle="entries" values="[object Object]" class="" bis_skin_checked="1">6</div>
                            </div>
                        </td><!---->
                        <th class="actions-column">
                            <div class="relative inline-block text-left">
                                <div>
                                    <button type="button"
                                        class="inline-flex w-full justify-center gap-x-1.5 rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50"
                                        id="menu-button" aria-expanded="true" aria-haspopup="true">
                                        Options
                                        <svg class="-mr-1 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                                            aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="absolute right-0 z-10 mt-2 w-56 origin-top-right divide-y divide-gray-100 rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                                    role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                                    <div class="py-1" role="none">
                                        <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem"
                                            tabindex="-1" id="menu-item-0">Edit</a>
                                        <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem"
                                            tabindex="-1" id="menu-item-1">Duplicate</a>
                                    </div>
                                </div>
                            </div>
                        </th>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
