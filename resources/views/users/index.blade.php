@extends('layouts.main')
@section('content')
    <title>Users :: Cedar</title>
    <div class="page-wrapper max-w-full" bis_skin_checked="1">
        <header class="flex items-center mb-6">
            <h1 class="flex-1">
                Users
            </h1>
            <div class="dropdown-list rtl:ml-2 ltr:mr-2" bis_skin_checked="1">
                <div aria-haspopup="true" bis_skin_checked="1"><button aria-label="Open Dropdown"
                        class="rotating-dots-button"><svg width="12" viewBox="0 0 24 24"
                            class="rotating-dots fill-current">
                            <circle cx="3" cy="12" r="3"></circle>
                            <circle cx="12" cy="12" r="3"></circle>
                            <circle cx="21" cy="12" r="3"></circle>
                        </svg></button></div>
                <div class="v-portal" style="display: none;" bis_skin_checked="1"></div>
            </div>
        </header>
        <div bis_skin_checked="1"><!---->
            <div bis_skin_checked="1">
                <div class="card overflow-hidden p-0 relative" bis_skin_checked="1">
                    <div class="flex flex-wrap items-center justify-between px-2 pb-2 text-sm border-b"
                        bis_skin_checked="1">
                        <div class="pt-2 rtl:pl-2 ltr:pr-2" bis_skin_checked="1">
                            <div class="flex flex-wrap items-center" bis_skin_checked="1"><button
                                    class="pill-tab rtl:ml-1 ltr:mr-1 active">All</button><button
                                    class="pill-tab v-popper--has-tooltip"><svg xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 14 14" class="w-3 h-3">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-width="1.5"
                                            d="M7 1v12m6-6H1">
                                        </path>
                                    </svg></button></div><!----><!----><!---->
                        </div><input type="text" placeholder="Search" autofocus="autofocus"
                            class="input-text flex-1 bg-white text-sm focus:border-blue-300 outline-0 h-8 mt-2 min-w-[240px] w-full"
                            data-listener-added_c7ae532c="true">
                        <div class="flex space-x-2 mt-2" bis_skin_checked="1"><button class="btn btn-sm rtl:mr-2 ltr:ml-2"
                                style="display: none;">Reset</button><button class="btn btn-sm rtl:mr-2 ltr:ml-2"
                                style="display: none;">Save</button>
                            <div bis_skin_checked="1"><button
                                    class="btn py-1 px-1 h-8 w-8 flex items-center justify-center v-popper--has-tooltip"><svg
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-4 h-4">
                                        <g fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round">
                                            <path
                                                d="M1.5 23.501a1 1 0 0 1-1-1v-21a1 1 0 0 1 1-1h21a1 1 0 0 1 1 1v21a1 1 0 0 1-1 1z">
                                            </path>
                                            <path
                                                d="M13.414 4.087a2 2 0 1 1-2.828 2.828 2 2 0 0 1 2.828-2.828M14 5.5h6.52m-17 0H10m-.586 5.087a2 2 0 1 1-2.828 2.828 2 2 0 0 1 2.828-2.828M10 12h10.52m-17 0H6m5.414 5.087a2 2 0 1 1-2.828 2.828 2 2 0 0 1 2.828-2.828M12 18.5h8.52m-17 0H8">
                                            </path>
                                        </g>
                                    </svg></button><!----></div>
                        </div>
                    </div>
                    <div class="shadow-inner bg-gray-300" bis_skin_checked="1">
                        <div class="flex items-center flex-wrap px-3 border-b pt-2" bis_skin_checked="1">
                            <div class="" bis_skin_checked="1">
                                <div aria-haspopup="true" bis_skin_checked="1"><button
                                        class="filter-badge filter-badge-control rtl:ml-2 ltr:mr-2 mb-2"> Field <svg
                                            viewBox="0 0 10 6.5" class="w-2 h-2 mx-2">
                                            <path fill="currentColor" d="M9.9 1.4 5 6.4l-5-5L1.4 0 5 3.5 8.5 0l1.4 1.4z">
                                            </path>
                                        </svg></button></div>
                                <div class="v-portal" style="display: none;" bis_skin_checked="1"></div>
                            </div>
                            <div class="" bis_skin_checked="1">
                                <div aria-haspopup="true" bis_skin_checked="1"><button
                                        class="filter-badge filter-badge-control rtl:ml-2 ltr:mr-2 mb-2"> Role <svg
                                            viewBox="0 0 10 6.5" class="w-2 h-2 mx-2">
                                            <path fill="currentColor" d="M9.9 1.4 5 6.4l-5-5L1.4 0 5 3.5 8.5 0l1.4 1.4z">
                                            </path>
                                        </svg></button></div>
                                <div class="v-portal" style="display: none;" bis_skin_checked="1"></div>
                            </div><!---->
                        </div>
                    </div>
                    <div class="p-6 text-center text-gray-500" style="display: none;" bis_skin_checked="1">No results</div>
                    <!---->
                    <div class="overflow-x-auto overflow-y-hidden" bis_skin_checked="1">
                        <table data-size="sm" tabindex="0" class="data-table" allow-column-picker="true"
                            column-preferences-key="users.columns">
                            <thead>
                                <tr>
                                    <th class="checkbox-column"><label for="checkerOfAllBoxes"
                                            class="flex items-center justify-center relative cursor-pointer"><input
                                                type="checkbox" id="checkerOfAllBoxes" class="relative top-0"></label>
                                    </th>
                                    <th class="group current-column sortable-column"><span>Email Address</span><svg
                                            height="8" width="8" viewBox="0 0 10 6.5"
                                            class="rtl:mr-1 ltr:ml-1 opacity-0 group-hover:opacity-100 asc-opacity-100 pointer-events-none">
                                            <path d="M9.9,1.4L5,6.4L0,1.4L1.4,0L5,3.5L8.5,0L9.9,1.4z" fill="currentColor">
                                            </path>
                                        </svg></th>
                                    <th class="group sortable-column"><span>Name</span><svg height="8" width="8"
                                            viewBox="0 0 10 6.5"
                                            class="rtl:mr-1 ltr:ml-1 opacity-0 group-hover:opacity-100 asc">
                                            <path d="M9.9,1.4L5,6.4L0,1.4L1.4,0L5,3.5L8.5,0L9.9,1.4z" fill="currentColor">
                                            </path>
                                        </svg></th>
                                    <th class="group"><span>Roles</span><!----></th>
                                    <th class="group sortable-column"><span>Last Login</span><svg height="8"
                                            width="8" viewBox="0 0 10 6.5"
                                            class="rtl:mr-1 ltr:ml-1 opacity-0 group-hover:opacity-100 asc">
                                            <path d="M9.9,1.4L5,6.4L0,1.4L1.4,0L5,3.5L8.5,0L9.9,1.4z" fill="currentColor">
                                            </path>
                                        </svg></th><!---->
                                    <th class="actions-column"></th>
                                </tr>
                            </thead>
                            <tbody tabindex="0">
                                <tr class="sortable-row outline-none" tabindex="0"><!---->
                                    <th class="checkbox-column"><input type="checkbox"
                                            id="checkbox-14f7ad69-9fb8-4444-8a7a-fb626fc2a194"
                                            value="14f7ad69-9fb8-4444-8a7a-fb626fc2a194"></th>
                                    <td class=""><a
                                            href="https://demo.statamic.com/cp/users/14f7ad69-9fb8-4444-8a7a-fb626fc2a194/edit"
                                            class="flex items-center">
                                            <div class="rounded-full overflow-hidden w-8 h-8 rtl:ml-2 ltr:mr-2 v-popper--has-tooltip"
                                                bis_skin_checked="1"><img src="./Users ‹ Statamic_files/square"
                                                    class="block"><!---->
                                            </div> david.hasselhoff@example.com
                                        </a></td>
                                    <td class="">
                                        <div bis_skin_checked="1">
                                            <div handle="name" values="[object Object]" class="text-index-field"
                                                bis_skin_checked="1">
                                                David Hasselhoff</div>
                                        </div>
                                    </td>
                                    <td class="">
                                        <div class="role-index-field" bis_skin_checked="1"><!----><!---->
                                            <div class="role-index-field-item rtl:ml-1 ltr:mr-1 mb-1.5"
                                                bis_skin_checked="1">Demo Admin
                                            </div>
                                        </div>
                                    </td>
                                    <td class="">
                                        <div bis_skin_checked="1">
                                            <div handle="last_login" values="[object Object]" class=""
                                                bis_skin_checked="1">6 minutes
                                                ago</div>
                                        </div>
                                    </td><!---->
                                    <th class="actions-column">
                                        <div class="dropdown-list" bis_skin_checked="1">
                                            <div aria-haspopup="true" bis_skin_checked="1"><button
                                                    aria-label="Open Dropdown" class="rotating-dots-button"><svg
                                                        width="12" viewBox="0 0 24 24"
                                                        class="rotating-dots fill-current">
                                                        <circle cx="3" cy="12" r="3"></circle>
                                                        <circle cx="12" cy="12" r="3"></circle>
                                                        <circle cx="21" cy="12" r="3"></circle>
                                                    </svg></button></div>
                                            <div class="v-portal" style="display: none;" bis_skin_checked="1"></div>
                                        </div>
                                    </th>
                                </tr>
                                <tr class="sortable-row outline-none" tabindex="0"><!---->
                                    <th class="checkbox-column"><input type="checkbox"
                                            id="checkbox-86c56b85-8c8a-4d59-a3f2-b1a063d0ebbf"
                                            value="86c56b85-8c8a-4d59-a3f2-b1a063d0ebbf"></th>
                                    <td class=""><a
                                            href="https://demo.statamic.com/cp/users/86c56b85-8c8a-4d59-a3f2-b1a063d0ebbf/edit"
                                            class="flex items-center">
                                            <div class="rounded-full overflow-hidden w-8 h-8 rtl:ml-2 ltr:mr-2 v-popper--has-tooltip"
                                                bis_skin_checked="1"><img src="./Users ‹ Statamic_files/square(1)"
                                                    class="block"><!---->
                                            </div> jack@statamic.com
                                        </a></td>
                                    <td class="">
                                        <div bis_skin_checked="1">
                                            <div handle="name" values="[object Object]" class="text-index-field"
                                                bis_skin_checked="1">
                                                Jack McDade</div>
                                        </div>
                                    </td>
                                    <td class="">
                                        <div class="role-index-field" bis_skin_checked="1">
                                            <div class="role-index-field-item rtl:ml-1 ltr:mr-1 mb-1.5"
                                                bis_skin_checked="1">Super Admin
                                            </div>
                                            <div bis_skin_checked="1"></div>
                                        </div>
                                    </td>
                                    <td class="">
                                        <div bis_skin_checked="1">
                                            <div handle="last_login" values="[object Object]" class=""
                                                bis_skin_checked="1">Never</div>
                                        </div>
                                    </td><!---->
                                    <th class="actions-column">
                                        <div class="dropdown-list" bis_skin_checked="1">
                                            <div aria-haspopup="true" bis_skin_checked="1"><button
                                                    aria-label="Open Dropdown" class="rotating-dots-button"><svg
                                                        width="12" viewBox="0 0 24 24"
                                                        class="rotating-dots fill-current">
                                                        <circle cx="3" cy="12" r="3"></circle>
                                                        <circle cx="12" cy="12" r="3"></circle>
                                                        <circle cx="21" cy="12" r="3"></circle>
                                                    </svg></button></div>
                                            <div class="v-portal" style="display: none;" bis_skin_checked="1"></div>
                                        </div>
                                    </th>
                                </tr>
                                <tr class="sortable-row outline-none" tabindex="0"><!---->
                                    <th class="checkbox-column"><input type="checkbox"
                                            id="checkbox-d13559dd-c3bc-4f23-82d8-b55f4bc3bf18"
                                            value="d13559dd-c3bc-4f23-82d8-b55f4bc3bf18"></th>
                                    <td class=""><a
                                            href="https://demo.statamic.com/cp/users/d13559dd-c3bc-4f23-82d8-b55f4bc3bf18/edit"
                                            class="flex items-center">
                                            <div class="rounded-full overflow-hidden w-8 h-8 rtl:ml-2 ltr:mr-2 v-popper--has-tooltip"
                                                bis_skin_checked="1"><img src="./Users ‹ Statamic_files/square(2)"
                                                    class="block"><!---->
                                            </div> kira.radly@example.com
                                        </a></td>
                                    <td class="">
                                        <div bis_skin_checked="1">
                                            <div handle="name" values="[object Object]" class="text-index-field"
                                                bis_skin_checked="1">
                                                Kira Radly</div>
                                        </div>
                                    </td>
                                    <td class="">
                                        <div class="role-index-field" bis_skin_checked="1"><!----><!---->
                                            <div class="role-index-field-item rtl:ml-1 ltr:mr-1 mb-1.5"
                                                bis_skin_checked="1">Demo Admin
                                            </div>
                                        </div>
                                    </td>
                                    <td class="">
                                        <div bis_skin_checked="1">
                                            <div handle="last_login" values="[object Object]" class=""
                                                bis_skin_checked="1">Never</div>
                                        </div>
                                    </td><!---->
                                    <th class="actions-column">
                                        <div class="dropdown-list" bis_skin_checked="1">
                                            <div aria-haspopup="true" bis_skin_checked="1"><button
                                                    aria-label="Open Dropdown" class="rotating-dots-button"><svg
                                                        width="12" viewBox="0 0 24 24"
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
                <div class="w-full flex mt-6" bis_skin_checked="1">
                    <div class="flex flex-1 items-center" bis_skin_checked="1">
                        <div class="text-xs text-gray-700" bis_skin_checked="1"> 1-3 of 3 </div>
                    </div><!---->
                    <div class="flex flex-1" bis_skin_checked="1">
                        <div class="flex-1" bis_skin_checked="1"></div><!---->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
