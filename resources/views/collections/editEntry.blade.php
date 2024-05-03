@extends('layouts.main')
@section('content')
    <title>Edit Entry :: Cedar</title>
    <div class="page-wrapper max-w-3xl">
          <div>
            <div class="breadcrumb flex"><a href="javascript:void(0);"
                class="flex-initial flex p-2 -m-2 items-center text-xs text-gray-700 hover:text-gray-900"><svg
                  viewBox="0 0 24 24" class="align-middle h-6 w-4 rotate-180">
                  <path fill="currentColor" fill-rule="evenodd"
                    d="m10.414 7.05 4.95 4.95-4.95 4.95L9 15.534 12.536 12 9 8.464z"></path>
                </svg><span>Pages</span></a></div>
            <div class="flex items-center mb-6">
              <h1 class="flex-1">
                <div class="flex items-center"><span
                    class="little-dot rtl:ml-2 ltr:mr-2 published v-popper--has-tooltip"></span><span>Contact Us</span>
                </div>
              </h1>
              <div class="hidden md:flex items-center">
                <div class="btn-group"><button class="btn-primary">Save &amp; Publish</button>
                  <div class="dropdown-list rtl:text-right ltr:text-left">
                    <div aria-haspopup="true"><button class="rtl:rounded-r-none ltr:rounded-l-none btn-primary"><svg
                          xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" class="w-3">
                          <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="1.143">
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
                        <button role="tab" id="MainTab" aria-controls="MainTabPanel" tabindex="0" class="tab-button" aria-selected="true">Main</button>                        
                        <button role="tab" id="MetaSeoTab" aria-controls="MetaSeoTabPanel" tabindex="-1" class="tab-button">Meta/SEO</button>                        
                        <button role="tab" id="SEOTab" aria-controls="SEOTabPanel" tabindex="-1" class="tab-button">SEO</button>                    
                    </div>
                    </div>
                    <div class="publish-tab-outer">
                      <div class="publish-tab-wrapper w-full min-w-0">
                        <div id="MainTabPanel" class="tab-panel active">
                          <div class="publish-sections">
                            <div class="publish-sections-section">
                              <div class="p-0 card">
                                <div class="publish-fields @container">
                                  <div class="form-group publish-field publish-field__title text-fieldtype w-full">
                                    <div class="field-inner"><label for="field_title" class="publish-field-label"><span
                                          class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Title</span><i
                                          class="required rtl:ml-1 ltr:mr-1">*</i>
                                        <button class="outline-none" style="display: none;"><svg
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                            <path fill="none" stroke="currentColor" stroke-linecap="round"
                                              stroke-linejoin="round" stroke-width="1.5"
                                              d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5">
                                            </path>
                                          </svg>
                                        </button>
                                          <button class="outline-none" style="display: none;">
                                            <svg
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                            <path fill="none" stroke="currentColor" stroke-linecap="round"
                                              stroke-linejoin="round" stroke-width="1.5"
                                              d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                            </path>
                                          </svg>
                                        </button>
                                        </label>
                                        </div>
                                    <div class="flex items-center">
                                      <div class="input-group"><input id="field_title" name="title" type="text"
                                          autofocus="autofocus" class="input-text" value="Contact Us"></div>
                                      
                                    </div>
                                  </div>
                                  <div
                                    class="form-group publish-field publish-field__content markdown-fieldtype w-full">
                                    <div class="field-inner"><label for="field_content"
                                        class="publish-field-label"><span
                                          class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Content</span>
                                        <button class="outline-none" style="display: none;"><svg
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                            <path fill="none" stroke="currentColor" stroke-linecap="round"
                                              stroke-linejoin="round" stroke-width="1.5"
                                              d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5">
                                            </path>
                                          </svg>
                                        </button>
                                          <button class="outline-none" style="display: none;">
                                            <svg
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                            <path fill="none" stroke="currentColor" stroke-linecap="round"
                                              stroke-linejoin="round" stroke-width="1.5"
                                              d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                            </path>
                                          </svg>
                                        </button>
                                        </label>
                                    </div>
                                    <div>
                                      <div class="markdown-fieldtype-wrapper @container/markdown">
                                        <div>
                                          <div class=""><input type="file" multiple="multiple" class="hidden">
                                            <div>
                                              <div class="markdown-toolbar">
                                                <div class="markdown-modes"><button aria-pressed="true"
                                                    class="active">Write</button><button aria-pressed="false"
                                                    class="">Preview</button></div>
                                                <div class="markdown-buttons"><button aria-label="Bold"
                                                    class="v-popper--has-tooltip"><svg
                                                      xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14"
                                                      class="w-4 h-4">
                                                      <path fill="currentColor" fill-rule="evenodd"
                                                        d="M3.5.25a.75.75 0 0 0-.75.75v12a.75.75 0 0 0 .75.75h3.75a4 4 0 0 0 1.945-7.496A3.5 3.5 0 0 0 6.75.25H3.5Zm3.25 5.5a2 2 0 1 0 0-4h-2.5v4h2.5Zm-2.5 1.5v5h3a2.5 2.5 0 0 0 0-5h-3Z"
                                                        clip-rule="evenodd"></path>
                                                    </svg></button><button aria-label="Italic"
                                                    class="v-popper--has-tooltip"><svg
                                                      xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14"
                                                      class="w-4 h-4">
                                                      <path fill="currentColor" fill-rule="evenodd"
                                                        d="M12.45.345H5.637a.75.75 0 0 0 0 1.5H8.18l-3.965 10.31H1.55a.75.75 0 1 0 0 1.5h6.813a.75.75 0 0 0 0-1.5H5.82l3.965-10.31h2.664a.75.75 0 0 0 0-1.5Z"
                                                        clip-rule="evenodd"></path>
                                                    </svg></button><button aria-label="Unordered List"
                                                    class="v-popper--has-tooltip"><svg
                                                      xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                      class="w-4 h-4">
                                                      <g fill="currentColor">
                                                        <path
                                                          d="M8.5 5H23a1 1 0 0 0 0-2H8.5a1 1 0 0 0 0 2ZM23 11H8.5a1 1 0 0 0 0 2H23a1 1 0 0 0 0-2Zm0 8H8.5a1 1 0 0 0 0 2H23a1 1 0 0 0 0-2Z">
                                                        </path>
                                                        <rect width="3" height="3" x="1" y="2.5" rx=".5"></rect>
                                                        <path
                                                          d="M3.5 1.5h-2A1.5 1.5 0 0 0 0 3v2a1.5 1.5 0 0 0 1.5 1.5h2A1.5 1.5 0 0 0 5 5V3a1.5 1.5 0 0 0-1.5-1.5ZM4 5a.5.5 0 0 1-.5.5h-2A.5.5 0 0 1 1 5V3a.5.5 0 0 1 .5-.5h2A.5.5 0 0 1 4 3Z">
                                                        </path>
                                                        <rect width="3" height="3" x="1" y="10.5" rx=".5"></rect>
                                                        <path
                                                          d="M3.5 9.5h-2A1.5 1.5 0 0 0 0 11v2a1.5 1.5 0 0 0 1.5 1.5h2A1.5 1.5 0 0 0 5 13v-2a1.5 1.5 0 0 0-1.5-1.5ZM4 13a.5.5 0 0 1-.5.5h-2A.5.5 0 0 1 1 13v-2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5Z">
                                                        </path>
                                                        <rect width="3" height="3" x="1" y="18.5" rx=".5"></rect>
                                                        <path
                                                          d="M3.5 17.5h-2A1.5 1.5 0 0 0 0 19v2a1.5 1.5 0 0 0 1.5 1.5h2A1.5 1.5 0 0 0 5 21v-2a1.5 1.5 0 0 0-1.5-1.5ZM4 21a.5.5 0 0 1-.5.5h-2A.5.5 0 0 1 1 21v-2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5Z">
                                                        </path>
                                                      </g>
                                                    </svg></button><button aria-label="Ordered List"
                                                    class="v-popper--has-tooltip"><svg
                                                      xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                      class="w-4 h-4">
                                                      <path fill="currentColor"
                                                        d="M7.75 4.5h15a1 1 0 0 0 0-2h-15a1 1 0 0 0 0 2Zm15 6.5h-15a1 1 0 0 0 0 2h15a1 1 0 0 0 0-2Zm0 8.5h-15a1 1 0 0 0 0 2h15a1 1 0 0 0 0-2ZM2.21 17.25a2 2 0 0 0-1.93 1.48.75.75 0 0 0 1.45.39.5.5 0 0 1 .48-.37.5.5 0 0 1 .5.5.5.5 0 0 1-.5.5.75.75 0 0 0 0 1.5.5.5 0 0 1 .5.5.5.5 0 0 1-1 .13.75.75 0 1 0-1.44.41 2 2 0 0 0 3.92-.54 1.94 1.94 0 0 0-.34-1.11.28.28 0 0 1 0-.28 1.94 1.94 0 0 0 .34-1.11 2 2 0 0 0-1.98-2Zm2.04-6.5a2 2 0 0 0-4 0 .76.76 0 0 0 .75.75.76.76 0 0 0 .75-.75.5.5 0 0 1 1 0 1 1 0 0 1-.23.64L.41 14a.76.76 0 0 0-.09.79.76.76 0 0 0 .68.43h2.5a.75.75 0 0 0 0-1.5h-.42a.25.25 0 0 1-.22-.14.24.24 0 0 1 0-.27l.81-1a2.59 2.59 0 0 0 .58-1.56ZM4 5.25h-.25A.25.25 0 0 1 3.5 5V1.62A1.38 1.38 0 0 0 2.12.25H1.5a.75.75 0 0 0 0 1.5h.25A.25.25 0 0 1 2 2v3a.25.25 0 0 1-.25.25H1.5a.75.75 0 0 0 0 1.5H4a.75.75 0 0 0 0-1.5Z">
                                                      </path>
                                                    </svg></button><button aria-label="Blockquote"
                                                    class="v-popper--has-tooltip"><svg
                                                      xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                      class="w-4 h-4">
                                                      <path fill="currentColor"
                                                        d="M9.93 3.93a9.71 9.71 0 0 0-9.43 10v1.24a4.94 4.94 0 1 0 4.94-4.94 4.5 4.5 0 0 0-1.11.14.24.24 0 0 1-.26-.09.26.26 0 0 1 0-.28 6.83 6.83 0 0 1 5.86-3.57 1.25 1.25 0 1 0 0-2.5Zm12.32 2.5a1.25 1.25 0 1 0 0-2.5 9.71 9.71 0 0 0-9.43 10v1.24a4.95 4.95 0 1 0 4.94-4.94 4.56 4.56 0 0 0-1.11.14.24.24 0 0 1-.26-.09.26.26 0 0 1 0-.28 6.83 6.83 0 0 1 5.86-3.57Z">
                                                      </path>
                                                    </svg></button><button aria-label="Insert Link"
                                                    class="v-popper--has-tooltip"><svg
                                                      xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14"
                                                      class="w-4 h-4">
                                                      <path fill="currentColor" fill-rule="evenodd"
                                                        d="M6.05 2.664a2.377 2.377 0 0 0 .257 3.057l.456.456-.586.586-.456-.456a2.377 2.377 0 0 0-3.057-.257l-.282.2A7.476 7.476 0 0 0 .645 7.974a2.768 2.768 0 0 0 .288 3.575l1.517 1.517a2.768 2.768 0 0 0 3.575.288 7.475 7.475 0 0 0 1.726-1.737l.22-.31a2.336 2.336 0 0 0-.254-3.005l-.48-.48.586-.586.48.48a2.337 2.337 0 0 0 3.006.253l.309-.22a7.479 7.479 0 0 0 1.737-1.725 2.768 2.768 0 0 0-.288-3.575L11.55.933A2.768 2.768 0 0 0 7.975.645a7.476 7.476 0 0 0-1.726 1.737l-.2.282Zm2.834 3.513.48.48a.837.837 0 0 0 1.076.09l.31-.22a5.975 5.975 0 0 0 1.388-1.379 1.268 1.268 0 0 0-.132-1.637l-1.517-1.517a1.268 1.268 0 0 0-1.637-.132c-.533.384-1 .853-1.38 1.389l-.2.281a.877.877 0 0 0 .095 1.128l.456.456.508-.508a.75.75 0 1 1 1.061 1.06l-.508.509ZM5.116 7.823l-.5.5a.75.75 0 1 0 1.062 1.06l.499-.499.48.48a.837.837 0 0 1 .09 1.076l-.22.31a5.975 5.975 0 0 1-1.379 1.388 1.268 1.268 0 0 1-1.637-.132L1.994 10.49a1.268 1.268 0 0 1-.132-1.637c.384-.533.853-1 1.389-1.38l.281-.2a.877.877 0 0 1 1.128.096l.456.455Z"
                                                        clip-rule="evenodd"></path>
                                                    </svg></button><button aria-label="Insert Image"
                                                    class="v-popper--has-tooltip"><svg
                                                      xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14"
                                                      class="w-4 h-4">
                                                      <path fill="currentColor" fill-rule="evenodd"
                                                        d="M3.824.583C4.837.47 5.904.37 7 .37c1.097 0 2.163.1 3.176.213a3.696 3.696 0 0 1 3.252 3.262c.108 1.008.202 2.067.202 3.155 0 1.088-.094 2.147-.202 3.155a3.696 3.696 0 0 1-3.252 3.262c-1.013.113-2.08.213-3.176.213s-2.163-.1-3.176-.213a3.696 3.696 0 0 1-3.252-3.262C.464 9.147.37 8.088.37 7c0-1.088.094-2.147.202-3.155A3.696 3.696 0 0 1 3.824.583Zm6.724 3.669a1.446 1.446 0 1 1-2.893 0 1.446 1.446 0 0 1 2.893 0Zm-6.196 7.711c-1.159-.146-2.092-1.206-2.216-2.523a39.527 39.527 0 0 1-.147-2.015.464.464 0 0 1 .412-.489 5.59 5.59 0 0 1 .564-.027c1.405-.036 2.775.496 3.866 1.5.883.814 1.537 1.895 1.892 3.108a.465.465 0 0 1-.417.59 15.7 15.7 0 0 1-1.308.059c-.9 0-1.785-.094-2.646-.203Zm5.737-.103c-.136.046-.274-.05-.301-.19-.14-.726-.43-1.622-.957-2.405-.1-.147-.033-.353.14-.392a5.62 5.62 0 0 1 2.738.07c.113.031.184.14.174.257l-.022.24c-.108 1.144-.826 2.093-1.772 2.42Z"
                                                        clip-rule="evenodd"></path>
                                                    </svg></button><button aria-label="Table"
                                                    class="v-popper--has-tooltip"><svg
                                                      xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                      class="w-4 h-4">
                                                      <path fill="currentColor" fill-rule="evenodd"
                                                        d="M17 17v5h2a3 3 0 0 0 3-3v-2h-5Zm-2 0H9v5h6v-5Zm2-2h5V9h-5v6Zm-2 0V9H9v6h6Zm2-8h5V5a3 3 0 0 0-3-3h-2v5Zm-2 0V2H9v5h6Zm9 9.177V19a5 5 0 0 1-5 5H5a5 5 0 0 1-5-5V5a5 5 0 0 1 5-5h14a5 5 0 0 1 5 5v2.823a.843.843 0 0 1 0 .354v7.646a.843.843 0 0 1 0 .354ZM7 2H5a3 3 0 0 0-3 3v2h5V2ZM2 9v6h5V9H2Zm0 8v2a3 3 0 0 0 3 3h2v-5H2Z">
                                                      </path>
                                                    </svg></button><!----><button aria-label="Toggle Fullscreen Mode"
                                                    class="v-popper--has-tooltip"><svg
                                                      xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14"
                                                      class="w-4 h-4">
                                                      <path fill="currentColor" fill-rule="evenodd"
                                                        d="M1.073 4.658.575 4.7c.054.64.828.91 1.274.465l.95-.95 1.489 1.489A1 1 0 0 0 5.702 4.29L4.212 2.8l.95-.95A.746.746 0 0 0 4.698.577C3.358.464 2.472.481 1.07.627a.5.5 0 0 0-.445.445C.479 2.474.462 3.361.575 4.7l.498-.042Zm12.352.042c-.054.64-.828.91-1.274.465l-.95-.95-1.489 1.489A1 1 0 1 1 8.298 4.29L9.787 2.8l-.95-.95c-.445-.445-.176-1.219.464-1.273 1.34-.113 2.227-.096 3.629.05a.5.5 0 0 1 .445.445c.146 1.402.163 2.289.05 3.628Zm0 4.6c-.054-.64-.828-.91-1.274-.465l-.95.95-1.489-1.489A1 1 0 1 0 8.298 9.71l1.489 1.49-.95.95c-.445.445-.176 1.219.464 1.273 1.34.113 2.227.096 3.629-.05a.5.5 0 0 0 .445-.445c.146-1.402.163-2.289.05-3.628Zm-12.8 3.628C.479 11.526.462 10.639.575 9.3c.054-.64.828-.91 1.274-.465l.95.95 1.489-1.489A1 1 0 1 1 5.702 9.71l-1.49 1.49.95.95a.746.746 0 0 1-.464 1.273c-1.34.113-2.226.096-3.628-.05a.5.5 0 0 1-.445-.445Z"
                                                        clip-rule="evenodd"></path>
                                                    </svg><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                      viewBox="0 0 48 48" class="w-4 h-4" style="display: none;">
                                                      <path fill="currentColor"
                                                        d="M40.674 23.742c1.997-.18 2.898-2.252 1.642-3.814a75.944 75.944 0 0 0-3.292-3.802c3.5-3.788 5.666-6.544 6.862-8.18.806-1.103.914-2.49.03-3.531-.302-.356-.68-.767-1.151-1.235a21.09 21.09 0 0 0-1.173-1.087c-1.046-.893-2.433-.768-3.531.06-1.618 1.22-4.345 3.403-8.124 6.87a74.276 74.276 0 0 0-3.917-3.4c-1.547-1.24-3.578-.349-3.759 1.626-.386 4.222-.293 9.016-.083 12.926a3.85 3.85 0 0 0 3.643 3.644c3.888.208 8.65.301 12.853-.077Zm-33.35.516c-1.997.18-2.898 2.252-1.642 3.814a75.957 75.957 0 0 0 3.292 3.801c-3.5 3.788-5.666 6.544-6.862 8.18-.806 1.103-.914 2.49-.03 3.531.303.356.68.767 1.151 1.235.445.442.834.799 1.173 1.087 1.046.893 2.433.767 3.531-.06 1.618-1.22 4.344-3.403 8.123-6.87a74.256 74.256 0 0 0 3.917 3.4c1.547 1.24 3.578.349 3.759-1.626.386-4.221.293-9.015.083-12.925a3.85 3.85 0 0 0-3.643-3.644c-3.888-.208-8.649-.301-12.852.077Z">
                                                      </path>
                                                    </svg></button></div>
                                              </div>
                                              <div class="drag-notification" style="display: none;"><svg
                                                  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                  class="h-12 w-12 mb-4">
                                                  <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="1.5"
                                                    d="M.752 2.251a1.5 1.5 0 0 1 1.5-1.5m0 22.5a1.5 1.5 0 0 1-1.5-1.5m22.5 0a1.5 1.5 0 0 1-1.5 1.5m0-22.5a1.5 1.5 0 0 1 1.5 1.5m0 15.75v-1.5m0-3.75v-1.5m0-3.75v-1.5m-22.5 12v-1.5m0-3.75v-1.5m0-3.75v-1.5m5.25-5.25h1.5m3.75 0h1.5m3.75 0h1.5m-12 22.5h1.5m3.75 0h1.5m3.75 0h1.5m-6-5.25v-12m4.5 4.5-4.5-4.5-4.5 4.5">
                                                  </path>
                                                </svg> Drop File to Upload </div><!---->
                                              <div class="mode-wrap mode-write">
                                                <div class="markdown-writer">
                                                  <div class="editor">
                                                    <div class="CodeMirror cm-s-default CodeMirror-wrap" translate="no">
                                                      <div class="CodeMirror-vscrollbar" tabindex="-1"
                                                        cm-not-content="true" style="bottom: 0px;">
                                                        <div style="min-width: 1px; height: 0px;"></div>
                                                      </div>
                                                      <div class="CodeMirror-hscrollbar" tabindex="-1"
                                                        cm-not-content="true">
                                                        <div style="height: 100%; min-height: 1px; width: 0px;"></div>
                                                      </div>
                                                      <div class="CodeMirror-scrollbar-filler" cm-not-content="true">
                                                      </div>
                                                      <div class="CodeMirror-gutter-filler" cm-not-content="true"></div>
                                                      <div class="CodeMirror-scroll" tabindex="-1" draggable="true">
                                                        <div class="CodeMirror-sizer"
                                                          style="margin-left: 0px; margin-bottom: -17px; border-right-width: 33px; min-height: 28px; padding-right: 0px; padding-bottom: 0px;">
                                                          <div style="position: relative; top: 0px;">
                                                            <div class="CodeMirror-lines" role="presentation">
                                                              <div style="position: relative; outline: none;"
                                                                role="presentation">
                                                                <div class="CodeMirror-measure">
                                                                  <pre
                                                                    class="CodeMirror-line-like"><span>xxxxxxxxxx</span></pre>
                                                                </div>
                                                                <div class="CodeMirror-measure"></div>
                                                                <div style="position: relative; z-index: 1;"></div>
                                                                <div class="CodeMirror-cursors"></div>
                                                                <div class="CodeMirror-code" role="presentation"
                                                                  contenteditable="true" autocorrect="off"
                                                                  autocapitalize="none" spellcheck="true" tabindex="0">
                                                                  <pre class=" CodeMirror-line "
                                                                    role="presentation"><span role="presentation"><span cm-text="">​</span></span></pre>
                                                                </div>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div
                                                          style="position: absolute; height: 33px; width: 1px; border-bottom: 0px solid transparent; top: 28px;">
                                                        </div>
                                                        <div class="CodeMirror-gutters"
                                                          style="display: none; height: 61px;"></div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="helpers">
                                                    <div class="flex w-full">
                                                      <div class="markdown-cheatsheet-helper"><button
                                                          aria-label="Show Markdown Cheatsheet"
                                                          class="text-link flex items-center"><svg
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24"
                                                            class="w-6 h-4 items-start rtl:ml-2 ltr:mr-2">
                                                            <path fill="currentColor" fill-rule="evenodd"
                                                              d="M2.75 2.5A2.75 2.75 0 0 0 0 5.25v13.5a2.75 2.75 0 0 0 2.75 2.75h18.5A2.75 2.75 0 0 0 24 18.75V5.25a2.75 2.75 0 0 0-2.75-2.75H2.75Zm1.724 4.539a1 1 0 0 1 1.124.431l2.152 3.443L9.902 7.47A1 1 0 0 1 11.75 8v8a1 1 0 1 1-2 0v-4.513L8.598 13.33a1 1 0 0 1-1.696 0L5.75 11.487V16a1 1 0 1 1-2 0V8a1 1 0 0 1 .724-.961ZM18.25 7.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5V12h-1.5a1 1 0 0 0-.768 1.64l2.5 3a1 1 0 0 0 1.536 0l2.5-3A1 1 0 0 0 19.75 12h-1.5V7.5Z"
                                                              clip-rule="evenodd"></path>
                                                          </svg><span>Markdown Cheatsheet</span></button></div>
                                                    </div><!---->
                                                  </div><!---->
                                                </div>
                                                <div class="markdown-preview prose-sm @md/markdown:prose-base"
                                                  style="display: none;"></div>
                                              </div>
                                            </div>
                                          </div>
                                        </div><!----><!---->
                                        <div data-v-12d8198d=""></div>
                                      </div>
                                    </div><!----><!---->
                                  </div>
                                  <div
                                    class="form-group publish-field publish-field__author relationship-fieldtype w-full">
                                    <div class="field-inner"><label for="field_author" class="publish-field-label"><span
                                          class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Author</span>
                                        <button class="outline-none" style="display: none;"><svg
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                            <path fill="none" stroke="currentColor" stroke-linecap="round"
                                              stroke-linejoin="round" stroke-width="1.5"
                                              d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5">
                                            </path>
                                          </svg></button><button class="outline-none" style="display: none;"><svg
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                            <path fill="none" stroke="currentColor" stroke-linecap="round"
                                              stroke-linejoin="round" stroke-width="1.5"
                                              d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                            </path>
                                          </svg></button></label><!----></div><!---->
                                    <div class="relationship-input">
                                      <div data-v-c80a132c="">
                                        <div data-v-c80a132c="" dir="auto" class="v-select vs--single vs--searchable">
                                          <div id="vs14__combobox" role="combobox" aria-expanded="false"
                                            aria-owns="vs14__listbox" aria-label="Search for option"
                                            class="vs__dropdown-toggle">
                                            <div class="vs__selected-options"><span class="vs__selected">
                                                Jack McDade
                                                <!----></span> <input aria-autocomplete="list"
                                                aria-labelledby="vs14__combobox" aria-controls="vs14__listbox"
                                                type="search" autocomplete="off" class="vs__search"></div>
                                            <div class="vs__actions"><button type="button" title="Clear Selected"
                                                aria-label="Clear Selected" class="vs__clear"><span>×</span></button>
                                              <span class="toggle vs__open-indicator" role="presentation"><svg
                                                  xmlns="http://www.w3.org/2000/svg" height="16" width="16"
                                                  viewBox="0 0 20 20">
                                                  <path fill="currentColor"
                                                    d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z">
                                                  </path>
                                                </svg></span>
                                              <div class="vs__spinner" style="display: none;">Loading...</div>
                                            </div>
                                          </div>
                                          <ul id="vs14__listbox" role="listbox"
                                            style="display: none; visibility: hidden;"></ul>
                                        </div>
                                      </div><!----><!---->
                                    </div><!----><!---->
                                  </div>
                                  <div
                                    class="form-group publish-field publish-field__template template-fieldtype w-full">
                                    <div class="field-inner"><label for="field_template"
                                        class="publish-field-label"><span
                                          class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Template</span>
                                        <button class="outline-none" style="display: none;"><svg
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                            <path fill="none" stroke="currentColor" stroke-linecap="round"
                                              stroke-linejoin="round" stroke-width="1.5"
                                              d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5">
                                            </path>
                                          </svg></button><button class="outline-none" style="display: none;"><svg
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                            <path fill="none" stroke="currentColor" stroke-linecap="round"
                                              stroke-linejoin="round" stroke-width="1.5"
                                              d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                            </path>
                                          </svg></button></label><!----></div><!---->
                                    <div class="template-fieldtype-container">
                                      <div dir="auto" class="v-select vs--single vs--searchable" name="template">
                                        <div id="vs1__combobox" role="combobox" aria-expanded="false"
                                          aria-owns="vs1__listbox" aria-label="Search for option"
                                          class="vs__dropdown-toggle">
                                          <div class="vs__selected-options"><span class="vs__selected">
                                              form
                                              <!----></span> <input aria-autocomplete="list"
                                              aria-labelledby="vs1__combobox" aria-controls="vs1__listbox" type="search"
                                              autocomplete="off" class="vs__search"></div>
                                          <div class="vs__actions"><button type="button" title="Clear Selected"
                                              aria-label="Clear Selected" class="vs__clear"><span>×</span></button>
                                            <span class="toggle vs__open-indicator" role="presentation"><svg
                                                xmlns="http://www.w3.org/2000/svg" height="16" width="16"
                                                viewBox="0 0 20 20">
                                                <path fill="currentColor"
                                                  d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z">
                                                </path>
                                              </svg></span>
                                            <div class="vs__spinner" style="display: none;">Loading...</div>
                                          </div>
                                        </div>
                                        <ul id="vs1__listbox" role="listbox" style="display: none; visibility: hidden;">
                                        </ul>
                                      </div>
                                    </div><!----><!---->
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div id="MetaSeoTabPanel" class="tab-panel">
                          <div class="publish-sections">
                            <div class="publish-sections-section">
                              <div class="p-0 card"><!---->
                                <div class="publish-fields @container">
                                  <div class="form-group publish-field publish-field__meta_title text-fieldtype w-full">
                                    <div class="field-inner">
                                        <label for="field_meta_title" class="publish-field-label">
                                        <span class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Meta Title</span>
                                        <button class="outline-none" style="display: none;"><svg
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                            <path fill="none" stroke="currentColor" stroke-linecap="round"
                                              stroke-linejoin="round" stroke-width="1.5"
                                              d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5">
                                            </path>
                                          </svg></button><button class="outline-none" style="display: none;"><svg
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                            <path fill="none" stroke="currentColor" stroke-linecap="round"
                                              stroke-linejoin="round" stroke-width="1.5"
                                              d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                            </path>
                                          </svg></button></label><!----></div><!---->
                                    <div class="flex items-center">
                                      <div class="input-group"><!----><input id="field_meta_title" name="meta_title"
                                          type="text" class="input-text"><!----></div><!---->
                                    </div><!----><!---->
                                  </div>
                                  <div
                                    class="form-group publish-field publish-field__meta_image assets-fieldtype w-full">
                                    <div class="field-inner"><label for="field_meta_image"
                                        class="publish-field-label">
                                        <span class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Meta Image</span>
                                        <button class="outline-none" style="display: none;"><svg
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                            <path fill="none" stroke="currentColor" stroke-linecap="round"
                                              stroke-linejoin="round" stroke-width="1.5"
                                              d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5">
                                            </path>
                                          </svg></button><button class="outline-none" style="display: none;"><svg
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                            <path fill="none" stroke="currentColor" stroke-linecap="round"
                                              stroke-linejoin="round" stroke-width="1.5"
                                              d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                            </path>
                                          </svg></button></label><!----></div><!---->
                                    <div class="@container">
                                      <div>
                                        <div class=""><input type="file" multiple="multiple" class="hidden">
                                          <div class="assets-fieldtype-drag-container">
                                            <div class="drag-notification" style="display: none;"><svg
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                class="h-6 @md:h-8 w-6 @md:w-8 rtl:ml-2 ltr:mr-2 @md:mr-6">
                                                <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                  stroke-linejoin="round" stroke-width="1.5"
                                                  d="M.752 2.251a1.5 1.5 0 0 1 1.5-1.5m0 22.5a1.5 1.5 0 0 1-1.5-1.5m22.5 0a1.5 1.5 0 0 1-1.5 1.5m0-22.5a1.5 1.5 0 0 1 1.5 1.5m0 15.75v-1.5m0-3.75v-1.5m0-3.75v-1.5m-22.5 12v-1.5m0-3.75v-1.5m0-3.75v-1.5m5.25-5.25h1.5m3.75 0h1.5m3.75 0h1.5m-12 22.5h1.5m3.75 0h1.5m3.75 0h1.5m-6-5.25v-12m4.5 4.5-4.5-4.5-4.5 4.5">
                                                </path>
                                              </svg><span>Drop to Upload</span></div>
                                            <div class="assets-fieldtype-picker"><button type="button" tabindex="0"
                                                class="btn btn-with-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                                  viewBox="0 0 24 24" class="w-4 h-4 text-gray-800">
                                                  <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="1.5"
                                                    d="M21.75 9V6a1.5 1.5 0 0 0-1.5-1.5h-12V3a1.5 1.5 0 0 0-1.5-1.5h-4.5A1.5 1.5 0 0 0 .75 3v17.8a1.7 1.7 0 0 0 3.336.438l2.351-11.154A1.5 1.5 0 0 1 7.879 9H21.75a1.5 1.5 0 0 1 1.45 1.886l-2.2 10.5a1.5 1.5 0 0 1-1.45 1.114H2.447">
                                                  </path>
                                                  <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="1.5"
                                                    d="M9.75 12.375a.375.375 0 1 1-.375.375.375.375 0 0 1 .375-.375m8.629 7.125-2.911-4.365a.75.75 0 0 0-1.238-.015l-2 2.851-1.23-.989a.75.75 0 0 0-1.092.17L8.34 19.5">
                                                  </path>
                                                </svg> Browse </button>
                                              <p class="asset-upload-control"><button type="button"
                                                  class="upload-text-button"> Upload file </button><span
                                                  class="drag-drop-text">or drag &amp; drop here to replace.</span></p>
                                            </div><!----><!---->
                                          </div>
                                        </div>
                                      </div><!---->
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
                                  <div class="form-group publish-field publish-field__seo seo_pro-fieldtype w-full">
                                    <div class="field-inner"><label for="field_seo" class="publish-field-label"><span
                                          class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">SEO</span>
                                        <button class="outline-none" style="display: none;"><svg
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                            <path fill="none" stroke="currentColor" stroke-linecap="round"
                                              stroke-linejoin="round" stroke-width="1.5"
                                              d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5">
                                            </path>
                                          </svg></button><button class="outline-none" style="display: none;"><svg
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                            <path fill="none" stroke="currentColor" stroke-linecap="round"
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
                                            <button class="outline-none" style="display: none;"><svg
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                  stroke-linejoin="round" stroke-width="1.5"
                                                  d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5">
                                                </path>
                                              </svg></button><button class="outline-none" style="display: none;"><svg
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                  stroke-linejoin="round" stroke-width="1.5"
                                                  d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                </path>
                                              </svg></button></label>
                                          <div class="help-block -mt-2">
                                            <p>Disabling this item will exclude it from reports and the sitemap, and prevent
                                              anything from being rendered through the template tag.</p>
                                          </div>
                                        </div><!---->
                                        <div class="toggle-fieldtype-wrapper"><button type="button" aria-pressed="true"
                                            aria-label="Toggle Button" class="toggle-container on" id="field_enabled">
                                            <div class="toggle-slider">
                                              <div tabindex="0" class="toggle-knob"></div>
                                            </div>
                                          </button><!----></div><!----><!---->
                                      </div>
                                      <div
                                        class="form-group form-group publish-field publish-field__title seo_pro_source-fieldtype w-full">
                                        <div class="field-inner"><label for="field_title"
                                            class="publish-field-label"><span
                                              class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Meta
                                              Title</span>
                                            <button class="outline-none" style="display: none;"><svg
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                  stroke-linejoin="round" stroke-width="1.5"
                                                  d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5">
                                                </path>
                                              </svg></button><button class="outline-none" style="display: none;"><svg
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                  stroke-linejoin="round" stroke-width="1.5"
                                                  d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                </path>
                                              </svg></button></label>
                                          <div class="help-block -mt-2">
                                            <p>Every URL in your site should have a unique Meta Title, ideally less than
                                              60 characters long.</p>
                                          </div>
                                        </div><!---->
                                        <div class="flex">
                                          <div class="source-type-select pr-4">
                                            <div dir="auto" class="v-select vs--single vs--searchable">
                                              <div id="vs2__combobox" role="combobox" aria-expanded="false"
                                                aria-owns="vs2__listbox" aria-label="Search for option"
                                                class="vs__dropdown-toggle">
                                                <div class="vs__selected-options"><span class="vs__selected">
                                                    Inherit
                                                    <!----></span> <input aria-autocomplete="list"
                                                    aria-labelledby="vs2__combobox" aria-controls="vs2__listbox"
                                                    type="search" autocomplete="off" class="vs__search"></div>
                                                <div class="vs__actions"><button type="button" title="Clear Selected"
                                                    aria-label="Clear Selected" class="vs__clear"
                                                    style="display: none;"><span>×</span></button> <span
                                                    class="toggle vs__open-indicator" role="presentation"><svg
                                                      xmlns="http://www.w3.org/2000/svg" height="16" width="16"
                                                      viewBox="0 0 20 20">
                                                      <path fill="currentColor"
                                                        d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z">
                                                      </path>
                                                    </svg></span>
                                                  <div class="vs__spinner" style="display: none;">Loading...</div>
                                                </div>
                                              </div>
                                              <ul id="vs2__listbox" role="listbox"
                                                style="display: none; visibility: hidden;"></ul>
                                            </div>
                                          </div>
                                          <div class="flex-1">
                                            <div class="text-sm text-grey inherit-placeholder mt-1"> Contact Us </div>
                                          </div>
                                        </div><!----><!---->
                                      </div>
                                      <div
                                        class="form-group form-group publish-field publish-field__description seo_pro_source-fieldtype w-full">
                                        <div class="field-inner"><label for="field_description"
                                            class="publish-field-label"><span
                                              class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Meta
                                              Description</span>
                                            <button class="outline-none" style="display: none;"><svg
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                  stroke-linejoin="round" stroke-width="1.5"
                                                  d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5">
                                                </path>
                                              </svg></button><button class="outline-none" style="display: none;"><svg
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                  stroke-linejoin="round" stroke-width="1.5"
                                                  d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                </path>
                                              </svg></button></label>
                                          <div class="help-block -mt-2">
                                            <p>Every URL in your site should have a unique Meta Description, ideally
                                              less than 160 characters long.</p>
                                          </div>
                                        </div><!---->
                                        <div class="flex">
                                          <div class="source-type-select pr-4">
                                            <div dir="auto" class="v-select vs--single vs--searchable">
                                              <div id="vs3__combobox" role="combobox" aria-expanded="false"
                                                aria-owns="vs3__listbox" aria-label="Search for option"
                                                class="vs__dropdown-toggle">
                                                <div class="vs__selected-options"><span class="vs__selected">
                                                    Inherit
                                                    <!----></span> <input aria-autocomplete="list"
                                                    aria-labelledby="vs3__combobox" aria-controls="vs3__listbox"
                                                    type="search" autocomplete="off" class="vs__search"></div>
                                                <div class="vs__actions"><button type="button" title="Clear Selected"
                                                    aria-label="Clear Selected" class="vs__clear"
                                                    style="display: none;"><span>×</span></button> <span
                                                    class="toggle vs__open-indicator" role="presentation"><svg
                                                      xmlns="http://www.w3.org/2000/svg" height="16" width="16"
                                                      viewBox="0 0 20 20">
                                                      <path fill="currentColor"
                                                        d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z">
                                                      </path>
                                                    </svg></span>
                                                  <div class="vs__spinner" style="display: none;">Loading...</div>
                                                </div>
                                              </div>
                                              <ul id="vs3__listbox" role="listbox"
                                                style="display: none; visibility: hidden;"></ul>
                                            </div>
                                          </div>
                                          <div class="flex-1">
                                            <div class="text-sm text-grey inherit-placeholder mt-1"> </div>
                                          </div>
                                        </div><!----><!---->
                                      </div>
                                      <div
                                        class="form-group form-group publish-field publish-field__site_name seo_pro_source-fieldtype w-full">
                                        <div class="field-inner"><label for="field_site_name"
                                            class="publish-field-label"><span
                                              class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Site
                                              Name</span>
                                            <button class="outline-none" style="display: none;"><svg
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                  stroke-linejoin="round" stroke-width="1.5"
                                                  d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5">
                                                </path>
                                              </svg></button><button class="outline-none" style="display: none;"><svg
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                  stroke-linejoin="round" stroke-width="1.5"
                                                  d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                </path>
                                              </svg></button></label>
                                          <div class="help-block -mt-2">
                                            <p>Optionally disable the site name for this page.</p>
                                          </div>
                                        </div><!---->
                                        <div class="flex">
                                          <div class="source-type-select pr-4">
                                            <div dir="auto" class="v-select vs--single vs--searchable">
                                              <div id="vs4__combobox" role="combobox" aria-expanded="false"
                                                aria-owns="vs4__listbox" aria-label="Search for option"
                                                class="vs__dropdown-toggle">
                                                <div class="vs__selected-options"><span class="vs__selected">
                                                    Inherit
                                                    <!----></span> <input aria-autocomplete="list"
                                                    aria-labelledby="vs4__combobox" aria-controls="vs4__listbox"
                                                    type="search" autocomplete="off" class="vs__search"></div>
                                                <div class="vs__actions"><button type="button" title="Clear Selected"
                                                    aria-label="Clear Selected" class="vs__clear"
                                                    style="display: none;"><span>×</span></button> <span
                                                    class="toggle vs__open-indicator" role="presentation"><svg
                                                      xmlns="http://www.w3.org/2000/svg" height="16" width="16"
                                                      viewBox="0 0 20 20">
                                                      <path fill="currentColor"
                                                        d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z">
                                                      </path>
                                                    </svg></span>
                                                  <div class="vs__spinner" style="display: none;">Loading...</div>
                                                </div>
                                              </div>
                                              <ul id="vs4__listbox" role="listbox"
                                                style="display: none; visibility: hidden;"></ul>
                                            </div>
                                          </div>
                                          <div class="flex-1">
                                            <div class="text-sm text-grey inherit-placeholder mt-1"> Site Name </div>
                                          </div>
                                        </div><!----><!---->
                                      </div>
                                      <div
                                        class="form-group form-group publish-field publish-field__site_name_position seo_pro_source-fieldtype w-full">
                                        <div class="field-inner"><label for="field_site_name_position"
                                            class="publish-field-label"><span
                                              class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Site Name
                                              Position</span>
                                            <button class="outline-none" style="display: none;"><svg
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                  stroke-linejoin="round" stroke-width="1.5"
                                                  d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5">
                                                </path>
                                              </svg></button><button class="outline-none" style="display: none;"><svg
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                  stroke-linejoin="round" stroke-width="1.5"
                                                  d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                </path>
                                              </svg></button></label>
                                          <div class="help-block -mt-2">
                                            <p>Optionally adjust the position for this page.</p>
                                          </div>
                                        </div><!---->
                                        <div class="flex">
                                          <div class="source-type-select pr-4">
                                            <div dir="auto" class="v-select vs--single vs--searchable">
                                              <div id="vs5__combobox" role="combobox" aria-expanded="false"
                                                aria-owns="vs5__listbox" aria-label="Search for option"
                                                class="vs__dropdown-toggle">
                                                <div class="vs__selected-options"><span class="vs__selected">
                                                    Inherit
                                                    <!----></span> <input aria-autocomplete="list"
                                                    aria-labelledby="vs5__combobox" aria-controls="vs5__listbox"
                                                    type="search" autocomplete="off" class="vs__search"></div>
                                                <div class="vs__actions"><button type="button" title="Clear Selected"
                                                    aria-label="Clear Selected" class="vs__clear"
                                                    style="display: none;"><span>×</span></button> <span
                                                    class="toggle vs__open-indicator" role="presentation"><svg
                                                      xmlns="http://www.w3.org/2000/svg" height="16" width="16"
                                                      viewBox="0 0 20 20">
                                                      <path fill="currentColor"
                                                        d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z">
                                                      </path>
                                                    </svg></span>
                                                  <div class="vs__spinner" style="display: none;">Loading...</div>
                                                </div>
                                              </div>
                                              <ul id="vs5__listbox" role="listbox"
                                                style="display: none; visibility: hidden;"></ul>
                                            </div>
                                          </div>
                                          <div class="flex-1">
                                            <div class="text-sm text-grey inherit-placeholder mt-1"> after </div>
                                          </div>
                                        </div><!----><!---->
                                      </div>
                                      <div
                                        class="form-group form-group publish-field publish-field__site_name_separator seo_pro_source-fieldtype w-full">
                                        <div class="field-inner"><label for="field_site_name_separator"
                                            class="publish-field-label"><span
                                              class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Site Name
                                              Separator</span>
                                            <button class="outline-none" style="display: none;"><svg
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                  stroke-linejoin="round" stroke-width="1.5"
                                                  d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5">
                                                </path>
                                              </svg></button><button class="outline-none" style="display: none;"><svg
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                  stroke-linejoin="round" stroke-width="1.5"
                                                  d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                </path>
                                              </svg></button></label>
                                          <div class="help-block -mt-2">
                                            <p>Optionally adjust the separator for this page.</p>
                                          </div>
                                        </div><!---->
                                        <div class="flex">
                                          <div class="source-type-select pr-4">
                                            <div dir="auto" class="v-select vs--single vs--searchable">
                                              <div id="vs6__combobox" role="combobox" aria-expanded="false"
                                                aria-owns="vs6__listbox" aria-label="Search for option"
                                                class="vs__dropdown-toggle">
                                                <div class="vs__selected-options"><span class="vs__selected">
                                                    Inherit
                                                    <!----></span> <input aria-autocomplete="list"
                                                    aria-labelledby="vs6__combobox" aria-controls="vs6__listbox"
                                                    type="search" autocomplete="off" class="vs__search"></div>
                                                <div class="vs__actions"><button type="button" title="Clear Selected"
                                                    aria-label="Clear Selected" class="vs__clear"
                                                    style="display: none;"><span>×</span></button> <span
                                                    class="toggle vs__open-indicator" role="presentation"><svg
                                                      xmlns="http://www.w3.org/2000/svg" height="16" width="16"
                                                      viewBox="0 0 20 20">
                                                      <path fill="currentColor"
                                                        d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z">
                                                      </path>
                                                    </svg></span>
                                                  <div class="vs__spinner" style="display: none;">Loading...</div>
                                                </div>
                                              </div>
                                              <ul id="vs6__listbox" role="listbox"
                                                style="display: none; visibility: hidden;"></ul>
                                            </div>
                                          </div>
                                          <div class="flex-1">
                                            <div class="text-sm text-grey inherit-placeholder mt-1"> | </div>
                                          </div>
                                        </div><!----><!---->
                                      </div>
                                      <div
                                        class="form-group form-group publish-field publish-field__canonical_url seo_pro_source-fieldtype w-full">
                                        <div class="field-inner"><label for="field_canonical_url"
                                            class="publish-field-label"><span
                                              class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Canonical
                                              URL</span>
                                            <button class="outline-none" style="display: none;"><svg
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                  stroke-linejoin="round" stroke-width="1.5"
                                                  d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5">
                                                </path>
                                              </svg></button><button class="outline-none" style="display: none;"><svg
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                  stroke-linejoin="round" stroke-width="1.5"
                                                  d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                </path>
                                              </svg></button></label>
                                          <div class="help-block -mt-2">
                                            <p>Every URL in your site should have a unique canonical URL.</p>
                                          </div>
                                        </div><!---->
                                        <div class="flex">
                                          <div class="source-type-select pr-4">
                                            <div dir="auto" class="v-select vs--single vs--searchable">
                                              <div id="vs7__combobox" role="combobox" aria-expanded="false"
                                                aria-owns="vs7__listbox" aria-label="Search for option"
                                                class="vs__dropdown-toggle">
                                                <div class="vs__selected-options"><span class="vs__selected">
                                                    Inherit
                                                    <!----></span> <input aria-autocomplete="list"
                                                    aria-labelledby="vs7__combobox" aria-controls="vs7__listbox"
                                                    type="search" autocomplete="off" class="vs__search"></div>
                                                <div class="vs__actions"><button type="button" title="Clear Selected"
                                                    aria-label="Clear Selected" class="vs__clear"
                                                    style="display: none;"><span>×</span></button> <span
                                                    class="toggle vs__open-indicator" role="presentation"><svg
                                                      xmlns="http://www.w3.org/2000/svg" height="16" width="16"
                                                      viewBox="0 0 20 20">
                                                      <path fill="currentColor"
                                                        d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z">
                                                      </path>
                                                    </svg></span>
                                                  <div class="vs__spinner" style="display: none;">Loading...</div>
                                                </div>
                                              </div>
                                              <ul id="vs7__listbox" role="listbox"
                                                style="display: none; visibility: hidden;"></ul>
                                            </div>
                                          </div>
                                          <div class="flex-1">
                                            <div class="text-sm text-grey inherit-placeholder mt-1">
                                              https://demo.statamic.com/contact </div>
                                          </div>
                                        </div><!----><!---->
                                      </div>
                                      <div
                                        class="form-group form-group publish-field publish-field__robots seo_pro_source-fieldtype w-full">
                                        <div class="field-inner"><label for="field_robots"
                                            class="publish-field-label"><span
                                              class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Robots</span>
                                            <button class="outline-none" style="display: none;"><svg
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                  stroke-linejoin="round" stroke-width="1.5"
                                                  d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5">
                                                </path>
                                              </svg></button><button class="outline-none" style="display: none;"><svg
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                  stroke-linejoin="round" stroke-width="1.5"
                                                  d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                </path>
                                              </svg></button></label>
                                          <div class="help-block -mt-2">
                                            <p>Pick
                                              options for the robots meta tag. noindex prevents the page being
                                              indexed by search engines. nofollow prevents search engines from
                                              crawling links.</p>
                                          </div>
                                        </div><!---->
                                        <div class="flex">
                                          <div class="source-type-select pr-4">
                                            <div dir="auto" class="v-select vs--single vs--searchable">
                                              <div id="vs8__combobox" role="combobox" aria-expanded="false"
                                                aria-owns="vs8__listbox" aria-label="Search for option"
                                                class="vs__dropdown-toggle">
                                                <div class="vs__selected-options"><span class="vs__selected">
                                                    Inherit
                                                    <!----></span> <input aria-autocomplete="list"
                                                    aria-labelledby="vs8__combobox" aria-controls="vs8__listbox"
                                                    type="search" autocomplete="off" class="vs__search"></div>
                                                <div class="vs__actions"><button type="button" title="Clear Selected"
                                                    aria-label="Clear Selected" class="vs__clear"
                                                    style="display: none;"><span>×</span></button> <span
                                                    class="toggle vs__open-indicator" role="presentation"><svg
                                                      xmlns="http://www.w3.org/2000/svg" height="16" width="16"
                                                      viewBox="0 0 20 20">
                                                      <path fill="currentColor"
                                                        d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z">
                                                      </path>
                                                    </svg></span>
                                                  <div class="vs__spinner" style="display: none;">Loading...</div>
                                                </div>
                                              </div>
                                              <ul id="vs8__listbox" role="listbox"
                                                style="display: none; visibility: hidden;"></ul>
                                            </div>
                                          </div>
                                          <div class="flex-1">
                                            <div class="text-sm text-grey inherit-placeholder mt-1"> </div>
                                          </div>
                                        </div><!----><!---->
                                      </div>
                                      <div
                                        class="form-group form-group publish-field publish-field__image seo_pro_source-fieldtype w-full">
                                        <div class="field-inner"><label for="field_image"
                                            class="publish-field-label"><span
                                              class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Social
                                              Image</span>
                                            <button class="outline-none" style="display: none;"><svg
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                  stroke-linejoin="round" stroke-width="1.5"
                                                  d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5">
                                                </path>
                                              </svg></button><button class="outline-none" style="display: none;"><svg
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                  stroke-linejoin="round" stroke-width="1.5"
                                                  d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                </path>
                                              </svg></button></label>
                                          <div class="help-block -mt-2">
                                            <p>This image is used as a social network preview image.</p>
                                          </div>
                                        </div><!---->
                                        <div class="flex">
                                          <div class="source-type-select pr-4">
                                            <div dir="auto" class="v-select vs--single vs--searchable">
                                              <div id="vs9__combobox" role="combobox" aria-expanded="false"
                                                aria-owns="vs9__listbox" aria-label="Search for option"
                                                class="vs__dropdown-toggle">
                                                <div class="vs__selected-options"><span class="vs__selected">
                                                    Inherit
                                                    <!----></span> <input aria-autocomplete="list"
                                                    aria-labelledby="vs9__combobox" aria-controls="vs9__listbox"
                                                    type="search" autocomplete="off" class="vs__search"></div>
                                                <div class="vs__actions"><button type="button" title="Clear Selected"
                                                    aria-label="Clear Selected" class="vs__clear"
                                                    style="display: none;"><span>×</span></button> <span
                                                    class="toggle vs__open-indicator" role="presentation"><svg
                                                      xmlns="http://www.w3.org/2000/svg" height="16" width="16"
                                                      viewBox="0 0 20 20">
                                                      <path fill="currentColor"
                                                        d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z">
                                                      </path>
                                                    </svg></span>
                                                  <div class="vs__spinner" style="display: none;">Loading...</div>
                                                </div>
                                              </div>
                                              <ul id="vs9__listbox" role="listbox"
                                                style="display: none; visibility: hidden;"></ul>
                                            </div>
                                          </div>
                                          <div class="flex-1">
                                            <div class="text-sm text-grey inherit-placeholder mt-1"> </div>
                                          </div>
                                        </div><!----><!---->
                                      </div>
                                      <div
                                        class="form-group form-group publish-field publish-field__twitter_handle seo_pro_source-fieldtype w-full">
                                        <div class="field-inner"><label for="field_twitter_handle"
                                            class="publish-field-label"><span
                                              class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Twitter
                                              Handle</span>
                                            <button class="outline-none" style="display: none;"><svg
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                  stroke-linejoin="round" stroke-width="1.5"
                                                  d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5">
                                                </path>
                                              </svg></button><button class="outline-none" style="display: none;"><svg
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                  stroke-linejoin="round" stroke-width="1.5"
                                                  d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                </path>
                                              </svg></button></label>
                                          <div class="help-block -mt-2">
                                            <p>Optionally override the twitter handle for this page.</p>
                                          </div>
                                        </div><!---->
                                        <div class="flex">
                                          <div class="source-type-select pr-4">
                                            <div dir="auto" class="v-select vs--single vs--searchable">
                                              <div id="vs10__combobox" role="combobox" aria-expanded="false"
                                                aria-owns="vs10__listbox" aria-label="Search for option"
                                                class="vs__dropdown-toggle">
                                                <div class="vs__selected-options"><span class="vs__selected">
                                                    Inherit
                                                    <!----></span> <input aria-autocomplete="list"
                                                    aria-labelledby="vs10__combobox" aria-controls="vs10__listbox"
                                                    type="search" autocomplete="off" class="vs__search"></div>
                                                <div class="vs__actions"><button type="button" title="Clear Selected"
                                                    aria-label="Clear Selected" class="vs__clear"
                                                    style="display: none;"><span>×</span></button> <span
                                                    class="toggle vs__open-indicator" role="presentation"><svg
                                                      xmlns="http://www.w3.org/2000/svg" height="16" width="16"
                                                      viewBox="0 0 20 20">
                                                      <path fill="currentColor"
                                                        d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z">
                                                      </path>
                                                    </svg></span>
                                                  <div class="vs__spinner" style="display: none;">Loading...</div>
                                                </div>
                                              </div>
                                              <ul id="vs10__listbox" role="listbox"
                                                style="display: none; visibility: hidden;"></ul>
                                            </div>
                                          </div>
                                          <div class="flex-1">
                                            <div class="text-sm text-grey inherit-placeholder mt-1"> </div>
                                          </div>
                                        </div><!----><!---->
                                      </div>
                                      <div
                                        class="form-group form-group publish-field publish-field__sitemap seo_pro_source-fieldtype w-full">
                                        <div class="field-inner"><label for="field_sitemap"
                                            class="publish-field-label"><span
                                              class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Sitemap</span>
                                            <button class="outline-none" style="display: none;"><svg
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                  stroke-linejoin="round" stroke-width="1.5"
                                                  d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5">
                                                </path>
                                              </svg></button><button class="outline-none" style="display: none;"><svg
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                  stroke-linejoin="round" stroke-width="1.5"
                                                  d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                </path>
                                              </svg></button></label>
                                          <div class="help-block -mt-2">
                                            <p>If disabled, this item will not appear in the sitemap.</p>
                                          </div>
                                        </div><!---->
                                        <div class="flex">
                                          <div class="source-type-select pr-4">
                                            <div dir="auto" class="v-select vs--single vs--searchable">
                                              <div id="vs11__combobox" role="combobox" aria-expanded="false"
                                                aria-owns="vs11__listbox" aria-label="Search for option"
                                                class="vs__dropdown-toggle">
                                                <div class="vs__selected-options"><span class="vs__selected">
                                                    Inherit
                                                    <!----></span> <input aria-autocomplete="list"
                                                    aria-labelledby="vs11__combobox" aria-controls="vs11__listbox"
                                                    type="search" autocomplete="off" class="vs__search"></div>
                                                <div class="vs__actions"><button type="button" title="Clear Selected"
                                                    aria-label="Clear Selected" class="vs__clear"
                                                    style="display: none;"><span>×</span></button> <span
                                                    class="toggle vs__open-indicator" role="presentation"><svg
                                                      xmlns="http://www.w3.org/2000/svg" height="16" width="16"
                                                      viewBox="0 0 20 20">
                                                      <path fill="currentColor"
                                                        d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z">
                                                      </path>
                                                    </svg></span>
                                                  <div class="vs__spinner" style="display: none;">Loading...</div>
                                                </div>
                                              </div>
                                              <ul id="vs11__listbox" role="listbox"
                                                style="display: none; visibility: hidden;"></ul>
                                            </div>
                                          </div>
                                          <div class="flex-1">
                                            <div class="text-sm text-grey inherit-placeholder mt-1"> </div>
                                          </div>
                                        </div><!----><!---->
                                      </div>
                                      <div
                                        class="form-group form-group publish-field publish-field__priority seo_pro_source-fieldtype w-full">
                                        <div class="field-inner"><label for="field_priority"
                                            class="publish-field-label"><span
                                              class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Sitemap:
                                              Priority</span>
                                            <button class="outline-none" style="display: none;"><svg
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                  stroke-linejoin="round" stroke-width="1.5"
                                                  d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5">
                                                </path>
                                              </svg></button><button class="outline-none" style="display: none;"><svg
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                  stroke-linejoin="round" stroke-width="1.5"
                                                  d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                </path>
                                              </svg></button></label>
                                          <div class="help-block -mt-2">
                                            <p>The priority of this URL relative to other URLs on your site. Valid
                                              values range from <code>0.0</code> to <code>1.0</code>.</p>
                                          </div>
                                        </div><!---->
                                        <div class="flex">
                                          <div class="source-type-select pr-4">
                                            <div dir="auto" class="v-select vs--single vs--searchable">
                                              <div id="vs12__combobox" role="combobox" aria-expanded="false"
                                                aria-owns="vs12__listbox" aria-label="Search for option"
                                                class="vs__dropdown-toggle">
                                                <div class="vs__selected-options"><span class="vs__selected">
                                                    Inherit
                                                    <!----></span> <input aria-autocomplete="list"
                                                    aria-labelledby="vs12__combobox" aria-controls="vs12__listbox"
                                                    type="search" autocomplete="off" class="vs__search"></div>
                                                <div class="vs__actions"><button type="button" title="Clear Selected"
                                                    aria-label="Clear Selected" class="vs__clear"
                                                    style="display: none;"><span>×</span></button> <span
                                                    class="toggle vs__open-indicator" role="presentation"><svg
                                                      xmlns="http://www.w3.org/2000/svg" height="16" width="16"
                                                      viewBox="0 0 20 20">
                                                      <path fill="currentColor"
                                                        d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z">
                                                      </path>
                                                    </svg></span>
                                                  <div class="vs__spinner" style="display: none;">Loading...</div>
                                                </div>
                                              </div>
                                              <ul id="vs12__listbox" role="listbox"
                                                style="display: none; visibility: hidden;"></ul>
                                            </div>
                                          </div>
                                          <div class="flex-1">
                                            <div class="text-sm text-grey inherit-placeholder mt-1"> 0.5 </div>
                                          </div>
                                        </div><!----><!---->
                                      </div>
                                      <div
                                        class="form-group form-group publish-field publish-field__change_frequency seo_pro_source-fieldtype w-full">
                                        <div class="field-inner"><label for="field_change_frequency"
                                            class="publish-field-label"><span
                                              class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Sitemap: Change
                                              Frequency</span>
                                            <button class="outline-none" style="display: none;"><svg
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                  stroke-linejoin="round" stroke-width="1.5"
                                                  d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5">
                                                </path>
                                              </svg></button><button class="outline-none" style="display: none;"><svg
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                  stroke-linejoin="round" stroke-width="1.5"
                                                  d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                </path>
                                              </svg></button></label>
                                          <div class="help-block -mt-2">
                                            <p>A hint to search engines on how frequently the page is likely to change.
                                            </p>
                                          </div>
                                        </div><!---->
                                        <div class="flex">
                                          <div class="source-type-select pr-4">
                                            <div dir="auto" class="v-select vs--single vs--searchable">
                                              <div id="vs13__combobox" role="combobox" aria-expanded="false"
                                                aria-owns="vs13__listbox" aria-label="Search for option"
                                                class="vs__dropdown-toggle">
                                                <div class="vs__selected-options"><span class="vs__selected">
                                                    Inherit
                                                    <!----></span> <input aria-autocomplete="list"
                                                    aria-labelledby="vs13__combobox" aria-controls="vs13__listbox"
                                                    type="search" autocomplete="off" class="vs__search"></div>
                                                <div class="vs__actions"><button type="button" title="Clear Selected"
                                                    aria-label="Clear Selected" class="vs__clear"
                                                    style="display: none;"><span>×</span></button> <span
                                                    class="toggle vs__open-indicator" role="presentation"><svg
                                                      xmlns="http://www.w3.org/2000/svg" height="16" width="16"
                                                      viewBox="0 0 20 20">
                                                      <path fill="currentColor"
                                                        d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z">
                                                      </path>
                                                    </svg></span>
                                                  <div class="vs__spinner" style="display: none;">Loading...</div>
                                                </div>
                                              </div>
                                              <ul id="vs13__listbox" role="listbox"
                                                style="display: none; visibility: hidden;"></ul>
                                            </div>
                                          </div>
                                          <div class="flex-1">
                                            <div class="text-sm text-grey inherit-placeholder mt-1"> monthly </div>
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
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        class="h-4 w-4 rtl:ml-2 ltr:mr-2 shrink-0">
                                        <g fill="none" stroke="currentColor" stroke-linecap="round"
                                          stroke-linejoin="round">
                                          <path d="M.713 10.34 3.5 14.49l3.205-3.838"></path>
                                          <path
                                            d="M3.489 14.439a8.947 8.947 0 0 1 6.554-10.727 8.492 8.492 0 0 1 8.325 2.641m4.917 7.289L20.498 9.49l-3.205 3.838">
                                          </path>
                                          <path
                                            d="M20.509 9.543a8.948 8.948 0 0 1-6.554 10.727 8.5 8.5 0 0 1-8.325-2.641">
                                          </path>
                                          <path d="M10 11.991a2 2 0 1 0 4 0 2 2 0 1 0-4 0Z"></path>
                                        </g>
                                      </svg>
                                      <span>Live Preview</span>
                                    </button>
                                    <a href="javascript:void(0);" target="_blank" class="flex items-center justify-center btn w-full">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-4 h-4 rtl:ml-2 ltr:mr-2 shrink-0">
                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-width="1.5"
                                          d="M23.251 7.498V.748h-6.75m6.75 0-15 15m3-10.5h-9a1.5 1.5 0 0 0-1.5 1.5v15a1.5 1.5 0 0 0 1.5 1.5h15a1.5 1.5 0 0 0 1.5-1.5v-9">
                                        </path>
                                      </svg>
                                      <span>Visit URL</span>
                                    </a>
                                </div>
                                </div>
                                <div class="flex items-center justify-between px-4 py-2 border-t"><label
                                    class="publish-field-label font-medium">Published</label>
                                    <button type="button" aria-pressed="true" aria-label="Toggle Button" class="toggle-container on">
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
                                  <div class="form-group publish-field publish-field__slug slug-fieldtype w-full">
                                    <div class="field-inner"><label for="field_slug" class="publish-field-label"><span
                                          class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Slug</span>
                                        <button class="outline-none" style="display: none;"><svg
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                            <path fill="none" stroke="currentColor" stroke-linecap="round"
                                              stroke-linejoin="round" stroke-width="1.5"
                                              d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5">
                                            </path>
                                          </svg></button><button class="outline-none" style="display: none;"><svg
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                            <path fill="none" stroke="currentColor" stroke-linecap="round"
                                              stroke-linejoin="round" stroke-width="1.5"
                                              d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                            </path>
                                          </svg>
                                        </button>
                                        </label>
                                    </div>
                                    <div>
                                      <div class="flex items-center">
                                        <div class="input-group"><input id="field_slug" name="contact"
                                            type="text" dir="ltr" class="input-text font-mono text-xs"
                                            value="contact"></div>
                                      </div>
                                    </div>
                                  </div>
                                  <div
                                    class="form-group publish-field publish-field__parent relationship-fieldtype w-full">
                                    <div class="field-inner"><label for="field_parent" class="publish-field-label"><span
                                          class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Parent</span>
                                        <button class="outline-none" style="display: none;"><svg
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                            <path fill="none" stroke="currentColor" stroke-linecap="round"
                                              stroke-linejoin="round" stroke-width="1.5"
                                              d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5">
                                            </path>
                                          </svg></button><button class="outline-none" style="display: none;"><svg
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                            <path fill="none" stroke="currentColor" stroke-linecap="round"
                                              stroke-linejoin="round" stroke-width="1.5"
                                              d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                            </path>
                                          </svg>
                                        </button>
                                        </label>
                                    </div>
                                    <div class="relationship-input">
                                      <div class="relationship-input-items space-y-1 outline-none">
                                        <div class="item select-none item outline-none">
                                          <div class="item-inner">
                                            <div class="little-dot rtl:ml-2 ltr:mr-2 hidden@sm:block published"></div>
                                            <a href="javascript:void(0);"
                                              class="truncate v-popper--has-tooltip">Home</a>
                                            <div class="flex items-center flex-1 justify-end">
                                              <div
                                                class="text-4xs text-gray-600 uppercase whitespace-nowrap rtl:ml-2 ltr:mr-2 hidden @sm:block">
                                                Pages</div>
                                              <div class="flex items-center">
                                                <div class="dropdown-list">
                                                  <div aria-haspopup="true"><button aria-label="Open Dropdown"
                                                      class="rotating-dots-button"><svg width="12" viewBox="0 0 24 24"
                                                        class="rotating-dots fill-current">
                                                        <circle cx="3" cy="12" r="3"></circle>
                                                        <circle cx="12" cy="12" r="3"></circle>
                                                        <circle cx="21" cy="12" r="3"></circle>
                                                      </svg></button></div>
                                                  <div class="v-portal" style="display: none;"></div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <input type="hidden" name="parent" value="[&quot;home&quot;]">
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
            <div class="md:hidden mt-6 flex items-center"><button class="btn-lg btn-primary w-full">Save</button>
            </div>

          </div>
        </div>
@endsection
