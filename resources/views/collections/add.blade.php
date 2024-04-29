@extends('layouts.main')
@section('content')
    <title>Create Entry :: Cedar</title>
    <div class="page-wrapper max-w-3xl">
        <div published="true">
            <div class="breadcrumb flex">
                <a
                        href="https://demo.statamic.com/cp/collections/news"
                        class="flex-initial flex p-2 -m-2 items-center text-xs text-gray-700 hover:text-gray-900"
                >
                    <svg
                            viewBox="0 0 24 24"
                            class="align-middle h-6 w-4 rotate-180"
                    >
                        <path
                                fill="currentColor"
                                fill-rule="evenodd"
                                d="m10.414 7.05 4.95 4.95-4.95 4.95L9 15.534 12.536 12 9 8.464z"
                        ></path>
                    </svg>

                    <span>News Articles</span>
                </a>
            </div>

            <div class="flex items-center mb-6">
                <h1 class="flex-1">
                    <div class="flex items-center">
                        <!--  -->

                        <span>Create Entry</span>
                    </div>
                </h1>

                <!--  -->
                <!--  -->

                <div class="hidden md:flex items-center">
                    <div class="btn-group">
                        <button class="btn-primary">Save &amp; Publish</button>

                        <div class="dropdown-list rtl:text-right ltr:text-left">
                            <div aria-haspopup="true">
                                <button class="rtl:rounded-r-none ltr:rounded-l-none btn-primary">
                                    <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 16 16"
                                            class="w-3"
                                    >
                                        <g
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="1.143"
                                        >
                                            <path d="M4 13.143.571 9.714 4 6.286"></path>
                                            <path d="M15.429 2.857v2.286a4.571 4.571 0 0 1-4.572 4.571H.571"></path>
                                        </g>
                                    </svg>
                                </button>
                            </div>

                            <div
                                    class="v-portal"
                                    style="display: none;"
                            ></div>
                        </div>
                    </div>

                    <!--  -->
                </div>
            </div>

            <div>
                <div>
                    <div>
                        <div>
                            <div class="tabs-container flex items-center">
                                <div
                                        role="tablist"
                                        aria-label="Edit Content"
                                        class="publish-tabs tabs"
                                >
                                    <button
                                            role="tab"
                                            id="MainTab"
                                            aria-controls="MainTabPanel"
                                            aria-selected="true"
                                            tabindex="0"
                                            class="tab-button active"
                                    >Main
                                    </button>

                                    <button
                                            role="tab"
                                            id="SEOTab"
                                            aria-controls="SEOTabPanel"
                                            tabindex="-1"
                                            class="tab-button"
                                    >SEO
                                    </button>
                                </div>

                                <!--  -->
                                <!--  -->
                                <!--  -->
                            </div>

                            <div class="publish-tab-outer">
                                <div class="publish-tab-wrapper w-full min-w-0">
                                    <div
                                            data-tab-handle="main"
                                            tabindex="0"
                                            class="publish-tab tab-panel w-full"
                                            role="tabpanel"
                                            id="MainTabPanel"
                                            aria-labelledby="MainTab"
                                    >
                                        <div class="publish-sections">
                                            <div class="publish-sections-section">
                                                <div class="p-0 card">
                                                    <!--  -->

                                                    <div class="publish-fields @container">
                                                        <div class="form-group publish-field publish-field__title text-fieldtype w-full">
                                                            <div class="field-inner">
                                                                <label
                                                                        for="field_title"
                                                                        class="publish-field-label"
                                                                >
                                                                    <span class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Title</span>

                                                                    <i class="required rtl:ml-1 ltr:mr-1">*</i>

                                                                    <!--  -->
                                                                    <!--  -->
                                                                    <!--  -->

                                                                    <button
                                                                            class="outline-none"
                                                                            style="display: none;"
                                                                    >
                                                                        <svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 24 24"
                                                                                class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip"
                                                                        >
                                                                            <path
                                                                                    fill="none"
                                                                                    stroke="currentColor"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    stroke-width="1.5"
                                                                                    d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5"
                                                                            ></path>
                                                                        </svg>
                                                                    </button>

                                                                    <button
                                                                            class="outline-none"
                                                                            style="display: none;"
                                                                    >
                                                                        <svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 24 24"
                                                                                class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip"
                                                                        >
                                                                            <path
                                                                                    fill="none"
                                                                                    stroke="currentColor"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    stroke-width="1.5"
                                                                                    d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5"
                                                                            ></path>
                                                                        </svg>
                                                                    </button>
                                                                </label>

                                                                <!--  -->
                                                            </div>

                                                            <!--  -->

                                                            <div class="flex items-center">
                                                                <div class="input-group">
                                                                    <!--  -->

                                                                    <input
                                                                            id="field_title"
                                                                            name="title"
                                                                            type="text"
                                                                            autofocus="autofocus"
                                                                            class="input-text"
                                                                    ></input>

                                                                    <!--  -->
                                                                </div>

                                                                <!--  -->
                                                            </div>

                                                            <!--  -->
                                                            <!--  -->
                                                        </div>

                                                        <div class="form-group publish-field publish-field__featured_image assets-fieldtype w-full">
                                                            <div class="field-inner">
                                                                <label
                                                                        for="field_featured_image"
                                                                        class="publish-field-label"
                                                                >
                                                                    <span class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Featured Image</span>

                                                                    <!--  -->
                                                                    <!--  -->
                                                                    <!--  -->
                                                                    <!--  -->

                                                                    <button
                                                                            class="outline-none"
                                                                            style="display: none;"
                                                                    >
                                                                        <svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 24 24"
                                                                                class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip"
                                                                        >
                                                                            <path
                                                                                    fill="none"
                                                                                    stroke="currentColor"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    stroke-width="1.5"
                                                                                    d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5"
                                                                            ></path>
                                                                        </svg>
                                                                    </button>

                                                                    <button
                                                                            class="outline-none"
                                                                            style="display: none;"
                                                                    >
                                                                        <svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 24 24"
                                                                                class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip"
                                                                        >
                                                                            <path
                                                                                    fill="none"
                                                                                    stroke="currentColor"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    stroke-width="1.5"
                                                                                    d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5"
                                                                            ></path>
                                                                        </svg>
                                                                    </button>
                                                                </label>

                                                                <!--  -->
                                                            </div>

                                                            <!--  -->

                                                            <div class="@container">
                                                                <div>
                                                                    <div class="">
                                                                        <input
                                                                                type="file"
                                                                                multiple="multiple"
                                                                                class="hidden"
                                                                        ></input>

                                                                        <div class="assets-fieldtype-drag-container">
                                                                            <div
                                                                                    class="drag-notification"
                                                                                    style="display: none;"
                                                                            >
                                                                                <svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 0 24 24"
                                                                                        class="h-6 @md:h-8 w-6 @md:w-8 rtl:ml-2 ltr:mr-2 @md:mr-6"
                                                                                >
                                                                                    <path
                                                                                            fill="none"
                                                                                            stroke="currentColor"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                            stroke-width="1.5"
                                                                                            d="M.752 2.251a1.5 1.5 0 0 1 1.5-1.5m0 22.5a1.5 1.5 0 0 1-1.5-1.5m22.5 0a1.5 1.5 0 0 1-1.5 1.5m0-22.5a1.5 1.5 0 0 1 1.5 1.5m0 15.75v-1.5m0-3.75v-1.5m0-3.75v-1.5m-22.5 12v-1.5m0-3.75v-1.5m0-3.75v-1.5m5.25-5.25h1.5m3.75 0h1.5m3.75 0h1.5m-12 22.5h1.5m3.75 0h1.5m3.75 0h1.5m-6-5.25v-12m4.5 4.5-4.5-4.5-4.5 4.5"
                                                                                    ></path>
                                                                                </svg>

                                                                                <span>Drop to Upload</span>
                                                                            </div>

                                                                            <div class="assets-fieldtype-picker">
                                                                                <button
                                                                                        type="button"
                                                                                        tabindex="0"
                                                                                        class="btn btn-with-icon"
                                                                                >
                                                                                    <svg
                                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                                            viewBox="0 0 24 24"
                                                                                            class="w-4 h-4 text-gray-800"
                                                                                    >
                                                                                        <path
                                                                                                fill="none"
                                                                                                stroke="currentColor"
                                                                                                stroke-linecap="round"
                                                                                                stroke-linejoin="round"
                                                                                                stroke-width="1.5"
                                                                                                d="M21.75 9V6a1.5 1.5 0 0 0-1.5-1.5h-12V3a1.5 1.5 0 0 0-1.5-1.5h-4.5A1.5 1.5 0 0 0 .75 3v17.8a1.7 1.7 0 0 0 3.336.438l2.351-11.154A1.5 1.5 0 0 1 7.879 9H21.75a1.5 1.5 0 0 1 1.45 1.886l-2.2 10.5a1.5 1.5 0 0 1-1.45 1.114H2.447"
                                                                                        ></path>

                                                                                        <path
                                                                                                fill="none"
                                                                                                stroke="currentColor"
                                                                                                stroke-linecap="round"
                                                                                                stroke-linejoin="round"
                                                                                                stroke-width="1.5"
                                                                                                d="M9.75 12.375a.375.375 0 1 1-.375.375.375.375 0 0 1 .375-.375m8.629 7.125-2.911-4.365a.75.75 0 0 0-1.238-.015l-2 2.851-1.23-.989a.75.75 0 0 0-1.092.17L8.34 19.5"
                                                                                        ></path>
                                                                                    </svg>

                                                                                    Browse
                                                                                </button>

                                                                                <p class="asset-upload-control">
                                                                                    <button
                                                                                            type="button"
                                                                                            class="upload-text-button"
                                                                                    >Upload file
                                                                                    </button>

                                                                                    <span class="drag-drop-text">
                                                  or drag &amp; drop here to replace.
                                                </span>
                                                                                </p>
                                                                            </div>

                                                                            <!--  -->
                                                                            <!--  -->
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <!--  -->
                                                            </div>

                                                            <!--  -->
                                                            <!--  -->
                                                        </div>

                                                        <div class="form-group publish-field publish-field__article_content bard-fieldtype w-full">
                                                            <div class="field-inner">
                                                                <label
                                                                        for="field_article_content"
                                                                        class="publish-field-label"
                                                                >
                                                                    <span class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Article Content</span>

                                                                    <!--  -->
                                                                    <!--  -->
                                                                    <!--  -->
                                                                    <!--  -->

                                                                    <button
                                                                            class="outline-none"
                                                                            style="display: none;"
                                                                    >
                                                                        <svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 24 24"
                                                                                class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip"
                                                                        >
                                                                            <path
                                                                                    fill="none"
                                                                                    stroke="currentColor"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    stroke-width="1.5"
                                                                                    d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5"
                                                                            ></path>
                                                                        </svg>
                                                                    </button>

                                                                    <button
                                                                            class="outline-none"
                                                                            style="display: none;"
                                                                    >
                                                                        <svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 24 24"
                                                                                class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip"
                                                                        >
                                                                            <path
                                                                                    fill="none"
                                                                                    stroke="currentColor"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    stroke-width="1.5"
                                                                                    d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5"
                                                                            ></path>
                                                                        </svg>
                                                                    </button>
                                                                </label>

                                                                <!--  -->
                                                            </div>

                                                            <!--  -->

                                                            <div>
                                                                <div class="">
                                                                    <div class="">
                                                                        <div class="bard-fieldtype-wrapper">
                                                                            <div class="bard-fixed-toolbar">
                                                                                <div class="flex flex-wrap flex-1 items-center no-select">
                                                                                    <button
                                                                                            aria-label="Heading 2"
                                                                                            class="bard-toolbar-button v-popper--has-tooltip"
                                                                                    >
                                                                                        <svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                viewBox="0 0 14 14"
                                                                                        >
                                                                                            <defs>
                                                                                                <clipPath id="a">
                                                                                                    <path
                                                                                                            fill="none"
                                                                                                            d="M0 0h14v14H0z"
                                                                                                    ></path>
                                                                                                </clipPath>
                                                                                            </defs>

                                                                                            <g clip-path="url(#a)">
                                                                                                <path
                                                                                                        fill="none"
                                                                                                        stroke="currentColor"
                                                                                                        stroke-linecap="round"
                                                                                                        stroke-linejoin="round"
                                                                                                        stroke-width="1.5"
                                                                                                        d="M12.93 12.75H9.61V12c0-.53.29-1 .74-1.22l1.84-.86c.44-.21.73-.67.73-1.18 0-.71-.54-1.29-1.21-1.29h-.86c-.54 0-1 .37-1.17.88M1 12.75V1.25m5.75 0v11.5M1 6.52h5.75"
                                                                                                ></path>
                                                                                            </g>
                                                                                        </svg>

                                                                                        <!--  -->
                                                                                    </button>

                                                                                    <button
                                                                                            aria-label="Heading 3"
                                                                                            class="bard-toolbar-button v-popper--has-tooltip"
                                                                                    >
                                                                                        <svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                viewBox="0 0 14 14"
                                                                                        >
                                                                                            <defs>
                                                                                                <clipPath id="a">
                                                                                                    <path
                                                                                                            fill="none"
                                                                                                            d="M0 0h14v14H0z"
                                                                                                    ></path>
                                                                                                </clipPath>
                                                                                            </defs>

                                                                                            <g clip-path="url(#a)">
                                                                                                <path
                                                                                                        fill="none"
                                                                                                        stroke="currentColor"
                                                                                                        stroke-linecap="round"
                                                                                                        stroke-linejoin="round"
                                                                                                        stroke-width="1.5"
                                                                                                        d="M9.54 11.87c.18.52.67.88 1.25.88h.88c.73 0 1.33-.59 1.33-1.33v-.22c0-.73-.59-1.33-1.33-1.33h-.44.33c.67 0 1.22-.54 1.22-1.22s-.54-1.22-1.22-1.22h-.66c-.56 0-1.03.37-1.17.88M1 12.75V1.25m5.75 0v11.5M1 6.52h5.75"
                                                                                                ></path>
                                                                                            </g>
                                                                                        </svg>

                                                                                        <!--  -->
                                                                                    </button>

                                                                                    <button
                                                                                            aria-label="Bold"
                                                                                            class="bard-toolbar-button v-popper--has-tooltip"
                                                                                    >
                                                                                        <svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                fill="none"
                                                                                                viewBox="0 0 14 14"
                                                                                        >
                                                                                            <path
                                                                                                    fill="currentColor"
                                                                                                    fill-rule="evenodd"
                                                                                                    d="M3.5.25a.75.75 0 0 0-.75.75v12a.75.75 0 0 0 .75.75h3.75a4 4 0 0 0 1.945-7.496A3.5 3.5 0 0 0 6.75.25H3.5Zm3.25 5.5a2 2 0 1 0 0-4h-2.5v4h2.5Zm-2.5 1.5v5h3a2.5 2.5 0 0 0 0-5h-3Z"
                                                                                                    clip-rule="evenodd"
                                                                                            ></path>
                                                                                        </svg>

                                                                                        <!--  -->
                                                                                    </button>

                                                                                    <button
                                                                                            aria-label="Italic"
                                                                                            class="bard-toolbar-button v-popper--has-tooltip"
                                                                                    >
                                                                                        <svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                fill="none"
                                                                                                viewBox="0 0 14 14"
                                                                                        >
                                                                                            <path
                                                                                                    fill="currentColor"
                                                                                                    fill-rule="evenodd"
                                                                                                    d="M12.45.345H5.637a.75.75 0 0 0 0 1.5H8.18l-3.965 10.31H1.55a.75.75 0 1 0 0 1.5h6.813a.75.75 0 0 0 0-1.5H5.82l3.965-10.31h2.664a.75.75 0 0 0 0-1.5Z"
                                                                                                    clip-rule="evenodd"
                                                                                            ></path>
                                                                                        </svg>

                                                                                        <!--  -->
                                                                                    </button>

                                                                                    <button
                                                                                            aria-label="Unordered List"
                                                                                            class="bard-toolbar-button v-popper--has-tooltip"
                                                                                    >
                                                                                        <svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                viewBox="0 0 24 24"
                                                                                        >
                                                                                            <g fill="currentColor">
                                                                                                <path d="M8.5 5H23a1 1 0 0 0 0-2H8.5a1 1 0 0 0 0 2ZM23 11H8.5a1 1 0 0 0 0 2H23a1 1 0 0 0 0-2Zm0 8H8.5a1 1 0 0 0 0 2H23a1 1 0 0 0 0-2Z"></path>

                                                                                                <rect
                                                                                                        width="3"
                                                                                                        height="3"
                                                                                                        x="1"
                                                                                                        y="2.5"
                                                                                                        rx=".5"
                                                                                                ></rect>

                                                                                                <path d="M3.5 1.5h-2A1.5 1.5 0 0 0 0 3v2a1.5 1.5 0 0 0 1.5 1.5h2A1.5 1.5 0 0 0 5 5V3a1.5 1.5 0 0 0-1.5-1.5ZM4 5a.5.5 0 0 1-.5.5h-2A.5.5 0 0 1 1 5V3a.5.5 0 0 1 .5-.5h2A.5.5 0 0 1 4 3Z"></path>

                                                                                                <rect
                                                                                                        width="3"
                                                                                                        height="3"
                                                                                                        x="1"
                                                                                                        y="10.5"
                                                                                                        rx=".5"
                                                                                                ></rect>

                                                                                                <path d="M3.5 9.5h-2A1.5 1.5 0 0 0 0 11v2a1.5 1.5 0 0 0 1.5 1.5h2A1.5 1.5 0 0 0 5 13v-2a1.5 1.5 0 0 0-1.5-1.5ZM4 13a.5.5 0 0 1-.5.5h-2A.5.5 0 0 1 1 13v-2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5Z"></path>

                                                                                                <rect
                                                                                                        width="3"
                                                                                                        height="3"
                                                                                                        x="1"
                                                                                                        y="18.5"
                                                                                                        rx=".5"
                                                                                                ></rect>

                                                                                                <path d="M3.5 17.5h-2A1.5 1.5 0 0 0 0 19v2a1.5 1.5 0 0 0 1.5 1.5h2A1.5 1.5 0 0 0 5 21v-2a1.5 1.5 0 0 0-1.5-1.5ZM4 21a.5.5 0 0 1-.5.5h-2A.5.5 0 0 1 1 21v-2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5Z"></path>
                                                                                            </g>
                                                                                        </svg>

                                                                                        <!--  -->
                                                                                    </button>

                                                                                    <button
                                                                                            aria-label="Ordered List"
                                                                                            class="bard-toolbar-button v-popper--has-tooltip"
                                                                                    >
                                                                                        <svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                viewBox="0 0 24 24"
                                                                                        >
                                                                                            <path
                                                                                                    fill="currentColor"
                                                                                                    d="M7.75 4.5h15a1 1 0 0 0 0-2h-15a1 1 0 0 0 0 2Zm15 6.5h-15a1 1 0 0 0 0 2h15a1 1 0 0 0 0-2Zm0 8.5h-15a1 1 0 0 0 0 2h15a1 1 0 0 0 0-2ZM2.21 17.25a2 2 0 0 0-1.93 1.48.75.75 0 0 0 1.45.39.5.5 0 0 1 .48-.37.5.5 0 0 1 .5.5.5.5 0 0 1-.5.5.75.75 0 0 0 0 1.5.5.5 0 0 1 .5.5.5.5 0 0 1-1 .13.75.75 0 1 0-1.44.41 2 2 0 0 0 3.92-.54 1.94 1.94 0 0 0-.34-1.11.28.28 0 0 1 0-.28 1.94 1.94 0 0 0 .34-1.11 2 2 0 0 0-1.98-2Zm2.04-6.5a2 2 0 0 0-4 0 .76.76 0 0 0 .75.75.76.76 0 0 0 .75-.75.5.5 0 0 1 1 0 1 1 0 0 1-.23.64L.41 14a.76.76 0 0 0-.09.79.76.76 0 0 0 .68.43h2.5a.75.75 0 0 0 0-1.5h-.42a.25.25 0 0 1-.22-.14.24.24 0 0 1 0-.27l.81-1a2.59 2.59 0 0 0 .58-1.56ZM4 5.25h-.25A.25.25 0 0 1 3.5 5V1.62A1.38 1.38 0 0 0 2.12.25H1.5a.75.75 0 0 0 0 1.5h.25A.25.25 0 0 1 2 2v3a.25.25 0 0 1-.25.25H1.5a.75.75 0 0 0 0 1.5H4a.75.75 0 0 0 0-1.5Z"
                                                                                            ></path>
                                                                                        </svg>

                                                                                        <!--  -->
                                                                                    </button>

                                                                                    <button
                                                                                            aria-label="Remove Formatting"
                                                                                            class="bard-toolbar-button v-popper--has-tooltip"
                                                                                    >
                                                                                        <svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                viewBox="0 0 24 24"
                                                                                        >
                                                                                            <path
                                                                                                    fill="currentColor"
                                                                                                    d="M20.48 21.66h-15a1 1 0 0 0 0 2h15a1 1 0 0 0 0-2ZM22 6.43 16.38.78a1.49 1.49 0 0 0-2.12 0L6.5 8.54a1 1 0 0 0 0 1.46l6.36 6.37a1 1 0 0 0 1.42 0L22 8.56a1.51 1.51 0 0 0 0-2.13ZM9.18 19.66a1.82 1.82 0 0 0 1.22-.53l1-1.13a.49.49 0 0 0 0-.68l-5.78-5.73a.5.5 0 0 0-.71 0l-2.65 2.7a2.59 2.59 0 0 0 0 3.6l1.08 1.22a1.75 1.75 0 0 0 1.21.55Z"
                                                                                            ></path>
                                                                                        </svg>

                                                                                        <!--  -->
                                                                                    </button>

                                                                                    <button
                                                                                            aria-label="Blockquote"
                                                                                            class="bard-toolbar-button v-popper--has-tooltip"
                                                                                    >
                                                                                        <svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                viewBox="0 0 24 24"
                                                                                        >
                                                                                            <path
                                                                                                    fill="currentColor"
                                                                                                    d="M9.93 3.93a9.71 9.71 0 0 0-9.43 10v1.24a4.94 4.94 0 1 0 4.94-4.94 4.5 4.5 0 0 0-1.11.14.24.24 0 0 1-.26-.09.26.26 0 0 1 0-.28 6.83 6.83 0 0 1 5.86-3.57 1.25 1.25 0 1 0 0-2.5Zm12.32 2.5a1.25 1.25 0 1 0 0-2.5 9.71 9.71 0 0 0-9.43 10v1.24a4.95 4.95 0 1 0 4.94-4.94 4.56 4.56 0 0 0-1.11.14.24.24 0 0 1-.26-.09.26.26 0 0 1 0-.28 6.83 6.83 0 0 1 5.86-3.57Z"
                                                                                            ></path>
                                                                                        </svg>

                                                                                        <!--  -->
                                                                                    </button>

                                                                                    <div class="">
                                                                                        <div aria-haspopup="true">
                                                                                            <button
                                                                                                    aria-label="Link"
                                                                                                    class="bard-toolbar-button v-popper--has-tooltip"
                                                                                            >
                                                                                                <svg
                                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                                        fill="none"
                                                                                                        viewBox="0 0 14 14"
                                                                                                >
                                                                                                    <path
                                                                                                            fill="currentColor"
                                                                                                            fill-rule="evenodd"
                                                                                                            d="M6.05 2.664a2.377 2.377 0 0 0 .257 3.057l.456.456-.586.586-.456-.456a2.377 2.377 0 0 0-3.057-.257l-.282.2A7.476 7.476 0 0 0 .645 7.974a2.768 2.768 0 0 0 .288 3.575l1.517 1.517a2.768 2.768 0 0 0 3.575.288 7.475 7.475 0 0 0 1.726-1.737l.22-.31a2.336 2.336 0 0 0-.254-3.005l-.48-.48.586-.586.48.48a2.337 2.337 0 0 0 3.006.253l.309-.22a7.479 7.479 0 0 0 1.737-1.725 2.768 2.768 0 0 0-.288-3.575L11.55.933A2.768 2.768 0 0 0 7.975.645a7.476 7.476 0 0 0-1.726 1.737l-.2.282Zm2.834 3.513.48.48a.837.837 0 0 0 1.076.09l.31-.22a5.975 5.975 0 0 0 1.388-1.379 1.268 1.268 0 0 0-.132-1.637l-1.517-1.517a1.268 1.268 0 0 0-1.637-.132c-.533.384-1 .853-1.38 1.389l-.2.281a.877.877 0 0 0 .095 1.128l.456.456.508-.508a.75.75 0 1 1 1.061 1.06l-.508.509ZM5.116 7.823l-.5.5a.75.75 0 1 0 1.062 1.06l.499-.499.48.48a.837.837 0 0 1 .09 1.076l-.22.31a5.975 5.975 0 0 1-1.379 1.388 1.268 1.268 0 0 1-1.637-.132L1.994 10.49a1.268 1.268 0 0 1-.132-1.637c.384-.533.853-1 1.389-1.38l.281-.2a.877.877 0 0 1 1.128.096l.456.455Z"
                                                                                                            clip-rule="evenodd"
                                                                                                    ></path>
                                                                                                </svg>
                                                                                            </button>
                                                                                        </div>

                                                                                        <div
                                                                                                class="v-portal"
                                                                                                style="display: none;"
                                                                                        ></div>
                                                                                    </div>

                                                                                    <button
                                                                                            aria-label="Image"
                                                                                            class="bard-toolbar-button v-popper--has-tooltip"
                                                                                    >
                                                                                        <svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                fill="none"
                                                                                                viewBox="0 0 14 14"
                                                                                        >
                                                                                            <path
                                                                                                    fill="currentColor"
                                                                                                    fill-rule="evenodd"
                                                                                                    d="M3.824.583C4.837.47 5.904.37 7 .37c1.097 0 2.163.1 3.176.213a3.696 3.696 0 0 1 3.252 3.262c.108 1.008.202 2.067.202 3.155 0 1.088-.094 2.147-.202 3.155a3.696 3.696 0 0 1-3.252 3.262c-1.013.113-2.08.213-3.176.213s-2.163-.1-3.176-.213a3.696 3.696 0 0 1-3.252-3.262C.464 9.147.37 8.088.37 7c0-1.088.094-2.147.202-3.155A3.696 3.696 0 0 1 3.824.583Zm6.724 3.669a1.446 1.446 0 1 1-2.893 0 1.446 1.446 0 0 1 2.893 0Zm-6.196 7.711c-1.159-.146-2.092-1.206-2.216-2.523a39.527 39.527 0 0 1-.147-2.015.464.464 0 0 1 .412-.489 5.59 5.59 0 0 1 .564-.027c1.405-.036 2.775.496 3.866 1.5.883.814 1.537 1.895 1.892 3.108a.465.465 0 0 1-.417.59 15.7 15.7 0 0 1-1.308.059c-.9 0-1.785-.094-2.646-.203Zm5.737-.103c-.136.046-.274-.05-.301-.19-.14-.726-.43-1.622-.957-2.405-.1-.147-.033-.353.14-.392a5.62 5.62 0 0 1 2.738.07c.113.031.184.14.174.257l-.022.24c-.108 1.144-.826 2.093-1.772 2.42Z"
                                                                                                    clip-rule="evenodd"
                                                                                            ></path>
                                                                                        </svg>

                                                                                        <!--  -->
                                                                                    </button>

                                                                                    <button
                                                                                            aria-label="Table"
                                                                                            class="bard-toolbar-button v-popper--has-tooltip"
                                                                                    >
                                                                                        <svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                viewBox="0 0 24 24"
                                                                                        >
                                                                                            <path
                                                                                                    fill="currentColor"
                                                                                                    fill-rule="evenodd"
                                                                                                    d="M17 17v5h2a3 3 0 0 0 3-3v-2h-5Zm-2 0H9v5h6v-5Zm2-2h5V9h-5v6Zm-2 0V9H9v6h6Zm2-8h5V5a3 3 0 0 0-3-3h-2v5Zm-2 0V2H9v5h6Zm9 9.177V19a5 5 0 0 1-5 5H5a5 5 0 0 1-5-5V5a5 5 0 0 1 5-5h14a5 5 0 0 1 5 5v2.823a.843.843 0 0 1 0 .354v7.646a.843.843 0 0 1 0 .354ZM7 2H5a3 3 0 0 0-3 3v2h5V2ZM2 9v6h5V9H2Zm0 8v2a3 3 0 0 0 3 3h2v-5H2Z"
                                                                                            ></path>
                                                                                        </svg>

                                                                                        <!--  -->
                                                                                    </button>

                                                                                    <button
                                                                                            aria-label="Show HTML Source"
                                                                                            class="bard-toolbar-button v-popper--has-tooltip"
                                                                                    >
                                                                                        <svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                fill="none"
                                                                                                viewBox="0 0 14 14"
                                                                                                class="w-4 h-4"
                                                                                        >
                                                                                            <path
                                                                                                    fill="currentColor"
                                                                                                    fill-rule="evenodd"
                                                                                                    d="M6.625 0a6.625 6.625 0 1 0 3.924 11.963l1.734 1.734a1 1 0 0 0 1.414-1.414l-1.734-1.734A6.625 6.625 0 0 0 6.625 0ZM4.243 5.783a.625.625 0 1 0-.884-.884L1.82 6.44a.625.625 0 0 0 0 .885l1.54 1.54a.625.625 0 1 0 .884-.884L3.145 6.882l1.098-1.099ZM9.007 4.9a.625.625 0 0 1 .884 0l1.54 1.54a.625.625 0 0 1 0 .885l-1.54 1.54a.625.625 0 1 1-.884-.884l1.098-1.098-1.098-1.099a.625.625 0 0 1 0-.884Zm-1.019-.387a.625.625 0 0 0-1.186-.395l-1.54 4.62a.625.625 0 1 0 1.186.396l1.54-4.62Z"
                                                                                                    clip-rule="evenodd"
                                                                                            ></path>
                                                                                        </svg>
                                                                                    </button>

                                                                                    <button
                                                                                            aria-label="Expand/Collapse Sets"
                                                                                            class="bard-toolbar-button v-popper--has-tooltip"
                                                                                    >
                                                                                        <svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                fill="none"
                                                                                                viewBox="0 0 14 14"
                                                                                                class="w-4 h-4"
                                                                                        >
                                                                                            <path
                                                                                                    fill="currentColor"
                                                                                                    fill-rule="evenodd"
                                                                                                    d="M10 3.956c.693 0 1.027-.874.473-1.324-.996-.81-1.77-1.332-2.98-2.022a.995.995 0 0 0-.986 0c-1.21.69-1.984 1.211-2.98 2.022-.553.45-.22 1.324.473 1.324h6Zm-6 6.088c-.693 0-1.026.874-.473 1.324.996.81 1.77 1.332 2.98 2.022.306.174.68.174.986 0 1.21-.69 1.984-1.211 2.98-2.022.553-.45.22-1.324-.473-1.324H4Zm1.548-4.497a2.055 2.055 0 1 0 2.907 2.907 2.055 2.055 0 0 0-2.907-2.907Z"
                                                                                                    clip-rule="evenodd"
                                                                                            ></path>
                                                                                        </svg>
                                                                                    </button>

                                                                                    <button
                                                                                            aria-label="Toggle Fullscreen Mode"
                                                                                            class="bard-toolbar-button v-popper--has-tooltip"
                                                                                    >
                                                                                        <svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                fill="none"
                                                                                                viewBox="0 0 48 48"
                                                                                                class="w-4 h-4"
                                                                                                style="display: none;"
                                                                                        >
                                                                                            <path
                                                                                                    fill="currentColor"
                                                                                                    d="M40.674 23.742c1.997-.18 2.898-2.252 1.642-3.814a75.944 75.944 0 0 0-3.292-3.802c3.5-3.788 5.666-6.544 6.862-8.18.806-1.103.914-2.49.03-3.531-.302-.356-.68-.767-1.151-1.235a21.09 21.09 0 0 0-1.173-1.087c-1.046-.893-2.433-.768-3.531.06-1.618 1.22-4.345 3.403-8.124 6.87a74.276 74.276 0 0 0-3.917-3.4c-1.547-1.24-3.578-.349-3.759 1.626-.386 4.222-.293 9.016-.083 12.926a3.85 3.85 0 0 0 3.643 3.644c3.888.208 8.65.301 12.853-.077Zm-33.35.516c-1.997.18-2.898 2.252-1.642 3.814a75.957 75.957 0 0 0 3.292 3.801c-3.5 3.788-5.666 6.544-6.862 8.18-.806 1.103-.914 2.49-.03 3.531.303.356.68.767 1.151 1.235.445.442.834.799 1.173 1.087 1.046.893 2.433.767 3.531-.06 1.618-1.22 4.344-3.403 8.123-6.87a74.256 74.256 0 0 0 3.917 3.4c1.547 1.24 3.578.349 3.759-1.626.386-4.221.293-9.015.083-12.925a3.85 3.85 0 0 0-3.643-3.644c-3.888-.208-8.649-.301-12.852.077Z"
                                                                                            ></path>
                                                                                        </svg>

                                                                                        <svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                fill="none"
                                                                                                viewBox="0 0 14 14"
                                                                                                class="w-4 h-4"
                                                                                        >
                                                                                            <path
                                                                                                    fill="currentColor"
                                                                                                    fill-rule="evenodd"
                                                                                                    d="M1.073 4.658.575 4.7c.054.64.828.91 1.274.465l.95-.95 1.489 1.489A1 1 0 0 0 5.702 4.29L4.212 2.8l.95-.95A.746.746 0 0 0 4.698.577C3.358.464 2.472.481 1.07.627a.5.5 0 0 0-.445.445C.479 2.474.462 3.361.575 4.7l.498-.042Zm12.352.042c-.054.64-.828.91-1.274.465l-.95-.95-1.489 1.489A1 1 0 1 1 8.298 4.29L9.787 2.8l-.95-.95c-.445-.445-.176-1.219.464-1.273 1.34-.113 2.227-.096 3.629.05a.5.5 0 0 1 .445.445c.146 1.402.163 2.289.05 3.628Zm0 4.6c-.054-.64-.828-.91-1.274-.465l-.95.95-1.489-1.489A1 1 0 1 0 8.298 9.71l1.489 1.49-.95.95c-.445.445-.176 1.219.464 1.273 1.34.113 2.227.096 3.629-.05a.5.5 0 0 0 .445-.445c.146-1.402.163-2.289.05-3.628Zm-12.8 3.628C.479 11.526.462 10.639.575 9.3c.054-.64.828-.91 1.274-.465l.95.95 1.489-1.489A1 1 0 1 1 5.702 9.71l-1.49 1.49.95.95a.746.746 0 0 1-.464 1.273c-1.34.113-2.226.096-3.628-.05a.5.5 0 0 1-.445-.445Z"
                                                                                                    clip-rule="evenodd"
                                                                                            ></path>
                                                                                        </svg>
                                                                                    </button>
                                                                                </div>
                                                                            </div>

                                                                            <div
                                                                                    tabindex="0"
                                                                                    class="bard-editor @container/bard"
                                                                            >
                                                                                <!--  -->
                                                                                <!--  -->
                                                                                <!--  -->

                                                                                <div id="field_article_content">
                                                                                    <div
                                                                                            contenteditable="true"
                                                                                            translate="no"
                                                                                            tabindex="0"
                                                                                            class="ProseMirror bard-content"
                                                                                    >
                                                                                        <p>
                                                                                            <br class="ProseMirror-trailingBreak">
                                                                                        </p>
                                                                                    </div>
                                                                                </div>

                                                                                <!--  -->
                                                                            </div>

                                                                            <div class="bard-footer-toolbar">
                                                                                <div>00:00 Reading Time</div>

                                                                                <!--  -->
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!--  -->
                                                            <!--  -->
                                                        </div>

                                                        <div class="form-group publish-field publish-field__author relationship-fieldtype w-full">
                                                            <div class="field-inner">
                                                                <label
                                                                        for="field_author"
                                                                        class="publish-field-label"
                                                                >
                                                                    <span class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Author</span>

                                                                    <!--  -->
                                                                    <!--  -->
                                                                    <!--  -->
                                                                    <!--  -->

                                                                    <button
                                                                            class="outline-none"
                                                                            style="display: none;"
                                                                    >
                                                                        <svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 24 24"
                                                                                class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip"
                                                                        >
                                                                            <path
                                                                                    fill="none"
                                                                                    stroke="currentColor"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    stroke-width="1.5"
                                                                                    d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5"
                                                                            ></path>
                                                                        </svg>
                                                                    </button>

                                                                    <button
                                                                            class="outline-none"
                                                                            style="display: none;"
                                                                    >
                                                                        <svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 24 24"
                                                                                class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip"
                                                                        >
                                                                            <path
                                                                                    fill="none"
                                                                                    stroke="currentColor"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    stroke-width="1.5"
                                                                                    d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5"
                                                                            ></path>
                                                                        </svg>
                                                                    </button>
                                                                </label>

                                                                <!--  -->
                                                            </div>

                                                            <!--  -->

                                                            <div class="relationship-input relationship-input-empty">
                                                                <div data-v-c80a132c="">
                                                                    <div
                                                                            data-v-c80a132c=""
                                                                            dir="auto"
                                                                            class="v-select vs--single vs--searchable"
                                                                    >
                                                                        <div
                                                                                id="vs13__combobox"
                                                                                role="combobox"
                                                                                aria-expanded="false"
                                                                                aria-owns="vs13__listbox"
                                                                                aria-label="Search for option"
                                                                                class="vs__dropdown-toggle"
                                                                        >
                                                                            <div class="vs__selected-options">
                                                                                <input
                                                                                        placeholder="Choose..."
                                                                                        aria-autocomplete="list"
                                                                                        aria-labelledby="vs13__combobox"
                                                                                        aria-controls="vs13__listbox"
                                                                                        type="search"
                                                                                        autocomplete="off"
                                                                                        class="vs__search"
                                                                                ></input>
                                                                            </div>

                                                                            <div class="vs__actions">
                                                                                <button
                                                                                        type="button"
                                                                                        title="Clear Selected"
                                                                                        aria-label="Clear Selected"
                                                                                        class="vs__clear"
                                                                                        style="display: none;"
                                                                                >
                                                                                    <span>×</span>
                                                                                </button>

                                                                                <span
                                                                                        class="toggle vs__open-indicator"
                                                                                        role="presentation"
                                                                                >
                                                <svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        height="16"
                                                        width="16"
                                                        viewBox="0 0 20 20"
                                                >
                                                  <path
                                                          fill="currentColor"
                                                          d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
                                                  ></path>
                                                </svg>
                                              </span>

                                                                                <div
                                                                                        class="vs__spinner"
                                                                                        style="display: none;"
                                                                                >Loading...
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <ul
                                                                                id="vs13__listbox"
                                                                                role="listbox"
                                                                                style="display: none; visibility: hidden;"
                                                                        ></ul>
                                                                    </div>
                                                                </div>

                                                                <!--  -->
                                                                <!--  -->
                                                            </div>

                                                            <!--  -->
                                                            <!--  -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div
                                            data-tab-handle="SEO"
                                            tabindex="0"
                                            class="publish-tab tab-panel w-full"
                                            style="display: none;"
                                            role="tabpanel"
                                            id="SEOTabPanel"
                                            aria-labelledby="SEOTab"
                                    >
                                        <div class="publish-sections">
                                            <div class="publish-sections-section">
                                                <div class="p-0 card">
                                                    <!--  -->

                                                    <div class="publish-fields @container">
                                                        <div class="form-group publish-field publish-field__seo seo_pro-fieldtype w-full">
                                                            <div class="field-inner">
                                                                <label
                                                                        for="field_seo"
                                                                        class="publish-field-label"
                                                                >
                                                                    <span class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">SEO</span>

                                                                    <!--  -->
                                                                    <!--  -->
                                                                    <!--  -->
                                                                    <!--  -->

                                                                    <button
                                                                            class="outline-none"
                                                                            style="display: none;"
                                                                    >
                                                                        <svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 24 24"
                                                                                class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip"
                                                                        >
                                                                            <path
                                                                                    fill="none"
                                                                                    stroke="currentColor"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    stroke-width="1.5"
                                                                                    d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5"
                                                                            ></path>
                                                                        </svg>
                                                                    </button>

                                                                    <button
                                                                            class="outline-none"
                                                                            style="display: none;"
                                                                    >
                                                                        <svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 24 24"
                                                                                class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip"
                                                                        >
                                                                            <path
                                                                                    fill="none"
                                                                                    stroke="currentColor"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    stroke-width="1.5"
                                                                                    d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5"
                                                                            ></path>
                                                                        </svg>
                                                                    </button>
                                                                </label>

                                                                <!--  -->
                                                            </div>

                                                            <!--  -->

                                                            <div class="publish-fields">
                                                                <div class="form-group form-group publish-field publish-field__enabled toggle-fieldtype w-full">
                                                                    <div class="field-inner">
                                                                        <label
                                                                                for="field_enabled"
                                                                                class="publish-field-label"
                                                                        >
                                                                            <span class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Enabled</span>

                                                                            <!--  -->
                                                                            <!--  -->
                                                                            <!--  -->
                                                                            <!--  -->

                                                                            <button
                                                                                    class="outline-none"
                                                                                    style="display: none;"
                                                                            >
                                                                                <svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 0 24 24"
                                                                                        class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip"
                                                                                >
                                                                                    <path
                                                                                            fill="none"
                                                                                            stroke="currentColor"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                            stroke-width="1.5"
                                                                                            d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5"
                                                                                    ></path>
                                                                                </svg>
                                                                            </button>

                                                                            <button
                                                                                    class="outline-none"
                                                                                    style="display: none;"
                                                                            >
                                                                                <svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 0 24 24"
                                                                                        class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip"
                                                                                >
                                                                                    <path
                                                                                            fill="none"
                                                                                            stroke="currentColor"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                            stroke-width="1.5"
                                                                                            d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5"
                                                                                    ></path>
                                                                                </svg>
                                                                            </button>
                                                                        </label>

                                                                        <div class="help-block -mt-2">
                                                                            <p>
                                                                                Disabling
                                                                                this section will exclude it from
                                                                                reports and the sitemap, and prevent
                                                                                anything from being rendered through the
                                                                                template tag.
                                                                            </p>
                                                                        </div>
                                                                    </div>

                                                                    <!--  -->

                                                                    <div class="toggle-fieldtype-wrapper">
                                                                        <button
                                                                                type="button"
                                                                                aria-pressed="true"
                                                                                aria-label="Toggle Button"
                                                                                class="toggle-container on"
                                                                                id="field_enabled"
                                                                        >
                                                                            <div class="toggle-slider">
                                                                                <div
                                                                                        tabindex="0"
                                                                                        class="toggle-knob"
                                                                                ></div>
                                                                            </div>
                                                                        </button>

                                                                        <!--  -->
                                                                    </div>

                                                                    <!--  -->
                                                                    <!--  -->
                                                                </div>

                                                                <div class="form-group form-group publish-field publish-field__title seo_pro_source-fieldtype w-full">
                                                                    <div class="field-inner">
                                                                        <label
                                                                                for="field_title"
                                                                                class="publish-field-label"
                                                                        >
                                                                            <span class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Meta Title</span>

                                                                            <!--  -->
                                                                            <!--  -->
                                                                            <!--  -->
                                                                            <!--  -->

                                                                            <button
                                                                                    class="outline-none"
                                                                                    style="display: none;"
                                                                            >
                                                                                <svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 0 24 24"
                                                                                        class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip"
                                                                                >
                                                                                    <path
                                                                                            fill="none"
                                                                                            stroke="currentColor"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                            stroke-width="1.5"
                                                                                            d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5"
                                                                                    ></path>
                                                                                </svg>
                                                                            </button>

                                                                            <button
                                                                                    class="outline-none"
                                                                                    style="display: none;"
                                                                            >
                                                                                <svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 0 24 24"
                                                                                        class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip"
                                                                                >
                                                                                    <path
                                                                                            fill="none"
                                                                                            stroke="currentColor"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                            stroke-width="1.5"
                                                                                            d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5"
                                                                                    ></path>
                                                                                </svg>
                                                                            </button>
                                                                        </label>

                                                                        <div class="help-block -mt-2">
                                                                            <p>
                                                                                Pick an existing field to set as this
                                                                                section's

                                                                                <strong>default</strong>

                                                                                meta title.
                                                                            </p>
                                                                        </div>
                                                                    </div>

                                                                    <!--  -->

                                                                    <div class="flex">
                                                                        <div class="source-type-select pr-4">
                                                                            <div
                                                                                    dir="auto"
                                                                                    class="v-select vs--single vs--searchable"
                                                                            >
                                                                                <div
                                                                                        id="vs1__combobox"
                                                                                        role="combobox"
                                                                                        aria-expanded="false"
                                                                                        aria-owns="vs1__listbox"
                                                                                        aria-label="Search for option"
                                                                                        class="vs__dropdown-toggle"
                                                                                >
                                                                                    <div class="vs__selected-options">
                                                  <span class="vs__selected">
                                                    Inherit

                                                      <!--  -->
                                                  </span>

                                                                                        <input
                                                                                                aria-autocomplete="list"
                                                                                                aria-labelledby="vs1__combobox"
                                                                                                aria-controls="vs1__listbox"
                                                                                                type="search"
                                                                                                autocomplete="off"
                                                                                                class="vs__search"
                                                                                        ></input>
                                                                                    </div>

                                                                                    <div class="vs__actions">
                                                                                        <button
                                                                                                type="button"
                                                                                                title="Clear Selected"
                                                                                                aria-label="Clear Selected"
                                                                                                class="vs__clear"
                                                                                                style="display: none;"
                                                                                        >
                                                                                            <span>×</span>
                                                                                        </button>

                                                                                        <span
                                                                                                class="toggle vs__open-indicator"
                                                                                                role="presentation"
                                                                                        >
                                                    <svg
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            height="16"
                                                            width="16"
                                                            viewBox="0 0 20 20"
                                                    >
                                                      <path
                                                              fill="currentColor"
                                                              d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
                                                      ></path>
                                                    </svg>
                                                  </span>

                                                                                        <div
                                                                                                class="vs__spinner"
                                                                                                style="display: none;"
                                                                                        >Loading...
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <ul
                                                                                        id="vs1__listbox"
                                                                                        role="listbox"
                                                                                        style="display: none; visibility: hidden;"
                                                                                ></ul>
                                                                            </div>
                                                                        </div>

                                                                        <div class="flex-1">
                                                                            <div class="text-sm text-grey inherit-placeholder mt-1">
                                                                                Home
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <!--  -->
                                                                    <!--  -->
                                                                </div>

                                                                <div class="form-group form-group publish-field publish-field__description seo_pro_source-fieldtype w-full">
                                                                    <div class="field-inner">
                                                                        <label
                                                                                for="field_description"
                                                                                class="publish-field-label"
                                                                        >
                                                                            <span class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Meta Description</span>

                                                                            <!--  -->
                                                                            <!--  -->
                                                                            <!--  -->
                                                                            <!--  -->

                                                                            <button
                                                                                    class="outline-none"
                                                                                    style="display: none;"
                                                                            >
                                                                                <svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 0 24 24"
                                                                                        class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip"
                                                                                >
                                                                                    <path
                                                                                            fill="none"
                                                                                            stroke="currentColor"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                            stroke-width="1.5"
                                                                                            d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5"
                                                                                    ></path>
                                                                                </svg>
                                                                            </button>

                                                                            <button
                                                                                    class="outline-none"
                                                                                    style="display: none;"
                                                                            >
                                                                                <svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 0 24 24"
                                                                                        class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip"
                                                                                >
                                                                                    <path
                                                                                            fill="none"
                                                                                            stroke="currentColor"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                            stroke-width="1.5"
                                                                                            d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5"
                                                                                    ></path>
                                                                                </svg>
                                                                            </button>
                                                                        </label>

                                                                        <div class="help-block -mt-2">
                                                                            <p>
                                                                                Pick an existing field to set as this
                                                                                section's

                                                                                <strong>default</strong>

                                                                                meta description.
                                                                            </p>
                                                                        </div>
                                                                    </div>

                                                                    <!--  -->

                                                                    <div class="flex">
                                                                        <div class="source-type-select pr-4">
                                                                            <div
                                                                                    dir="auto"
                                                                                    class="v-select vs--single vs--searchable"
                                                                            >
                                                                                <div
                                                                                        id="vs2__combobox"
                                                                                        role="combobox"
                                                                                        aria-expanded="false"
                                                                                        aria-owns="vs2__listbox"
                                                                                        aria-label="Search for option"
                                                                                        class="vs__dropdown-toggle"
                                                                                >
                                                                                    <div class="vs__selected-options">
                                                  <span class="vs__selected">
                                                    Inherit

                                                      <!--  -->
                                                  </span>

                                                                                        <input
                                                                                                aria-autocomplete="list"
                                                                                                aria-labelledby="vs2__combobox"
                                                                                                aria-controls="vs2__listbox"
                                                                                                type="search"
                                                                                                autocomplete="off"
                                                                                                class="vs__search"
                                                                                        ></input>
                                                                                    </div>

                                                                                    <div class="vs__actions">
                                                                                        <button
                                                                                                type="button"
                                                                                                title="Clear Selected"
                                                                                                aria-label="Clear Selected"
                                                                                                class="vs__clear"
                                                                                                style="display: none;"
                                                                                        >
                                                                                            <span>×</span>
                                                                                        </button>

                                                                                        <span
                                                                                                class="toggle vs__open-indicator"
                                                                                                role="presentation"
                                                                                        >
                                                    <svg
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            height="16"
                                                            width="16"
                                                            viewBox="0 0 20 20"
                                                    >
                                                      <path
                                                              fill="currentColor"
                                                              d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
                                                      ></path>
                                                    </svg>
                                                  </span>

                                                                                        <div
                                                                                                class="vs__spinner"
                                                                                                style="display: none;"
                                                                                        >Loading...
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <ul
                                                                                        id="vs2__listbox"
                                                                                        role="listbox"
                                                                                        style="display: none; visibility: hidden;"
                                                                                ></ul>
                                                                            </div>
                                                                        </div>

                                                                        <div class="flex-1">
                                                                            <div class="text-sm text-grey inherit-placeholder mt-1"></div>
                                                                        </div>
                                                                    </div>

                                                                    <!--  -->
                                                                    <!--  -->
                                                                </div>

                                                                <div class="form-group form-group publish-field publish-field__site_name seo_pro_source-fieldtype w-full">
                                                                    <div class="field-inner">
                                                                        <label
                                                                                for="field_site_name"
                                                                                class="publish-field-label"
                                                                        >
                                                                            <span class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Site Name</span>

                                                                            <!--  -->
                                                                            <!--  -->
                                                                            <!--  -->
                                                                            <!--  -->

                                                                            <button
                                                                                    class="outline-none"
                                                                                    style="display: none;"
                                                                            >
                                                                                <svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 0 24 24"
                                                                                        class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip"
                                                                                >
                                                                                    <path
                                                                                            fill="none"
                                                                                            stroke="currentColor"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                            stroke-width="1.5"
                                                                                            d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5"
                                                                                    ></path>
                                                                                </svg>
                                                                            </button>

                                                                            <button
                                                                                    class="outline-none"
                                                                                    style="display: none;"
                                                                            >
                                                                                <svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 0 24 24"
                                                                                        class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip"
                                                                                >
                                                                                    <path
                                                                                            fill="none"
                                                                                            stroke="currentColor"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                            stroke-width="1.5"
                                                                                            d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5"
                                                                                    ></path>
                                                                                </svg>
                                                                            </button>
                                                                        </label>

                                                                        <div class="help-block -mt-2">
                                                                            <p>
                                                                                Optionally disable the site name for
                                                                                this section.
                                                                            </p>
                                                                        </div>
                                                                    </div>

                                                                    <!--  -->

                                                                    <div class="flex">
                                                                        <div class="source-type-select pr-4">
                                                                            <div
                                                                                    dir="auto"
                                                                                    class="v-select vs--single vs--searchable"
                                                                            >
                                                                                <div
                                                                                        id="vs3__combobox"
                                                                                        role="combobox"
                                                                                        aria-expanded="false"
                                                                                        aria-owns="vs3__listbox"
                                                                                        aria-label="Search for option"
                                                                                        class="vs__dropdown-toggle"
                                                                                >
                                                                                    <div class="vs__selected-options">
                                                  <span class="vs__selected">
                                                    Inherit

                                                      <!--  -->
                                                  </span>

                                                                                        <input
                                                                                                aria-autocomplete="list"
                                                                                                aria-labelledby="vs3__combobox"
                                                                                                aria-controls="vs3__listbox"
                                                                                                type="search"
                                                                                                autocomplete="off"
                                                                                                class="vs__search"
                                                                                        ></input>
                                                                                    </div>

                                                                                    <div class="vs__actions">
                                                                                        <button
                                                                                                type="button"
                                                                                                title="Clear Selected"
                                                                                                aria-label="Clear Selected"
                                                                                                class="vs__clear"
                                                                                                style="display: none;"
                                                                                        >
                                                                                            <span>×</span>
                                                                                        </button>

                                                                                        <span
                                                                                                class="toggle vs__open-indicator"
                                                                                                role="presentation"
                                                                                        >
                                                    <svg
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            height="16"
                                                            width="16"
                                                            viewBox="0 0 20 20"
                                                    >
                                                      <path
                                                              fill="currentColor"
                                                              d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
                                                      ></path>
                                                    </svg>
                                                  </span>

                                                                                        <div
                                                                                                class="vs__spinner"
                                                                                                style="display: none;"
                                                                                        >Loading...
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <ul
                                                                                        id="vs3__listbox"
                                                                                        role="listbox"
                                                                                        style="display: none; visibility: hidden;"
                                                                                ></ul>
                                                                            </div>
                                                                        </div>

                                                                        <div class="flex-1">
                                                                            <div class="text-sm text-grey inherit-placeholder mt-1">
                                                                                Site Name
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <!--  -->
                                                                    <!--  -->
                                                                </div>

                                                                <div class="form-group form-group publish-field publish-field__site_name_position seo_pro_source-fieldtype w-full">
                                                                    <div class="field-inner">
                                                                        <label
                                                                                for="field_site_name_position"
                                                                                class="publish-field-label"
                                                                        >
                                                                            <span class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Site Name Position</span>

                                                                            <!--  -->
                                                                            <!--  -->
                                                                            <!--  -->
                                                                            <!--  -->

                                                                            <button
                                                                                    class="outline-none"
                                                                                    style="display: none;"
                                                                            >
                                                                                <svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 0 24 24"
                                                                                        class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip"
                                                                                >
                                                                                    <path
                                                                                            fill="none"
                                                                                            stroke="currentColor"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                            stroke-width="1.5"
                                                                                            d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5"
                                                                                    ></path>
                                                                                </svg>
                                                                            </button>

                                                                            <button
                                                                                    class="outline-none"
                                                                                    style="display: none;"
                                                                            >
                                                                                <svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 0 24 24"
                                                                                        class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip"
                                                                                >
                                                                                    <path
                                                                                            fill="none"
                                                                                            stroke="currentColor"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                            stroke-width="1.5"
                                                                                            d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5"
                                                                                    ></path>
                                                                                </svg>
                                                                            </button>
                                                                        </label>

                                                                        <div class="help-block -mt-2">
                                                                            <p>
                                                                                Optionally adjust the position for this
                                                                                section.
                                                                            </p>
                                                                        </div>
                                                                    </div>

                                                                    <!--  -->

                                                                    <div class="flex">
                                                                        <div class="source-type-select pr-4">
                                                                            <div
                                                                                    dir="auto"
                                                                                    class="v-select vs--single vs--searchable"
                                                                            >
                                                                                <div
                                                                                        id="vs4__combobox"
                                                                                        role="combobox"
                                                                                        aria-expanded="false"
                                                                                        aria-owns="vs4__listbox"
                                                                                        aria-label="Search for option"
                                                                                        class="vs__dropdown-toggle"
                                                                                >
                                                                                    <div class="vs__selected-options">
                                                  <span class="vs__selected">
                                                    Inherit

                                                      <!--  -->
                                                  </span>

                                                                                        <input
                                                                                                aria-autocomplete="list"
                                                                                                aria-labelledby="vs4__combobox"
                                                                                                aria-controls="vs4__listbox"
                                                                                                type="search"
                                                                                                autocomplete="off"
                                                                                                class="vs__search"
                                                                                        ></input>
                                                                                    </div>

                                                                                    <div class="vs__actions">
                                                                                        <button
                                                                                                type="button"
                                                                                                title="Clear Selected"
                                                                                                aria-label="Clear Selected"
                                                                                                class="vs__clear"
                                                                                                style="display: none;"
                                                                                        >
                                                                                            <span>×</span>
                                                                                        </button>

                                                                                        <span
                                                                                                class="toggle vs__open-indicator"
                                                                                                role="presentation"
                                                                                        >
                                                    <svg
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            height="16"
                                                            width="16"
                                                            viewBox="0 0 20 20"
                                                    >
                                                      <path
                                                              fill="currentColor"
                                                              d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
                                                      ></path>
                                                    </svg>
                                                  </span>

                                                                                        <div
                                                                                                class="vs__spinner"
                                                                                                style="display: none;"
                                                                                        >Loading...
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <ul
                                                                                        id="vs4__listbox"
                                                                                        role="listbox"
                                                                                        style="display: none; visibility: hidden;"
                                                                                ></ul>
                                                                            </div>
                                                                        </div>

                                                                        <div class="flex-1">
                                                                            <div class="text-sm text-grey inherit-placeholder mt-1">
                                                                                after
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <!--  -->
                                                                    <!--  -->
                                                                </div>

                                                                <div class="form-group form-group publish-field publish-field__site_name_separator seo_pro_source-fieldtype w-full">
                                                                    <div class="field-inner">
                                                                        <label
                                                                                for="field_site_name_separator"
                                                                                class="publish-field-label"
                                                                        >
                                                                            <span class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Site Name Separator</span>

                                                                            <!--  -->
                                                                            <!--  -->
                                                                            <!--  -->
                                                                            <!--  -->

                                                                            <button
                                                                                    class="outline-none"
                                                                                    style="display: none;"
                                                                            >
                                                                                <svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 0 24 24"
                                                                                        class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip"
                                                                                >
                                                                                    <path
                                                                                            fill="none"
                                                                                            stroke="currentColor"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                            stroke-width="1.5"
                                                                                            d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5"
                                                                                    ></path>
                                                                                </svg>
                                                                            </button>

                                                                            <button
                                                                                    class="outline-none"
                                                                                    style="display: none;"
                                                                            >
                                                                                <svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 0 24 24"
                                                                                        class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip"
                                                                                >
                                                                                    <path
                                                                                            fill="none"
                                                                                            stroke="currentColor"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                            stroke-width="1.5"
                                                                                            d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5"
                                                                                    ></path>
                                                                                </svg>
                                                                            </button>
                                                                        </label>

                                                                        <div class="help-block -mt-2">
                                                                            <p>
                                                                                Optionally adjust the separator for this
                                                                                section.
                                                                            </p>
                                                                        </div>
                                                                    </div>

                                                                    <!--  -->

                                                                    <div class="flex">
                                                                        <div class="source-type-select pr-4">
                                                                            <div
                                                                                    dir="auto"
                                                                                    class="v-select vs--single vs--searchable"
                                                                            >
                                                                                <div
                                                                                        id="vs5__combobox"
                                                                                        role="combobox"
                                                                                        aria-expanded="false"
                                                                                        aria-owns="vs5__listbox"
                                                                                        aria-label="Search for option"
                                                                                        class="vs__dropdown-toggle"
                                                                                >
                                                                                    <div class="vs__selected-options">
                                                  <span class="vs__selected">
                                                    Inherit

                                                      <!--  -->
                                                  </span>

                                                                                        <input
                                                                                                aria-autocomplete="list"
                                                                                                aria-labelledby="vs5__combobox"
                                                                                                aria-controls="vs5__listbox"
                                                                                                type="search"
                                                                                                autocomplete="off"
                                                                                                class="vs__search"
                                                                                        ></input>
                                                                                    </div>

                                                                                    <div class="vs__actions">
                                                                                        <button
                                                                                                type="button"
                                                                                                title="Clear Selected"
                                                                                                aria-label="Clear Selected"
                                                                                                class="vs__clear"
                                                                                                style="display: none;"
                                                                                        >
                                                                                            <span>×</span>
                                                                                        </button>

                                                                                        <span
                                                                                                class="toggle vs__open-indicator"
                                                                                                role="presentation"
                                                                                        >
                                                    <svg
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            height="16"
                                                            width="16"
                                                            viewBox="0 0 20 20"
                                                    >
                                                      <path
                                                              fill="currentColor"
                                                              d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
                                                      ></path>
                                                    </svg>
                                                  </span>

                                                                                        <div
                                                                                                class="vs__spinner"
                                                                                                style="display: none;"
                                                                                        >Loading...
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <ul
                                                                                        id="vs5__listbox"
                                                                                        role="listbox"
                                                                                        style="display: none; visibility: hidden;"
                                                                                ></ul>
                                                                            </div>
                                                                        </div>

                                                                        <div class="flex-1">
                                                                            <div class="text-sm text-grey inherit-placeholder mt-1">
                                                                                |
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <!--  -->
                                                                    <!--  -->
                                                                </div>

                                                                <div class="form-group form-group publish-field publish-field__canonical_url seo_pro_source-fieldtype w-full">
                                                                    <div class="field-inner">
                                                                        <label
                                                                                for="field_canonical_url"
                                                                                class="publish-field-label"
                                                                        >
                                                                            <span class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Canonical URL</span>

                                                                            <!--  -->
                                                                            <!--  -->
                                                                            <!--  -->
                                                                            <!--  -->

                                                                            <button
                                                                                    class="outline-none"
                                                                                    style="display: none;"
                                                                            >
                                                                                <svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 0 24 24"
                                                                                        class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip"
                                                                                >
                                                                                    <path
                                                                                            fill="none"
                                                                                            stroke="currentColor"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                            stroke-width="1.5"
                                                                                            d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5"
                                                                                    ></path>
                                                                                </svg>
                                                                            </button>

                                                                            <button
                                                                                    class="outline-none"
                                                                                    style="display: none;"
                                                                            >
                                                                                <svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 0 24 24"
                                                                                        class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip"
                                                                                >
                                                                                    <path
                                                                                            fill="none"
                                                                                            stroke="currentColor"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                            stroke-width="1.5"
                                                                                            d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5"
                                                                                    ></path>
                                                                                </svg>
                                                                            </button>
                                                                        </label>

                                                                        <div class="help-block -mt-2">
                                                                            <p>
                                                                                Pick an existing field to set as this
                                                                                section's

                                                                                <strong>default</strong>

                                                                                canonical URL.
                                                                            </p>
                                                                        </div>
                                                                    </div>

                                                                    <!--  -->

                                                                    <div class="flex">
                                                                        <div class="source-type-select pr-4">
                                                                            <div
                                                                                    dir="auto"
                                                                                    class="v-select vs--single vs--searchable"
                                                                            >
                                                                                <div
                                                                                        id="vs6__combobox"
                                                                                        role="combobox"
                                                                                        aria-expanded="false"
                                                                                        aria-owns="vs6__listbox"
                                                                                        aria-label="Search for option"
                                                                                        class="vs__dropdown-toggle"
                                                                                >
                                                                                    <div class="vs__selected-options">
                                                  <span class="vs__selected">
                                                    Inherit

                                                      <!--  -->
                                                  </span>

                                                                                        <input
                                                                                                aria-autocomplete="list"
                                                                                                aria-labelledby="vs6__combobox"
                                                                                                aria-controls="vs6__listbox"
                                                                                                type="search"
                                                                                                autocomplete="off"
                                                                                                class="vs__search"
                                                                                        ></input>
                                                                                    </div>

                                                                                    <div class="vs__actions">
                                                                                        <button
                                                                                                type="button"
                                                                                                title="Clear Selected"
                                                                                                aria-label="Clear Selected"
                                                                                                class="vs__clear"
                                                                                                style="display: none;"
                                                                                        >
                                                                                            <span>×</span>
                                                                                        </button>

                                                                                        <span
                                                                                                class="toggle vs__open-indicator"
                                                                                                role="presentation"
                                                                                        >
                                                    <svg
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            height="16"
                                                            width="16"
                                                            viewBox="0 0 20 20"
                                                    >
                                                      <path
                                                              fill="currentColor"
                                                              d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
                                                      ></path>
                                                    </svg>
                                                  </span>

                                                                                        <div
                                                                                                class="vs__spinner"
                                                                                                style="display: none;"
                                                                                        >Loading...
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <ul
                                                                                        id="vs6__listbox"
                                                                                        role="listbox"
                                                                                        style="display: none; visibility: hidden;"
                                                                                ></ul>
                                                                            </div>
                                                                        </div>

                                                                        <div class="flex-1">
                                                                            <div class="text-sm text-grey inherit-placeholder mt-1">
                                                                                <!--  -->
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <!--  -->
                                                                    <!--  -->
                                                                </div>

                                                                <div class="form-group form-group publish-field publish-field__robots seo_pro_source-fieldtype w-full">
                                                                    <div class="field-inner">
                                                                        <label
                                                                                for="field_robots"
                                                                                class="publish-field-label"
                                                                        >
                                                                            <span class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Robots</span>

                                                                            <!--  -->
                                                                            <!--  -->
                                                                            <!--  -->
                                                                            <!--  -->

                                                                            <button
                                                                                    class="outline-none"
                                                                                    style="display: none;"
                                                                            >
                                                                                <svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 0 24 24"
                                                                                        class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip"
                                                                                >
                                                                                    <path
                                                                                            fill="none"
                                                                                            stroke="currentColor"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                            stroke-width="1.5"
                                                                                            d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5"
                                                                                    ></path>
                                                                                </svg>
                                                                            </button>

                                                                            <button
                                                                                    class="outline-none"
                                                                                    style="display: none;"
                                                                            >
                                                                                <svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 0 24 24"
                                                                                        class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip"
                                                                                >
                                                                                    <path
                                                                                            fill="none"
                                                                                            stroke="currentColor"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                            stroke-width="1.5"
                                                                                            d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5"
                                                                                    ></path>
                                                                                </svg>
                                                                            </button>
                                                                        </label>

                                                                        <div class="help-block -mt-2">
                                                                            <p>
                                                                                Pick
                                                                                options for the robots meta tag. noindex
                                                                                prevents the page being
                                                                                indexed by search engines. nofollow
                                                                                prevents search engines from
                                                                                crawling links.
                                                                            </p>
                                                                        </div>
                                                                    </div>

                                                                    <!--  -->

                                                                    <div class="flex">
                                                                        <div class="source-type-select pr-4">
                                                                            <div
                                                                                    dir="auto"
                                                                                    class="v-select vs--single vs--searchable"
                                                                            >
                                                                                <div
                                                                                        id="vs7__combobox"
                                                                                        role="combobox"
                                                                                        aria-expanded="false"
                                                                                        aria-owns="vs7__listbox"
                                                                                        aria-label="Search for option"
                                                                                        class="vs__dropdown-toggle"
                                                                                >
                                                                                    <div class="vs__selected-options">
                                                  <span class="vs__selected">
                                                    Inherit

                                                      <!--  -->
                                                  </span>

                                                                                        <input
                                                                                                aria-autocomplete="list"
                                                                                                aria-labelledby="vs7__combobox"
                                                                                                aria-controls="vs7__listbox"
                                                                                                type="search"
                                                                                                autocomplete="off"
                                                                                                class="vs__search"
                                                                                        ></input>
                                                                                    </div>

                                                                                    <div class="vs__actions">
                                                                                        <button
                                                                                                type="button"
                                                                                                title="Clear Selected"
                                                                                                aria-label="Clear Selected"
                                                                                                class="vs__clear"
                                                                                                style="display: none;"
                                                                                        >
                                                                                            <span>×</span>
                                                                                        </button>

                                                                                        <span
                                                                                                class="toggle vs__open-indicator"
                                                                                                role="presentation"
                                                                                        >
                                                    <svg
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            height="16"
                                                            width="16"
                                                            viewBox="0 0 20 20"
                                                    >
                                                      <path
                                                              fill="currentColor"
                                                              d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
                                                      ></path>
                                                    </svg>
                                                  </span>

                                                                                        <div
                                                                                                class="vs__spinner"
                                                                                                style="display: none;"
                                                                                        >Loading...
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <ul
                                                                                        id="vs7__listbox"
                                                                                        role="listbox"
                                                                                        style="display: none; visibility: hidden;"
                                                                                ></ul>
                                                                            </div>
                                                                        </div>

                                                                        <div class="flex-1">
                                                                            <div class="text-sm text-grey inherit-placeholder mt-1"></div>
                                                                        </div>
                                                                    </div>

                                                                    <!--  -->
                                                                    <!--  -->
                                                                </div>

                                                                <div class="form-group form-group publish-field publish-field__image seo_pro_source-fieldtype w-full">
                                                                    <div class="field-inner">
                                                                        <label
                                                                                for="field_image"
                                                                                class="publish-field-label"
                                                                        >
                                                                            <span class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Image</span>

                                                                            <!--  -->
                                                                            <!--  -->
                                                                            <!--  -->
                                                                            <!--  -->

                                                                            <button
                                                                                    class="outline-none"
                                                                                    style="display: none;"
                                                                            >
                                                                                <svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 0 24 24"
                                                                                        class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip"
                                                                                >
                                                                                    <path
                                                                                            fill="none"
                                                                                            stroke="currentColor"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                            stroke-width="1.5"
                                                                                            d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5"
                                                                                    ></path>
                                                                                </svg>
                                                                            </button>

                                                                            <button
                                                                                    class="outline-none"
                                                                                    style="display: none;"
                                                                            >
                                                                                <svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 0 24 24"
                                                                                        class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip"
                                                                                >
                                                                                    <path
                                                                                            fill="none"
                                                                                            stroke="currentColor"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                            stroke-width="1.5"
                                                                                            d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5"
                                                                                    ></path>
                                                                                </svg>
                                                                            </button>
                                                                        </label>

                                                                        <div class="help-block -mt-2">
                                                                            <p>
                                                                                Choose a default image field to
                                                                                represent each URL in this section when
                                                                                shared on social networks.
                                                                            </p>
                                                                        </div>
                                                                    </div>

                                                                    <!--  -->

                                                                    <div class="flex">
                                                                        <div class="source-type-select pr-4">
                                                                            <div
                                                                                    dir="auto"
                                                                                    class="v-select vs--single vs--searchable"
                                                                            >
                                                                                <div
                                                                                        id="vs8__combobox"
                                                                                        role="combobox"
                                                                                        aria-expanded="false"
                                                                                        aria-owns="vs8__listbox"
                                                                                        aria-label="Search for option"
                                                                                        class="vs__dropdown-toggle"
                                                                                >
                                                                                    <div class="vs__selected-options">
                                                  <span class="vs__selected">
                                                    Inherit

                                                      <!--  -->
                                                  </span>

                                                                                        <input
                                                                                                aria-autocomplete="list"
                                                                                                aria-labelledby="vs8__combobox"
                                                                                                aria-controls="vs8__listbox"
                                                                                                type="search"
                                                                                                autocomplete="off"
                                                                                                class="vs__search"
                                                                                        ></input>
                                                                                    </div>

                                                                                    <div class="vs__actions">
                                                                                        <button
                                                                                                type="button"
                                                                                                title="Clear Selected"
                                                                                                aria-label="Clear Selected"
                                                                                                class="vs__clear"
                                                                                                style="display: none;"
                                                                                        >
                                                                                            <span>×</span>
                                                                                        </button>

                                                                                        <span
                                                                                                class="toggle vs__open-indicator"
                                                                                                role="presentation"
                                                                                        >
                                                    <svg
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            height="16"
                                                            width="16"
                                                            viewBox="0 0 20 20"
                                                    >
                                                      <path
                                                              fill="currentColor"
                                                              d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
                                                      ></path>
                                                    </svg>
                                                  </span>

                                                                                        <div
                                                                                                class="vs__spinner"
                                                                                                style="display: none;"
                                                                                        >Loading...
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <ul
                                                                                        id="vs8__listbox"
                                                                                        role="listbox"
                                                                                        style="display: none; visibility: hidden;"
                                                                                ></ul>
                                                                            </div>
                                                                        </div>

                                                                        <div class="flex-1">
                                                                            <div class="text-sm text-grey inherit-placeholder mt-1"></div>
                                                                        </div>
                                                                    </div>

                                                                    <!--  -->
                                                                    <!--  -->
                                                                </div>

                                                                <div class="form-group form-group publish-field publish-field__twitter_handle seo_pro_source-fieldtype w-full">
                                                                    <div class="field-inner">
                                                                        <label
                                                                                for="field_twitter_handle"
                                                                                class="publish-field-label"
                                                                        >
                                                                            <span class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Twitter Handle</span>

                                                                            <!--  -->
                                                                            <!--  -->
                                                                            <!--  -->
                                                                            <!--  -->

                                                                            <button
                                                                                    class="outline-none"
                                                                                    style="display: none;"
                                                                            >
                                                                                <svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 0 24 24"
                                                                                        class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip"
                                                                                >
                                                                                    <path
                                                                                            fill="none"
                                                                                            stroke="currentColor"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                            stroke-width="1.5"
                                                                                            d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5"
                                                                                    ></path>
                                                                                </svg>
                                                                            </button>

                                                                            <button
                                                                                    class="outline-none"
                                                                                    style="display: none;"
                                                                            >
                                                                                <svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 0 24 24"
                                                                                        class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip"
                                                                                >
                                                                                    <path
                                                                                            fill="none"
                                                                                            stroke="currentColor"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                            stroke-width="1.5"
                                                                                            d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5"
                                                                                    ></path>
                                                                                </svg>
                                                                            </button>
                                                                        </label>

                                                                        <div class="help-block -mt-2">
                                                                            <p>
                                                                                Choose a default twitter handle that
                                                                                corresponds to this section.
                                                                            </p>
                                                                        </div>
                                                                    </div>

                                                                    <!--  -->

                                                                    <div class="flex">
                                                                        <div class="source-type-select pr-4">
                                                                            <div
                                                                                    dir="auto"
                                                                                    class="v-select vs--single vs--searchable"
                                                                            >
                                                                                <div
                                                                                        id="vs9__combobox"
                                                                                        role="combobox"
                                                                                        aria-expanded="false"
                                                                                        aria-owns="vs9__listbox"
                                                                                        aria-label="Search for option"
                                                                                        class="vs__dropdown-toggle"
                                                                                >
                                                                                    <div class="vs__selected-options">
                                                  <span class="vs__selected">
                                                    Inherit

                                                      <!--  -->
                                                  </span>

                                                                                        <input
                                                                                                aria-autocomplete="list"
                                                                                                aria-labelledby="vs9__combobox"
                                                                                                aria-controls="vs9__listbox"
                                                                                                type="search"
                                                                                                autocomplete="off"
                                                                                                class="vs__search"
                                                                                        ></input>
                                                                                    </div>

                                                                                    <div class="vs__actions">
                                                                                        <button
                                                                                                type="button"
                                                                                                title="Clear Selected"
                                                                                                aria-label="Clear Selected"
                                                                                                class="vs__clear"
                                                                                                style="display: none;"
                                                                                        >
                                                                                            <span>×</span>
                                                                                        </button>

                                                                                        <span
                                                                                                class="toggle vs__open-indicator"
                                                                                                role="presentation"
                                                                                        >
                                                    <svg
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            height="16"
                                                            width="16"
                                                            viewBox="0 0 20 20"
                                                    >
                                                      <path
                                                              fill="currentColor"
                                                              d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
                                                      ></path>
                                                    </svg>
                                                  </span>

                                                                                        <div
                                                                                                class="vs__spinner"
                                                                                                style="display: none;"
                                                                                        >Loading...
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <ul
                                                                                        id="vs9__listbox"
                                                                                        role="listbox"
                                                                                        style="display: none; visibility: hidden;"
                                                                                ></ul>
                                                                            </div>
                                                                        </div>

                                                                        <div class="flex-1">
                                                                            <div class="text-sm text-grey inherit-placeholder mt-1"></div>
                                                                        </div>
                                                                    </div>

                                                                    <!--  -->
                                                                    <!--  -->
                                                                </div>

                                                                <div class="form-group form-group publish-field publish-field__sitemap seo_pro_source-fieldtype w-full">
                                                                    <div class="field-inner">
                                                                        <label
                                                                                for="field_sitemap"
                                                                                class="publish-field-label"
                                                                        >
                                                                            <span class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Sitemap</span>

                                                                            <!--  -->
                                                                            <!--  -->
                                                                            <!--  -->
                                                                            <!--  -->

                                                                            <button
                                                                                    class="outline-none"
                                                                                    style="display: none;"
                                                                            >
                                                                                <svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 0 24 24"
                                                                                        class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip"
                                                                                >
                                                                                    <path
                                                                                            fill="none"
                                                                                            stroke="currentColor"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                            stroke-width="1.5"
                                                                                            d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5"
                                                                                    ></path>
                                                                                </svg>
                                                                            </button>

                                                                            <button
                                                                                    class="outline-none"
                                                                                    style="display: none;"
                                                                            >
                                                                                <svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 0 24 24"
                                                                                        class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip"
                                                                                >
                                                                                    <path
                                                                                            fill="none"
                                                                                            stroke="currentColor"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                            stroke-width="1.5"
                                                                                            d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5"
                                                                                    ></path>
                                                                                </svg>
                                                                            </button>
                                                                        </label>

                                                                        <div class="help-block -mt-2">
                                                                            <p>
                                                                                If disabled, items in this section will
                                                                                not appear in the sitemap.
                                                                            </p>
                                                                        </div>
                                                                    </div>

                                                                    <!--  -->

                                                                    <div class="flex">
                                                                        <div class="source-type-select pr-4">
                                                                            <div
                                                                                    dir="auto"
                                                                                    class="v-select vs--single vs--searchable"
                                                                            >
                                                                                <div
                                                                                        id="vs10__combobox"
                                                                                        role="combobox"
                                                                                        aria-expanded="false"
                                                                                        aria-owns="vs10__listbox"
                                                                                        aria-label="Search for option"
                                                                                        class="vs__dropdown-toggle"
                                                                                >
                                                                                    <div class="vs__selected-options">
                                                  <span class="vs__selected">
                                                    Inherit

                                                      <!--  -->
                                                  </span>

                                                                                        <input
                                                                                                aria-autocomplete="list"
                                                                                                aria-labelledby="vs10__combobox"
                                                                                                aria-controls="vs10__listbox"
                                                                                                type="search"
                                                                                                autocomplete="off"
                                                                                                class="vs__search"
                                                                                        ></input>
                                                                                    </div>

                                                                                    <div class="vs__actions">
                                                                                        <button
                                                                                                type="button"
                                                                                                title="Clear Selected"
                                                                                                aria-label="Clear Selected"
                                                                                                class="vs__clear"
                                                                                                style="display: none;"
                                                                                        >
                                                                                            <span>×</span>
                                                                                        </button>

                                                                                        <span
                                                                                                class="toggle vs__open-indicator"
                                                                                                role="presentation"
                                                                                        >
                                                    <svg
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            height="16"
                                                            width="16"
                                                            viewBox="0 0 20 20"
                                                    >
                                                      <path
                                                              fill="currentColor"
                                                              d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
                                                      ></path>
                                                    </svg>
                                                  </span>

                                                                                        <div
                                                                                                class="vs__spinner"
                                                                                                style="display: none;"
                                                                                        >Loading...
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <ul
                                                                                        id="vs10__listbox"
                                                                                        role="listbox"
                                                                                        style="display: none; visibility: hidden;"
                                                                                ></ul>
                                                                            </div>
                                                                        </div>

                                                                        <div class="flex-1">
                                                                            <div class="text-sm text-grey inherit-placeholder mt-1"></div>
                                                                        </div>
                                                                    </div>

                                                                    <!--  -->
                                                                    <!--  -->
                                                                </div>

                                                                <div class="form-group form-group publish-field publish-field__priority seo_pro_source-fieldtype w-full">
                                                                    <div class="field-inner">
                                                                        <label
                                                                                for="field_priority"
                                                                                class="publish-field-label"
                                                                        >
                                                                            <span class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Priority</span>

                                                                            <!--  -->
                                                                            <!--  -->
                                                                            <!--  -->
                                                                            <!--  -->

                                                                            <button
                                                                                    class="outline-none"
                                                                                    style="display: none;"
                                                                            >
                                                                                <svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 0 24 24"
                                                                                        class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip"
                                                                                >
                                                                                    <path
                                                                                            fill="none"
                                                                                            stroke="currentColor"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                            stroke-width="1.5"
                                                                                            d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5"
                                                                                    ></path>
                                                                                </svg>
                                                                            </button>

                                                                            <button
                                                                                    class="outline-none"
                                                                                    style="display: none;"
                                                                            >
                                                                                <svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 0 24 24"
                                                                                        class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip"
                                                                                >
                                                                                    <path
                                                                                            fill="none"
                                                                                            stroke="currentColor"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                            stroke-width="1.5"
                                                                                            d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5"
                                                                                    ></path>
                                                                                </svg>
                                                                            </button>
                                                                        </label>

                                                                        <div class="help-block -mt-2">
                                                                            <p>
                                                                                The priority of these URLs relative to
                                                                                other URLs on your site. Valid values
                                                                                range from

                                                                                <code>0.0</code>

                                                                                to

                                                                                <code>1.0</code>

                                                                                .
                                                                            </p>
                                                                        </div>
                                                                    </div>

                                                                    <!--  -->

                                                                    <div class="flex">
                                                                        <div class="source-type-select pr-4">
                                                                            <div
                                                                                    dir="auto"
                                                                                    class="v-select vs--single vs--searchable"
                                                                            >
                                                                                <div
                                                                                        id="vs11__combobox"
                                                                                        role="combobox"
                                                                                        aria-expanded="false"
                                                                                        aria-owns="vs11__listbox"
                                                                                        aria-label="Search for option"
                                                                                        class="vs__dropdown-toggle"
                                                                                >
                                                                                    <div class="vs__selected-options">
                                                  <span class="vs__selected">
                                                    Inherit

                                                      <!--  -->
                                                  </span>

                                                                                        <input
                                                                                                aria-autocomplete="list"
                                                                                                aria-labelledby="vs11__combobox"
                                                                                                aria-controls="vs11__listbox"
                                                                                                type="search"
                                                                                                autocomplete="off"
                                                                                                class="vs__search"
                                                                                        ></input>
                                                                                    </div>

                                                                                    <div class="vs__actions">
                                                                                        <button
                                                                                                type="button"
                                                                                                title="Clear Selected"
                                                                                                aria-label="Clear Selected"
                                                                                                class="vs__clear"
                                                                                                style="display: none;"
                                                                                        >
                                                                                            <span>×</span>
                                                                                        </button>

                                                                                        <span
                                                                                                class="toggle vs__open-indicator"
                                                                                                role="presentation"
                                                                                        >
                                                    <svg
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            height="16"
                                                            width="16"
                                                            viewBox="0 0 20 20"
                                                    >
                                                      <path
                                                              fill="currentColor"
                                                              d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
                                                      ></path>
                                                    </svg>
                                                  </span>

                                                                                        <div
                                                                                                class="vs__spinner"
                                                                                                style="display: none;"
                                                                                        >Loading...
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <ul
                                                                                        id="vs11__listbox"
                                                                                        role="listbox"
                                                                                        style="display: none; visibility: hidden;"
                                                                                ></ul>
                                                                            </div>
                                                                        </div>

                                                                        <div class="flex-1">
                                                                            <div class="text-sm text-grey inherit-placeholder mt-1">
                                                                                0.5
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <!--  -->
                                                                    <!--  -->
                                                                </div>

                                                                <div class="form-group form-group publish-field publish-field__change_frequency seo_pro_source-fieldtype w-full">
                                                                    <div class="field-inner">
                                                                        <label
                                                                                for="field_change_frequency"
                                                                                class="publish-field-label"
                                                                        >
                                                                            <span class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Change Frequency</span>

                                                                            <!--  -->
                                                                            <!--  -->
                                                                            <!--  -->
                                                                            <!--  -->

                                                                            <button
                                                                                    class="outline-none"
                                                                                    style="display: none;"
                                                                            >
                                                                                <svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 0 24 24"
                                                                                        class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip"
                                                                                >
                                                                                    <path
                                                                                            fill="none"
                                                                                            stroke="currentColor"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                            stroke-width="1.5"
                                                                                            d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5"
                                                                                    ></path>
                                                                                </svg>
                                                                            </button>

                                                                            <button
                                                                                    class="outline-none"
                                                                                    style="display: none;"
                                                                            >
                                                                                <svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 0 24 24"
                                                                                        class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip"
                                                                                >
                                                                                    <path
                                                                                            fill="none"
                                                                                            stroke="currentColor"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round"
                                                                                            stroke-width="1.5"
                                                                                            d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5"
                                                                                    ></path>
                                                                                </svg>
                                                                            </button>
                                                                        </label>

                                                                        <div class="help-block -mt-2">
                                                                            <p>
                                                                                A hint to search engines on how
                                                                                frequently the pages in this section are
                                                                                likely to change.
                                                                            </p>
                                                                        </div>
                                                                    </div>

                                                                    <!--  -->

                                                                    <div class="flex">
                                                                        <div class="source-type-select pr-4">
                                                                            <div
                                                                                    dir="auto"
                                                                                    class="v-select vs--single vs--searchable"
                                                                            >
                                                                                <div
                                                                                        id="vs12__combobox"
                                                                                        role="combobox"
                                                                                        aria-expanded="false"
                                                                                        aria-owns="vs12__listbox"
                                                                                        aria-label="Search for option"
                                                                                        class="vs__dropdown-toggle"
                                                                                >
                                                                                    <div class="vs__selected-options">
                                                  <span class="vs__selected">
                                                    Inherit

                                                      <!--  -->
                                                  </span>

                                                                                        <input
                                                                                                aria-autocomplete="list"
                                                                                                aria-labelledby="vs12__combobox"
                                                                                                aria-controls="vs12__listbox"
                                                                                                type="search"
                                                                                                autocomplete="off"
                                                                                                class="vs__search"
                                                                                        ></input>
                                                                                    </div>

                                                                                    <div class="vs__actions">
                                                                                        <button
                                                                                                type="button"
                                                                                                title="Clear Selected"
                                                                                                aria-label="Clear Selected"
                                                                                                class="vs__clear"
                                                                                                style="display: none;"
                                                                                        >
                                                                                            <span>×</span>
                                                                                        </button>

                                                                                        <span
                                                                                                class="toggle vs__open-indicator"
                                                                                                role="presentation"
                                                                                        >
                                                    <svg
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            height="16"
                                                            width="16"
                                                            viewBox="0 0 20 20"
                                                    >
                                                      <path
                                                              fill="currentColor"
                                                              d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
                                                      ></path>
                                                    </svg>
                                                  </span>

                                                                                        <div
                                                                                                class="vs__spinner"
                                                                                                style="display: none;"
                                                                                        >Loading...
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <ul
                                                                                        id="vs12__listbox"
                                                                                        role="listbox"
                                                                                        style="display: none; visibility: hidden;"
                                                                                ></ul>
                                                                            </div>
                                                                        </div>

                                                                        <div class="flex-1">
                                                                            <div class="text-sm text-grey inherit-placeholder mt-1">
                                                                                monthly
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <!--  -->
                                                                    <!--  -->
                                                                </div>
                                                            </div>

                                                            <!--  -->
                                                            <!--  -->
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
                                                        <!--  -->
                                                    </div>

                                                    <div class="flex items-center justify-between px-4 py-2">
                                                        <label class="publish-field-label font-medium">Published</label>

                                                        <button
                                                                type="button"
                                                                aria-pressed="true"
                                                                aria-label="Toggle Button"
                                                                class="toggle-container on"
                                                        >
                                                            <div class="toggle-slider">
                                                                <div
                                                                        tabindex="0"
                                                                        class="toggle-knob"
                                                                ></div>
                                                            </div>
                                                        </button>
                                                    </div>

                                                    <!--  -->
                                                    <!--  -->
                                                </div>
                                            </div>
                                        </div>

                                        <div class="publish-sections">
                                            <div class="publish-sections-section">
                                                <div class="p-0 card">
                                                    <!--  -->

                                                    <div class="publish-fields @container">
                                                        <div class="form-group publish-field publish-field__slug slug-fieldtype w-full">
                                                            <div class="field-inner">
                                                                <label
                                                                        for="field_slug"
                                                                        class="publish-field-label"
                                                                >
                                                                    <span class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Slug</span>

                                                                    <!--  -->
                                                                    <!--  -->
                                                                    <!--  -->
                                                                    <!--  -->

                                                                    <button
                                                                            class="outline-none"
                                                                            style="display: none;"
                                                                    >
                                                                        <svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 24 24"
                                                                                class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip"
                                                                        >
                                                                            <path
                                                                                    fill="none"
                                                                                    stroke="currentColor"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    stroke-width="1.5"
                                                                                    d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5"
                                                                            ></path>
                                                                        </svg>
                                                                    </button>

                                                                    <button
                                                                            class="outline-none"
                                                                            style="display: none;"
                                                                    >
                                                                        <svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 24 24"
                                                                                class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip"
                                                                        >
                                                                            <path
                                                                                    fill="none"
                                                                                    stroke="currentColor"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    stroke-width="1.5"
                                                                                    d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5"
                                                                            ></path>
                                                                        </svg>
                                                                    </button>
                                                                </label>

                                                                <!--  -->
                                                            </div>

                                                            <!--  -->

                                                            <div>
                                                                <div class="flex items-center">
                                                                    <div class="input-group">
                                                                        <!--  -->

                                                                        <input
                                                                                id="field_slug"
                                                                                type="text"
                                                                                dir="ltr"
                                                                                class="input-text font-mono text-xs"
                                                                        ></input>

                                                                        <!--  -->
                                                                    </div>

                                                                    <!--  -->
                                                                </div>
                                                            </div>

                                                            <!--  -->
                                                            <!--  -->
                                                        </div>

                                                        <div class="form-group publish-field publish-field__date date-fieldtype w-full">
                                                            <div class="field-inner">
                                                                <label
                                                                        for="field_date"
                                                                        class="publish-field-label"
                                                                >
                                                                    <span class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Date</span>

                                                                    <i class="required rtl:ml-1 ltr:mr-1">*</i>

                                                                    <!--  -->
                                                                    <!--  -->
                                                                    <!--  -->

                                                                    <button
                                                                            class="outline-none"
                                                                            style="display: none;"
                                                                    >
                                                                        <svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 24 24"
                                                                                class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip"
                                                                        >
                                                                            <path
                                                                                    fill="none"
                                                                                    stroke="currentColor"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    stroke-width="1.5"
                                                                                    d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5"
                                                                            ></path>
                                                                        </svg>
                                                                    </button>

                                                                    <button
                                                                            class="outline-none"
                                                                            style="display: none;"
                                                                    >
                                                                        <svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 24 24"
                                                                                class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip"
                                                                        >
                                                                            <path
                                                                                    fill="none"
                                                                                    stroke="currentColor"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    stroke-width="1.5"
                                                                                    d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5"
                                                                            ></path>
                                                                        </svg>
                                                                    </button>
                                                                </label>

                                                                <!--  -->
                                                            </div>

                                                            <!--  -->

                                                            <div class="datetime min-w-[145px]">
                                                                <!--  -->

                                                                <div class="date-time-container flex flex-col @sm:flex-row gap-2">
                                                                    <div class="flex-1">
                                                                        <div>
                                                                            <div
                                                                                    data-helptext="Press the arrow keys to navigate by day, Home and End to navigate to week ends, PageUp and PageDown to navigate by month, Alt+PageUp and Alt+PageDown to navigate by year"
                                                                                    class="vc-container vc-blue vc-is-expanded"
                                                                                    columns="1"
                                                                                    rows="1"
                                                                                    isexpanded="true"
                                                                                    style="display: none;"
                                                                            >
                                                                                <div
                                                                                        data-v-39b30300=""
                                                                                        class="vc-popover-content-wrapper"
                                                                                >
                                                                                    <!--  -->
                                                                                </div>

                                                                                <div class="vc-pane-container">
                                                                                    <div
                                                                                            data-v-5be4b00c=""
                                                                                            class="vc-pane-layout"
                                                                                            style="grid-template-columns: repeat(1, 1fr);"
                                                                                    >
                                                                                        <div
                                                                                                data-v-74ad501d=""
                                                                                                class="vc-pane row-from-end-1 column-from-end-1"
                                                                                        >
                                                                                            <div
                                                                                                    data-v-74ad501d=""
                                                                                                    class="vc-header align-center"
                                                                                            >
                                                                                                <div
                                                                                                        data-v-74ad501d=""
                                                                                                        class="vc-title"
                                                                                                >April 2024
                                                                                                </div>
                                                                                            </div>

                                                                                            <div
                                                                                                    data-v-74ad501d=""
                                                                                                    class="vc-weeks"
                                                                                            >
                                                                                                <div
                                                                                                        data-v-74ad501d=""
                                                                                                        class="vc-weekday"
                                                                                                >S
                                                                                                </div>

                                                                                                <div
                                                                                                        data-v-74ad501d=""
                                                                                                        class="vc-weekday"
                                                                                                >M
                                                                                                </div>

                                                                                                <div
                                                                                                        data-v-74ad501d=""
                                                                                                        class="vc-weekday"
                                                                                                >T
                                                                                                </div>

                                                                                                <div
                                                                                                        data-v-74ad501d=""
                                                                                                        class="vc-weekday"
                                                                                                >W
                                                                                                </div>

                                                                                                <div
                                                                                                        data-v-74ad501d=""
                                                                                                        class="vc-weekday"
                                                                                                >T
                                                                                                </div>

                                                                                                <div
                                                                                                        data-v-74ad501d=""
                                                                                                        class="vc-weekday"
                                                                                                >F
                                                                                                </div>

                                                                                                <div
                                                                                                        data-v-74ad501d=""
                                                                                                        class="vc-weekday"
                                                                                                >S
                                                                                                </div>

                                                                                                <div
                                                                                                        data-v-4420d078=""
                                                                                                        data-v-74ad501d=""
                                                                                                        class="vc-day id-2024-03-31 day-31 day-from-end-1 weekday-1 weekday-position-1 weekday-ordinal-5 weekday-ordinal-from-end-1 week-6 week-from-end-1 in-prev-month on-top on-left vc-day-box-center-center is-not-in-month"
                                                                                                >
                                                        <span
                                                                data-v-4420d078=""
                                                                aria-label="Sunday, March 31, 2024"
                                                                aria-disabled="false"
                                                                role="button"
                                                                class="vc-day-content vc-focusable"
                                                        >31</span>
                                                                                                </div>

                                                                                                <div
                                                                                                        data-v-4420d078=""
                                                                                                        data-v-74ad501d=""
                                                                                                        class="vc-day id-2024-04-01 day-1 day-from-end-30 weekday-2 weekday-position-2 weekday-ordinal-1 weekday-ordinal-from-end-5 week-1 week-from-end-5 is-first-day in-month on-top vc-day-box-center-center"
                                                                                                >
                                                        <span
                                                                data-v-4420d078=""
                                                                tabindex="-1"
                                                                aria-label="Monday, April 1, 2024"
                                                                aria-disabled="false"
                                                                role="button"
                                                                class="vc-day-content vc-focusable"
                                                        >1</span>
                                                                                                </div>

                                                                                                <div
                                                                                                        data-v-4420d078=""
                                                                                                        data-v-74ad501d=""
                                                                                                        class="vc-day id-2024-04-02 day-2 day-from-end-29 weekday-3 weekday-position-3 weekday-ordinal-1 weekday-ordinal-from-end-5 week-1 week-from-end-5 in-month on-top vc-day-box-center-center"
                                                                                                >
                                                        <span
                                                                data-v-4420d078=""
                                                                tabindex="-1"
                                                                aria-label="Tuesday, April 2, 2024"
                                                                aria-disabled="false"
                                                                role="button"
                                                                class="vc-day-content vc-focusable"
                                                        >2</span>
                                                                                                </div>

                                                                                                <div
                                                                                                        data-v-4420d078=""
                                                                                                        data-v-74ad501d=""
                                                                                                        class="vc-day id-2024-04-03 day-3 day-from-end-28 weekday-4 weekday-position-4 weekday-ordinal-1 weekday-ordinal-from-end-4 week-1 week-from-end-5 in-month on-top vc-day-box-center-center"
                                                                                                >
                                                        <span
                                                                data-v-4420d078=""
                                                                tabindex="-1"
                                                                aria-label="Wednesday, April 3, 2024"
                                                                aria-disabled="false"
                                                                role="button"
                                                                class="vc-day-content vc-focusable"
                                                        >3</span>
                                                                                                </div>

                                                                                                <div
                                                                                                        data-v-4420d078=""
                                                                                                        data-v-74ad501d=""
                                                                                                        class="vc-day id-2024-04-04 day-4 day-from-end-27 weekday-5 weekday-position-5 weekday-ordinal-1 weekday-ordinal-from-end-4 week-1 week-from-end-5 in-month on-top vc-day-box-center-center"
                                                                                                >
                                                        <span
                                                                data-v-4420d078=""
                                                                tabindex="-1"
                                                                aria-label="Thursday, April 4, 2024"
                                                                aria-disabled="false"
                                                                role="button"
                                                                class="vc-day-content vc-focusable"
                                                        >4</span>
                                                                                                </div>

                                                                                                <div
                                                                                                        data-v-4420d078=""
                                                                                                        data-v-74ad501d=""
                                                                                                        class="vc-day id-2024-04-05 day-5 day-from-end-26 weekday-6 weekday-position-6 weekday-ordinal-1 weekday-ordinal-from-end-4 week-1 week-from-end-5 in-month on-top vc-day-box-center-center"
                                                                                                >
                                                        <span
                                                                data-v-4420d078=""
                                                                tabindex="-1"
                                                                aria-label="Friday, April 5, 2024"
                                                                aria-disabled="false"
                                                                role="button"
                                                                class="vc-day-content vc-focusable"
                                                        >5</span>
                                                                                                </div>

                                                                                                <div
                                                                                                        data-v-4420d078=""
                                                                                                        data-v-74ad501d=""
                                                                                                        class="vc-day id-2024-04-06 day-6 day-from-end-25 weekday-7 weekday-position-7 weekday-ordinal-1 weekday-ordinal-from-end-4 week-1 week-from-end-5 in-month on-top on-right vc-day-box-center-center"
                                                                                                >
                                                        <span
                                                                data-v-4420d078=""
                                                                tabindex="-1"
                                                                aria-label="Saturday, April 6, 2024"
                                                                aria-disabled="false"
                                                                role="button"
                                                                class="vc-day-content vc-focusable"
                                                        >6</span>
                                                                                                </div>

                                                                                                <div
                                                                                                        data-v-4420d078=""
                                                                                                        data-v-74ad501d=""
                                                                                                        class="vc-day id-2024-04-07 day-7 day-from-end-24 weekday-1 weekday-position-1 weekday-ordinal-1 weekday-ordinal-from-end-4 week-2 week-from-end-4 in-month on-left vc-day-box-center-center"
                                                                                                >
                                                        <span
                                                                data-v-4420d078=""
                                                                tabindex="-1"
                                                                aria-label="Sunday, April 7, 2024"
                                                                aria-disabled="false"
                                                                role="button"
                                                                class="vc-day-content vc-focusable"
                                                        >7</span>
                                                                                                </div>

                                                                                                <div
                                                                                                        data-v-4420d078=""
                                                                                                        data-v-74ad501d=""
                                                                                                        class="vc-day id-2024-04-08 day-8 day-from-end-23 weekday-2 weekday-position-2 weekday-ordinal-2 weekday-ordinal-from-end-4 week-2 week-from-end-4 in-month vc-day-box-center-center"
                                                                                                >
                                                        <span
                                                                data-v-4420d078=""
                                                                tabindex="-1"
                                                                aria-label="Monday, April 8, 2024"
                                                                aria-disabled="false"
                                                                role="button"
                                                                class="vc-day-content vc-focusable"
                                                        >8</span>
                                                                                                </div>

                                                                                                <div
                                                                                                        data-v-4420d078=""
                                                                                                        data-v-74ad501d=""
                                                                                                        class="vc-day id-2024-04-09 day-9 day-from-end-22 weekday-3 weekday-position-3 weekday-ordinal-2 weekday-ordinal-from-end-4 week-2 week-from-end-4 in-month vc-day-box-center-center"
                                                                                                >
                                                        <span
                                                                data-v-4420d078=""
                                                                tabindex="-1"
                                                                aria-label="Tuesday, April 9, 2024"
                                                                aria-disabled="false"
                                                                role="button"
                                                                class="vc-day-content vc-focusable"
                                                        >9</span>
                                                                                                </div>

                                                                                                <div
                                                                                                        data-v-4420d078=""
                                                                                                        data-v-74ad501d=""
                                                                                                        class="vc-day id-2024-04-10 day-10 day-from-end-21 weekday-4 weekday-position-4 weekday-ordinal-2 weekday-ordinal-from-end-3 week-2 week-from-end-4 in-month vc-day-box-center-center"
                                                                                                >
                                                        <span
                                                                data-v-4420d078=""
                                                                tabindex="-1"
                                                                aria-label="Wednesday, April 10, 2024"
                                                                aria-disabled="false"
                                                                role="button"
                                                                class="vc-day-content vc-focusable"
                                                        >10</span>
                                                                                                </div>

                                                                                                <div
                                                                                                        data-v-4420d078=""
                                                                                                        data-v-74ad501d=""
                                                                                                        class="vc-day id-2024-04-11 day-11 day-from-end-20 weekday-5 weekday-position-5 weekday-ordinal-2 weekday-ordinal-from-end-3 week-2 week-from-end-4 in-month vc-day-box-center-center"
                                                                                                >
                                                        <span
                                                                data-v-4420d078=""
                                                                tabindex="-1"
                                                                aria-label="Thursday, April 11, 2024"
                                                                aria-disabled="false"
                                                                role="button"
                                                                class="vc-day-content vc-focusable"
                                                        >11</span>
                                                                                                </div>

                                                                                                <div
                                                                                                        data-v-4420d078=""
                                                                                                        data-v-74ad501d=""
                                                                                                        class="vc-day id-2024-04-12 day-12 day-from-end-19 weekday-6 weekday-position-6 weekday-ordinal-2 weekday-ordinal-from-end-3 week-2 week-from-end-4 in-month vc-day-box-center-center"
                                                                                                >
                                                        <span
                                                                data-v-4420d078=""
                                                                tabindex="-1"
                                                                aria-label="Friday, April 12, 2024"
                                                                aria-disabled="false"
                                                                role="button"
                                                                class="vc-day-content vc-focusable"
                                                        >12</span>
                                                                                                </div>

                                                                                                <div
                                                                                                        data-v-4420d078=""
                                                                                                        data-v-74ad501d=""
                                                                                                        class="vc-day id-2024-04-13 day-13 day-from-end-18 weekday-7 weekday-position-7 weekday-ordinal-2 weekday-ordinal-from-end-3 week-2 week-from-end-4 in-month on-right vc-day-box-center-center"
                                                                                                >
                                                        <span
                                                                data-v-4420d078=""
                                                                tabindex="-1"
                                                                aria-label="Saturday, April 13, 2024"
                                                                aria-disabled="false"
                                                                role="button"
                                                                class="vc-day-content vc-focusable"
                                                        >13</span>
                                                                                                </div>

                                                                                                <div
                                                                                                        data-v-4420d078=""
                                                                                                        data-v-74ad501d=""
                                                                                                        class="vc-day id-2024-04-14 day-14 day-from-end-17 weekday-1 weekday-position-1 weekday-ordinal-2 weekday-ordinal-from-end-3 week-3 week-from-end-3 in-month on-left vc-day-box-center-center"
                                                                                                >
                                                        <span
                                                                data-v-4420d078=""
                                                                tabindex="-1"
                                                                aria-label="Sunday, April 14, 2024"
                                                                aria-disabled="false"
                                                                role="button"
                                                                class="vc-day-content vc-focusable"
                                                        >14</span>
                                                                                                </div>

                                                                                                <div
                                                                                                        data-v-4420d078=""
                                                                                                        data-v-74ad501d=""
                                                                                                        class="vc-day id-2024-04-15 day-15 day-from-end-16 weekday-2 weekday-position-2 weekday-ordinal-3 weekday-ordinal-from-end-3 week-3 week-from-end-3 in-month vc-day-box-center-center"
                                                                                                >
                                                        <span
                                                                data-v-4420d078=""
                                                                tabindex="-1"
                                                                aria-label="Monday, April 15, 2024"
                                                                aria-disabled="false"
                                                                role="button"
                                                                class="vc-day-content vc-focusable"
                                                        >15</span>
                                                                                                </div>

                                                                                                <div
                                                                                                        data-v-4420d078=""
                                                                                                        data-v-74ad501d=""
                                                                                                        class="vc-day id-2024-04-16 day-16 day-from-end-15 weekday-3 weekday-position-3 weekday-ordinal-3 weekday-ordinal-from-end-3 week-3 week-from-end-3 in-month vc-day-box-center-center"
                                                                                                >
                                                        <span
                                                                data-v-4420d078=""
                                                                tabindex="-1"
                                                                aria-label="Tuesday, April 16, 2024"
                                                                aria-disabled="false"
                                                                role="button"
                                                                class="vc-day-content vc-focusable"
                                                        >16</span>
                                                                                                </div>

                                                                                                <div
                                                                                                        data-v-4420d078=""
                                                                                                        data-v-74ad501d=""
                                                                                                        class="vc-day id-2024-04-17 day-17 day-from-end-14 weekday-4 weekday-position-4 weekday-ordinal-3 weekday-ordinal-from-end-2 week-3 week-from-end-3 in-month vc-day-box-center-center"
                                                                                                >
                                                        <span
                                                                data-v-4420d078=""
                                                                tabindex="-1"
                                                                aria-label="Wednesday, April 17, 2024"
                                                                aria-disabled="false"
                                                                role="button"
                                                                class="vc-day-content vc-focusable"
                                                        >17</span>
                                                                                                </div>

                                                                                                <div
                                                                                                        data-v-4420d078=""
                                                                                                        data-v-74ad501d=""
                                                                                                        class="vc-day id-2024-04-18 day-18 day-from-end-13 weekday-5 weekday-position-5 weekday-ordinal-3 weekday-ordinal-from-end-2 week-3 week-from-end-3 in-month vc-day-box-center-center"
                                                                                                >
                                                        <span
                                                                data-v-4420d078=""
                                                                tabindex="-1"
                                                                aria-label="Thursday, April 18, 2024"
                                                                aria-disabled="false"
                                                                role="button"
                                                                class="vc-day-content vc-focusable"
                                                        >18</span>
                                                                                                </div>

                                                                                                <div
                                                                                                        data-v-4420d078=""
                                                                                                        data-v-74ad501d=""
                                                                                                        class="vc-day id-2024-04-19 day-19 day-from-end-12 weekday-6 weekday-position-6 weekday-ordinal-3 weekday-ordinal-from-end-2 week-3 week-from-end-3 in-month vc-day-box-center-center"
                                                                                                >
                                                        <span
                                                                data-v-4420d078=""
                                                                tabindex="-1"
                                                                aria-label="Friday, April 19, 2024"
                                                                aria-disabled="false"
                                                                role="button"
                                                                class="vc-day-content vc-focusable"
                                                        >19</span>
                                                                                                </div>

                                                                                                <div
                                                                                                        data-v-4420d078=""
                                                                                                        data-v-74ad501d=""
                                                                                                        class="vc-day id-2024-04-20 day-20 day-from-end-11 weekday-7 weekday-position-7 weekday-ordinal-3 weekday-ordinal-from-end-2 week-3 week-from-end-3 in-month on-right vc-day-box-center-center"
                                                                                                >
                                                        <span
                                                                data-v-4420d078=""
                                                                tabindex="-1"
                                                                aria-label="Saturday, April 20, 2024"
                                                                aria-disabled="false"
                                                                role="button"
                                                                class="vc-day-content vc-focusable"
                                                        >20</span>
                                                                                                </div>

                                                                                                <div
                                                                                                        data-v-4420d078=""
                                                                                                        data-v-74ad501d=""
                                                                                                        class="vc-day id-2024-04-21 day-21 day-from-end-10 weekday-1 weekday-position-1 weekday-ordinal-3 weekday-ordinal-from-end-2 week-4 week-from-end-2 in-month on-left vc-day-box-center-center"
                                                                                                >
                                                        <span
                                                                data-v-4420d078=""
                                                                tabindex="-1"
                                                                aria-label="Sunday, April 21, 2024"
                                                                aria-disabled="false"
                                                                role="button"
                                                                class="vc-day-content vc-focusable"
                                                        >21</span>
                                                                                                </div>

                                                                                                <div
                                                                                                        data-v-4420d078=""
                                                                                                        data-v-74ad501d=""
                                                                                                        class="vc-day id-2024-04-22 day-22 day-from-end-9 weekday-2 weekday-position-2 weekday-ordinal-4 weekday-ordinal-from-end-2 week-4 week-from-end-2 in-month vc-day-box-center-center"
                                                                                                >
                                                        <span
                                                                data-v-4420d078=""
                                                                tabindex="-1"
                                                                aria-label="Monday, April 22, 2024"
                                                                aria-disabled="false"
                                                                role="button"
                                                                class="vc-day-content vc-focusable"
                                                        >22</span>
                                                                                                </div>

                                                                                                <div
                                                                                                        data-v-4420d078=""
                                                                                                        data-v-74ad501d=""
                                                                                                        class="vc-day id-2024-04-23 day-23 day-from-end-8 weekday-3 weekday-position-3 weekday-ordinal-4 weekday-ordinal-from-end-2 week-4 week-from-end-2 in-month vc-day-box-center-center"
                                                                                                >
                                                        <span
                                                                data-v-4420d078=""
                                                                tabindex="-1"
                                                                aria-label="Tuesday, April 23, 2024"
                                                                aria-disabled="false"
                                                                role="button"
                                                                class="vc-day-content vc-focusable"
                                                        >23</span>
                                                                                                </div>

                                                                                                <div
                                                                                                        data-v-4420d078=""
                                                                                                        data-v-74ad501d=""
                                                                                                        class="vc-day id-2024-04-24 day-24 day-from-end-7 weekday-4 weekday-position-4 weekday-ordinal-4 weekday-ordinal-from-end-1 week-4 week-from-end-2 in-month vc-day-box-center-center"
                                                                                                >
                                                        <span
                                                                data-v-4420d078=""
                                                                tabindex="-1"
                                                                aria-label="Wednesday, April 24, 2024"
                                                                aria-disabled="false"
                                                                role="button"
                                                                class="vc-day-content vc-focusable"
                                                        >24</span>
                                                                                                </div>

                                                                                                <div
                                                                                                        data-v-4420d078=""
                                                                                                        data-v-74ad501d=""
                                                                                                        class="vc-day id-2024-04-25 day-25 day-from-end-6 weekday-5 weekday-position-5 weekday-ordinal-4 weekday-ordinal-from-end-1 week-4 week-from-end-2 in-month vc-day-box-center-center"
                                                                                                >
                                                        <span
                                                                data-v-4420d078=""
                                                                tabindex="-1"
                                                                aria-label="Thursday, April 25, 2024"
                                                                aria-disabled="false"
                                                                role="button"
                                                                class="vc-day-content vc-focusable"
                                                        >25</span>
                                                                                                </div>

                                                                                                <div
                                                                                                        data-v-4420d078=""
                                                                                                        data-v-74ad501d=""
                                                                                                        class="vc-day id-2024-04-26 day-26 day-from-end-5 weekday-6 weekday-position-6 weekday-ordinal-4 weekday-ordinal-from-end-1 week-4 week-from-end-2 in-month vc-day-box-center-center"
                                                                                                >
                                                        <span
                                                                data-v-4420d078=""
                                                                tabindex="-1"
                                                                aria-label="Friday, April 26, 2024"
                                                                aria-disabled="false"
                                                                role="button"
                                                                class="vc-day-content vc-focusable"
                                                        >26</span>
                                                                                                </div>

                                                                                                <div
                                                                                                        data-v-4420d078=""
                                                                                                        data-v-74ad501d=""
                                                                                                        class="vc-day id-2024-04-27 day-27 day-from-end-4 weekday-7 weekday-position-7 weekday-ordinal-4 weekday-ordinal-from-end-1 week-4 week-from-end-2 in-month on-right vc-day-box-center-center"
                                                                                                >
                                                        <span
                                                                data-v-4420d078=""
                                                                tabindex="-1"
                                                                aria-label="Saturday, April 27, 2024"
                                                                aria-disabled="false"
                                                                role="button"
                                                                class="vc-day-content vc-focusable"
                                                        >27</span>
                                                                                                </div>

                                                                                                <div
                                                                                                        data-v-4420d078=""
                                                                                                        data-v-74ad501d=""
                                                                                                        class="vc-day id-2024-04-28 day-28 day-from-end-3 weekday-1 weekday-position-1 weekday-ordinal-4 weekday-ordinal-from-end-1 week-5 week-from-end-1 in-month on-left vc-day-box-center-center"
                                                                                                >
                                                        <span
                                                                data-v-4420d078=""
                                                                tabindex="-1"
                                                                aria-label="Sunday, April 28, 2024"
                                                                aria-disabled="false"
                                                                role="button"
                                                                class="vc-day-content vc-focusable"
                                                        >28</span>
                                                                                                </div>

                                                                                                <div
                                                                                                        data-v-4420d078=""
                                                                                                        data-v-74ad501d=""
                                                                                                        class="vc-day id-2024-04-29 day-29 day-from-end-2 weekday-2 weekday-position-2 weekday-ordinal-5 weekday-ordinal-from-end-1 week-5 week-from-end-1 is-today in-month vc-day-box-center-center"
                                                                                                >
                                                                                                    <div
                                                                                                            data-v-4420d078=""
                                                                                                            class="vc-highlights vc-day-layer"
                                                                                                    >
                                                                                                        <div
                                                                                                                data-v-4420d078=""
                                                                                                                class="vc-day-layer vc-day-box-center-center"
                                                                                                        >
                                                                                                            <div
                                                                                                                    data-v-4420d078=""
                                                                                                                    class="vc-highlight"
                                                                                                                    style="background-color: var(--blue-600); border-radius: var(--rounded-full);"
                                                                                                            ></div>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <span
                                                                                                            data-v-4420d078=""
                                                                                                            tabindex="0"
                                                                                                            aria-label="Monday, April 29, 2024"
                                                                                                            aria-disabled="false"
                                                                                                            role="button"
                                                                                                            class="vc-day-content vc-focusable"
                                                                                                            style="font-weight: var(--font-bold); color: var(--white);"
                                                                                                    >29</span>

                                                                                                    <div
                                                                                                            data-v-4420d078=""
                                                                                                            class="vc-day-layer vc-day-box-center-bottom"
                                                                                                    >
                                                                                                        <div
                                                                                                                data-v-4420d078=""
                                                                                                                class="vc-dots"
                                                                                                        >
                                                            <span
                                                                    data-v-4420d078=""
                                                                    class="vc-dot"
                                                                    style="background-color: var(--blue-600);"
                                                            ></span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div
                                                                                                        data-v-4420d078=""
                                                                                                        data-v-74ad501d=""
                                                                                                        class="vc-day id-2024-04-30 day-30 day-from-end-1 weekday-3 weekday-position-3 weekday-ordinal-5 weekday-ordinal-from-end-1 week-5 week-from-end-1 is-last-day in-month vc-day-box-center-center"
                                                                                                >
                                                        <span
                                                                data-v-4420d078=""
                                                                tabindex="-1"
                                                                aria-label="Tuesday, April 30, 2024"
                                                                aria-disabled="false"
                                                                role="button"
                                                                class="vc-day-content vc-focusable"
                                                        >30</span>
                                                                                                </div>

                                                                                                <div
                                                                                                        data-v-4420d078=""
                                                                                                        data-v-74ad501d=""
                                                                                                        class="vc-day id-2024-05-01 day-1 day-from-end-31 weekday-4 weekday-position-4 weekday-ordinal-1 weekday-ordinal-from-end-5 week-1 week-from-end-5 in-next-month vc-day-box-center-center is-not-in-month"
                                                                                                >
                                                        <span
                                                                data-v-4420d078=""
                                                                aria-label="Wednesday, May 1, 2024"
                                                                aria-disabled="false"
                                                                role="button"
                                                                class="vc-day-content vc-focusable"
                                                        >1</span>
                                                                                                </div>

                                                                                                <div
                                                                                                        data-v-4420d078=""
                                                                                                        data-v-74ad501d=""
                                                                                                        class="vc-day id-2024-05-02 day-2 day-from-end-30 weekday-5 weekday-position-5 weekday-ordinal-1 weekday-ordinal-from-end-5 week-1 week-from-end-5 in-next-month vc-day-box-center-center is-not-in-month"
                                                                                                >
                                                        <span
                                                                data-v-4420d078=""
                                                                aria-label="Thursday, May 2, 2024"
                                                                aria-disabled="false"
                                                                role="button"
                                                                class="vc-day-content vc-focusable"
                                                        >2</span>
                                                                                                </div>

                                                                                                <div
                                                                                                        data-v-4420d078=""
                                                                                                        data-v-74ad501d=""
                                                                                                        class="vc-day id-2024-05-03 day-3 day-from-end-29 weekday-6 weekday-position-6 weekday-ordinal-1 weekday-ordinal-from-end-4 week-1 week-from-end-5 in-next-month vc-day-box-center-center is-not-in-month"
                                                                                                >
                                                        <span
                                                                data-v-4420d078=""
                                                                aria-label="Friday, May 3, 2024"
                                                                aria-disabled="false"
                                                                role="button"
                                                                class="vc-day-content vc-focusable"
                                                        >3</span>
                                                                                                </div>

                                                                                                <div
                                                                                                        data-v-4420d078=""
                                                                                                        data-v-74ad501d=""
                                                                                                        class="vc-day id-2024-05-04 day-4 day-from-end-28 weekday-7 weekday-position-7 weekday-ordinal-1 weekday-ordinal-from-end-4 week-1 week-from-end-5 in-next-month on-right vc-day-box-center-center is-not-in-month"
                                                                                                >
                                                        <span
                                                                data-v-4420d078=""
                                                                aria-label="Saturday, May 4, 2024"
                                                                aria-disabled="false"
                                                                role="button"
                                                                class="vc-day-content vc-focusable"
                                                        >4</span>
                                                                                                </div>

                                                                                                <div
                                                                                                        data-v-4420d078=""
                                                                                                        data-v-74ad501d=""
                                                                                                        class="vc-day id-2024-05-05 day-5 day-from-end-27 weekday-1 weekday-position-1 weekday-ordinal-1 weekday-ordinal-from-end-4 week-2 week-from-end-4 in-next-month on-bottom on-left vc-day-box-center-center is-not-in-month"
                                                                                                >
                                                        <span
                                                                data-v-4420d078=""
                                                                aria-label="Sunday, May 5, 2024"
                                                                aria-disabled="false"
                                                                role="button"
                                                                class="vc-day-content vc-focusable"
                                                        >5</span>
                                                                                                </div>

                                                                                                <div
                                                                                                        data-v-4420d078=""
                                                                                                        data-v-74ad501d=""
                                                                                                        class="vc-day id-2024-05-06 day-6 day-from-end-26 weekday-2 weekday-position-2 weekday-ordinal-1 weekday-ordinal-from-end-4 week-2 week-from-end-4 in-next-month on-bottom vc-day-box-center-center is-not-in-month"
                                                                                                >
                                                        <span
                                                                data-v-4420d078=""
                                                                aria-label="Monday, May 6, 2024"
                                                                aria-disabled="false"
                                                                role="button"
                                                                class="vc-day-content vc-focusable"
                                                        >6</span>
                                                                                                </div>

                                                                                                <div
                                                                                                        data-v-4420d078=""
                                                                                                        data-v-74ad501d=""
                                                                                                        class="vc-day id-2024-05-07 day-7 day-from-end-25 weekday-3 weekday-position-3 weekday-ordinal-1 weekday-ordinal-from-end-4 week-2 week-from-end-4 in-next-month on-bottom vc-day-box-center-center is-not-in-month"
                                                                                                >
                                                        <span
                                                                data-v-4420d078=""
                                                                aria-label="Tuesday, May 7, 2024"
                                                                aria-disabled="false"
                                                                role="button"
                                                                class="vc-day-content vc-focusable"
                                                        >7</span>
                                                                                                </div>

                                                                                                <div
                                                                                                        data-v-4420d078=""
                                                                                                        data-v-74ad501d=""
                                                                                                        class="vc-day id-2024-05-08 day-8 day-from-end-24 weekday-4 weekday-position-4 weekday-ordinal-2 weekday-ordinal-from-end-4 week-2 week-from-end-4 in-next-month on-bottom vc-day-box-center-center is-not-in-month"
                                                                                                >
                                                        <span
                                                                data-v-4420d078=""
                                                                aria-label="Wednesday, May 8, 2024"
                                                                aria-disabled="false"
                                                                role="button"
                                                                class="vc-day-content vc-focusable"
                                                        >8</span>
                                                                                                </div>

                                                                                                <div
                                                                                                        data-v-4420d078=""
                                                                                                        data-v-74ad501d=""
                                                                                                        class="vc-day id-2024-05-09 day-9 day-from-end-23 weekday-5 weekday-position-5 weekday-ordinal-2 weekday-ordinal-from-end-4 week-2 week-from-end-4 in-next-month on-bottom vc-day-box-center-center is-not-in-month"
                                                                                                >
                                                        <span
                                                                data-v-4420d078=""
                                                                aria-label="Thursday, May 9, 2024"
                                                                aria-disabled="false"
                                                                role="button"
                                                                class="vc-day-content vc-focusable"
                                                        >9</span>
                                                                                                </div>

                                                                                                <div
                                                                                                        data-v-4420d078=""
                                                                                                        data-v-74ad501d=""
                                                                                                        class="vc-day id-2024-05-10 day-10 day-from-end-22 weekday-6 weekday-position-6 weekday-ordinal-2 weekday-ordinal-from-end-3 week-2 week-from-end-4 in-next-month on-bottom vc-day-box-center-center is-not-in-month"
                                                                                                >
                                                        <span
                                                                data-v-4420d078=""
                                                                aria-label="Friday, May 10, 2024"
                                                                aria-disabled="false"
                                                                role="button"
                                                                class="vc-day-content vc-focusable"
                                                        >10</span>
                                                                                                </div>

                                                                                                <div
                                                                                                        data-v-4420d078=""
                                                                                                        data-v-74ad501d=""
                                                                                                        class="vc-day id-2024-05-11 day-11 day-from-end-21 weekday-7 weekday-position-7 weekday-ordinal-2 weekday-ordinal-from-end-3 week-2 week-from-end-4 in-next-month on-bottom on-right vc-day-box-center-center is-not-in-month"
                                                                                                >
                                                        <span
                                                                data-v-4420d078=""
                                                                aria-label="Saturday, May 11, 2024"
                                                                aria-disabled="false"
                                                                role="button"
                                                                class="vc-day-content vc-focusable"
                                                        >11</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="vc-arrows-container title-center">
                                                                                        <div
                                                                                                role="button"
                                                                                                class="vc-arrow is-left"
                                                                                        >
                                                                                            <svg
                                                                                                    data-v-63f7b5ec=""
                                                                                                    width="26px"
                                                                                                    height="26px"
                                                                                                    viewBox="0 -1 16 34"
                                                                                                    class="vc-svg-icon"
                                                                                            >
                                                                                                <path
                                                                                                        data-v-63f7b5ec=""
                                                                                                        d="M11.196 10c0 0.143-0.071 0.304-0.179 0.411l-7.018 7.018 7.018 7.018c0.107 0.107 0.179 0.268 0.179 0.411s-0.071 0.304-0.179 0.411l-0.893 0.893c-0.107 0.107-0.268 0.179-0.411 0.179s-0.304-0.071-0.411-0.179l-8.321-8.321c-0.107-0.107-0.179-0.268-0.179-0.411s0.071-0.304 0.179-0.411l8.321-8.321c0.107-0.107 0.268-0.179 0.411-0.179s0.304 0.071 0.411 0.179l0.893 0.893c0.107 0.107 0.179 0.25 0.179 0.411z"
                                                                                                ></path>
                                                                                            </svg>
                                                                                        </div>

                                                                                        <div
                                                                                                role="button"
                                                                                                class="vc-arrow is-right"
                                                                                        >
                                                                                            <svg
                                                                                                    data-v-63f7b5ec=""
                                                                                                    width="26px"
                                                                                                    height="26px"
                                                                                                    viewBox="-5 -1 16 34"
                                                                                                    class="vc-svg-icon"
                                                                                            >
                                                                                                <path
                                                                                                        data-v-63f7b5ec=""
                                                                                                        d="M10.625 17.429c0 0.143-0.071 0.304-0.179 0.411l-8.321 8.321c-0.107 0.107-0.268 0.179-0.411 0.179s-0.304-0.071-0.411-0.179l-0.893-0.893c-0.107-0.107-0.179-0.25-0.179-0.411 0-0.143 0.071-0.304 0.179-0.411l7.018-7.018-7.018-7.018c-0.107-0.107-0.179-0.268-0.179-0.411s0.071-0.304 0.179-0.411l0.893-0.893c0.107-0.107 0.268-0.179 0.411-0.179s0.304 0.071 0.411 0.179l8.321 8.321c0.107 0.107 0.179 0.268 0.179 0.411z"
                                                                                                ></path>
                                                                                            </svg>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <div
                                                                                        data-v-39b30300=""
                                                                                        class="vc-popover-content-wrapper"
                                                                                >
                                                                                    <!--  -->
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="">
                                                                            <div aria-haspopup="true">
                                                                                <div class="input-group">
                                                                                    <div class="input-group-prepend flex items-center">
                                                                                        <svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                viewBox="0 0 24 24"
                                                                                                class="w-4 h-4"
                                                                                        >
                                                                                            <rect
                                                                                                    width="22"
                                                                                                    height="20"
                                                                                                    x=".5"
                                                                                                    y="3.501"
                                                                                                    fill="none"
                                                                                                    stroke="currentColor"
                                                                                                    stroke-linecap="round"
                                                                                                    stroke-linejoin="round"
                                                                                                    rx="1"
                                                                                                    ry="1"
                                                                                            ></rect>

                                                                                            <path
                                                                                                    fill="none"
                                                                                                    stroke="currentColor"
                                                                                                    stroke-linecap="round"
                                                                                                    stroke-linejoin="round"
                                                                                                    d="M3.5 1.501v3m4-3v3m4-3v3m4-3v3m4-3v3m-7 3.999h3v4h0-4 0v-3a1 1 0 0 1 1-1zm3 0h3a1 1 0 0 1 1 1v3h0-4 0v-4h0zm-4 4.001h4v4h-4zm4 0h4v4h-4zm-4 4h4v4h-4z"
                                                                                            ></path>

                                                                                            <path
                                                                                                    fill="none"
                                                                                                    stroke="currentColor"
                                                                                                    stroke-linecap="round"
                                                                                                    stroke-linejoin="round"
                                                                                                    d="M15.5 16.5h4v3a1 1 0 0 1-1 1h-3 0v-4h0zm-11-4h3v4h0-4 0v-3a1 1 0 0 1 1-1zm3 .001h4v4h-4zm-4 3.999h4v4h0-3a1 1 0 0 1-1-1v-3h0zm4 .001h4v4h-4z"
                                                                                            ></path>
                                                                                        </svg>
                                                                                    </div>

                                                                                    <div class="input-text border border-gray-500 rtl:border-r-0 ltr:border-l-0 flex items-center rtl:pl-0 ltr:pr-0">
                                                                                        <input
                                                                                                class="input-text-minimal p-0 bg-transparent leading-none"
                                                                                                value="2024-04-29"
                                                                                        ></input>

                                                                                        <button
                                                                                                type="button"
                                                                                                title="Clear"
                                                                                                aria-label="Clear"
                                                                                                class="cursor-pointer px-2 hover:text-blue-500"
                                                                                        >
                                                                                            <span>×</span>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div
                                                                                    class="v-portal"
                                                                                    style="display: none;"
                                                                            ></div>
                                                                        </div>
                                                                    </div>

                                                                    <!--  -->
                                                                </div>
                                                            </div>

                                                            <!--  -->
                                                            <!--  -->
                                                        </div>

                                                        <div class="form-group publish-field publish-field__tags relationship-fieldtype w-full">
                                                            <div class="field-inner">
                                                                <label
                                                                        for="field_tags"
                                                                        class="publish-field-label"
                                                                >
                                                                    <span class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Tags</span>

                                                                    <!--  -->
                                                                    <!--  -->
                                                                    <!--  -->
                                                                    <!--  -->

                                                                    <button
                                                                            class="outline-none"
                                                                            style="display: none;"
                                                                    >
                                                                        <svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 24 24"
                                                                                class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip"
                                                                        >
                                                                            <path
                                                                                    fill="none"
                                                                                    stroke="currentColor"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    stroke-width="1.5"
                                                                                    d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5"
                                                                            ></path>
                                                                        </svg>
                                                                    </button>

                                                                    <button
                                                                            class="outline-none"
                                                                            style="display: none;"
                                                                    >
                                                                        <svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 24 24"
                                                                                class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip"
                                                                        >
                                                                            <path
                                                                                    fill="none"
                                                                                    stroke="currentColor"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    stroke-width="1.5"
                                                                                    d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5"
                                                                            ></path>
                                                                        </svg>
                                                                    </button>
                                                                </label>

                                                                <!--  -->
                                                            </div>

                                                            <!--  -->

                                                            <div class="relationship-input relationship-input-empty">
                                                                <div data-v-c80a132c="">
                                                                    <div
                                                                            data-v-c80a132c=""
                                                                            dir="auto"
                                                                            class="v-select vs--multiple vs--searchable"
                                                                    >
                                                                        <div
                                                                                id="vs14__combobox"
                                                                                role="combobox"
                                                                                aria-expanded="false"
                                                                                aria-owns="vs14__listbox"
                                                                                aria-label="Search for option"
                                                                                class="vs__dropdown-toggle"
                                                                        >
                                                                            <div class="vs__selected-options">
                                                                                <input
                                                                                        data-v-c80a132c=""
                                                                                        placeholder="Choose..."
                                                                                        type="search"
                                                                                        aria-autocomplete="list"
                                                                                        aria-labelledby="vs14__combobox"
                                                                                        aria-controls="vs14__listbox"
                                                                                        autocomplete="off"
                                                                                        class="vs__search"
                                                                                ></input>
                                                                            </div>

                                                                            <div class="vs__actions">
                                                                                <button
                                                                                        type="button"
                                                                                        title="Clear Selected"
                                                                                        aria-label="Clear Selected"
                                                                                        class="vs__clear"
                                                                                        style="display: none;"
                                                                                >
                                                                                    <span>×</span>
                                                                                </button>

                                                                                <span
                                                                                        class="toggle vs__open-indicator"
                                                                                        role="presentation"
                                                                                >
                                                <svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        height="16"
                                                        width="16"
                                                        viewBox="0 0 20 20"
                                                >
                                                  <path
                                                          fill="currentColor"
                                                          d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
                                                  ></path>
                                                </svg>
                                              </span>

                                                                                <div
                                                                                        class="vs__spinner"
                                                                                        style="display: none;"
                                                                                >Loading...
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <ul
                                                                                id="vs14__listbox"
                                                                                role="listbox"
                                                                                style="display: none; visibility: hidden;"
                                                                        ></ul>

                                                                        <div
                                                                                data-v-c80a132c=""
                                                                                class="vs__selected-options-outside flex flex-wrap"
                                                                                tabindex="0"
                                                                        ></div>
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

                            <div class="publish-tab publish-tab-actions-footer vue-portal-target"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="md:hidden mt-6 flex items-center">
                <button class="btn-lg btn-primary w-full">Save</button>
            </div>
        </div>
    </div>

@endsection
