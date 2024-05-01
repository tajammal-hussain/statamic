@extends('layouts.main')
@section('content')
    <title>Users edit :: Cedar</title>
    <div class="page-wrapper max-w-xl">
          <div>
            <header class="mb-6">
              <div class="breadcrumb flex"><a href="https://demo.statamic.com/cp/users"
                  class="flex-initial flex p-2 -m-2 items-center text-xs text-gray-700 hover:text-gray-900"><svg
                    viewBox="0 0 24 24" class="align-middle h-6 w-4 rotate-180">
                    <path fill="currentColor" fill-rule="evenodd"
                      d="m10.414 7.05 4.95 4.95-4.95 4.95L9 15.534 12.536 12 9 8.464z"></path>
                  </svg><span>Users</span></a></div>
              <div class="flex items-center">
                <h1 class="flex-1">david.hasselhoff@example.com</h1>
                <div class="dropdown-list rtl:ml-4 ltr:mr-4">
                  <div aria-haspopup="true"><button aria-label="Open Dropdown" class="rotating-dots-button"><svg
                        width="12" viewBox="0 0 24 24" class="rotating-dots fill-current">
                        <circle cx="3" cy="12" r="3"></circle>
                        <circle cx="12" cy="12" r="3"></circle>
                        <circle cx="21" cy="12" r="3"></circle>
                      </svg></button></div>
                  <div class="v-portal" style="display: none;"></div>
                </div>
                <div class="rtl:ml-4 ltr:mr-4">
                  <div aria-haspopup="true"><button class="btn">Change Password</button></div>
                  <div class="v-portal" style="display: none;"></div>
                </div><button class="btn-primary">Save</button>
              </div>
            </header>
            <div>
              <div><!---->
                <div class="publish-tab-outer">
                  <div class="publish-tab-wrapper w-full min-w-0">
                    <div data-tab-handle="main" tabindex="0" class="publish-tab tab-panel w-full">
                      <div class="publish-sections">
                        <div class="publish-sections-section">
                          <div class="p-0 card"><!---->
                            <div class="publish-fields @container">
                              <div class="form-group publish-field publish-field__name text-fieldtype w-full">
                                <div class="field-inner"><label for="field_name" class="publish-field-label"><span
                                      class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Name</span><!----><!----><!----><!----><button
                                      class="outline-none" style="display: none;"><svg
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
                                  <div class="input-group"><!----><input id="field_name" name="name" type="text"
                                      class="input-text" value="David Hasselhoff"><!----></div><!---->
                                </div><!----><!---->
                              </div>
                              <div class="form-group publish-field publish-field__email text-fieldtype w-full">
                                <div class="field-inner"><label for="field_email" class="publish-field-label"><span
                                      class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Email
                                      Address</span><!----><!----><!----><!----><button class="outline-none"
                                      style="display: none;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
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
                                  <div class="input-group"><!----><input id="field_email" name="email" type="email"
                                      class="input-text" value="david.hasselhoff@example.com"><!----></div><!---->
                                </div><!----><!---->
                              </div>
                              <div
                                class="form-group publish-field publish-field__roles relationship-fieldtype w-full @lg:w-1/2">
                                <div class="field-inner"><label for="field_roles" class="publish-field-label"><span
                                      class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Roles</span><!----><!----><!----><!----><button
                                      class="outline-none" style="display: none;"><svg
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
                                    <div data-v-c80a132c="" dir="auto" class="v-select vs--multiple vs--searchable">
                                      <div id="vs1__combobox" role="combobox" aria-expanded="false"
                                        aria-owns="vs1__listbox" aria-label="Search for option"
                                        class="vs__dropdown-toggle">
                                        <div class="vs__selected-options"><i data-v-c80a132c="" class="hidden"></i>
                                          <input data-v-c80a132c="" placeholder="Choose..." type="search"
                                            aria-autocomplete="list" aria-labelledby="vs1__combobox"
                                            aria-controls="vs1__listbox" autocomplete="off" class="vs__search"></div>
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
                                      <ul id="vs1__listbox" role="listbox" style="display: none; visibility: hidden;">
                                      </ul>
                                      <div data-v-c80a132c="" class="vs__selected-options-outside flex flex-wrap"
                                        tabindex="0"><span data-v-c80a132c="" class="vs__selected mt-2 sortable-item"
                                          tabindex="0"> Demo Admin <button data-v-c80a132c="" type="button"
                                            aria-label="Deselect option" class="vs__deselect"><span
                                              data-v-c80a132c="">×</span></button></span></div>
                                    </div>
                                  </div><!----><!---->
                                </div><!----><!---->
                              </div>
                              <div
                                class="form-group publish-field publish-field__groups relationship-fieldtype w-full @lg:w-1/2">
                                <div class="field-inner"><label for="field_groups" class="publish-field-label"><span
                                      class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Groups</span><!----><!----><!----><!----><button
                                      class="outline-none" style="display: none;"><svg
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
                                <div class="relationship-input relationship-input-empty">
                                  <div data-v-c80a132c="">
                                    <div data-v-c80a132c="" dir="auto" class="v-select vs--multiple vs--searchable">
                                      <div id="vs2__combobox" role="combobox" aria-expanded="false"
                                        aria-owns="vs2__listbox" aria-label="Search for option"
                                        class="vs__dropdown-toggle">
                                        <div class="vs__selected-options"> <input data-v-c80a132c=""
                                            placeholder="Choose..." type="search" aria-autocomplete="list"
                                            aria-labelledby="vs2__combobox" aria-controls="vs2__listbox"
                                            autocomplete="off" class="vs__search"></div>
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
                                      <ul id="vs2__listbox" role="listbox" style="display: none; visibility: hidden;">
                                      </ul>
                                      <div data-v-c80a132c="" class="vs__selected-options-outside flex flex-wrap"
                                        tabindex="0"></div>
                                    </div>
                                  </div><!----><!---->
                                </div><!----><!---->
                              </div>
                              <div class="form-group publish-field publish-field__avatar assets-fieldtype w-full">
                                <div class="field-inner"><label for="field_avatar" class="publish-field-label"><span
                                      class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Avatar</span><!----><!----><!----><!----><button
                                      class="outline-none" style="display: none;"><svg
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
                                        <div class="assets-fieldtype-picker is-expanded"><button type="button"
                                            tabindex="0" class="btn btn-with-icon"><svg
                                              xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                              class="w-4 h-4 text-gray-800">
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
                                        <div class="asset-table-listing">
                                          <table class="table-fixed">
                                            <tbody tabindex="0">
                                              <tr class="cursor-grab bg-white hover:bg-gray-100 asset-row" tabindex="0">
                                                <td class="flex items-center h-full"><button
                                                    class="w-7 h-7 cursor-pointer whitespace-nowrap flex items-center justify-center"><img
                                                      loading="lazy"
                                                      src="Edit%20User%20%E2%80%B9%20Statamic_files/small.jpg"
                                                      alt="david.jpg"
                                                      class="asset-thumbnail max-h-full max-w-full rounded w-7 h-7 object-cover"></button><button
                                                    aria-label="Edit Asset"
                                                    class="flex items-center flex-1 rtl:mr-3 ltr:ml-3 text-xs rtl:text-right ltr:text-left truncate w-full">
                                                    david.jpg </button>
                                                  <div
                                                    class="hidden @xs:inline asset-filesize text-xs text-gray-600 px-2">
                                                    40.92 KB</div>
                                                </td>
                                                <td class="w-24"><button
                                                    class="asset-set-alt text-blue px-4 text-sm hover:text-black"> Set
                                                    Alt </button></td>
                                                <td class="p-0 w-8 rtl:text-left ltr:text-right align-middle"><button
                                                    aria-label="Remove Asset"
                                                    class="flex items-center p-1 w-6 h-8 text-lg antialiased text-gray-600 hover:text-gray-900">
                                                    × </button><!----></td>
                                              </tr>
                                            </tbody>
                                          </table>
                                        </div>
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
                  </div>
                  <div class="">
                    <div class="publish-tab">
                      <div class="publish-tab-actions">
                        <div class="v-portal" style="display: none;"></div>
                      </div><!---->
                    </div>
                  </div>
                </div>
                <div class="publish-tab publish-tab-actions-footer vue-portal-target "></div>
              </div>
            </div>
          </div>
        </div>
@endsection
