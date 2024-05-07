@extends('layouts.main')
@section('content')
    <title>Taxonomies edit :: Cedar</title>
    <div class="page-wrapper max-w-xl">
        <div>
            <header class="mb-6">
                <div class="breadcrumb flex"><a href="https://demo.statamic.com/cp/taxonomies/tags"
                        class="flex-initial flex p-2 -m-2 items-center text-xs text-gray-700 hover:text-gray-900"><svg
                            viewBox="0 0 24 24" class="align-middle h-6 w-4 rotate-180">
                            <path fill="currentColor" fill-rule="evenodd"
                                d="m10.414 7.05 4.95 4.95-4.95 4.95L9 15.534 12.536 12 9 8.464z"></path>
                        </svg><span>{{ $taxonomies->title }}</span></a></div>
                <div class="flex items-center">
                    <h1 class="flex-1">Configure Taxonomy</h1><button type="submit" class="btn-primary">Save</button>
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
                                <div class="p-0 card"><!---->
                                    <div class="publish-fields @container">
                                        <div class="form-group publish-field publish-field__title text-fieldtype w-full">
                                            <div class="field-inner"><label for="field_title"
                                                    class="publish-field-label"><span
                                                        class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Title</span><i
                                                        class="required rtl:ml-1 ltr:mr-1">*</i><!----><!----><!----><button
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
                                                        </svg></button></label><!----></div><!---->
                                            <div class="flex items-center">
                                                <div class="input-group"><!---->
                                                    <input id="field_title" name="title" type="text"
                                                        autofocus="autofocus" class="input-text"
                                                        value="{{ $taxonomies->title }}"><!---->
                                                </div><!---->
                                            </div><!----><!---->
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
                                <div class="p-0 card"><!---->
                                    <div class="publish-fields @container">
                                        <div
                                            class="form-group publish-field publish-field__collections relationship-fieldtype w-full">
                                            <div class="field-inner"><label for="field_collections"
                                                    class="publish-field-label"><span
                                                        class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Collections</span><!----><!----><!----><!----><button
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
                                                    <p>The collections that use this taxonomy.</p>
                                                </div>
                                            </div><!---->
                                            <div class="relationship-input">
                                                <div data-v-c80a132c="">
                                                    <div data-v-c80a132c="" dir="auto"
                                                        class="v-select vs--multiple vs--searchable">
                                                        <div id="vs4__combobox" role="combobox" aria-expanded="false"
                                                            aria-owns="vs4__listbox" aria-label="Search for option"
                                                            class="vs__dropdown-toggle">
                                                            <div class="vs__selected-options"><i data-v-c80a132c=""
                                                                    class="hidden"></i> <input data-v-c80a132c=""
                                                                    placeholder="Choose..." type="search"
                                                                    aria-autocomplete="list"
                                                                    aria-labelledby="vs4__combobox"
                                                                    aria-controls="vs4__listbox" autocomplete="off"
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
                                                        <ul id="vs4__listbox" role="listbox"
                                                            style="display: none; visibility: hidden;"></ul>
                                                        <div data-v-c80a132c=""
                                                            class="vs__selected-options-outside flex flex-wrap"
                                                            tabindex="0"><span data-v-c80a132c=""
                                                                class="vs__selected mt-2 sortable-item" tabindex="0">
                                                                News Articles <button data-v-c80a132c="" type="button"
                                                                    aria-label="Deselect option"
                                                                    class="vs__deselect"><span
                                                                        data-v-c80a132c="">×</span></button></span></div>
                                                    </div>
                                                </div><!----><!---->
                                            </div><!----><!---->
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
                                <div class="p-0 card"><!---->
                                    <div class="publish-fields @container">
                                        <div
                                            class="form-group publish-field publish-field__preview_targets grid-fieldtype w-full">
                                            <div class="field-inner"><label for="field_preview_targets"
                                                    class="publish-field-label"><span
                                                        class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Preview
                                                        Targets</span><!----><!----><!----><!----><button
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
                                                    <p>The URLs to be viewable within Live Preview. Learn more in the <a
                                                            target="_blank"
                                                            href="https://statamic.dev/live-preview#preview-targets">documentation</a>.
                                                    </p>
                                                </div>
                                            </div><!---->
                                            <div>
                                                <div class="grid-fieldtype-container"><!---->
                                                    <section class=""><!---->
                                                        <table class="grid-table">
                                                            <thead>
                                                                <tr>
                                                                    <th class="grid-drag-handle-header"></th>
                                                                    <th>
                                                                        <div class="flex items-center justify-between">
                                                                            <div>Label</div><!---->
                                                                        </div>
                                                                    </th>
                                                                    <th>
                                                                        <div class="flex items-center justify-between">
                                                                            <div>Format</div><!---->
                                                                        </div>
                                                                    </th>
                                                                    <th>
                                                                        <div class="flex items-center justify-between">
                                                                            <div>Refresh</div><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 10 10"
                                                                                class="text-gray-600 hover:text-gray-700 h-3 w-3 text-xs v-popper--has-tooltip">
                                                                                <path fill="currentColor"
                                                                                    d="M5 0a5 5 0 1 0 5 5 5.006 5.006 0 0 0-5-5Zm0 8.375a.875.875 0 1 1 .875-.875.875.875 0 0 1-.875.875Zm0-3a.625.625 0 0 1 0-1.25.625.625 0 1 0-.5-1 .625.625 0 1 1-1-.75 1.875 1.875 0 1 1 1.5 3Z">
                                                                                </path>
                                                                            </svg>
                                                                        </div>
                                                                    </th>
                                                                    <th class="row-controls"><button
                                                                            class="flex items-center w-full h-full justify-center text-gray-500 hover:text-gray-700"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                fill="none" viewBox="0 0 14 14"
                                                                                class="h-3.5 w-3.5">
                                                                                <path fill="currentColor"
                                                                                    fill-rule="evenodd"
                                                                                    d="M1.073 4.658.575 4.7c.054.64.828.91 1.274.465l.95-.95 1.489 1.489A1 1 0 0 0 5.702 4.29L4.212 2.8l.95-.95A.746.746 0 0 0 4.698.577C3.358.464 2.472.481 1.07.627a.5.5 0 0 0-.445.445C.479 2.474.462 3.361.575 4.7l.498-.042Zm12.352.042c-.054.64-.828.91-1.274.465l-.95-.95-1.489 1.489A1 1 0 1 1 8.298 4.29L9.787 2.8l-.95-.95c-.445-.445-.176-1.219.464-1.273 1.34-.113 2.227-.096 3.629.05a.5.5 0 0 1 .445.445c.146 1.402.163 2.289.05 3.628Zm0 4.6c-.054-.64-.828-.91-1.274-.465l-.95.95-1.489-1.489A1 1 0 1 0 8.298 9.71l1.489 1.49-.95.95c-.445.445-.176 1.219.464 1.273 1.34.113 2.227.096 3.629-.05a.5.5 0 0 0 .445-.445c.146-1.402.163-2.289.05-3.628Zm-12.8 3.628C.479 11.526.462 10.639.575 9.3c.054-.64.828-.91 1.274-.465l.95.95 1.489-1.489A1 1 0 1 1 5.702 9.71l-1.49 1.49.95.95a.746.746 0 0 1-.464 1.273c-1.34.113-2.226.096-3.628-.05a.5.5 0 0 1-.445-.445Z"
                                                                                    clip-rule="evenodd"></path>
                                                                            </svg><svg xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 24 24" class="h-3.5 w-3.5"
                                                                                style="display: none;">
                                                                                <path fill="currentColor"
                                                                                    d="M23.384.615a1.25 1.25 0 0 0-1.768 0L17.851 4.38a.25.25 0 0 1-.354 0l-1.325-1.325a.5.5 0 0 0-.854.353v4.773a.5.5 0 0 0 .5.5h4.773a.5.5 0 0 0 .353-.854L19.618 6.5a.25.25 0 0 1 .001-.353l3.765-3.765a1.251 1.251 0 0 0 0-1.767zM.616 23.383a1.25 1.25 0 0 0 1.768 0l3.765-3.765a.25.25 0 0 1 .352-.001l.001.001 1.326 1.325a.5.5 0 0 0 .854-.353v-4.773a.5.5 0 0 0-.5-.5H3.409a.5.5 0 0 0-.353.854L4.381 17.5a.25.25 0 0 1 0 .354L.616 21.615a1.25 1.25 0 0 0 0 1.768zm15.011-2.331a.5.5 0 0 0 .545-.109l1.328-1.325a.25.25 0 0 1 .352-.001l.001.001 3.765 3.765a1.25 1.25 0 0 0 1.768-1.768l-3.767-3.765a.25.25 0 0 1 0-.354l1.325-1.325a.5.5 0 0 0-.353-.854h-4.773a.5.5 0 0 0-.5.5v4.773a.5.5 0 0 0 .309.462zM8.682 3.408a.5.5 0 0 0-.854-.353L6.5 4.38a.247.247 0 0 1-.349.004l-.004-.004L2.384.615A1.25 1.25 0 0 0 .616 2.383l3.765 3.765a.25.25 0 0 1 0 .354L3.056 7.827a.5.5 0 0 0 .353.854h4.773a.5.5 0 0 0 .5-.5V3.408zM12 9.09a2.908 2.908 0 1 1 .001 5.817A2.908 2.908 0 0 1 12 9.09z">
                                                                                </path>
                                                                            </svg></button></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody tabindex="0">
                                                                @if (json_decode($taxonomies->settings))
                                                                    @foreach (json_decode($taxonomies->settings)->preview_targets as $data)
                                                                        <tr data-v-b63d425a=""
                                                                            class="preview_targets-sortable-item"
                                                                            tabindex="0">
                                                                            <td data-v-b63d425a=""
                                                                                class="drag-handle preview_targets-drag-handle">
                                                                            </td>
                                                                            <td data-v-b63d425a=""
                                                                                class="grid-cell text-fieldtype">
                                                                                <div class="@container">
                                                                                    <div class="flex items-center">
                                                                                        <div class="input-group">
                                                                                            <!----><input
                                                                                                id="preview_targets.0.label.field_label"
                                                                                                name="preview_targets[0][label]"
                                                                                                type="text"
                                                                                                class="input-text"
                                                                                                value="{{ $data->label ? $data->label : '' }}"><!---->
                                                                                        </div><!---->
                                                                                    </div>
                                                                                </div><!---->
                                                                            </td>
                                                                            <td data-v-b63d425a=""
                                                                                class="grid-cell text-fieldtype">
                                                                                <div class="@container">
                                                                                    <div class="flex items-center">
                                                                                        <div class="input-group">
                                                                                            <!----><input
                                                                                                id="preview_targets.0.format.field_format"
                                                                                                name="preview_targets[0][format]"
                                                                                                type="text"
                                                                                                class="input-text"
                                                                                                value="{{ $data->format ? $data->format : '' }}"><!---->
                                                                                        </div>
                                                                                        <!---->
                                                                                    </div>
                                                                                </div><!---->
                                                                            </td>
                                                                            <td data-v-b63d425a=""
                                                                                class="grid-cell toggle-fieldtype">
                                                                                <div class="@container">
                                                                                    <div class="toggle-fieldtype-wrapper">
                                                                                        <button type="button"
                                                                                            aria-pressed="true"
                                                                                            aria-label="Toggle Button"
                                                                                            class="toggle-container {{ $data->refresh == 1 ? 'on' : 'off' }}"
                                                                                            id="preview_targets.0.refresh.field_refresh">
                                                                                            <div class="toggle-slider">
                                                                                                <div tabindex="0"
                                                                                                    class="toggle-knob">
                                                                                                </div>
                                                                                            </div>
                                                                                        </button><!---->
                                                                                    </div>
                                                                                </div><!---->
                                                                            </td>
                                                                            <td data-v-b63d425a="" class="row-controls">
                                                                                <div data-v-b63d425a=""
                                                                                    class="dropdown-list">
                                                                                    <div aria-haspopup="true"><button
                                                                                            aria-label="Open Dropdown"
                                                                                            class="rotating-dots-button"><svg
                                                                                                width="12"
                                                                                                viewBox="0 0 24 24"
                                                                                                class="rotating-dots fill-current">
                                                                                                <circle cx="3"
                                                                                                    cy="12" r="3">
                                                                                                </circle>
                                                                                                <circle cx="12"
                                                                                                    cy="12" r="3">
                                                                                                </circle>
                                                                                                <circle cx="21"
                                                                                                    cy="12" r="3">
                                                                                                </circle>
                                                                                            </svg></button></div>
                                                                                    <div class="v-portal"
                                                                                        style="display: none;">
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    @endforeach
                                                                @endif

                                                            </tbody>
                                                        </table><button class="btn">Add Row</button>
                                                    </section>
                                                </div>
                                            </div><!----><!---->
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
