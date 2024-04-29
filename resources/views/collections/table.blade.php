@extends('layouts.main')
@section('content')
    <title>Collections->News :: Cedar</title>
    <div class="page-wrapper" bis_skin_checked="1" style="margin-right:0px; max-width:70rem;">
        <div bis_skin_checked="1">
            <header class="mb-6">
                <div class="breadcrumb flex" bis_skin_checked="1"><a href="https://demo.statamic.com/cp/collections"
                        class="flex-initial flex p-2 -m-2 items-center text-xs text-gray-700 hover:text-gray-900"><svg
                            viewBox="0 0 24 24" class="align-middle h-6 w-4 rotate-180">
                            <path fill="currentColor" fill-rule="evenodd"
                                d="m10.414 7.05 4.95 4.95-4.95 4.95L9 15.534 12.536 12 9 8.464z"></path>
                        </svg><span>Collections</span></a></div>
                <div class="flex items-center" bis_skin_checked="1">
                    <h1 class="flex-1">News Articles</h1>
                    <div class="dropdown-list rtl:ml-2 ltr:mr-2" bis_skin_checked="1">
                        <div aria-haspopup="true" bis_skin_checked="1">
                            <button aria-label="Open Dropdown"
                                class="rotating-dots-button">
                                <svg width="12" viewBox="0 0 24 24"
                                    class="rotating-dots fill-current">
                                    <circle cx="3" cy="12" r="3"></circle>
                                    <circle cx="12" cy="12" r="3"></circle>
                                    <circle cx="21" cy="12" r="3"></circle>
                                </svg>
                            </button></div>
                        <div class="v-portal" style="display: none;" bis_skin_checked="1"></div>
                    </div>
                    <!----><!----><!---->
                    <div class="dropdown-list inline-block" bis_skin_checked="1">
                        <div aria-haspopup="true" bis_skin_checked="1">
                            <button class="btn-primary"> Create Entry
                                <!----></button></div>
                        <div class="v-portal" style="display: none;" bis_skin_checked="1"></div>
                    </div>
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
                                data-listener-added_b1409656="true">
                            <div class="flex space-x-2 mt-2" bis_skin_checked="1"><button
                                    class="btn btn-sm rtl:mr-2 ltr:ml-2" style="display: none;">Reset</button><button
                                    class="btn btn-sm rtl:mr-2 ltr:ml-2" style="display: none;">Save</button>
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
                        <div bis_skin_checked="1">
                            <div class="shadow-inner bg-gray-300" bis_skin_checked="1">
                                <div class="flex items-center flex-wrap px-3 border-b pt-2" bis_skin_checked="1">
                                    <div class="" bis_skin_checked="1">
                                        <div aria-haspopup="true" bis_skin_checked="1"><button
                                                class="filter-badge filter-badge-control rtl:ml-2 ltr:mr-2 mb-2"> Field <svg
                                                    viewBox="0 0 10 6.5" class="w-2 h-2 mx-2">
                                                    <path fill="currentColor"
                                                        d="M9.9 1.4 5 6.4l-5-5L1.4 0 5 3.5 8.5 0l1.4 1.4z"></path>
                                                </svg></button></div>
                                        <div class="v-portal" style="display: none;" bis_skin_checked="1"></div>
                                    </div>
                                    <div class="" bis_skin_checked="1">
                                        <div aria-haspopup="true" bis_skin_checked="1"><button
                                                class="filter-badge filter-badge-control rtl:ml-2 ltr:mr-2 mb-2"> Status
                                                <svg viewBox="0 0 10 6.5" class="w-2 h-2 mx-2">
                                                    <path fill="currentColor"
                                                        d="M9.9 1.4 5 6.4l-5-5L1.4 0 5 3.5 8.5 0l1.4 1.4z"></path>
                                                </svg></button></div>
                                        <div class="v-portal" style="display: none;" bis_skin_checked="1"></div>
                                    </div><!---->
                                </div>
                            </div>
                        </div>
                        <div class="p-6 text-center text-gray-500" style="display: none;" bis_skin_checked="1">No results
                        </div><!---->
                        <div class="overflow-x-auto overflow-y-hidden" bis_skin_checked="1">
                            <table data-size="sm" tabindex="0" class="data-table">
                                <thead>
                                    <tr>
                                        <th class="checkbox-column"><label for="checkerOfAllBoxes"
                                                class="flex items-center justify-center relative cursor-pointer"><input
                                                    type="checkbox" id="checkerOfAllBoxes"
                                                    class="relative top-0"></label></th>
                                        <th class="group sortable-column"><span>Title</span><svg height="8"
                                                width="8" viewBox="0 0 10 6.5"
                                                class="rtl:mr-1 ltr:ml-1 opacity-0 group-hover:opacity-100 desc">
                                                <path d="M9.9,1.4L5,6.4L0,1.4L1.4,0L5,3.5L8.5,0L9.9,1.4z"
                                                    fill="currentColor"></path>
                                            </svg></th>
                                        <th class="group sortable-column"><span>Author</span><svg height="8"
                                                width="8" viewBox="0 0 10 6.5"
                                                class="rtl:mr-1 ltr:ml-1 opacity-0 group-hover:opacity-100 desc">
                                                <path d="M9.9,1.4L5,6.4L0,1.4L1.4,0L5,3.5L8.5,0L9.9,1.4z"
                                                    fill="currentColor"></path>
                                            </svg></th>
                                        <th class="group current-column sortable-column"><span>Date</span><svg
                                                height="8" width="8" viewBox="0 0 10 6.5"
                                                class="rtl:mr-1 ltr:ml-1 opacity-0 group-hover:opacity-100 desc opacity-100 pointer-events-none">
                                                <path d="M9.9,1.4L5,6.4L0,1.4L1.4,0L5,3.5L8.5,0L9.9,1.4z"
                                                    fill="currentColor"></path>
                                            </svg></th><!---->
                                        <th class="actions-column"></th>
                                    </tr>
                                </thead>
                                <tbody tabindex="0">
                                    <tr class="sortable-row outline-none" tabindex="0"><!---->
                                        <th class="checkbox-column"><input type="checkbox"
                                                id="checkbox-8b56b437-c578-4d14-abe8-5c3c3906204f"
                                                value="8b56b437-c578-4d14-abe8-5c3c3906204f"></th>
                                        <td class=""><a
                                                href="https://demo.statamic.com/cp/collections/news/entries/8b56b437-c578-4d14-abe8-5c3c3906204f"
                                                class="title-index-field inline-flex items-center"><span
                                                    class="little-dot rtl:ml-2 ltr:mr-2 bg-green-600 v-popper--has-tooltip"></span><span>FluxTech™
                                                    On Boats?</span></a></td>
                                        <td class="">
                                            <div bis_skin_checked="1">
                                                <div class="relationship-index-field" bis_skin_checked="1">
                                                    <div class="flex flex-wrap" bis_skin_checked="1">
                                                        <div class="relationship-index-field-item h-5"
                                                            bis_skin_checked="1">
                                                            <div class="flex items-center shrink" bis_skin_checked="1">
                                                                <!----><a
                                                                    href="https://demo.statamic.com/cp/users/d13559dd-c3bc-4f23-82d8-b55f4bc3bf18/edit"
                                                                    title="Kira Radly">Kira Radly</a>
                                                            </div>
                                                        </div>
                                                    </div><!----><!---->
                                                </div>
                                            </div>
                                        </td>
                                        <td class="">
                                            <div bis_skin_checked="1">
                                                <div handle="date" values="[object Object]" class="date-index-field"
                                                    bis_skin_checked="1">
                                                    2022-11-11</div>
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
                                                id="checkbox-9ea4dfb5-e08f-4629-937b-2f35e30ea6a4"
                                                value="9ea4dfb5-e08f-4629-937b-2f35e30ea6a4"></th>
                                        <td class=""><a
                                                href="https://demo.statamic.com/cp/collections/news/entries/9ea4dfb5-e08f-4629-937b-2f35e30ea6a4"
                                                class="title-index-field inline-flex items-center"><span
                                                    class="little-dot rtl:ml-2 ltr:mr-2 bg-green-600 v-popper--has-tooltip"></span><span>1.21
                                                    Jigawatts</span></a></td>
                                        <td class="">
                                            <div bis_skin_checked="1">
                                                <div class="relationship-index-field" bis_skin_checked="1">
                                                    <div class="flex flex-wrap" bis_skin_checked="1">
                                                        <div class="relationship-index-field-item h-5"
                                                            bis_skin_checked="1">
                                                            <div class="flex items-center shrink" bis_skin_checked="1">
                                                                <!----><a
                                                                    href="https://demo.statamic.com/cp/users/14f7ad69-9fb8-4444-8a7a-fb626fc2a194/edit"
                                                                    title="David Hasselhoff">David Hasselhoff</a>
                                                            </div>
                                                        </div>
                                                    </div><!----><!---->
                                                </div>
                                            </div>
                                        </td>
                                        <td class="">
                                            <div bis_skin_checked="1">
                                                <div handle="date" values="[object Object]" class="date-index-field"
                                                    bis_skin_checked="1">
                                                    2022-11-11</div>
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
                                                id="checkbox-a91ff523-7748-4883-841c-bd0e46a8a571"
                                                value="a91ff523-7748-4883-841c-bd0e46a8a571"></th>
                                        <td class=""><a
                                                href="https://demo.statamic.com/cp/collections/news/entries/a91ff523-7748-4883-841c-bd0e46a8a571"
                                                class="title-index-field inline-flex items-center"><span
                                                    class="little-dot rtl:ml-2 ltr:mr-2 bg-green-600 v-popper--has-tooltip"></span><span>FluxTech™
                                                    opens up FTL travel possibilities</span></a></td>
                                        <td class="">
                                            <div bis_skin_checked="1">
                                                <div class="relationship-index-field" bis_skin_checked="1">
                                                    <div class="flex flex-wrap" bis_skin_checked="1">
                                                        <div class="relationship-index-field-item h-5"
                                                            bis_skin_checked="1">
                                                            <div class="flex items-center shrink" bis_skin_checked="1">
                                                                <!----><a
                                                                    href="https://demo.statamic.com/cp/users/d13559dd-c3bc-4f23-82d8-b55f4bc3bf18/edit"
                                                                    title="Kira Radly">Kira Radly</a>
                                                            </div>
                                                        </div>
                                                    </div><!----><!---->
                                                </div>
                                            </div>
                                        </td>
                                        <td class="">
                                            <div bis_skin_checked="1">
                                                <div handle="date" values="[object Object]" class="date-index-field"
                                                    bis_skin_checked="1">
                                                    2022-09-19</div>
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
                                                id="checkbox-a5fb1943-fa4b-4449-b5ab-ecaff2832c9f"
                                                value="a5fb1943-fa4b-4449-b5ab-ecaff2832c9f"></th>
                                        <td class=""><a
                                                href="https://demo.statamic.com/cp/collections/news/entries/a5fb1943-fa4b-4449-b5ab-ecaff2832c9f"
                                                class="title-index-field inline-flex items-center"><span
                                                    class="little-dot rtl:ml-2 ltr:mr-2 bg-green-600 v-popper--has-tooltip"></span><span>10
                                                    things we decided at our company retreat</span></a></td>
                                        <td class="">
                                            <div bis_skin_checked="1">
                                                <div class="relationship-index-field" bis_skin_checked="1">
                                                    <div class="flex flex-wrap" bis_skin_checked="1">
                                                        <div class="relationship-index-field-item h-5"
                                                            bis_skin_checked="1">
                                                            <div class="flex items-center shrink" bis_skin_checked="1">
                                                                <!----><a
                                                                    href="https://demo.statamic.com/cp/users/d13559dd-c3bc-4f23-82d8-b55f4bc3bf18/edit"
                                                                    title="Kira Radly">Kira Radly</a>
                                                            </div>
                                                        </div>
                                                    </div><!----><!---->
                                                </div>
                                            </div>
                                        </td>
                                        <td class="">
                                            <div bis_skin_checked="1">
                                                <div handle="date" values="[object Object]" class="date-index-field"
                                                    bis_skin_checked="1">
                                                    2022-09-16</div>
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
                                                id="checkbox-02ec08a8-fe9c-4d9c-bc52-a4d116e2f3ac"
                                                value="02ec08a8-fe9c-4d9c-bc52-a4d116e2f3ac"></th>
                                        <td class=""><a
                                                href="https://demo.statamic.com/cp/collections/news/entries/02ec08a8-fe9c-4d9c-bc52-a4d116e2f3ac"
                                                class="title-index-field inline-flex items-center"><span
                                                    class="little-dot rtl:ml-2 ltr:mr-2 bg-green-600 v-popper--has-tooltip"></span><span>Cost-reducing
                                                    advances in FluxTech™</span></a></td>
                                        <td class="">
                                            <div bis_skin_checked="1">
                                                <div class="relationship-index-field" bis_skin_checked="1">
                                                    <div class="flex flex-wrap" bis_skin_checked="1">
                                                        <div class="relationship-index-field-item h-5"
                                                            bis_skin_checked="1">
                                                            <div class="flex items-center shrink" bis_skin_checked="1">
                                                                <!----><a
                                                                    href="https://demo.statamic.com/cp/users/d13559dd-c3bc-4f23-82d8-b55f4bc3bf18/edit"
                                                                    title="Kira Radly">Kira Radly</a>
                                                            </div>
                                                        </div>
                                                    </div><!----><!---->
                                                </div>
                                            </div>
                                        </td>
                                        <td class="">
                                            <div bis_skin_checked="1">
                                                <div handle="date" values="[object Object]" class="date-index-field"
                                                    bis_skin_checked="1">
                                                    2022-09-07</div>
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
                                                id="checkbox-32cf403f-e82a-491b-a2a6-285e8290367e"
                                                value="32cf403f-e82a-491b-a2a6-285e8290367e"></th>
                                        <td class=""><a
                                                href="https://demo.statamic.com/cp/collections/news/entries/32cf403f-e82a-491b-a2a6-285e8290367e"
                                                class="title-index-field inline-flex items-center"><span
                                                    class="little-dot rtl:ml-2 ltr:mr-2 bg-green-600 v-popper--has-tooltip"></span><span>Kira
                                                    Radly joins the team as CEO</span></a></td>
                                        <td class="">
                                            <div bis_skin_checked="1">
                                                <div class="relationship-index-field" bis_skin_checked="1">
                                                    <div class="flex flex-wrap" bis_skin_checked="1">
                                                        <div class="relationship-index-field-item h-5"
                                                            bis_skin_checked="1">
                                                            <div class="flex items-center shrink" bis_skin_checked="1">
                                                                <!----><a
                                                                    href="https://demo.statamic.com/cp/users/14f7ad69-9fb8-4444-8a7a-fb626fc2a194/edit"
                                                                    title="David Hasselhoff">David Hasselhoff</a>
                                                            </div>
                                                        </div>
                                                    </div><!----><!---->
                                                </div>
                                            </div>
                                        </td>
                                        <td class="">
                                            <div bis_skin_checked="1">
                                                <div handle="date" values="[object Object]" class="date-index-field"
                                                    bis_skin_checked="1">
                                                    2022-08-17</div>
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
                            <div class="text-xs text-gray-700" bis_skin_checked="1"> 1-6 of 6 </div>
                        </div><!---->
                        <div class="flex flex-1" bis_skin_checked="1">
                            <div class="flex-1" bis_skin_checked="1"></div><!---->
                        </div>
                    </div>
                </div>
            </div><!----><!----><!---->
        </div>
    </div>
@endsection
