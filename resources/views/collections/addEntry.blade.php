@extends('layouts.main')
@section('content')
    <script src="https://cdn.ckeditor.com/ckeditor5/41.3.1/classic/ckeditor.js"></script>

    <title>Create Entry :: Cedar</title>
    <div class="page-wrapper max-w-3xl">
        <div>
            <div class="breadcrumb flex"><a href="javascript:void(0);"
                    class="flex-initial flex p-2 -m-2 items-center text-xs text-gray-700 hover:text-gray-900"><svg
                        viewBox="0 0 24 24" class="align-middle h-6 w-4 rotate-180">
                        <path fill="currentColor" fill-rule="evenodd"
                            d="m10.414 7.05 4.95 4.95-4.95 4.95L9 15.534 12.536 12 9 8.464z"></path>
                    </svg><span>{{ 'Pages' }}</span></a></div>
            <div class="flex items-center mb-6">
                <h1 class="flex-1">
                    <div class="flex items-center"><span
                            class="little-dot rtl:ml-2 ltr:mr-2 published v-popper--has-tooltip"></span><span>{{ 'Create Entry' }}</span>
                    </div>
                </h1>
                <div class="hidden md:flex items-center">
                    <div class="btn-group"><button class="btn-primary">Save &amp; Publish</button>
                        <div class="dropdown-list rtl:text-right ltr:text-left">
                            <div aria-haspopup="true"><button class="rtl:rounded-r-none ltr:rounded-l-none btn-primary"><svg
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" class="w-3">
                                        <g fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="1.143">
                                            <path d="M4 13.143.571 9.714 4 6.286"></path>
                                            <path d="M15.429 2.857v2.286a4.571 4.571 0 0 1-4.572 4.571H.571"></path>
                                        </g>
                                    </svg></button></div>
                            <div class="v-portal" style="display: none;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div>
                    <div>
                        <div>
                            <div class="tabs-container flex items-center">
                                <div role="tablist" aria-label="Edit Content" class="publish-tabs tabs">
                                    <button role="tab" id="MainTab" aria-controls="MainTabPanel" tabindex="0"
                                        class="tab-button" aria-selected="true">Main</button>
                                    <button role="tab" id="SEOTab" aria-controls="SEOTabPanel" tabindex="-1"
                                        class="tab-button">SEO</button>
                                </div>
                            </div>
                            <div class="publish-tab-outer">
                                <div class="publish-tab-wrapper w-full min-w-0">
                                    <div id="MainTabPanel" class="tab-panel active">
                                        <div class="publish-sections">
                                            <div class="publish-sections-section">
                                                <div class="p-0 card">
                                                    <div class="publish-fields @container">
                                                        <div
                                                            class="form-group publish-field publish-field__title text-fieldtype w-full">
                                                            <div class="field-inner"><label for="field_title"
                                                                    class="publish-field-label"><span
                                                                        class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Title</span><i
                                                                        class="required rtl:ml-1 ltr:mr-1">*</i>
                                                                    <button class="outline-none" style="display: none;"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            viewBox="0 0 24 24"
                                                                            class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                            <path fill="none" stroke="currentColor"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round" stroke-width="1.5"
                                                                                d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5">
                                                                            </path>
                                                                        </svg>
                                                                    </button>
                                                                    <button class="outline-none" style="display: none;">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            viewBox="0 0 24 24"
                                                                            class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                            <path fill="none" stroke="currentColor"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round" stroke-width="1.5"
                                                                                d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                                            </path>
                                                                        </svg>
                                                                    </button>
                                                                </label>
                                                            </div>
                                                            <div class="flex items-center">
                                                                <div class="input-group">
                                                                    <input id="field_title" name="title" type="text"
                                                                        autofocus="autofocus" class="input-text"
                                                                        value="Contact Us">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="form-group publish-field publish-field__content markdown-fieldtype w-full">
                                                            <div class="field-inner"><label for="field_content"
                                                                    class="publish-field-label"><span
                                                                        class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Content</span>
                                                                    <button class="outline-none"
                                                                        style="display: none;"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            viewBox="0 0 24 24"
                                                                            class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                            <path fill="none" stroke="currentColor"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round" stroke-width="1.5"
                                                                                d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5">
                                                                            </path>
                                                                        </svg>
                                                                    </button>
                                                                    <button class="outline-none" style="display: none;">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            viewBox="0 0 24 24"
                                                                            class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                            <path fill="none" stroke="currentColor"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round" stroke-width="1.5"
                                                                                d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                                            </path>
                                                                        </svg>
                                                                    </button>
                                                                </label>
                                                            </div>
                                                            <div>
                                                               <textarea name="content" id="editor"></textarea>
                                                            </div><!----><!---->
                                                        </div>
                                                        <div
                                                            class="form-group publish-field publish-field__author relationship-fieldtype w-full">
                                                            <div class="field-inner"><label for="field_author"
                                                                    class="publish-field-label"><span
                                                                        class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Author</span>
                                                                    <button class="outline-none"
                                                                        style="display: none;"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            viewBox="0 0 24 24"
                                                                            class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                            <path fill="none" stroke="currentColor"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round" stroke-width="1.5"
                                                                                d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5">
                                                                            </path>
                                                                        </svg></button><button class="outline-none"
                                                                        style="display: none;"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            viewBox="0 0 24 24"
                                                                            class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                            <path fill="none" stroke="currentColor"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round" stroke-width="1.5"
                                                                                d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                                            </path>
                                                                        </svg></button></label><!----></div><!---->
                                                            <div class="relationship-input">
                                                                <div data-v-c80a132c="">
                                                                    <div data-v-c80a132c="" dir="auto"
                                                                        class="v-select vs--single vs--searchable">
                                                                        <div id="vs14__combobox" role="combobox"
                                                                            aria-expanded="false"
                                                                            aria-owns="vs14__listbox"
                                                                            aria-label="Search for option"
                                                                            class="vs__dropdown-toggle">
                                                                            <div class="vs__selected-options"><span
                                                                                    class="vs__selected">
                                                                                    Jack McDade
                                                                                    <!----></span> <input
                                                                                    aria-autocomplete="list"
                                                                                    aria-labelledby="vs14__combobox"
                                                                                    aria-controls="vs14__listbox"
                                                                                    type="search" autocomplete="off"
                                                                                    class="vs__search"></div>
                                                                            <div class="vs__actions"><button
                                                                                    type="button" title="Clear Selected"
                                                                                    aria-label="Clear Selected"
                                                                                    class="vs__clear"><span>×</span></button>
                                                                                <span class="toggle vs__open-indicator"
                                                                                    role="presentation"><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        height="16" width="16"
                                                                                        viewBox="0 0 20 20">
                                                                                        <path fill="currentColor"
                                                                                            d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z">
                                                                                        </path>
                                                                                    </svg></span>
                                                                                <div class="vs__spinner"
                                                                                    style="display: none;">Loading...</div>
                                                                            </div>
                                                                        </div>
                                                                        <ul id="vs14__listbox" role="listbox"
                                                                            style="display: none; visibility: hidden;">
                                                                        </ul>
                                                                    </div>
                                                                </div><!----><!---->
                                                            </div><!----><!---->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="SEOTabPanel" class="tab-panel">
                                        <div class="publish-sections">
                                            <div class="publish-sections-section">
                                                <div class="p-0 card"><!---->
                                                    <div class="publish-fields @container">
                                                        <div
                                                            class="form-group publish-field publish-field__seo seo_pro-fieldtype w-full">
                                                            <div class="field-inner"><label for="field_seo"
                                                                    class="publish-field-label"><span
                                                                        class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">SEO</span>
                                                                    <button class="outline-none"
                                                                        style="display: none;"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            viewBox="0 0 24 24"
                                                                            class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                            <path fill="none" stroke="currentColor"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round" stroke-width="1.5"
                                                                                d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5">
                                                                            </path>
                                                                        </svg></button><button class="outline-none"
                                                                        style="display: none;"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            viewBox="0 0 24 24"
                                                                            class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                            <path fill="none" stroke="currentColor"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round" stroke-width="1.5"
                                                                                d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                                            </path>
                                                                        </svg></button></label><!----></div><!---->
                                                            <div class="publish-fields">
                                                                <div
                                                                    class="form-group form-group publish-field publish-field__enabled toggle-fieldtype w-full">
                                                                    <div class="field-inner"><label for="field_enabled"
                                                                            class="publish-field-label"><span
                                                                                class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Enabled</span>
                                                                            <button class="outline-none"
                                                                                style="display: none;"><svg
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 24 24"
                                                                                    class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                                    <path fill="none"
                                                                                        stroke="currentColor"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        stroke-width="1.5"
                                                                                        d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5">
                                                                                    </path>
                                                                                </svg></button><button class="outline-none"
                                                                                style="display: none;"><svg
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 24 24"
                                                                                    class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                                    <path fill="none"
                                                                                        stroke="currentColor"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        stroke-width="1.5"
                                                                                        d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                                                    </path>
                                                                                </svg></button></label>
                                                                        <div class="help-block -mt-2">
                                                                            <p>Disabling this item will exclude it from
                                                                                reports and the sitemap, and prevent
                                                                                anything from being rendered through the
                                                                                template tag.</p>
                                                                        </div>
                                                                    </div><!---->
                                                                    <div class="toggle-fieldtype-wrapper"><button
                                                                            type="button" aria-pressed="true"
                                                                            aria-label="Toggle Button"
                                                                            class="toggle-container on"
                                                                            id="field_enabled">
                                                                            <div class="toggle-slider">
                                                                                <div tabindex="0" class="toggle-knob">
                                                                                </div>
                                                                            </div>
                                                                        </button><!----></div><!----><!---->
                                                                </div>
                                                                <div
                                                                    class="form-group form-group publish-field publish-field__title seo_pro_source-fieldtype w-full">
                                                                    <div class="field-inner"><label for="field_title"
                                                                            class="publish-field-label"><span
                                                                                class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Meta
                                                                                Title</span>
                                                                            <button class="outline-none"
                                                                                style="display: none;"><svg
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 24 24"
                                                                                    class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                                    <path fill="none"
                                                                                        stroke="currentColor"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        stroke-width="1.5"
                                                                                        d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5">
                                                                                    </path>
                                                                                </svg></button><button class="outline-none"
                                                                                style="display: none;"><svg
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 24 24"
                                                                                    class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                                    <path fill="none"
                                                                                        stroke="currentColor"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        stroke-width="1.5"
                                                                                        d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                                                    </path>
                                                                                </svg></button></label>
                                                                        <div class="help-block -mt-2">
                                                                            <p>Every URL in your site should have a unique
                                                                                Meta Title, ideally less than
                                                                                60 characters long.</p>
                                                                        </div>
                                                                    </div><!---->
                                                                    <div class="flex">
                                                                        <div class="source-type-select pr-4">
                                                                            <div dir="auto"
                                                                                class="v-select vs--single vs--searchable">
                                                                                <div id="vs2__combobox" role="combobox"
                                                                                    aria-expanded="false"
                                                                                    aria-owns="vs2__listbox"
                                                                                    aria-label="Search for option"
                                                                                    class="vs__dropdown-toggle">
                                                                                    <div class="vs__selected-options"><span
                                                                                            class="vs__selected">
                                                                                            Inherit
                                                                                            <!----></span> <input
                                                                                            aria-autocomplete="list"
                                                                                            aria-labelledby="vs2__combobox"
                                                                                            aria-controls="vs2__listbox"
                                                                                            type="search"
                                                                                            autocomplete="off"
                                                                                            class="vs__search"></div>
                                                                                    <div class="vs__actions"><button
                                                                                            type="button"
                                                                                            title="Clear Selected"
                                                                                            aria-label="Clear Selected"
                                                                                            class="vs__clear"
                                                                                            style="display: none;"><span>×</span></button>
                                                                                        <span
                                                                                            class="toggle vs__open-indicator"
                                                                                            role="presentation"><svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                height="16"
                                                                                                width="16"
                                                                                                viewBox="0 0 20 20">
                                                                                                <path fill="currentColor"
                                                                                                    d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z">
                                                                                                </path>
                                                                                            </svg></span>
                                                                                        <div class="vs__spinner"
                                                                                            style="display: none;">
                                                                                            Loading...</div>
                                                                                    </div>
                                                                                </div>
                                                                                <ul id="vs2__listbox" role="listbox"
                                                                                    style="display: none; visibility: hidden;">
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="flex-1">
                                                                            <div
                                                                                class="text-sm text-grey inherit-placeholder mt-1">
                                                                                Contact Us </div>
                                                                        </div>
                                                                    </div><!----><!---->
                                                                </div>
                                                                <div
                                                                    class="form-group form-group publish-field publish-field__description seo_pro_source-fieldtype w-full">
                                                                    <div class="field-inner"><label
                                                                            for="field_description"
                                                                            class="publish-field-label"><span
                                                                                class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Meta
                                                                                Description</span>
                                                                            <button class="outline-none"
                                                                                style="display: none;"><svg
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 24 24"
                                                                                    class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                                    <path fill="none"
                                                                                        stroke="currentColor"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        stroke-width="1.5"
                                                                                        d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5">
                                                                                    </path>
                                                                                </svg></button><button class="outline-none"
                                                                                style="display: none;"><svg
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 24 24"
                                                                                    class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                                    <path fill="none"
                                                                                        stroke="currentColor"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        stroke-width="1.5"
                                                                                        d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                                                    </path>
                                                                                </svg></button></label>
                                                                        <div class="help-block -mt-2">
                                                                            <p>Every URL in your site should have a unique
                                                                                Meta Description, ideally
                                                                                less than 160 characters long.</p>
                                                                        </div>
                                                                    </div><!---->
                                                                    <div class="flex">
                                                                        <div class="source-type-select pr-4">
                                                                            <div dir="auto"
                                                                                class="v-select vs--single vs--searchable">
                                                                                <div id="vs3__combobox" role="combobox"
                                                                                    aria-expanded="false"
                                                                                    aria-owns="vs3__listbox"
                                                                                    aria-label="Search for option"
                                                                                    class="vs__dropdown-toggle">
                                                                                    <div class="vs__selected-options"><span
                                                                                            class="vs__selected">
                                                                                            Inherit
                                                                                            <!----></span> <input
                                                                                            aria-autocomplete="list"
                                                                                            aria-labelledby="vs3__combobox"
                                                                                            aria-controls="vs3__listbox"
                                                                                            type="search"
                                                                                            autocomplete="off"
                                                                                            class="vs__search"></div>
                                                                                    <div class="vs__actions"><button
                                                                                            type="button"
                                                                                            title="Clear Selected"
                                                                                            aria-label="Clear Selected"
                                                                                            class="vs__clear"
                                                                                            style="display: none;"><span>×</span></button>
                                                                                        <span
                                                                                            class="toggle vs__open-indicator"
                                                                                            role="presentation"><svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                height="16"
                                                                                                width="16"
                                                                                                viewBox="0 0 20 20">
                                                                                                <path fill="currentColor"
                                                                                                    d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z">
                                                                                                </path>
                                                                                            </svg></span>
                                                                                        <div class="vs__spinner"
                                                                                            style="display: none;">
                                                                                            Loading...</div>
                                                                                    </div>
                                                                                </div>
                                                                                <ul id="vs3__listbox" role="listbox"
                                                                                    style="display: none; visibility: hidden;">
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="flex-1">
                                                                            <div
                                                                                class="text-sm text-grey inherit-placeholder mt-1">
                                                                            </div>
                                                                        </div>
                                                                    </div><!----><!---->
                                                                </div>
                                                                <div
                                                                    class="form-group form-group publish-field publish-field__site_name seo_pro_source-fieldtype w-full">
                                                                    <div class="field-inner"><label for="field_site_name"
                                                                            class="publish-field-label"><span
                                                                                class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Site
                                                                                Name</span>
                                                                            <button class="outline-none"
                                                                                style="display: none;"><svg
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 24 24"
                                                                                    class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                                    <path fill="none"
                                                                                        stroke="currentColor"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        stroke-width="1.5"
                                                                                        d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5">
                                                                                    </path>
                                                                                </svg></button><button class="outline-none"
                                                                                style="display: none;"><svg
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 24 24"
                                                                                    class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                                    <path fill="none"
                                                                                        stroke="currentColor"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        stroke-width="1.5"
                                                                                        d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                                                    </path>
                                                                                </svg></button></label>
                                                                        <div class="help-block -mt-2">
                                                                            <p>Optionally disable the site name for this
                                                                                page.</p>
                                                                        </div>
                                                                    </div><!---->
                                                                    <div class="flex">
                                                                        <div class="source-type-select pr-4">
                                                                            <div dir="auto"
                                                                                class="v-select vs--single vs--searchable">
                                                                                <div id="vs4__combobox" role="combobox"
                                                                                    aria-expanded="false"
                                                                                    aria-owns="vs4__listbox"
                                                                                    aria-label="Search for option"
                                                                                    class="vs__dropdown-toggle">
                                                                                    <div class="vs__selected-options"><span
                                                                                            class="vs__selected">
                                                                                            Inherit
                                                                                            <!----></span> <input
                                                                                            aria-autocomplete="list"
                                                                                            aria-labelledby="vs4__combobox"
                                                                                            aria-controls="vs4__listbox"
                                                                                            type="search"
                                                                                            autocomplete="off"
                                                                                            class="vs__search"></div>
                                                                                    <div class="vs__actions"><button
                                                                                            type="button"
                                                                                            title="Clear Selected"
                                                                                            aria-label="Clear Selected"
                                                                                            class="vs__clear"
                                                                                            style="display: none;"><span>×</span></button>
                                                                                        <span
                                                                                            class="toggle vs__open-indicator"
                                                                                            role="presentation"><svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                height="16"
                                                                                                width="16"
                                                                                                viewBox="0 0 20 20">
                                                                                                <path fill="currentColor"
                                                                                                    d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z">
                                                                                                </path>
                                                                                            </svg></span>
                                                                                        <div class="vs__spinner"
                                                                                            style="display: none;">
                                                                                            Loading...</div>
                                                                                    </div>
                                                                                </div>
                                                                                <ul id="vs4__listbox" role="listbox"
                                                                                    style="display: none; visibility: hidden;">
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="flex-1">
                                                                            <div
                                                                                class="text-sm text-grey inherit-placeholder mt-1">
                                                                                Site Name </div>
                                                                        </div>
                                                                    </div><!----><!---->
                                                                </div>
                                                                <div
                                                                    class="form-group form-group publish-field publish-field__site_name_position seo_pro_source-fieldtype w-full">
                                                                    <div class="field-inner"><label
                                                                            for="field_site_name_position"
                                                                            class="publish-field-label"><span
                                                                                class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Site
                                                                                Name
                                                                                Position</span>
                                                                            <button class="outline-none"
                                                                                style="display: none;"><svg
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 24 24"
                                                                                    class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                                    <path fill="none"
                                                                                        stroke="currentColor"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        stroke-width="1.5"
                                                                                        d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5">
                                                                                    </path>
                                                                                </svg></button><button class="outline-none"
                                                                                style="display: none;"><svg
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 24 24"
                                                                                    class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                                    <path fill="none"
                                                                                        stroke="currentColor"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        stroke-width="1.5"
                                                                                        d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                                                    </path>
                                                                                </svg></button></label>
                                                                        <div class="help-block -mt-2">
                                                                            <p>Optionally adjust the position for this page.
                                                                            </p>
                                                                        </div>
                                                                    </div><!---->
                                                                    <div class="flex">
                                                                        <div class="source-type-select pr-4">
                                                                            <div dir="auto"
                                                                                class="v-select vs--single vs--searchable">
                                                                                <div id="vs5__combobox" role="combobox"
                                                                                    aria-expanded="false"
                                                                                    aria-owns="vs5__listbox"
                                                                                    aria-label="Search for option"
                                                                                    class="vs__dropdown-toggle">
                                                                                    <div class="vs__selected-options"><span
                                                                                            class="vs__selected">
                                                                                            Inherit
                                                                                            <!----></span> <input
                                                                                            aria-autocomplete="list"
                                                                                            aria-labelledby="vs5__combobox"
                                                                                            aria-controls="vs5__listbox"
                                                                                            type="search"
                                                                                            autocomplete="off"
                                                                                            class="vs__search"></div>
                                                                                    <div class="vs__actions"><button
                                                                                            type="button"
                                                                                            title="Clear Selected"
                                                                                            aria-label="Clear Selected"
                                                                                            class="vs__clear"
                                                                                            style="display: none;"><span>×</span></button>
                                                                                        <span
                                                                                            class="toggle vs__open-indicator"
                                                                                            role="presentation"><svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                height="16"
                                                                                                width="16"
                                                                                                viewBox="0 0 20 20">
                                                                                                <path fill="currentColor"
                                                                                                    d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z">
                                                                                                </path>
                                                                                            </svg></span>
                                                                                        <div class="vs__spinner"
                                                                                            style="display: none;">
                                                                                            Loading...</div>
                                                                                    </div>
                                                                                </div>
                                                                                <ul id="vs5__listbox" role="listbox"
                                                                                    style="display: none; visibility: hidden;">
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="flex-1">
                                                                            <div
                                                                                class="text-sm text-grey inherit-placeholder mt-1">
                                                                                after </div>
                                                                        </div>
                                                                    </div><!----><!---->
                                                                </div>
                                                                <div
                                                                    class="form-group form-group publish-field publish-field__site_name_separator seo_pro_source-fieldtype w-full">
                                                                    <div class="field-inner"><label
                                                                            for="field_site_name_separator"
                                                                            class="publish-field-label"><span
                                                                                class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Site
                                                                                Name
                                                                                Separator</span>
                                                                            <button class="outline-none"
                                                                                style="display: none;"><svg
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 24 24"
                                                                                    class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                                    <path fill="none"
                                                                                        stroke="currentColor"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        stroke-width="1.5"
                                                                                        d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5">
                                                                                    </path>
                                                                                </svg></button><button class="outline-none"
                                                                                style="display: none;"><svg
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 24 24"
                                                                                    class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                                    <path fill="none"
                                                                                        stroke="currentColor"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        stroke-width="1.5"
                                                                                        d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                                                    </path>
                                                                                </svg></button></label>
                                                                        <div class="help-block -mt-2">
                                                                            <p>Optionally adjust the separator for this
                                                                                page.</p>
                                                                        </div>
                                                                    </div><!---->
                                                                    <div class="flex">
                                                                        <div class="source-type-select pr-4">
                                                                            <div dir="auto"
                                                                                class="v-select vs--single vs--searchable">
                                                                                <div id="vs6__combobox" role="combobox"
                                                                                    aria-expanded="false"
                                                                                    aria-owns="vs6__listbox"
                                                                                    aria-label="Search for option"
                                                                                    class="vs__dropdown-toggle">
                                                                                    <div class="vs__selected-options"><span
                                                                                            class="vs__selected">
                                                                                            Inherit
                                                                                            <!----></span> <input
                                                                                            aria-autocomplete="list"
                                                                                            aria-labelledby="vs6__combobox"
                                                                                            aria-controls="vs6__listbox"
                                                                                            type="search"
                                                                                            autocomplete="off"
                                                                                            class="vs__search"></div>
                                                                                    <div class="vs__actions"><button
                                                                                            type="button"
                                                                                            title="Clear Selected"
                                                                                            aria-label="Clear Selected"
                                                                                            class="vs__clear"
                                                                                            style="display: none;"><span>×</span></button>
                                                                                        <span
                                                                                            class="toggle vs__open-indicator"
                                                                                            role="presentation"><svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                height="16"
                                                                                                width="16"
                                                                                                viewBox="0 0 20 20">
                                                                                                <path fill="currentColor"
                                                                                                    d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z">
                                                                                                </path>
                                                                                            </svg></span>
                                                                                        <div class="vs__spinner"
                                                                                            style="display: none;">
                                                                                            Loading...</div>
                                                                                    </div>
                                                                                </div>
                                                                                <ul id="vs6__listbox" role="listbox"
                                                                                    style="display: none; visibility: hidden;">
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="flex-1">
                                                                            <div
                                                                                class="text-sm text-grey inherit-placeholder mt-1">
                                                                                | </div>
                                                                        </div>
                                                                    </div><!----><!---->
                                                                </div>
                                                                <div
                                                                    class="form-group form-group publish-field publish-field__canonical_url seo_pro_source-fieldtype w-full">
                                                                    <div class="field-inner"><label
                                                                            for="field_canonical_url"
                                                                            class="publish-field-label"><span
                                                                                class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Canonical
                                                                                URL</span>
                                                                            <button class="outline-none"
                                                                                style="display: none;"><svg
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 24 24"
                                                                                    class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                                    <path fill="none"
                                                                                        stroke="currentColor"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        stroke-width="1.5"
                                                                                        d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5">
                                                                                    </path>
                                                                                </svg></button><button class="outline-none"
                                                                                style="display: none;"><svg
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 24 24"
                                                                                    class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                                    <path fill="none"
                                                                                        stroke="currentColor"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        stroke-width="1.5"
                                                                                        d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                                                    </path>
                                                                                </svg></button></label>
                                                                        <div class="help-block -mt-2">
                                                                            <p>Every URL in your site should have a unique
                                                                                canonical URL.</p>
                                                                        </div>
                                                                    </div><!---->
                                                                    <div class="flex">
                                                                        <div class="source-type-select pr-4">
                                                                            <div dir="auto"
                                                                                class="v-select vs--single vs--searchable">
                                                                                <div id="vs7__combobox" role="combobox"
                                                                                    aria-expanded="false"
                                                                                    aria-owns="vs7__listbox"
                                                                                    aria-label="Search for option"
                                                                                    class="vs__dropdown-toggle">
                                                                                    <div class="vs__selected-options"><span
                                                                                            class="vs__selected">
                                                                                            Inherit
                                                                                            <!----></span> <input
                                                                                            aria-autocomplete="list"
                                                                                            aria-labelledby="vs7__combobox"
                                                                                            aria-controls="vs7__listbox"
                                                                                            type="search"
                                                                                            autocomplete="off"
                                                                                            class="vs__search"></div>
                                                                                    <div class="vs__actions"><button
                                                                                            type="button"
                                                                                            title="Clear Selected"
                                                                                            aria-label="Clear Selected"
                                                                                            class="vs__clear"
                                                                                            style="display: none;"><span>×</span></button>
                                                                                        <span
                                                                                            class="toggle vs__open-indicator"
                                                                                            role="presentation"><svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                height="16"
                                                                                                width="16"
                                                                                                viewBox="0 0 20 20">
                                                                                                <path fill="currentColor"
                                                                                                    d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z">
                                                                                                </path>
                                                                                            </svg></span>
                                                                                        <div class="vs__spinner"
                                                                                            style="display: none;">
                                                                                            Loading...</div>
                                                                                    </div>
                                                                                </div>
                                                                                <ul id="vs7__listbox" role="listbox"
                                                                                    style="display: none; visibility: hidden;">
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="flex-1">
                                                                            <div
                                                                                class="text-sm text-grey inherit-placeholder mt-1">
                                                                                https://demo.statamic.com/contact </div>
                                                                        </div>
                                                                    </div><!----><!---->
                                                                </div>
                                                                <div
                                                                    class="form-group form-group publish-field publish-field__robots seo_pro_source-fieldtype w-full">
                                                                    <div class="field-inner"><label for="field_robots"
                                                                            class="publish-field-label"><span
                                                                                class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Robots</span>
                                                                            <button class="outline-none"
                                                                                style="display: none;"><svg
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 24 24"
                                                                                    class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                                    <path fill="none"
                                                                                        stroke="currentColor"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        stroke-width="1.5"
                                                                                        d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5">
                                                                                    </path>
                                                                                </svg></button><button class="outline-none"
                                                                                style="display: none;"><svg
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 24 24"
                                                                                    class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                                    <path fill="none"
                                                                                        stroke="currentColor"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        stroke-width="1.5"
                                                                                        d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                                                    </path>
                                                                                </svg></button></label>
                                                                        <div class="help-block -mt-2">
                                                                            <p>Pick
                                                                                options for the robots meta tag. noindex
                                                                                prevents the page being
                                                                                indexed by search engines. nofollow prevents
                                                                                search engines from
                                                                                crawling links.</p>
                                                                        </div>
                                                                    </div><!---->
                                                                    <div class="flex">
                                                                        <div class="source-type-select pr-4">
                                                                            <div dir="auto"
                                                                                class="v-select vs--single vs--searchable">
                                                                                <div id="vs8__combobox" role="combobox"
                                                                                    aria-expanded="false"
                                                                                    aria-owns="vs8__listbox"
                                                                                    aria-label="Search for option"
                                                                                    class="vs__dropdown-toggle">
                                                                                    <div class="vs__selected-options">
                                                                                        <span class="vs__selected">
                                                                                            Inherit
                                                                                            <!----></span> <input
                                                                                            aria-autocomplete="list"
                                                                                            aria-labelledby="vs8__combobox"
                                                                                            aria-controls="vs8__listbox"
                                                                                            type="search"
                                                                                            autocomplete="off"
                                                                                            class="vs__search">
                                                                                    </div>
                                                                                    <div class="vs__actions"><button
                                                                                            type="button"
                                                                                            title="Clear Selected"
                                                                                            aria-label="Clear Selected"
                                                                                            class="vs__clear"
                                                                                            style="display: none;"><span>×</span></button>
                                                                                        <span
                                                                                            class="toggle vs__open-indicator"
                                                                                            role="presentation"><svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                height="16"
                                                                                                width="16"
                                                                                                viewBox="0 0 20 20">
                                                                                                <path fill="currentColor"
                                                                                                    d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z">
                                                                                                </path>
                                                                                            </svg></span>
                                                                                        <div class="vs__spinner"
                                                                                            style="display: none;">
                                                                                            Loading...</div>
                                                                                    </div>
                                                                                </div>
                                                                                <ul id="vs8__listbox" role="listbox"
                                                                                    style="display: none; visibility: hidden;">
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="flex-1">
                                                                            <div
                                                                                class="text-sm text-grey inherit-placeholder mt-1">
                                                                            </div>
                                                                        </div>
                                                                    </div><!----><!---->
                                                                </div>
                                                                <div
                                                                    class="form-group form-group publish-field publish-field__image seo_pro_source-fieldtype w-full">
                                                                    <div class="field-inner"><label for="field_image"
                                                                            class="publish-field-label"><span
                                                                                class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Social
                                                                                Image</span>
                                                                            <button class="outline-none"
                                                                                style="display: none;"><svg
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 24 24"
                                                                                    class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                                    <path fill="none"
                                                                                        stroke="currentColor"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        stroke-width="1.5"
                                                                                        d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5">
                                                                                    </path>
                                                                                </svg></button><button class="outline-none"
                                                                                style="display: none;"><svg
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 24 24"
                                                                                    class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                                    <path fill="none"
                                                                                        stroke="currentColor"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        stroke-width="1.5"
                                                                                        d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                                                    </path>
                                                                                </svg></button></label>
                                                                        <div class="help-block -mt-2">
                                                                            <p>This image is used as a social network
                                                                                preview image.</p>
                                                                        </div>
                                                                    </div><!---->
                                                                    <div class="flex">
                                                                        <div class="source-type-select pr-4">
                                                                            <div dir="auto"
                                                                                class="v-select vs--single vs--searchable">
                                                                                <div id="vs9__combobox" role="combobox"
                                                                                    aria-expanded="false"
                                                                                    aria-owns="vs9__listbox"
                                                                                    aria-label="Search for option"
                                                                                    class="vs__dropdown-toggle">
                                                                                    <div class="vs__selected-options">
                                                                                        <span class="vs__selected">
                                                                                            Inherit
                                                                                            <!----></span> <input
                                                                                            aria-autocomplete="list"
                                                                                            aria-labelledby="vs9__combobox"
                                                                                            aria-controls="vs9__listbox"
                                                                                            type="search"
                                                                                            autocomplete="off"
                                                                                            class="vs__search">
                                                                                    </div>
                                                                                    <div class="vs__actions"><button
                                                                                            type="button"
                                                                                            title="Clear Selected"
                                                                                            aria-label="Clear Selected"
                                                                                            class="vs__clear"
                                                                                            style="display: none;"><span>×</span></button>
                                                                                        <span
                                                                                            class="toggle vs__open-indicator"
                                                                                            role="presentation"><svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                height="16"
                                                                                                width="16"
                                                                                                viewBox="0 0 20 20">
                                                                                                <path fill="currentColor"
                                                                                                    d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z">
                                                                                                </path>
                                                                                            </svg></span>
                                                                                        <div class="vs__spinner"
                                                                                            style="display: none;">
                                                                                            Loading...</div>
                                                                                    </div>
                                                                                </div>
                                                                                <ul id="vs9__listbox" role="listbox"
                                                                                    style="display: none; visibility: hidden;">
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="flex-1">
                                                                            <div
                                                                                class="text-sm text-grey inherit-placeholder mt-1">
                                                                            </div>
                                                                        </div>
                                                                    </div><!----><!---->
                                                                </div>
                                                                <div
                                                                    class="form-group form-group publish-field publish-field__twitter_handle seo_pro_source-fieldtype w-full">
                                                                    <div class="field-inner"><label
                                                                            for="field_twitter_handle"
                                                                            class="publish-field-label"><span
                                                                                class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Twitter
                                                                                Handle</span>
                                                                            <button class="outline-none"
                                                                                style="display: none;"><svg
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 24 24"
                                                                                    class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                                    <path fill="none"
                                                                                        stroke="currentColor"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        stroke-width="1.5"
                                                                                        d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5">
                                                                                    </path>
                                                                                </svg></button><button class="outline-none"
                                                                                style="display: none;"><svg
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 24 24"
                                                                                    class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                                    <path fill="none"
                                                                                        stroke="currentColor"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        stroke-width="1.5"
                                                                                        d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                                                    </path>
                                                                                </svg></button></label>
                                                                        <div class="help-block -mt-2">
                                                                            <p>Optionally override the twitter handle for
                                                                                this page.</p>
                                                                        </div>
                                                                    </div><!---->
                                                                    <div class="flex">
                                                                        <div class="source-type-select pr-4">
                                                                            <div dir="auto"
                                                                                class="v-select vs--single vs--searchable">
                                                                                <div id="vs10__combobox" role="combobox"
                                                                                    aria-expanded="false"
                                                                                    aria-owns="vs10__listbox"
                                                                                    aria-label="Search for option"
                                                                                    class="vs__dropdown-toggle">
                                                                                    <div class="vs__selected-options">
                                                                                        <span class="vs__selected">
                                                                                            Inherit
                                                                                            <!----></span> <input
                                                                                            aria-autocomplete="list"
                                                                                            aria-labelledby="vs10__combobox"
                                                                                            aria-controls="vs10__listbox"
                                                                                            type="search"
                                                                                            autocomplete="off"
                                                                                            class="vs__search">
                                                                                    </div>
                                                                                    <div class="vs__actions"><button
                                                                                            type="button"
                                                                                            title="Clear Selected"
                                                                                            aria-label="Clear Selected"
                                                                                            class="vs__clear"
                                                                                            style="display: none;"><span>×</span></button>
                                                                                        <span
                                                                                            class="toggle vs__open-indicator"
                                                                                            role="presentation"><svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                height="16"
                                                                                                width="16"
                                                                                                viewBox="0 0 20 20">
                                                                                                <path fill="currentColor"
                                                                                                    d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z">
                                                                                                </path>
                                                                                            </svg></span>
                                                                                        <div class="vs__spinner"
                                                                                            style="display: none;">
                                                                                            Loading...</div>
                                                                                    </div>
                                                                                </div>
                                                                                <ul id="vs10__listbox" role="listbox"
                                                                                    style="display: none; visibility: hidden;">
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="flex-1">
                                                                            <div
                                                                                class="text-sm text-grey inherit-placeholder mt-1">
                                                                            </div>
                                                                        </div>
                                                                    </div><!----><!---->
                                                                </div>
                                                                <div
                                                                    class="form-group form-group publish-field publish-field__sitemap seo_pro_source-fieldtype w-full">
                                                                    <div class="field-inner"><label for="field_sitemap"
                                                                            class="publish-field-label"><span
                                                                                class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Sitemap</span>
                                                                            <button class="outline-none"
                                                                                style="display: none;"><svg
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 24 24"
                                                                                    class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                                    <path fill="none"
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
                                                                                    <path fill="none"
                                                                                        stroke="currentColor"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        stroke-width="1.5"
                                                                                        d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                                                    </path>
                                                                                </svg></button></label>
                                                                        <div class="help-block -mt-2">
                                                                            <p>If disabled, this item will not appear in the
                                                                                sitemap.</p>
                                                                        </div>
                                                                    </div><!---->
                                                                    <div class="flex">
                                                                        <div class="source-type-select pr-4">
                                                                            <div dir="auto"
                                                                                class="v-select vs--single vs--searchable">
                                                                                <div id="vs11__combobox" role="combobox"
                                                                                    aria-expanded="false"
                                                                                    aria-owns="vs11__listbox"
                                                                                    aria-label="Search for option"
                                                                                    class="vs__dropdown-toggle">
                                                                                    <div class="vs__selected-options">
                                                                                        <span class="vs__selected">
                                                                                            Inherit
                                                                                            <!----></span> <input
                                                                                            aria-autocomplete="list"
                                                                                            aria-labelledby="vs11__combobox"
                                                                                            aria-controls="vs11__listbox"
                                                                                            type="search"
                                                                                            autocomplete="off"
                                                                                            class="vs__search">
                                                                                    </div>
                                                                                    <div class="vs__actions"><button
                                                                                            type="button"
                                                                                            title="Clear Selected"
                                                                                            aria-label="Clear Selected"
                                                                                            class="vs__clear"
                                                                                            style="display: none;"><span>×</span></button>
                                                                                        <span
                                                                                            class="toggle vs__open-indicator"
                                                                                            role="presentation"><svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                height="16"
                                                                                                width="16"
                                                                                                viewBox="0 0 20 20">
                                                                                                <path fill="currentColor"
                                                                                                    d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z">
                                                                                                </path>
                                                                                            </svg></span>
                                                                                        <div class="vs__spinner"
                                                                                            style="display: none;">
                                                                                            Loading...</div>
                                                                                    </div>
                                                                                </div>
                                                                                <ul id="vs11__listbox" role="listbox"
                                                                                    style="display: none; visibility: hidden;">
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="flex-1">
                                                                            <div
                                                                                class="text-sm text-grey inherit-placeholder mt-1">
                                                                            </div>
                                                                        </div>
                                                                    </div><!----><!---->
                                                                </div>
                                                                <div
                                                                    class="form-group form-group publish-field publish-field__priority seo_pro_source-fieldtype w-full">
                                                                    <div class="field-inner"><label for="field_priority"
                                                                            class="publish-field-label"><span
                                                                                class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Sitemap:
                                                                                Priority</span>
                                                                            <button class="outline-none"
                                                                                style="display: none;"><svg
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 24 24"
                                                                                    class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                                    <path fill="none"
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
                                                                                    <path fill="none"
                                                                                        stroke="currentColor"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        stroke-width="1.5"
                                                                                        d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                                                    </path>
                                                                                </svg></button></label>
                                                                        <div class="help-block -mt-2">
                                                                            <p>The priority of this URL relative to other
                                                                                URLs on your site. Valid
                                                                                values range from <code>0.0</code> to
                                                                                <code>1.0</code>.
                                                                            </p>
                                                                        </div>
                                                                    </div><!---->
                                                                    <div class="flex">
                                                                        <div class="source-type-select pr-4">
                                                                            <div dir="auto"
                                                                                class="v-select vs--single vs--searchable">
                                                                                <div id="vs12__combobox" role="combobox"
                                                                                    aria-expanded="false"
                                                                                    aria-owns="vs12__listbox"
                                                                                    aria-label="Search for option"
                                                                                    class="vs__dropdown-toggle">
                                                                                    <div class="vs__selected-options">
                                                                                        <span class="vs__selected">
                                                                                            Inherit
                                                                                            <!----></span> <input
                                                                                            aria-autocomplete="list"
                                                                                            aria-labelledby="vs12__combobox"
                                                                                            aria-controls="vs12__listbox"
                                                                                            type="search"
                                                                                            autocomplete="off"
                                                                                            class="vs__search">
                                                                                    </div>
                                                                                    <div class="vs__actions"><button
                                                                                            type="button"
                                                                                            title="Clear Selected"
                                                                                            aria-label="Clear Selected"
                                                                                            class="vs__clear"
                                                                                            style="display: none;"><span>×</span></button>
                                                                                        <span
                                                                                            class="toggle vs__open-indicator"
                                                                                            role="presentation"><svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                height="16"
                                                                                                width="16"
                                                                                                viewBox="0 0 20 20">
                                                                                                <path fill="currentColor"
                                                                                                    d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z">
                                                                                                </path>
                                                                                            </svg></span>
                                                                                        <div class="vs__spinner"
                                                                                            style="display: none;">
                                                                                            Loading...</div>
                                                                                    </div>
                                                                                </div>
                                                                                <ul id="vs12__listbox" role="listbox"
                                                                                    style="display: none; visibility: hidden;">
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="flex-1">
                                                                            <div
                                                                                class="text-sm text-grey inherit-placeholder mt-1">
                                                                                0.5 </div>
                                                                        </div>
                                                                    </div><!----><!---->
                                                                </div>
                                                                <div
                                                                    class="form-group form-group publish-field publish-field__change_frequency seo_pro_source-fieldtype w-full">
                                                                    <div class="field-inner"><label
                                                                            for="field_change_frequency"
                                                                            class="publish-field-label"><span
                                                                                class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Sitemap:
                                                                                Change
                                                                                Frequency</span>
                                                                            <button class="outline-none"
                                                                                style="display: none;"><svg
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 24 24"
                                                                                    class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                                    <path fill="none"
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
                                                                                    <path fill="none"
                                                                                        stroke="currentColor"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        stroke-width="1.5"
                                                                                        d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                                                    </path>
                                                                                </svg></button></label>
                                                                        <div class="help-block -mt-2">
                                                                            <p>A hint to search engines on how frequently
                                                                                the page is likely to change.
                                                                            </p>
                                                                        </div>
                                                                    </div><!---->
                                                                    <div class="flex">
                                                                        <div class="source-type-select pr-4">
                                                                            <div dir="auto"
                                                                                class="v-select vs--single vs--searchable">
                                                                                <div id="vs13__combobox" role="combobox"
                                                                                    aria-expanded="false"
                                                                                    aria-owns="vs13__listbox"
                                                                                    aria-label="Search for option"
                                                                                    class="vs__dropdown-toggle">
                                                                                    <div class="vs__selected-options">
                                                                                        <span class="vs__selected">
                                                                                            Inherit
                                                                                            <!----></span> <input
                                                                                            aria-autocomplete="list"
                                                                                            aria-labelledby="vs13__combobox"
                                                                                            aria-controls="vs13__listbox"
                                                                                            type="search"
                                                                                            autocomplete="off"
                                                                                            class="vs__search">
                                                                                    </div>
                                                                                    <div class="vs__actions"><button
                                                                                            type="button"
                                                                                            title="Clear Selected"
                                                                                            aria-label="Clear Selected"
                                                                                            class="vs__clear"
                                                                                            style="display: none;"><span>×</span></button>
                                                                                        <span
                                                                                            class="toggle vs__open-indicator"
                                                                                            role="presentation"><svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                height="16"
                                                                                                width="16"
                                                                                                viewBox="0 0 20 20">
                                                                                                <path fill="currentColor"
                                                                                                    d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z">
                                                                                                </path>
                                                                                            </svg></span>
                                                                                        <div class="vs__spinner"
                                                                                            style="display: none;">
                                                                                            Loading...</div>
                                                                                    </div>
                                                                                </div>
                                                                                <ul id="vs13__listbox" role="listbox"
                                                                                    style="display: none; visibility: hidden;">
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="flex-1">
                                                                            <div
                                                                                class="text-sm text-grey inherit-placeholder mt-1">
                                                                                monthly </div>
                                                                        </div>
                                                                    </div><!----><!---->
                                                                </div>
                                                            </div><!----><!---->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="publish-sidebar">
                                    <div class="publish-tab">
                                        <div class="publish-tab-actions as-sidebar">
                                            <div>
                                                <div class="card p-0 mb-5">
                                                    <div class="">
                                                        <div class="p-3 flex items-center space-x-2"><button
                                                                class="flex items-center justify-center btn w-full"><svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 24 24"
                                                                    class="h-4 w-4 rtl:ml-2 ltr:mr-2 shrink-0">
                                                                    <g fill="none" stroke="currentColor"
                                                                        stroke-linecap="round" stroke-linejoin="round">
                                                                        <path d="M.713 10.34 3.5 14.49l3.205-3.838"></path>
                                                                        <path
                                                                            d="M3.489 14.439a8.947 8.947 0 0 1 6.554-10.727 8.492 8.492 0 0 1 8.325 2.641m4.917 7.289L20.498 9.49l-3.205 3.838">
                                                                        </path>
                                                                        <path
                                                                            d="M20.509 9.543a8.948 8.948 0 0 1-6.554 10.727 8.5 8.5 0 0 1-8.325-2.641">
                                                                        </path>
                                                                        <path d="M10 11.991a2 2 0 1 0 4 0 2 2 0 1 0-4 0Z">
                                                                        </path>
                                                                    </g>
                                                                </svg>
                                                                <span>Live Preview</span>
                                                            </button>
                                                            <a href="javascript:void(0);" target="_blank"
                                                                class="flex items-center justify-center btn w-full">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 24 24"
                                                                    class="w-4 h-4 rtl:ml-2 ltr:mr-2 shrink-0">
                                                                    <path fill="none" stroke="currentColor"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="1.5"
                                                                        d="M23.251 7.498V.748h-6.75m6.75 0-15 15m3-10.5h-9a1.5 1.5 0 0 0-1.5 1.5v15a1.5 1.5 0 0 0 1.5 1.5h15a1.5 1.5 0 0 0 1.5-1.5v-9">
                                                                    </path>
                                                                </svg>
                                                                <span>Visit URL</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="flex items-center justify-between px-4 py-2 border-t">
                                                        <label class="publish-field-label font-medium">Published</label>
                                                        <button type="button" aria-pressed="true"
                                                            aria-label="Toggle Button" class="toggle-container on">
                                                            <div class="toggle-slider">
                                                                <div tabindex="0" class="toggle-knob"></div>
                                                            </div>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="publish-sections">
                                            <div class="publish-sections-section">
                                                <div class="p-0 card">
                                                    <div class="publish-fields @container">
                                                        <div
                                                            class="form-group publish-field publish-field__slug slug-fieldtype w-full">
                                                            <div class="field-inner"><label for="field_slug"
                                                                    class="publish-field-label"><span
                                                                        class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Slug</span>
                                                                    <button class="outline-none"
                                                                        style="display: none;"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            viewBox="0 0 24 24"
                                                                            class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                            <path fill="none" stroke="currentColor"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                stroke-width="1.5"
                                                                                d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5">
                                                                            </path>
                                                                        </svg></button><button class="outline-none"
                                                                        style="display: none;"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            viewBox="0 0 24 24"
                                                                            class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                            <path fill="none" stroke="currentColor"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                stroke-width="1.5"
                                                                                d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                                            </path>
                                                                        </svg>
                                                                    </button>
                                                                </label>
                                                            </div>
                                                            <div>
                                                                <div class="flex items-center">
                                                                    <div class="input-group">
                                                                        <input id="field_slug" name="contact"
                                                                            type="text"dir="ltr"
                                                                            class="input-text font-mono text-xs"
                                                                            value="contact">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="form-group publish-field publish-field__parent relationship-fieldtype w-full">
                                                            <div class="field-inner"><label for="field_parent"
                                                                    class="publish-field-label"><span
                                                                        class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Parent</span>
                                                                    <button class="outline-none"
                                                                        style="display: none;"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            viewBox="0 0 24 24"
                                                                            class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                            <path fill="none" stroke="currentColor"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                stroke-width="1.5"
                                                                                d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5">
                                                                            </path>
                                                                        </svg></button><button class="outline-none"
                                                                        style="display: none;"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            viewBox="0 0 24 24"
                                                                            class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                            <path fill="none" stroke="currentColor"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                stroke-width="1.5"
                                                                                d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                                            </path>
                                                                        </svg>
                                                                    </button>
                                                                </label>
                                                            </div>
                                                            <div class="relationship-input">
                                                                <div
                                                                    class="relationship-input-items space-y-1 outline-none">
                                                                    <div class="item select-none item outline-none">
                                                                        <div class="item-inner">
                                                                            <div
                                                                                class="little-dot rtl:ml-2 ltr:mr-2 hidden@sm:block published">
                                                                            </div>
                                                                            <a href="javascript:void(0);"
                                                                                class="truncate v-popper--has-tooltip">Home</a>
                                                                            <div
                                                                                class="flex items-center flex-1 justify-end">
                                                                                <div
                                                                                    class="text-4xs text-gray-600 uppercase whitespace-nowrap rtl:ml-2 ltr:mr-2 hidden @sm:block">
                                                                                    Pages</div>
                                                                                <div class="flex items-center">
                                                                                    <div class="dropdown-list">
                                                                                        <div aria-haspopup="true"><button
                                                                                                aria-label="Open Dropdown"
                                                                                                class="rotating-dots-button"><svg
                                                                                                    width="12"
                                                                                                    viewBox="0 0 24 24"
                                                                                                    class="rotating-dots fill-current">
                                                                                                    <circle cx="3"
                                                                                                        cy="12"
                                                                                                        r="3"></circle>
                                                                                                    <circle cx="12"
                                                                                                        cy="12"
                                                                                                        r="3"></circle>
                                                                                                    <circle cx="21"
                                                                                                        cy="12"
                                                                                                        r="3"></circle>
                                                                                                </svg></button></div>
                                                                                        <div class="v-portal"
                                                                                            style="display: none;"></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <input type="hidden" name="parent"
                                                                    value="[&quot;home&quot;]">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="publish-tab publish-tab-actions-footer vue-portal-target "></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="md:hidden mt-6 flex items-center"><button
                    class="btn-lg btn-primary w-full">{{ 'Save' }}</button>
            </div>

        </div>
    </div>
    <script>

        $(document).ready(function() {
            $('#field_title').on('input', function() {
                var titleValue = $(this).val();
                var handleValue = titleValue.toLowerCase().replace(/[^a-z0-9]+/g, '-');
                $('#field_slug').val(handleValue);
            });
        });
    </script>
@endsection
