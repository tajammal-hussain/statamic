@php
    $menuItems = [
        ['label' => 'view', 'route' => route('dashboard')],
        ['label' => 'delete', 'route' => route('dashboard')],
    ];
@endphp

@extends('layouts.main')

@section('title', 'Edit Collection')

@section('content')

@section('content')
    <div class="page-wrapper max-w-xl">
        <div>
            <header class="mb-6">
                <div class="breadcrumb flex"><a href="#"
                        class="flex-initial flex p-2 -m-2 items-center text-xs text-gray-700 hover:text-gray-900"><svg
                            viewBox="0 0 24 24" class="align-middle h-6 w-4 rotate-180">
                            <path fill="currentColor" fill-rule="evenodd"
                                d="m10.414 7.05 4.95 4.95-4.95 4.95L9 15.534 12.536 12 9 8.464z"></path>
                        </svg><span>123</span></a></div>
                <div class="flex items-center">
                    <h1 class="flex-1">Configure Collection</h1><button type="submit" class="btn-primary">Save</button>
                </div>
            </header>
            <div>
                <div>
                    <div class="mb-2 content">
                        <h2 class="text-base">Name</h2>
                        <p></p>
                    </div>
                    <div>
                        <div class="publish-sections">
                            <div class="publish-sections-section">
                                <div class="p-0 card">
                                    <div class="publish-fields @container">
                                        <div class="form-group publish-field publish-field__title text-fieldtype w-full">
                                            <div class="field-inner"><label for="field_title"
                                                    class="publish-field-label"><span
                                                        class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Title</span><i
                                                        class="required rtl:ml-1 ltr:mr-1">*</i><button class="outline-none"
                                                        style="display: none;"><svg xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 24 24"
                                                            class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                            <path fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="1.5"
                                                                d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5">
                                                            </path>
                                                        </svg></button><button class="outline-none"
                                                        style="display: none;"><svg xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 24 24"
                                                            class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                            <path fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="1.5"
                                                                d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                            </path>
                                                        </svg></button></label>
                                                <div class="help-block -mt-2">
                                                    <p>We recommend a plural noun, like "Articles" or "Products".</p>
                                                </div>
                                            </div>
                                            <div class="flex items-center">
                                                <div class="input-group"><input id="field_title" name="title"
                                                        type="text" autofocus="autofocus" class="input-text"
                                                        value="123"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="mb-2 content">
                        <h2 class="text-base">Dates &amp; Behaviors</h2>
                        <p></p>
                    </div>
                </div>
                <div>
                    <div>
                        <div class="publish-sections">
                            <div class="publish-sections-section">
                                <div class="p-0 card">
                                    <div class="publish-fields @container">
                                        <div
                                            class="form-group publish-field publish-field__structured toggle-fieldtype w-full">
                                            <div class="field-inner"><label for="field_structured"
                                                    class="publish-field-label"><span
                                                        class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Orderable</span><button
                                                        class="outline-none" style="display: none;"><svg
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                            class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                            <path fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="1.5"
                                                                d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5">
                                                            </path>
                                                        </svg></button><button class="outline-none"
                                                        style="display: none;"><svg xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 24 24"
                                                            class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                            <path fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="1.5"
                                                                d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                            </path>
                                                        </svg></button></label>
                                                <div class="help-block -mt-2">
                                                    <p>Enable manual ordering via drag &amp; drop.</p>
                                                </div>
                                            </div>
                                            <div class="toggle-fieldtype-wrapper"><button type="button"
                                                    aria-pressed="false" aria-label="Toggle Button" class="toggle-container"
                                                    id="field_structured">
                                                    <div class="toggle-slider">
                                                        <div tabindex="0" class="toggle-knob"></div>
                                                    </div>
                                                </button></div>
                                        </div>
                                        <div
                                            class="form-group publish-field publish-field__sort_direction select-fieldtype w-full">
                                            <div class="field-inner"><label for="field_sort_direction"
                                                    class="publish-field-label"><span
                                                        class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Sort
                                                        Direction</span><button class="outline-none"
                                                        style="display: none;"><svg xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 24 24"
                                                            class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                            <path fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="1.5"
                                                                d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5">
                                                            </path>
                                                        </svg></button><button class="outline-none"
                                                        style="display: none;"><svg xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 24 24"
                                                            class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                            <path fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="1.5"
                                                                d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                            </path>
                                                        </svg></button></label>
                                                <div class="help-block -mt-2">
                                                    <p>The default sort direction.</p>
                                                </div>
                                            </div>
                                            <div data-v-288ded3d="" class="flex">
                                                <div data-v-288ded3d="" dir="auto"
                                                    class="v-select flex-1 vs--single vs--searchable"
                                                    name="sort_direction">
                                                    <div id="vs3__combobox" role="combobox" aria-expanded="false"
                                                        aria-owns="vs3__listbox" aria-label="Search for option"
                                                        class="vs__dropdown-toggle">
                                                        <div class="vs__selected-options"><span class="vs__selected">
                                                                Ascending
                                                            </span> <input id="field_sort_direction"
                                                                aria-autocomplete="list" aria-labelledby="vs3__combobox"
                                                                aria-controls="vs3__listbox" type="search"
                                                                autocomplete="off" class="vs__search"></div>
                                                        <div class="vs__actions"><button type="button"
                                                                title="Clear Selected" aria-label="Clear Selected"
                                                                class="vs__clear"
                                                                style="display: none;"><span>×</span></button> <span
                                                                class="toggle vs__open-indicator" role="presentation"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" height="16"
                                                                    width="16" viewBox="0 0 20 20">
                                                                    <path fill="currentColor"
                                                                        d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z">
                                                                    </path>
                                                                </svg></span>
                                                            <div class="vs__spinner" style="display: none;">Loading...
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul id="vs3__listbox" role="listbox"
                                                        style="display: none; visibility: hidden;"></ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group publish-field publish-field__max_depth integer-fieldtype w-full"
                                            style="display: none;">
                                            <div class="field-inner"><label for="field_max_depth"
                                                    class="publish-field-label"><span
                                                        class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Max
                                                        Depth</span><button class="outline-none"
                                                        style="display: none;"><svg xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 24 24"
                                                            class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                            <path fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="1.5"
                                                                d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5">
                                                            </path>
                                                        </svg></button><button class="outline-none"
                                                        style="display: none;"><svg xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 24 24"
                                                            class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                            <path fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="1.5"
                                                                d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                            </path>
                                                        </svg></button></label>
                                                <div class="help-block -mt-2">
                                                    <p>Set a maximum number of levels page may be nested. Leave blank for no
                                                        limit.</p>
                                                </div>
                                            </div>
                                            <div class="flex items-center">
                                                <div class="input-group"><input id="field_max_depth" name="max_depth"
                                                        type="number" class="input-text"></div>
                                            </div>
                                        </div>
                                        <div class="form-group publish-field publish-field__expects_root toggle-fieldtype w-full"
                                            style="display: none;">
                                            <div class="field-inner"><label for="field_expects_root"
                                                    class="publish-field-label"><span
                                                        class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Expect a root
                                                        page</span><button class="outline-none"
                                                        style="display: none;"><svg xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 24 24"
                                                            class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                            <path fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="1.5"
                                                                d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5">
                                                            </path>
                                                        </svg></button><button class="outline-none"
                                                        style="display: none;"><svg xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 24 24"
                                                            class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                            <path fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="1.5"
                                                                d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                            </path>
                                                        </svg></button></label>
                                                <div class="help-block -mt-2">
                                                    <p>Consider the first page in the tree a "root" or "home" page.</p>
                                                </div>
                                            </div>
                                            <div class="toggle-fieldtype-wrapper"><button type="button"
                                                    aria-pressed="false" aria-label="Toggle Button"
                                                    class="toggle-container" id="field_expects_root">
                                                    <div class="toggle-slider">
                                                        <div tabindex="0" class="toggle-knob"></div>
                                                    </div>
                                                </button></div>
                                        </div>
                                        <div class="form-group publish-field publish-field__show_slugs toggle-fieldtype w-full"
                                            style="display: none;">
                                            <div class="field-inner"><label for="field_show_slugs"
                                                    class="publish-field-label"><span
                                                        class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Slugs</span><button
                                                        class="outline-none" style="display: none;"><svg
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                            class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                            <path fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="1.5"
                                                                d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5">
                                                            </path>
                                                        </svg></button><button class="outline-none"
                                                        style="display: none;"><svg xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 24 24"
                                                            class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                            <path fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="1.5"
                                                                d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                            </path>
                                                        </svg></button></label>
                                                <div class="help-block -mt-2">
                                                    <p>Whether to display slugs in the tree view.</p>
                                                </div>
                                            </div>
                                            <div class="toggle-fieldtype-wrapper"><button type="button"
                                                    aria-pressed="false" aria-label="Toggle Button"
                                                    class="toggle-container" id="field_show_slugs">
                                                    <div class="toggle-slider">
                                                        <div tabindex="0" class="toggle-knob"></div>
                                                    </div>
                                                </button></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="mb-2 content">
                        <h2 class="text-base">Content Model</h2>
                        <p></p>
                    </div>
                    <div>
                        <div class="publish-sections">
                            <div class="publish-sections-section">
                                <div class="p-0 card">
                                    <div class="publish-fields @container">
                                        <div
                                            class="form-group publish-field publish-field__blueprints html-fieldtype w-full">
                                            <div class="field-inner"><label for="field_blueprints"
                                                    class="publish-field-label"><span
                                                        class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Blueprints</span><button
                                                        class="outline-none" style="display: none;"><svg
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                            class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                            <path fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="1.5"
                                                                d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5">
                                                            </path>
                                                        </svg></button><button class="outline-none"
                                                        style="display: none;"><svg xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 24 24"
                                                            class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                            <path fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="1.5"
                                                                d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                            </path>
                                                        </svg></button></label>
                                                <div class="help-block -mt-2">
                                                    <p>Entries in this collection may use any of these blueprints.</p>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="text-xs"> <span class="rtl:ml-4 ltr:mr-4">123</span> <a
                                                        href="http://127.0.0.1:8080/cp/collections/123/blueprints"
                                                        class="text-blue">Edit</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group publish-field publish-field__links toggle-fieldtype w-full">
                                            <div class="field-inner"><label for="field_links"
                                                    class="publish-field-label"><span
                                                        class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Links</span><button
                                                        class="outline-none" style="display: none;"><svg
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                            class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                            <path fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="1.5"
                                                                d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5">
                                                            </path>
                                                        </svg></button><button class="outline-none"
                                                        style="display: none;"><svg xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 24 24"
                                                            class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                            <path fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="1.5"
                                                                d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                            </path>
                                                        </svg></button></label>
                                                <div class="help-block -mt-2">
                                                    <p>Entries in this collection may contain links (redirects) to other
                                                        entries or URLs.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="toggle-fieldtype-wrapper"><button type="button"
                                                    aria-pressed="false" aria-label="Toggle Button"
                                                    class="toggle-container" id="field_links">
                                                    <div class="toggle-slider">
                                                        <div tabindex="0" class="toggle-knob"></div>
                                                    </div>
                                                </button></div>
                                        </div>
                                        <div
                                            class="form-group publish-field publish-field__taxonomies relationship-fieldtype w-full">
                                            <div class="field-inner"><label for="field_taxonomies"
                                                    class="publish-field-label"><span
                                                        class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Taxonomies</span><button
                                                        class="outline-none" style="display: none;"><svg
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                            class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                            <path fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="1.5"
                                                                d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5">
                                                            </path>
                                                        </svg></button><button class="outline-none"
                                                        style="display: none;"><svg xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 24 24"
                                                            class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                            <path fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="1.5"
                                                                d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                            </path>
                                                        </svg></button></label>
                                                <div class="help-block -mt-2">
                                                    <p>Connect entries in this collection to taxonomies. Fields will be
                                                        automatically added
                                                        to publish forms.</p>
                                                </div>
                                            </div>
                                            <div class="relationship-input relationship-input-empty">
                                                <div data-v-c80a132c="">
                                                    <div data-v-c80a132c="" dir="auto"
                                                        class="v-select vs--multiple vs--searchable">
                                                        <div id="vs6__combobox" role="combobox" aria-expanded="false"
                                                            aria-owns="vs6__listbox" aria-label="Search for option"
                                                            class="vs__dropdown-toggle">
                                                            <div class="vs__selected-options"> <input data-v-c80a132c=""
                                                                    placeholder="Choose..." type="search"
                                                                    aria-autocomplete="list"
                                                                    aria-labelledby="vs6__combobox"
                                                                    aria-controls="vs6__listbox" autocomplete="off"
                                                                    class="vs__search"></div>
                                                            <div class="vs__actions"><button type="button"
                                                                    title="Clear Selected" aria-label="Clear Selected"
                                                                    class="vs__clear"
                                                                    style="display: none;"><span>×</span></button> <span
                                                                    class="toggle vs__open-indicator"
                                                                    role="presentation"><svg
                                                                        xmlns="http://www.w3.org/2000/svg" height="16"
                                                                        width="16" viewBox="0 0 20 20">
                                                                        <path fill="currentColor"
                                                                            d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z">
                                                                        </path>
                                                                    </svg></span>
                                                                <div class="vs__spinner" style="display: none;">Loading...
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <ul id="vs6__listbox" role="listbox"
                                                            style="display: none; visibility: hidden;"></ul>
                                                        <div data-v-c80a132c=""
                                                            class="vs__selected-options-outside flex flex-wrap"
                                                            tabindex="0"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="form-group publish-field publish-field__default_publish_state toggle-fieldtype w-full">
                                            <div class="field-inner"><label for="field_default_publish_state"
                                                    class="publish-field-label"><span
                                                        class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Publish by
                                                        Default</span><button class="outline-none"
                                                        style="display: none;"><svg xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 24 24"
                                                            class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                            <path fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="1.5"
                                                                d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5">
                                                            </path>
                                                        </svg></button><button class="outline-none"
                                                        style="display: none;"><svg xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 24 24"
                                                            class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                            <path fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="1.5"
                                                                d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                            </path>
                                                        </svg></button></label>
                                                <div class="help-block -mt-2">
                                                    <p>While creating new entries in this collection the published toggle
                                                        will default to
                                                        <strong>true</strong> instead of <strong>false</strong> (draft).
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="toggle-fieldtype-wrapper"><button type="button"
                                                    aria-pressed="true" aria-label="Toggle Button"
                                                    class="toggle-container on" id="field_default_publish_state">
                                                    <div class="toggle-slider">
                                                        <div tabindex="0" class="toggle-knob"></div>
                                                    </div>
                                                </button></div>
                                        </div>
                                        <div
                                            class="form-group publish-field publish-field__title_formats collection_title_formats-fieldtype w-full">
                                            <div class="field-inner"><label for="field_title_formats"
                                                    class="publish-field-label"><span
                                                        class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Title
                                                        Format</span><button class="outline-none"
                                                        style="display: none;"><svg xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 24 24"
                                                            class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                            <path fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="1.5"
                                                                d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5">
                                                            </path>
                                                        </svg></button><button class="outline-none"
                                                        style="display: none;"><svg xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 24 24"
                                                            class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                            <path fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="1.5"
                                                                d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                            </path>
                                                        </svg></button></label>
                                                <div class="help-block -mt-2">
                                                    <p>Set this to have the entries in this collection generate their titles
                                                        automatically.
                                                        Learn more in the <a target="_blank"
                                                            href="https://statamic.dev/collections#titles">documentation</a>.
                                                    </p>
                                                </div>
                                            </div>
                                            <div>
                                                <div>
                                                    <div class="flex items-center slug-field" dir="ltr">
                                                        <div class="input-group"><input type="text"
                                                                class="input-text"></div>

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
                <div>
                    <div class="mb-2 content">
                        <h2 class="text-base">Routing &amp; URLs</h2>
                        <p></p>
                    </div>
                    <div>
                        <div class="publish-sections">
                            <div class="publish-sections-section">
                                <div class="p-0 card">
                                    <div class="publish-fields @container">
                                        <div
                                            class="form-group publish-field publish-field__routes collection_routes-fieldtype w-full">
                                            <div class="field-inner"><label for="field_routes"
                                                    class="publish-field-label"><span
                                                        class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Route</span><button
                                                        class="outline-none" style="display: none;"><svg
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                            class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                            <path fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="1.5"
                                                                d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5">
                                                            </path>
                                                        </svg></button><button class="outline-none"
                                                        style="display: none;"><svg xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 24 24"
                                                            class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                            <path fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="1.5"
                                                                d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                            </path>
                                                        </svg></button></label>
                                                <div class="help-block -mt-2">
                                                    <p>The route controls entries URL pattern. Learn more in the <a
                                                            target="_blank"
                                                            href="https://statamic.dev/collections#routing">documentation</a>.
                                                    </p>
                                                </div>
                                            </div>
                                            <div>
                                                <div>
                                                    <div class="flex items-center slug-field" dir="ltr">
                                                        <div class="input-group"><input type="text"
                                                                class="input-text"></div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="form-group publish-field publish-field__require_slugs toggle-fieldtype w-full">
                                            <div class="field-inner"><label for="field_require_slugs"
                                                    class="publish-field-label"><span
                                                        class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Require
                                                        Slugs</span><button class="outline-none"
                                                        style="display: none;"><svg xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 24 24"
                                                            class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                            <path fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="1.5"
                                                                d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5">
                                                            </path>
                                                        </svg></button><button class="outline-none"
                                                        style="display: none;"><svg xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 24 24"
                                                            class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                            <path fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="1.5"
                                                                d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                            </path>
                                                        </svg></button></label>
                                                <div class="help-block -mt-2">
                                                    <p>Whether entries are required to have slugs.</p>
                                                </div>
                                            </div>
                                            <div class="toggle-fieldtype-wrapper"><button type="button"
                                                    aria-pressed="true" aria-label="Toggle Button"
                                                    class="toggle-container on" id="field_require_slugs">
                                                    <div class="toggle-slider">
                                                        <div tabindex="0" class="toggle-knob"></div>
                                                    </div>
                                                </button></div>
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
@endsection
