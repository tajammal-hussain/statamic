@extends('layouts.main')

@section('title', $navigation->title)

@section('content')
<div class="page-wrapper max-w-xl">
    <div>
        <header class="mb-6">
            <div class="breadcrumb flex">
                <a href="{{ route('navigations.navigations') }}"
                    class="flex-initial flex p-2 -m-2 items-center text-xs text-gray-700 hover:text-gray-900">
                    <svg viewBox="0 0 24 24" class="align-middle h-6 w-4 rotate-180">
                        <path fill="currentColor" fill-rule="evenodd"
                            d="m10.414 7.05 4.95 4.95-4.95 4.95L9 15.534 12.536 12 9 8.464z"></path>
                    </svg>
                    <span>{{ 'Navigation' }}</span>
                </a>
            </div>
            <div class="flex items-center">
                <h1 class="flex-1">{{ $navigation->title }}</h1>

                <div class="relative">
                    <div class="dropdown relative">
                        <button id="dropdown2" class="btn flex items-center rtl:pl-4 ltr:pr-4">
                            Add Nav Item
                            <svg viewBox="0 0 10 6.5" class="w-2 rtl:mr-4 ltr:ml-4">
                                <path fill="currentColor" d="M9.9 1.4 5 6.4l-5-5L1.4 0 5 3.5 8.5 0l1.4 1.4z"></path>
                            </svg>
                        </button>
                    </div>
                    <div id="dropdown-content2" class="dropdown-content absolute z-1 hidden text-gray-700 pt-1 right-2 mt-1">
                        <div class="bg-white shadow-popover rounded-md w-40" bis_skin_checked="1">
                            <a href="javascript:void(0);"
                                class="rounded-t hover:bg-gray-200 py-2 px-4 block whitespace-no-wrap">Add Nav Item</a>
                            <a href="javascript:void(0);" class="rounded-b hover:bg-gray-200 py-2 px-4 block whitespace-no-wrap">Link to Entry</a>
                        </div>
                    </div>
                </div>
                <button disabled="disabled" class="btn-primary rtl:mr-4 ltr:ml-4 disabled">Save Changes</button>
            </div>
        </header>
        <div>
            <div class="mb-2 flex justify-end"><a class="text-2xs text-blue rtl:ml-4 ltr:mr-4 underline">Expand
                    All</a><a class="text-2xs text-blue rtl:ml-2 ltr:mr-2 underline">Collapse All</a></div>


            <div class="page-tree w-full">
                <div class="he-tree tree">
                    <div id="tree_93_node_root" class="tree-node">

                        <div class="tree-node-children">
                            <div id="tree_93_node_XyP4J" class="tree-node open">
                                <div class="tree-node-inner-back" style="margin-bottom: 1px;">
                                    <div class="tree-node-inner">
                                        <div class="flex">
                                            <div class="page-move w-6"></div>
                                            <div
                                                class="flex items-center flex-1 p-2 rtl:mr-2 ltr:ml-2 text-xs leading-normal">
                                                <div class="flex items-center grow">
                                                    <div
                                                        class="little-dot rtl:ml-2 ltr:mr-2 bg-transparent border border-gray-600 v-popper--has-tooltip">
                                                    </div>
                                                    <div class="">
                                                        <button type="button" data-hs-overlay="#hs-overlay"> Open
                                                            offcanvas </button>
                                                        <div id="hs-overlay"
                                                            class="hs-overlay hs-overlay-open:translate-x-0 hidden -translate-x-full fixed top-14 right-0 transition-all duration-300 transform h-full max-w-sm w-full z-1 bg-white border-s shadow-xl"
                                                            tabindex="-1">
                                                            <div class="bg-gray-100 flex flex-col" style="height: 94%;">
                                                                <header
                                                                    class="bg-white rtl:pr-6 ltr:pl-6 rtl:pl-3 ltr:pr-3 py-2 mb-4 border-b shadow-md text-lg font-medium flex items-center justify-between">
                                                                    Nav Item <button type="button" id="closeBtn"
                                                                        class="btn-close">×</button>
                                                                </header>
                                                                <div class="flex-1 overflow-auto px-1">
                                                                    <div class="px-2">

                                                                        <div class="publish-sections">
                                                                            <div class="publish-sections-section">
                                                                                <div class="p-0 card">

                                                                                    <div
                                                                                        class="publish-fields @container">
                                                                                        <div
                                                                                            class="form-group publish-field publish-field__title text-fieldtype w-full">
                                                                                            <div class="field-inner">
                                                                                                <label for="field_title"
                                                                                                    class="publish-field-label"><span
                                                                                                        class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Title</span>
                                                                                                    <button
                                                                                                        class="outline-none"
                                                                                                        style="display: none;"><svg
                                                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                                                            viewBox="0 0 24 24"
                                                                                                            class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                                                            <path
                                                                                                                fill="none"
                                                                                                                stroke="currentColor"
                                                                                                                stroke-linecap="round"
                                                                                                                stroke-linejoin="round"
                                                                                                                stroke-width="1.5"
                                                                                                                d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5">
                                                                                                            </path>
                                                                                                        </svg></button><button
                                                                                                        class="outline-none"
                                                                                                        style="display: none;"><svg
                                                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                                                            viewBox="0 0 24 24"
                                                                                                            class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                                                            <path
                                                                                                                fill="none"
                                                                                                                stroke="currentColor"
                                                                                                                stroke-linecap="round"
                                                                                                                stroke-linejoin="round"
                                                                                                                stroke-width="1.5"
                                                                                                                d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                                                                            </path>
                                                                                                        </svg></button>
                                                                                                </label>
                                                                                            </div>

                                                                                            <div
                                                                                                class="flex items-center">
                                                                                                <div
                                                                                                    class="input-group">
                                                                                                    <input
                                                                                                        id="field_title"
                                                                                                        name="title"
                                                                                                        type="text"
                                                                                                        autofocus="autofocus"
                                                                                                        class="input-text">
                                                                                                </div>
                                                                                            </div>

                                                                                        </div>
                                                                                        <div
                                                                                            class="form-group publish-field publish-field__url text-fieldtype w-full">
                                                                                            <div class="field-inner">
                                                                                                <label for="field_url"
                                                                                                    class="publish-field-label"><span
                                                                                                        class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">URL</span>
                                                                                                    <button
                                                                                                        class="outline-none"
                                                                                                        style="display: none;"><svg
                                                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                                                            viewBox="0 0 24 24"
                                                                                                            class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                                                            <path
                                                                                                                fill="none"
                                                                                                                stroke="currentColor"
                                                                                                                stroke-linecap="round"
                                                                                                                stroke-linejoin="round"
                                                                                                                stroke-width="1.5"
                                                                                                                d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5">
                                                                                                            </path>
                                                                                                        </svg></button><button
                                                                                                        class="outline-none"
                                                                                                        style="display: none;"><svg
                                                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                                                            viewBox="0 0 24 24"
                                                                                                            class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                                                            <path
                                                                                                                fill="none"
                                                                                                                stroke="currentColor"
                                                                                                                stroke-linecap="round"
                                                                                                                stroke-linejoin="round"
                                                                                                                stroke-width="1.5"
                                                                                                                d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                                                                            </path>
                                                                                                        </svg></button>
                                                                                                </label>
                                                                                                <div
                                                                                                    class="help-block -mt-2">
                                                                                                    <p>Enter any
                                                                                                        internal or
                                                                                                        external URL.
                                                                                                    </p>
                                                                                                </div>
                                                                                            </div>

                                                                                            <div
                                                                                                class="flex items-center">
                                                                                                <div
                                                                                                    class="input-group">
                                                                                                    <input
                                                                                                        id="field_url"
                                                                                                        name="url"
                                                                                                        type="text"
                                                                                                        class="input-text">
                                                                                                </div>
                                                                                            </div>

                                                                                        </div>
                                                                                        <div
                                                                                            class="form-group publish-field publish-field__external toggle-fieldtype w-full">
                                                                                            <div class="field-inner">
                                                                                                <label
                                                                                                    for="field_external"
                                                                                                    class="publish-field-label"><span
                                                                                                        class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Open
                                                                                                        in a new
                                                                                                        window</span>
                                                                                                    <button
                                                                                                        class="outline-none"
                                                                                                        style="display: none;"><svg
                                                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                                                            viewBox="0 0 24 24"
                                                                                                            class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                                                            <path
                                                                                                                fill="none"
                                                                                                                stroke="currentColor"
                                                                                                                stroke-linecap="round"
                                                                                                                stroke-linejoin="round"
                                                                                                                stroke-width="1.5"
                                                                                                                d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5">
                                                                                                            </path>
                                                                                                        </svg></button><button
                                                                                                        class="outline-none"
                                                                                                        style="display: none;"><svg
                                                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                                                            viewBox="0 0 24 24"
                                                                                                            class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                                                            <path
                                                                                                                fill="none"
                                                                                                                stroke="currentColor"
                                                                                                                stroke-linecap="round"
                                                                                                                stroke-linejoin="round"
                                                                                                                stroke-width="1.5"
                                                                                                                d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                                                                            </path>
                                                                                                        </svg></button>
                                                                                                </label>

                                                                                            </div>

                                                                                            <div
                                                                                                class="toggle-fieldtype-wrapper">
                                                                                                <button type="button"
                                                                                                    aria-pressed="true"
                                                                                                    aria-label="Toggle Button"
                                                                                                    class="toggle-container on"
                                                                                                    id="field_external">
                                                                                                    <div
                                                                                                        class="toggle-slider">
                                                                                                        <div tabindex="0"
                                                                                                            class="toggle-knob">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </button>

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="bg-gray-200 p-4 border-t flex items-center justify-between flex-row-reverse">
                                                                    <div><button
                                                                            class="btn rtl:ml-2 ltr:mr-2">Cancel</button><button
                                                                            class="btn-primary">Submit</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="rtl:pl-2 ltr:pr-2 flex items-center">


                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        class="inline-block w-4 h-4 text-gray-500 v-popper--has-tooltip">
                                                        <g fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="1.5">
                                                            <path
                                                                d="M22.5 21.75a1.5 1.5 0 0 1-1.5 1.5H3a1.5 1.5 0 0 1-1.5-1.5V2.25A1.5 1.5 0 0 1 3 .75h15a1.5 1.5 0 0 1 1.047.426l3 2.883c.29.282.453.67.453 1.074V21.75z">
                                                            </path>
                                                            <path d="M9 11.25v-1.5h6v1.5m-3-1.5v7.5m-1.5 0h3"></path>
                                                        </g>
                                                    </svg>
                                                    <div class="dropdown-list rtl:mr-4 ltr:ml-4">
                                                        <div aria-haspopup="true"><button aria-label="Open Dropdown"
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
                                                        <div class="v-portal" style="display: none;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div id="tree_93_node_f6Nr9" class="tree-node open">
                                <div class="tree-node-inner-back" style="margin-bottom: 1px;">
                                    <div class="tree-node-inner">
                                        <div class="flex">
                                            <div class="page-move w-6"></div>
                                            <div
                                                class="flex items-center flex-1 p-2 rtl:mr-2 ltr:ml-2 text-xs leading-normal">
                                                <div class="flex items-center grow">
                                                    <div
                                                        class="little-dot rtl:ml-2 ltr:mr-2 bg-transparent border border-gray-600 v-popper--has-tooltip">
                                                    </div>
                                                    <a class="text-sm font-medium">Neat CMS</a>
                                                </div>
                                                <div class="rtl:pl-2 ltr:pr-2 flex items-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        class="inline-block w-4 h-4 text-gray-500 v-popper--has-tooltip">
                                                        <g fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="1.5">
                                                            <path
                                                                d="M22.5 21.75a1.5 1.5 0 0 1-1.5 1.5H3a1.5 1.5 0 0 1-1.5-1.5V2.25A1.5 1.5 0 0 1 3 .75h15a1.5 1.5 0 0 1 1.047.426l3 2.883c.29.282.453.67.453 1.074V21.75z">
                                                            </path>
                                                            <path d="M9 11.25v-1.5h6v1.5m-3-1.5v7.5m-1.5 0h3"></path>
                                                        </g>
                                                    </svg>
                                                    <div class="dropdown-list rtl:mr-4 ltr:ml-4">
                                                        <div aria-haspopup="true"><button aria-label="Open Dropdown"
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
                                                        <div class="v-portal" style="display: none;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div id="tree_93_node_cPjqN" class="tree-node open">
                                <div class="tree-node-inner-back" style="margin-bottom: 1px;">
                                    <div class="tree-node-inner">
                                        <div class="flex">
                                            <div class="page-move w-6"></div>
                                            <div
                                                class="flex items-center flex-1 p-2 rtl:mr-2 ltr:ml-2 text-xs leading-normal">
                                                <div class="flex items-center grow">
                                                    <div
                                                        class="little-dot rtl:ml-2 ltr:mr-2 bg-transparent border border-gray-600 v-popper--has-tooltip">
                                                    </div>
                                                    <a class="text-sm font-medium">Neat Walk</a>
                                                </div>
                                                <div class="rtl:pl-2 ltr:pr-2 flex items-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        class="inline-block w-4 h-4 text-gray-500 v-popper--has-tooltip">
                                                        <g fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="1.5">
                                                            <path
                                                                d="M22.5 21.75a1.5 1.5 0 0 1-1.5 1.5H3a1.5 1.5 0 0 1-1.5-1.5V2.25A1.5 1.5 0 0 1 3 .75h15a1.5 1.5 0 0 1 1.047.426l3 2.883c.29.282.453.67.453 1.074V21.75z">
                                                            </path>
                                                            <path d="M9 11.25v-1.5h6v1.5m-3-1.5v7.5m-1.5 0h3"></path>
                                                        </g>
                                                    </svg>
                                                    <div class="dropdown-list rtl:mr-4 ltr:ml-4">
                                                        <div aria-haspopup="true"><button aria-label="Open Dropdown"
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
                                                        <div class="v-portal" style="display: none;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="relationship-input hidden relationship-input-empty">


            <div class="relationship-input-items space-y-1 outline-none"></div>

            <div class="relationship-input-buttons relative @container">
                <div class="flex flex-wrap items-center text-sm -mb-2">
                    <div class="relative mb-2">

                    </div><button class="text-blue hover:text-gray-800 flex items-center mb-2 outline-none"><svg
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            class="rtl:ml-1 ltr:mr-1 h-4 w-4 flex items-center">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5"
                                d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5">
                            </path>
                        </svg><span class="hidden @sm:block">Link Existing Item</span><span
                            class="@sm:hidden">Link</span></button>
                </div>
            </div>
            <input type="hidden" name="entries" value="[]">
        </div>

    </div>
</div>

<script>
// Select the button and the overlay
const button = document.querySelector('button[data-hs-overlay="#hs-overlay"]');
const btnClose = document.querySelector('#closeBtn');
const overlay = document.querySelector('#hs-overlay');

// Add event listener to the button
button.addEventListener('click', function() {
    // Toggle the 'hidden' class on the overlay
    overlay.classList.toggle('hidden');
    // Toggle the '-translate-x-full' class on the overlay
    overlay.classList.toggle('-translate-x-full');
});

btnClose.addEventListener('click', function() {
    // Add the 'hidden' class on the overlay
    overlay.classList.add('hidden');
    // Add the '-translate-x-full' class on the overlay
    overlay.classList.add('-translate-x-full');
});
</script>
@endsection