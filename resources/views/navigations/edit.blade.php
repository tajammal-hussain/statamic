@extends('layouts.main')
@section('content')
    <title>Navigation edit :: Cedar</title>
    <div class="page-wrapper max-w-xl">
        <header class="mb-6">
            <div class="flex"><a href="https://demo.statamic.com/cp/navigation/footer"
                                 class="flex-initial flex p-2 -m-2 items-center text-xs text-gray-700 hover:text-gray-900">
                    <div class="h-6 rotate-180 svg-icon using-svg"><svg viewBox="0 0 24 24" class="align-middle">
                            <path fill="currentColor" fill-rule="evenodd"
                                  d="m10.414 7.05 4.95 4.95-4.95 4.95L9 15.534 12.536 12 9 8.464z"></path>
                        </svg></div> <span>Footer</span>
                </a></div>
            <h1>Edit Navigation</h1>
        </header>
        <div>
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
                                            <div class="field-inner"><label for="field_title" class="publish-field-label"><span
                                                            class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Title</span><i
                                                            class="required rtl:ml-1 ltr:mr-1">*</i><!----><!----><!----><button
                                                            class="outline-none" style="display: none;"><svg xmlns="http://www.w3.org/2000/svg"
                                                                                                             viewBox="0 0 24 24"
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
                                                    <p>We recommend a name that matches where it will be used, like "Main Nav" or "Footer
                                                        Nav".</p>
                                                </div>
                                            </div><!---->
                                            <div class="flex items-center">
                                                <div class="input-group"><!----><input id="field_title" name="title" type="text"
                                                                                       autofocus="autofocus" class="input-text" value="Footer"><!----></div><!---->
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
                        <h2 class="text-base">Options</h2>
                        <p></p>
                    </div>
                    <div>
                        <div class="publish-sections">
                            <div class="publish-sections-section">
                                <div class="p-0 card"><!---->
                                    <div class="publish-fields @container">
                                        <div class="form-group publish-field publish-field__blueprint html-fieldtype w-full">
                                            <div class="field-inner"><label for="field_blueprint" class="publish-field-label"><span
                                                            class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Blueprint</span><!----><!----><!----><!----><button
                                                            class="outline-none" style="display: none;"><svg xmlns="http://www.w3.org/2000/svg"
                                                                                                             viewBox="0 0 24 24"
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
                                                    <p>Choose from existing Blueprints or create a new one.</p>
                                                </div>
                                            </div><!---->
                                            <div>
                                                <div class="text-xs"> <a href="https://demo.statamic.com/cp/navigation/footer/blueprint"
                                                                         class="text-blue">Edit</a></div>
                                            </div><!----><!---->
                                        </div>
                                        <div
                                                class="form-group publish-field publish-field__collections relationship-fieldtype w-full">
                                            <div class="field-inner"><label for="field_collections" class="publish-field-label"><span
                                                            class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Collections</span><!----><!----><!----><!----><button
                                                            class="outline-none" style="display: none;"><svg xmlns="http://www.w3.org/2000/svg"
                                                                                                             viewBox="0 0 24 24"
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
                                                    <p>Enable linking to entries in these collections.</p>
                                                </div>
                                            </div><!---->
                                            <div class="relationship-input">
                                                <div data-v-c80a132c="">
                                                    <div data-v-c80a132c="" dir="auto" class="v-select vs--multiple vs--searchable">
                                                        <div id="vs1__combobox" role="combobox" aria-expanded="false" aria-owns="vs1__listbox"
                                                             aria-label="Search for option" class="vs__dropdown-toggle">
                                                            <div class="vs__selected-options"><i data-v-c80a132c="" class="hidden"></i><i
                                                                        data-v-c80a132c="" class="hidden"></i> <input data-v-c80a132c=""
                                                                                                                      placeholder="Choose..." type="search" aria-autocomplete="list"
                                                                                                                      aria-labelledby="vs1__combobox" aria-controls="vs1__listbox" autocomplete="off"
                                                                                                                      class="vs__search"></div>
                                                            <div class="vs__actions"><button type="button" title="Clear Selected"
                                                                                             aria-label="Clear Selected" class="vs__clear"
                                                                                             style="display: none;"><span>×</span></button> <span
                                                                        class="toggle vs__open-indicator" role="presentation"><svg
                                                                            xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 20 20">
                                          <path fill="currentColor"
                                                d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z">
                                          </path>
                                        </svg></span>
                                                                <div class="vs__spinner" style="display: none;">Loading...</div>
                                                            </div>
                                                        </div>
                                                        <ul id="vs1__listbox" role="listbox" style="display: none; visibility: hidden;"></ul>
                                                        <div data-v-c80a132c="" class="vs__selected-options-outside flex flex-wrap"
                                                             tabindex="0"><span data-v-c80a132c="" class="vs__selected mt-2 sortable-item"
                                                                                tabindex="0"> Pages <button data-v-c80a132c="" type="button"
                                                                                                            aria-label="Deselect option" class="vs__deselect"><span
                                                                            data-v-c80a132c="">×</span></button></span><span data-v-c80a132c=""
                                                                                                                             class="vs__selected mt-2 sortable-item" tabindex="0"> News Articles <button
                                                                        data-v-c80a132c="" type="button" aria-label="Deselect option"
                                                                        class="vs__deselect"><span data-v-c80a132c="">×</span></button></span></div>
                                                    </div>
                                                </div><!----><!---->
                                            </div><!----><!---->
                                        </div>
                                        <div class="form-group publish-field publish-field__root toggle-fieldtype w-full">
                                            <div class="field-inner"><label for="field_root" class="publish-field-label"><span
                                                            class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Expect a root
                                  page</span><!----><!----><!----><!----><button class="outline-none"
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
                                                        </svg></button></label>
                                                <div class="help-block -mt-2">
                                                    <p>Consider the first page in the tree a "root" or "home" page.</p>
                                                </div>
                                            </div><!---->
                                            <div class="toggle-fieldtype-wrapper"><button type="button" aria-pressed="false"
                                                                                          aria-label="Toggle Button" class="toggle-container" id="field_root">
                                                    <div class="toggle-slider">
                                                        <div tabindex="0" class="toggle-knob"></div>
                                                    </div>
                                                </button><!----></div><!----><!---->
                                        </div>
                                        <div class="form-group publish-field publish-field__max_depth integer-fieldtype w-full">
                                            <div class="field-inner"><label for="field_max_depth" class="publish-field-label"><span
                                                            class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Max
                                  Depth</span><!----><!----><!----><!----><button class="outline-none"
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
                                                        </svg></button></label>
                                                <div class="help-block -mt-2">
                                                    <p>Set a maximum number of levels page may be nested. Leave blank for no limit.</p>
                                                </div>
                                            </div><!---->
                                            <div class="flex items-center">
                                                <div class="input-group"><!----><input id="field_max_depth" name="max_depth" type="number"
                                                                                       class="input-text"><!----></div><!---->
                                            </div><!----><!---->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="publish-tab publish-tab-actions-footer vue-portal-target "></div>
            </div>
            <div class="py-4 border-t flex justify-between"><a href="https://demo.statamic.com/cp/navigation/footer"
                                                               class="btn">Cancel</a><button type="submit" class="btn-primary">Save</button></div>
        </div>
    </div>
@endsection
