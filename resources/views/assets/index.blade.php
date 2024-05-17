@extends('layouts.main')

@section('title', 'Assets')

@section('content')
    <div class="page-wrapper max-w-full" bis_skin_checked="1">
        <div class="asset-manager" bis_skin_checked="1">
            <div class="flex items-center mb-6" bis_skin_checked="1">
                <h1 class="flex-1">Assets</h1>
            </div>
            <div class="min-h-screen" bis_skin_checked="1">
                <div bis_skin_checked="1">
                    <div class="" bis_skin_checked="1"><input type="file" multiple="multiple" class="hidden">
                        <div class="min-h-screen" bis_skin_checked="1">
                            <div class="drag-notification" style="display: none;" bis_skin_checked="1"><svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-12 w-12 m-4">
                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="1.5"
                                        d="M.752 2.251a1.5 1.5 0 0 1 1.5-1.5m0 22.5a1.5 1.5 0 0 1-1.5-1.5m22.5 0a1.5 1.5 0 0 1-1.5 1.5m0-22.5a1.5 1.5 0 0 1 1.5 1.5m0 15.75v-1.5m0-3.75v-1.5m0-3.75v-1.5m-22.5 12v-1.5m0-3.75v-1.5m0-3.75v-1.5m5.25-5.25h1.5m3.75 0h1.5m3.75 0h1.5m-12 22.5h1.5m3.75 0h1.5m3.75 0h1.5m-6-5.25v-12m4.5 4.5-4.5-4.5-4.5 4.5">
                                    </path>
                                </svg><span>Drop File to Upload</span></div><!---->
                            <div class="mode-table" bis_skin_checked="1">
                                <div class="card overflow-hidden p-0" bis_skin_checked="1">
                                    <div class="relative w-full" bis_skin_checked="1">
                                        <div class="flex items-center justify-between p-2 text-sm" bis_skin_checked="1">
                                            <input type="text" placeholder="Search..." autofocus="autofocus"
                                                class="input-text flex-1 bg-white text-sm focus:border-blue-300 outline-0 h-8"
                                                data-listener-added_d1ab792c="true"><button
                                                class="btn btn-sm rtl:mr-3 ltr:ml-3"><svg xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 24 24" class="h-4 w-4 rtl:ml-2 ltr:mr-2">
                                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="1.5"
                                                        d="M8.25 18.75H2.447M20.25 8.25v-3a1.5 1.5 0 0 0-1.5-1.5H8.25v-1.5a1.5 1.5 0 0 0-1.5-1.5h-4.5a1.5 1.5 0 0 0-1.5 1.5v14.8a1.7 1.7 0 0 0 3.336.438l2.351-8.154A1.5 1.5 0 0 1 7.879 8.25H21.75a1.5 1.5 0 0 1 1.45 1.886">
                                                    </path>
                                                    <circle cx="17.25" cy="17.25" r="6" fill="none"
                                                        stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="1.5"></circle>
                                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="1.5"
                                                        d="M17.25 14.25v6m-3-3h6"></path>
                                                </svg><span>Create Folder</span></button><button
                                                class="btn btn-sm rtl:mr-3 ltr:ml-3"><svg xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 24 24" class="h-4 w-4 rtl:ml-2 ltr:mr-2 text-current">
                                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="1.5"
                                                        d="M.752 2.251a1.5 1.5 0 0 1 1.5-1.5m0 22.5a1.5 1.5 0 0 1-1.5-1.5m22.5 0a1.5 1.5 0 0 1-1.5 1.5m0-22.5a1.5 1.5 0 0 1 1.5 1.5m0 15.75v-1.5m0-3.75v-1.5m0-3.75v-1.5m-22.5 12v-1.5m0-3.75v-1.5m0-3.75v-1.5m5.25-5.25h1.5m3.75 0h1.5m3.75 0h1.5m-12 22.5h1.5m3.75 0h1.5m3.75 0h1.5m-6-5.25v-12m4.5 4.5-4.5-4.5-4.5 4.5">
                                                    </path>
                                                </svg><span>Upload</span></button>
                                            <div class="btn-group rtl:mr-3 ltr:ml-3" bis_skin_checked="1"><button
                                                    class="btn btn-sm"><svg xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 24 24" class="h-4 w-4">
                                                        <g fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="1.5">
                                                            <rect width="9.75" height="9.75" x=".75" y="13.5"
                                                                rx="1" ry="1"></rect>
                                                            <path d="M.75 19.5h9.75"></path>
                                                            <rect width="9.75" height="9.75" x=".75" y=".75"
                                                                rx="1" ry="1"></rect>
                                                            <path d="M.75 6.75h9.75"></path>
                                                            <rect width="9.75" height="9.75" x="13.5" y=".75"
                                                                rx="1" ry="1"></rect>
                                                            <path d="M13.5 6.75h9.75"></path>
                                                            <rect width="9.75" height="9.75" x="13.5" y="13.5"
                                                                rx="1" ry="1"></rect>
                                                            <path d="M13.5 19.5h9.75"></path>
                                                        </g>
                                                    </svg></button><button class="btn btn-sm active"><svg
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        class="h-4 w-4">
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="1.5"
                                                            d="M8.25 3.748h15m-15 9h15m-15 9h15"></path>
                                                        <rect width="4.5" height="4.5" x=".75" y=".748"
                                                            fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="1.5" rx=".75"
                                                            ry=".75">
                                                        </rect>
                                                        <rect width="4.5" height="4.5" x=".75" y="9.748"
                                                            fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="1.5" rx=".75"
                                                            ry=".75">
                                                        </rect>
                                                        <rect width="4.5" height="4.5" x=".75" y="18.748"
                                                            fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="1.5" rx=".75"
                                                            ry=".75">
                                                        </rect>
                                                    </svg></button></div>
                                        </div>
                                        <div class="px-4 py-2 flex flex-wrap text-sm bg-gray-200 border-t border-b shadow-inner"
                                            bis_skin_checked="1"><a class="group flex items-center"><!----><svg
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    class="rtl:ml-2 ltr:mr-2 h-5 w-5 text-blue-400 group-hover:text-blue-600">
                                                    <path fill="currentColor"
                                                        d="M24 6a1.5 1.5 0 0 0-1.5-1.5H11.74a.5.5 0 0 1-.45-.28l-.95-1.89A1.5 1.5 0 0 0 9 1.5H1.5A1.5 1.5 0 0 0 0 3v18a1.5 1.5 0 0 0 1.5 1.5h21A1.5 1.5 0 0 0 24 21Zm-7.52 7.28a.35.35 0 0 1-.32.22h-.91a.25.25 0 0 0-.25.25V17a.5.5 0 0 1-.5.5H9a.5.5 0 0 1-.5-.5v-3.25a.25.25 0 0 0-.25-.25h-.91a.35.35 0 0 1-.34-.22.33.33 0 0 1 .1-.37l4.41-3.83a.33.33 0 0 1 .44 0l4.41 3.83a.33.33 0 0 1 .12.37Z">
                                                    </path>
                                                </svg><!----></a></div><!---->
                                    </div><!---->
                                    <div class="overflow-x-auto overflow-y-hidden" bis_skin_checked="1">
                                        <table data-size="sm" tabindex="0" class="data-table">
                                            <thead>
                                                <tr>
                                                    <th class="checkbox-column"><label for="checkerOfAllBoxes"
                                                            class="flex items-center justify-center relative cursor-pointer"><input
                                                                type="checkbox" id="checkerOfAllBoxes"
                                                                class="relative top-0"></label></th>
                                                    <th class="group current-column sortable-column"><span>File</span><svg
                                                            height="8" width="8" viewBox="0 0 10 6.5"
                                                            class="rtl:mr-1 ltr:ml-1 opacity-0 group-hover:opacity-100 asc opacity-100 pointer-events-none">
                                                            <path d="M9.9,1.4L5,6.4L0,1.4L1.4,0L5,3.5L8.5,0L9.9,1.4z"
                                                                fill="currentColor">
                                                            </path>
                                                        </svg></th>
                                                    <th class="group sortable-column"><span>Size</span><svg height="8"
                                                            width="8" viewBox="0 0 10 6.5"
                                                            class="rtl:mr-1 ltr:ml-1 opacity-0 group-hover:opacity-100 asc">
                                                            <path d="M9.9,1.4L5,6.4L0,1.4L1.4,0L5,3.5L8.5,0L9.9,1.4z"
                                                                fill="currentColor">
                                                            </path>
                                                        </svg></th>
                                                    <th class="group sortable-column"><span>Last Modified</span><svg
                                                            height="8" width="8" viewBox="0 0 10 6.5"
                                                            class="rtl:mr-1 ltr:ml-1 opacity-0 group-hover:opacity-100 asc">
                                                            <path d="M9.9,1.4L5,6.4L0,1.4L1.4,0L5,3.5L8.5,0L9.9,1.4z"
                                                                fill="currentColor">
                                                            </path>
                                                        </svg></th><!---->
                                                    <th class="actions-column"></th>
                                                </tr>
                                            </thead>
                                            <tbody tabindex="0">
                                                <tr class="sortable-row outline-none" tabindex="0"><!---->
                                                    <th class="checkbox-column"><input type="checkbox"
                                                            id="checkbox-assets::alec-favale-mzjobxoxbt0-unsplash.jpg"
                                                            value="assets::alec-favale-mzjobxoxbt0-unsplash.jpg"></th>
                                                    <td class="">
                                                        <div class="flex items-center w-fit-content group"
                                                            bis_skin_checked="1">
                                                            <div class="w-8 h-8 rtl:ml-2 ltr:mr-2 cursor-pointer"
                                                                bis_skin_checked="1"><img
                                                                    src="./Assets ‹ Assets ‹ Statamic_files/small"
                                                                    loading="lazy"
                                                                    class="asset-thumbnail max-h-8 max-w-full mx-auto rounded w-8 h-8 object-cover">
                                                            </div><label
                                                                for="checkbox-assets::alec-favale-mzjobxoxbt0-unsplash.jpg"
                                                                class="cursor-pointer select-none group-hover:text-blue normal-nums">
                                                                alec-favale-mzjobxoxbt0-unsplash.jpg </label>
                                                        </div>
                                                    </td>
                                                    <td class="">
                                                        <div bis_skin_checked="1">
                                                            <div handle="size" values="[object Object]" class=""
                                                                bis_skin_checked="1">2 MB</div>
                                                        </div>
                                                    </td>
                                                    <td class="">
                                                        <div bis_skin_checked="1">
                                                            <div handle="last_modified" values="[object Object]"
                                                                class="" bis_skin_checked="1">1
                                                                year ago</div>
                                                        </div>
                                                    </td><!---->
                                                    <th class="actions-column">
                                                        <div class="dropdown-list" bis_skin_checked="1">
                                                            <div aria-haspopup="true" bis_skin_checked="1"><button
                                                                    aria-label="Open Dropdown"
                                                                    class="rotating-dots-button"><svg width="12"
                                                                        viewBox="0 0 24 24"
                                                                        class="rotating-dots fill-current">
                                                                        <circle cx="3" cy="12" r="3">
                                                                        </circle>
                                                                        <circle cx="12" cy="12" r="3">
                                                                        </circle>
                                                                        <circle cx="21" cy="12" r="3">
                                                                        </circle>
                                                                    </svg></button></div>
                                                            <div class="v-portal" style="display: none;"
                                                                bis_skin_checked="1"></div>
                                                        </div>
                                                    </th>
                                                </tr>
                                                <tr class="sortable-row outline-none" tabindex="0"><!---->
                                                    <th class="checkbox-column"><input type="checkbox"
                                                            id="checkbox-assets::bill-jelen-nvwyn8gamck-unsplash.jpg"
                                                            value="assets::bill-jelen-nvwyn8gamck-unsplash.jpg"></th>
                                                    <td class="">
                                                        <div class="flex items-center w-fit-content group"
                                                            bis_skin_checked="1">
                                                            <div class="w-8 h-8 rtl:ml-2 ltr:mr-2 cursor-pointer"
                                                                bis_skin_checked="1"><img
                                                                    src="./Assets ‹ Assets ‹ Statamic_files/small(1)"
                                                                    loading="lazy"
                                                                    class="asset-thumbnail max-h-8 max-w-full mx-auto rounded w-8 h-8 object-cover">
                                                            </div><label
                                                                for="checkbox-assets::bill-jelen-nvwyn8gamck-unsplash.jpg"
                                                                class="cursor-pointer select-none group-hover:text-blue normal-nums">
                                                                bill-jelen-nvwyn8gamck-unsplash.jpg </label>
                                                        </div>
                                                    </td>
                                                    <td class="">
                                                        <div bis_skin_checked="1">
                                                            <div handle="size" values="[object Object]" class=""
                                                                bis_skin_checked="1">2 MB</div>
                                                        </div>
                                                    </td>
                                                    <td class="">
                                                        <div bis_skin_checked="1">
                                                            <div handle="last_modified" values="[object Object]"
                                                                class="" bis_skin_checked="1">1
                                                                year ago</div>
                                                        </div>
                                                    </td><!---->
                                                    <th class="actions-column">
                                                        <div class="dropdown-list" bis_skin_checked="1">
                                                            <div aria-haspopup="true" bis_skin_checked="1"><button
                                                                    aria-label="Open Dropdown"
                                                                    class="rotating-dots-button"><svg width="12"
                                                                        viewBox="0 0 24 24"
                                                                        class="rotating-dots fill-current">
                                                                        <circle cx="3" cy="12" r="3">
                                                                        </circle>
                                                                        <circle cx="12" cy="12" r="3">
                                                                        </circle>
                                                                        <circle cx="21" cy="12" r="3">
                                                                        </circle>
                                                                    </svg></button></div>
                                                            <div class="v-portal" style="display: none;"
                                                                bis_skin_checked="1"></div>
                                                        </div>
                                                    </th>
                                                </tr>
                                                <tr class="sortable-row outline-none" tabindex="0"><!---->
                                                    <th class="checkbox-column"><input type="checkbox"
                                                            id="checkbox-assets::boat.jpg" value="assets::boat.jpg"></th>
                                                    <td class="">
                                                        <div class="flex items-center w-fit-content group"
                                                            bis_skin_checked="1">
                                                            <div class="w-8 h-8 rtl:ml-2 ltr:mr-2 cursor-pointer"
                                                                bis_skin_checked="1"><img
                                                                    src="https://demo.statamic.com/cp/thumbnails/YXNzZXRzOjpib2F0LmpwZw==/small"
                                                                    loading="lazy"
                                                                    class="asset-thumbnail max-h-8 max-w-full mx-auto rounded w-8 h-8 object-cover">
                                                            </div><label for="checkbox-assets::boat.jpg"
                                                                class="cursor-pointer select-none group-hover:text-blue normal-nums">
                                                                boat.jpg
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="">
                                                        <div bis_skin_checked="1">
                                                            <div handle="size" values="[object Object]" class=""
                                                                bis_skin_checked="1">318 KB
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="">
                                                        <div bis_skin_checked="1">
                                                            <div handle="last_modified" values="[object Object]"
                                                                class="" bis_skin_checked="1">1
                                                                year ago</div>
                                                        </div>
                                                    </td><!---->
                                                    <th class="actions-column">
                                                        <div class="dropdown-list" bis_skin_checked="1">
                                                            <div aria-haspopup="true" bis_skin_checked="1"><button
                                                                    aria-label="Open Dropdown"
                                                                    class="rotating-dots-button"><svg width="12"
                                                                        viewBox="0 0 24 24"
                                                                        class="rotating-dots fill-current">
                                                                        <circle cx="3" cy="12" r="3">
                                                                        </circle>
                                                                        <circle cx="12" cy="12" r="3">
                                                                        </circle>
                                                                        <circle cx="21" cy="12" r="3">
                                                                        </circle>
                                                                    </svg></button></div>
                                                            <div class="v-portal" style="display: none;"
                                                                bis_skin_checked="1"></div>
                                                        </div>
                                                    </th>
                                                </tr>
                                                <tr class="sortable-row outline-none" tabindex="0"><!---->
                                                    <th class="checkbox-column"><input type="checkbox"
                                                            id="checkbox-assets::burning-tracks.jpg"
                                                            value="assets::burning-tracks.jpg"></th>
                                                    <td class="">
                                                        <div class="flex items-center w-fit-content group"
                                                            bis_skin_checked="1">
                                                            <div class="w-8 h-8 rtl:ml-2 ltr:mr-2 cursor-pointer"
                                                                bis_skin_checked="1"><img
                                                                    src="./Assets ‹ Assets ‹ Statamic_files/small(2)"
                                                                    loading="lazy"
                                                                    class="asset-thumbnail max-h-8 max-w-full mx-auto rounded w-8 h-8 object-cover">
                                                            </div><label for="checkbox-assets::burning-tracks.jpg"
                                                                class="cursor-pointer select-none group-hover:text-blue normal-nums">
                                                                burning-tracks.jpg </label>
                                                        </div>
                                                    </td>
                                                    <td class="">
                                                        <div bis_skin_checked="1">
                                                            <div handle="size" values="[object Object]" class=""
                                                                bis_skin_checked="1">362 KB
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="">
                                                        <div bis_skin_checked="1">
                                                            <div handle="last_modified" values="[object Object]"
                                                                class="" bis_skin_checked="1">1
                                                                year ago</div>
                                                        </div>
                                                    </td><!---->
                                                    <th class="actions-column">
                                                        <div class="dropdown-list" bis_skin_checked="1">
                                                            <div aria-haspopup="true" bis_skin_checked="1"><button
                                                                    aria-label="Open Dropdown"
                                                                    class="rotating-dots-button"><svg width="12"
                                                                        viewBox="0 0 24 24"
                                                                        class="rotating-dots fill-current">
                                                                        <circle cx="3" cy="12" r="3">
                                                                        </circle>
                                                                        <circle cx="12" cy="12" r="3">
                                                                        </circle>
                                                                        <circle cx="21" cy="12" r="3">
                                                                        </circle>
                                                                    </svg></button></div>
                                                            <div class="v-portal" style="display: none;"
                                                                bis_skin_checked="1"></div>
                                                        </div>
                                                    </th>
                                                </tr>
                                                <tr class="sortable-row outline-none" tabindex="0"><!---->
                                                    <th class="checkbox-column"><input type="checkbox"
                                                            id="checkbox-assets::cleanshot-2022-09-13-at-15.49.18@2x.png"
                                                            value="assets::cleanshot-2022-09-13-at-15.49.18@2x.png"></th>
                                                    <td class="">
                                                        <div class="flex items-center w-fit-content group"
                                                            bis_skin_checked="1">
                                                            <div class="w-8 h-8 rtl:ml-2 ltr:mr-2 cursor-pointer"
                                                                bis_skin_checked="1"><img
                                                                    src="./Assets ‹ Assets ‹ Statamic_files/small(3)"
                                                                    loading="lazy"
                                                                    class="asset-thumbnail max-h-8 max-w-full mx-auto rounded w-8 h-8 object-cover">
                                                            </div><label
                                                                for="checkbox-assets::cleanshot-2022-09-13-at-15.49.18@2x.png"
                                                                class="cursor-pointer select-none group-hover:text-blue normal-nums">
                                                                cleanshot-2022-09-13-at-15.49.18@2x.png </label>
                                                        </div>
                                                    </td>
                                                    <td class="">
                                                        <div bis_skin_checked="1">
                                                            <div handle="size" values="[object Object]" class=""
                                                                bis_skin_checked="1">2 MB</div>
                                                        </div>
                                                    </td>
                                                    <td class="">
                                                        <div bis_skin_checked="1">
                                                            <div handle="last_modified" values="[object Object]"
                                                                class="" bis_skin_checked="1">1
                                                                year ago</div>
                                                        </div>
                                                    </td><!---->
                                                    <th class="actions-column">
                                                        <div class="dropdown-list" bis_skin_checked="1">
                                                            <div aria-haspopup="true" bis_skin_checked="1"><button
                                                                    aria-label="Open Dropdown"
                                                                    class="rotating-dots-button"><svg width="12"
                                                                        viewBox="0 0 24 24"
                                                                        class="rotating-dots fill-current">
                                                                        <circle cx="3" cy="12" r="3">
                                                                        </circle>
                                                                        <circle cx="12" cy="12" r="3">
                                                                        </circle>
                                                                        <circle cx="21" cy="12" r="3">
                                                                        </circle>
                                                                    </svg></button></div>
                                                            <div class="v-portal" style="display: none;"
                                                                bis_skin_checked="1"></div>
                                                        </div>
                                                    </th>
                                                </tr>
                                                <tr class="sortable-row outline-none" tabindex="0"><!---->
                                                    <th class="checkbox-column"><input type="checkbox"
                                                            id="checkbox-assets::david.jpg" value="assets::david.jpg">
                                                    </th>
                                                    <td class="">
                                                        <div class="flex items-center w-fit-content group"
                                                            bis_skin_checked="1">
                                                            <div class="w-8 h-8 rtl:ml-2 ltr:mr-2 cursor-pointer"
                                                                bis_skin_checked="1"><img
                                                                    src="./Assets ‹ Assets ‹ Statamic_files/small(4)"
                                                                    loading="lazy"
                                                                    class="asset-thumbnail max-h-8 max-w-full mx-auto rounded w-8 h-8 object-cover">
                                                            </div><label for="checkbox-assets::david.jpg"
                                                                class="cursor-pointer select-none group-hover:text-blue normal-nums">
                                                                david.jpg
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="">
                                                        <div bis_skin_checked="1">
                                                            <div handle="size" values="[object Object]" class=""
                                                                bis_skin_checked="1">41 KB
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="">
                                                        <div bis_skin_checked="1">
                                                            <div handle="last_modified" values="[object Object]"
                                                                class="" bis_skin_checked="1">1
                                                                year ago</div>
                                                        </div>
                                                    </td><!---->
                                                    <th class="actions-column">
                                                        <div class="dropdown-list" bis_skin_checked="1">
                                                            <div aria-haspopup="true" bis_skin_checked="1"><button
                                                                    aria-label="Open Dropdown"
                                                                    class="rotating-dots-button"><svg width="12"
                                                                        viewBox="0 0 24 24"
                                                                        class="rotating-dots fill-current">
                                                                        <circle cx="3" cy="12" r="3">
                                                                        </circle>
                                                                        <circle cx="12" cy="12" r="3">
                                                                        </circle>
                                                                        <circle cx="21" cy="12" r="3">
                                                                        </circle>
                                                                    </svg></button></div>
                                                            <div class="v-portal" style="display: none;"
                                                                bis_skin_checked="1"></div>
                                                        </div>
                                                    </th>
                                                </tr>
                                                <tr class="sortable-row outline-none" tabindex="0"><!---->
                                                    <th class="checkbox-column"><input type="checkbox"
                                                            id="checkbox-assets::hasnain-sikora-41nsemab1ps-unsplash.jpg"
                                                            value="assets::hasnain-sikora-41nsemab1ps-unsplash.jpg"></th>
                                                    <td class="">
                                                        <div class="flex items-center w-fit-content group"
                                                            bis_skin_checked="1">
                                                            <div class="w-8 h-8 rtl:ml-2 ltr:mr-2 cursor-pointer"
                                                                bis_skin_checked="1"><img
                                                                    src="https://demo.statamic.com/cp/thumbnails/YXNzZXRzOjpoYXNuYWluLXNpa29yYS00MW5zZW1hYjFwcy11bnNwbGFzaC5qcGc=/small"
                                                                    loading="lazy"
                                                                    class="asset-thumbnail max-h-8 max-w-full mx-auto rounded w-8 h-8 object-cover">
                                                            </div><label
                                                                for="checkbox-assets::hasnain-sikora-41nsemab1ps-unsplash.jpg"
                                                                class="cursor-pointer select-none group-hover:text-blue normal-nums">
                                                                hasnain-sikora-41nsemab1ps-unsplash.jpg </label>
                                                        </div>
                                                    </td>
                                                    <td class="">
                                                        <div bis_skin_checked="1">
                                                            <div handle="size" values="[object Object]" class=""
                                                                bis_skin_checked="1">1 MB</div>
                                                        </div>
                                                    </td>
                                                    <td class="">
                                                        <div bis_skin_checked="1">
                                                            <div handle="last_modified" values="[object Object]"
                                                                class="" bis_skin_checked="1">1
                                                                year ago</div>
                                                        </div>
                                                    </td><!---->
                                                    <th class="actions-column">
                                                        <div class="dropdown-list" bis_skin_checked="1">
                                                            <div aria-haspopup="true" bis_skin_checked="1"><button
                                                                    aria-label="Open Dropdown"
                                                                    class="rotating-dots-button"><svg width="12"
                                                                        viewBox="0 0 24 24"
                                                                        class="rotating-dots fill-current">
                                                                        <circle cx="3" cy="12" r="3">
                                                                        </circle>
                                                                        <circle cx="12" cy="12" r="3">
                                                                        </circle>
                                                                        <circle cx="21" cy="12" r="3">
                                                                        </circle>
                                                                    </svg></button></div>
                                                            <div class="v-portal" style="display: none;"
                                                                bis_skin_checked="1"></div>
                                                        </div>
                                                    </th>
                                                </tr>
                                                <tr class="sortable-row outline-none" tabindex="0"><!---->
                                                    <th class="checkbox-column"><input type="checkbox"
                                                            id="checkbox-assets::jack-pimped-md.jpg"
                                                            value="assets::jack-pimped-md.jpg"></th>
                                                    <td class="">
                                                        <div class="flex items-center w-fit-content group"
                                                            bis_skin_checked="1">
                                                            <div class="w-8 h-8 rtl:ml-2 ltr:mr-2 cursor-pointer"
                                                                bis_skin_checked="1"><img
                                                                    src="https://demo.statamic.com/cp/thumbnails/YXNzZXRzOjpqYWNrLXBpbXBlZC1tZC5qcGc=/small"
                                                                    loading="lazy"
                                                                    class="asset-thumbnail max-h-8 max-w-full mx-auto rounded w-8 h-8 object-cover">
                                                            </div><label for="checkbox-assets::jack-pimped-md.jpg"
                                                                class="cursor-pointer select-none group-hover:text-blue normal-nums">
                                                                jack-pimped-md.jpg </label>
                                                        </div>
                                                    </td>
                                                    <td class="">
                                                        <div bis_skin_checked="1">
                                                            <div handle="size" values="[object Object]" class=""
                                                                bis_skin_checked="1">310 KB
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="">
                                                        <div bis_skin_checked="1">
                                                            <div handle="last_modified" values="[object Object]"
                                                                class="" bis_skin_checked="1">1
                                                                year ago</div>
                                                        </div>
                                                    </td><!---->
                                                    <th class="actions-column">
                                                        <div class="dropdown-list" bis_skin_checked="1">
                                                            <div aria-haspopup="true" bis_skin_checked="1"><button
                                                                    aria-label="Open Dropdown"
                                                                    class="rotating-dots-button"><svg width="12"
                                                                        viewBox="0 0 24 24"
                                                                        class="rotating-dots fill-current">
                                                                        <circle cx="3" cy="12" r="3">
                                                                        </circle>
                                                                        <circle cx="12" cy="12" r="3">
                                                                        </circle>
                                                                        <circle cx="21" cy="12" r="3">
                                                                        </circle>
                                                                    </svg></button></div>
                                                            <div class="v-portal" style="display: none;"
                                                                bis_skin_checked="1"></div>
                                                        </div>
                                                    </th>
                                                </tr>
                                                <tr class="sortable-row outline-none" tabindex="0"><!---->
                                                    <th class="checkbox-column"><input type="checkbox"
                                                            id="checkbox-assets::jason-leung-pslig2e_gaw-unsplash.jpg"
                                                            value="assets::jason-leung-pslig2e_gaw-unsplash.jpg"></th>
                                                    <td class="">
                                                        <div class="flex items-center w-fit-content group"
                                                            bis_skin_checked="1">
                                                            <div class="w-8 h-8 rtl:ml-2 ltr:mr-2 cursor-pointer"
                                                                bis_skin_checked="1"><img
                                                                    src="./Assets ‹ Assets ‹ Statamic_files/small(5)"
                                                                    loading="lazy"
                                                                    class="asset-thumbnail max-h-8 max-w-full mx-auto rounded w-8 h-8 object-cover">
                                                            </div><label
                                                                for="checkbox-assets::jason-leung-pslig2e_gaw-unsplash.jpg"
                                                                class="cursor-pointer select-none group-hover:text-blue normal-nums">
                                                                jason-leung-pslig2e_gaw-unsplash.jpg </label>
                                                        </div>
                                                    </td>
                                                    <td class="">
                                                        <div bis_skin_checked="1">
                                                            <div handle="size" values="[object Object]" class=""
                                                                bis_skin_checked="1">2 MB</div>
                                                        </div>
                                                    </td>
                                                    <td class="">
                                                        <div bis_skin_checked="1">
                                                            <div handle="last_modified" values="[object Object]"
                                                                class="" bis_skin_checked="1">1
                                                                year ago</div>
                                                        </div>
                                                    </td><!---->
                                                    <th class="actions-column">
                                                        <div class="dropdown-list" bis_skin_checked="1">
                                                            <div aria-haspopup="true" bis_skin_checked="1"><button
                                                                    aria-label="Open Dropdown"
                                                                    class="rotating-dots-button"><svg width="12"
                                                                        viewBox="0 0 24 24"
                                                                        class="rotating-dots fill-current">
                                                                        <circle cx="3" cy="12" r="3">
                                                                        </circle>
                                                                        <circle cx="12" cy="12" r="3">
                                                                        </circle>
                                                                        <circle cx="21" cy="12" r="3">
                                                                        </circle>
                                                                    </svg></button></div>
                                                            <div class="v-portal" style="display: none;"
                                                                bis_skin_checked="1"></div>
                                                        </div>
                                                    </th>
                                                </tr>
                                                <tr class="sortable-row outline-none" tabindex="0"><!---->
                                                    <th class="checkbox-column"><input type="checkbox"
                                                            id="checkbox-assets::joel-muniz-y6ct3a-rj68-unsplash.jpg"
                                                            value="assets::joel-muniz-y6ct3a-rj68-unsplash.jpg"></th>
                                                    <td class="">
                                                        <div class="flex items-center w-fit-content group"
                                                            bis_skin_checked="1">
                                                            <div class="w-8 h-8 rtl:ml-2 ltr:mr-2 cursor-pointer"
                                                                bis_skin_checked="1"><img
                                                                    src="./Assets ‹ Assets ‹ Statamic_files/small(6)"
                                                                    loading="lazy"
                                                                    class="asset-thumbnail max-h-8 max-w-full mx-auto rounded w-8 h-8 object-cover">
                                                            </div><label
                                                                for="checkbox-assets::joel-muniz-y6ct3a-rj68-unsplash.jpg"
                                                                class="cursor-pointer select-none group-hover:text-blue normal-nums">
                                                                joel-muniz-y6ct3a-rj68-unsplash.jpg </label>
                                                        </div>
                                                    </td>
                                                    <td class="">
                                                        <div bis_skin_checked="1">
                                                            <div handle="size" values="[object Object]" class=""
                                                                bis_skin_checked="1">2 MB</div>
                                                        </div>
                                                    </td>
                                                    <td class="">
                                                        <div bis_skin_checked="1">
                                                            <div handle="last_modified" values="[object Object]"
                                                                class="" bis_skin_checked="1">1
                                                                year ago</div>
                                                        </div>
                                                    </td><!---->
                                                    <th class="actions-column">
                                                        <div class="dropdown-list" bis_skin_checked="1">
                                                            <div aria-haspopup="true" bis_skin_checked="1"><button
                                                                    aria-label="Open Dropdown"
                                                                    class="rotating-dots-button"><svg width="12"
                                                                        viewBox="0 0 24 24"
                                                                        class="rotating-dots fill-current">
                                                                        <circle cx="3" cy="12" r="3">
                                                                        </circle>
                                                                        <circle cx="12" cy="12" r="3">
                                                                        </circle>
                                                                        <circle cx="21" cy="12" r="3">
                                                                        </circle>
                                                                    </svg></button></div>
                                                            <div class="v-portal" style="display: none;"
                                                                bis_skin_checked="1"></div>
                                                        </div>
                                                    </th>
                                                </tr>
                                                <tr class="sortable-row outline-none" tabindex="0"><!---->
                                                    <th class="checkbox-column"><input type="checkbox"
                                                            id="checkbox-assets::kira.png" value="assets::kira.png"></th>
                                                    <td class="">
                                                        <div class="flex items-center w-fit-content group"
                                                            bis_skin_checked="1">
                                                            <div class="w-8 h-8 rtl:ml-2 ltr:mr-2 cursor-pointer"
                                                                bis_skin_checked="1"><img
                                                                    src="https://demo.statamic.com/cp/thumbnails/YXNzZXRzOjpraXJhLnBuZw==/small"
                                                                    loading="lazy"
                                                                    class="asset-thumbnail max-h-8 max-w-full mx-auto rounded w-8 h-8 object-cover">
                                                            </div><label for="checkbox-assets::kira.png"
                                                                class="cursor-pointer select-none group-hover:text-blue normal-nums">
                                                                kira.png
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="">
                                                        <div bis_skin_checked="1">
                                                            <div handle="size" values="[object Object]" class=""
                                                                bis_skin_checked="1">1 MB</div>
                                                        </div>
                                                    </td>
                                                    <td class="">
                                                        <div bis_skin_checked="1">
                                                            <div handle="last_modified" values="[object Object]"
                                                                class="" bis_skin_checked="1">1
                                                                year ago</div>
                                                        </div>
                                                    </td><!---->
                                                    <th class="actions-column">
                                                        <div class="dropdown-list" bis_skin_checked="1">
                                                            <div aria-haspopup="true" bis_skin_checked="1"><button
                                                                    aria-label="Open Dropdown"
                                                                    class="rotating-dots-button"><svg width="12"
                                                                        viewBox="0 0 24 24"
                                                                        class="rotating-dots fill-current">
                                                                        <circle cx="3" cy="12" r="3">
                                                                        </circle>
                                                                        <circle cx="12" cy="12" r="3">
                                                                        </circle>
                                                                        <circle cx="21" cy="12" r="3">
                                                                        </circle>
                                                                    </svg></button></div>
                                                            <div class="v-portal" style="display: none;"
                                                                bis_skin_checked="1"></div>
                                                        </div>
                                                    </th>
                                                </tr>
                                                <tr class="sortable-row outline-none" tabindex="0"><!---->
                                                    <th class="checkbox-column"><input type="checkbox"
                                                            id="checkbox-assets::photo-1454779132693-e5cd0a216ed3.jpg"
                                                            value="assets::photo-1454779132693-e5cd0a216ed3.jpg"></th>
                                                    <td class="">
                                                        <div class="flex items-center w-fit-content group"
                                                            bis_skin_checked="1">
                                                            <div class="w-8 h-8 rtl:ml-2 ltr:mr-2 cursor-pointer"
                                                                bis_skin_checked="1"><img
                                                                    src="https://demo.statamic.com/cp/thumbnails/YXNzZXRzOjpwaG90by0xNDU0Nzc5MTMyNjkzLWU1Y2QwYTIxNmVkMy5qcGc=/small"
                                                                    loading="lazy"
                                                                    class="asset-thumbnail max-h-8 max-w-full mx-auto rounded w-8 h-8 object-cover">
                                                            </div><label
                                                                for="checkbox-assets::photo-1454779132693-e5cd0a216ed3.jpg"
                                                                class="cursor-pointer select-none group-hover:text-blue normal-nums">
                                                                photo-1454779132693-e5cd0a216ed3.jpg </label>
                                                        </div>
                                                    </td>
                                                    <td class="">
                                                        <div bis_skin_checked="1">
                                                            <div handle="size" values="[object Object]" class=""
                                                                bis_skin_checked="1">5 MB</div>
                                                        </div>
                                                    </td>
                                                    <td class="">
                                                        <div bis_skin_checked="1">
                                                            <div handle="last_modified" values="[object Object]"
                                                                class="" bis_skin_checked="1">1
                                                                year ago</div>
                                                        </div>
                                                    </td><!---->
                                                    <th class="actions-column">
                                                        <div class="dropdown-list" bis_skin_checked="1">
                                                            <div aria-haspopup="true" bis_skin_checked="1"><button
                                                                    aria-label="Open Dropdown"
                                                                    class="rotating-dots-button"><svg width="12"
                                                                        viewBox="0 0 24 24"
                                                                        class="rotating-dots fill-current">
                                                                        <circle cx="3" cy="12" r="3">
                                                                        </circle>
                                                                        <circle cx="12" cy="12" r="3">
                                                                        </circle>
                                                                        <circle cx="21" cy="12" r="3">
                                                                        </circle>
                                                                    </svg></button></div>
                                                            <div class="v-portal" style="display: none;"
                                                                bis_skin_checked="1"></div>
                                                        </div>
                                                    </th>
                                                </tr>
                                                <tr class="sortable-row outline-none" tabindex="0"><!---->
                                                    <th class="checkbox-column"><input type="checkbox"
                                                            id="checkbox-assets::photo-1542718610-a1d656d1884c.jpg"
                                                            value="assets::photo-1542718610-a1d656d1884c.jpg"></th>
                                                    <td class="">
                                                        <div class="flex items-center w-fit-content group"
                                                            bis_skin_checked="1">
                                                            <div class="w-8 h-8 rtl:ml-2 ltr:mr-2 cursor-pointer"
                                                                bis_skin_checked="1"><img
                                                                    src="./Assets ‹ Assets ‹ Statamic_files/small(7)"
                                                                    loading="lazy"
                                                                    class="asset-thumbnail max-h-8 max-w-full mx-auto rounded w-8 h-8 object-cover">
                                                            </div><label
                                                                for="checkbox-assets::photo-1542718610-a1d656d1884c.jpg"
                                                                class="cursor-pointer select-none group-hover:text-blue normal-nums">
                                                                photo-1542718610-a1d656d1884c.jpg </label>
                                                        </div>
                                                    </td>
                                                    <td class="">
                                                        <div bis_skin_checked="1">
                                                            <div handle="size" values="[object Object]" class=""
                                                                bis_skin_checked="1">11 MB
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="">
                                                        <div bis_skin_checked="1">
                                                            <div handle="last_modified" values="[object Object]"
                                                                class="" bis_skin_checked="1">1
                                                                year ago</div>
                                                        </div>
                                                    </td><!---->
                                                    <th class="actions-column">
                                                        <div class="dropdown-list" bis_skin_checked="1">
                                                            <div aria-haspopup="true" bis_skin_checked="1"><button
                                                                    aria-label="Open Dropdown"
                                                                    class="rotating-dots-button"><svg width="12"
                                                                        viewBox="0 0 24 24"
                                                                        class="rotating-dots fill-current">
                                                                        <circle cx="3" cy="12" r="3">
                                                                        </circle>
                                                                        <circle cx="12" cy="12" r="3">
                                                                        </circle>
                                                                        <circle cx="21" cy="12" r="3">
                                                                        </circle>
                                                                    </svg></button></div>
                                                            <div class="v-portal" style="display: none;"
                                                                bis_skin_checked="1"></div>
                                                        </div>
                                                    </th>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div><!----><!---->
                                </div>
                                <div class="w-full flex mt-6" bis_skin_checked="1">
                                    <div class="flex flex-1 items-center" bis_skin_checked="1"><!----></div><!---->
                                    <div class="flex flex-1" bis_skin_checked="1">
                                        <div class="flex-1" bis_skin_checked="1"></div>
                                        <div class="select-input-container rtl:mr-6 ltr:ml-6" bis_skin_checked="1"><select
                                                name="perPage" class="select-input">
                                                <option value="" disabled="disabled">Per Page</option>
                                                <option value="10">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                                <option value="500">500</option>
                                            </select>
                                            <div class="select-input-toggle" bis_skin_checked="1"><svg
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                    <path
                                                        d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z">
                                                    </path>
                                                </svg></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!----><!---->
            </div>
        </div>
    </div>
@endsection
