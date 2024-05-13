@props(['buttonText'])

<div>
    <button type="button" class="rounded border-4 border-gray-400 focus:border-blue-400 py-2 px-4 hover:shadow-inner" data-hs-overlay="#hs-overlay">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="rtl:ml-2 ltr:mr-2 w-4 h-4">
            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5">
            </path>
        </svg><span>{{ $buttonText }}</span></button>
    <div id="hs-overlay"
        class="hs-overlay hs-overlay-open:translate-x-0 hidden -translate-x-full fixed top-14 right-0 transition-all duration-300 transform h-full max-w-sm w-full z-1 bg-white border-s shadow-xl"
        tabindex="-1">
        <div class="stack-container stack-is-current" style="left: 1520px;">
            <div class="stack-overlay" style="left: -1520px;"></div>
            <div class="stack-hit-area" style="left: -1520px;"></div>
            <div class="stack-content">
                <div class="bg-white h-full flex flex-col">
                    <div
                        class="bg-gray-200 px-6 py-2 border-b border-gray-300 text-lg font-medium flex items-center justify-between">
                        Link Fields <button type="button" class="btn-close">×</button></div>
                    <div class="flex-1 overflow-auto p-6">
                        <div>
                            <p class="text-sm font-medium mb-2">Link a single field</p>
                            <p class="text-2xs text-gray mb-2">Changes to this field in the fieldset will stay in sync.
                            </p>
                            <div dir="auto" class="v-select vs--single vs--searchable" name="field">
                                <div id="vs3__combobox" role="combobox" aria-expanded="false" aria-owns="vs3__listbox"
                                    aria-label="Search for option" class="vs__dropdown-toggle">
                                    <div class="vs__selected-options"> <input placeholder="Fields"
                                            aria-autocomplete="list" aria-labelledby="vs3__combobox"
                                            aria-controls="vs3__listbox" type="search" autocomplete="off"
                                            class="vs__search"></div>
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
                                <ul id="vs3__listbox" role="listbox" style="display: none; visibility: hidden;"></ul>
                            </div><button disabled="disabled" class="btn-primary w-full mt-6 opacity-50">Link</button>
                        </div>
                        <div class="my-4 flex items-center">
                            <div class="border-b border-gray-300 flex-1"></div>
                            <div class="text-2xs text-gray-600 mx-4">or</div>
                            <div class="border-b border-gray-300 flex-1"></div>
                        </div>
                        <div>
                            <p class="text-sm font-medium mb-2">Link a fieldset</p>
                            <p class="text-2xs text-gray mb-2">Changes to this fieldset will stay in sync.</p>
                            <div dir="auto" class="v-select vs--single vs--searchable" name="field">
                                <div id="vs4__combobox" role="combobox" aria-expanded="false" aria-owns="vs4__listbox"
                                    aria-label="Search for option" class="vs__dropdown-toggle">
                                    <div class="vs__selected-options">
                                        <input placeholder="Fieldsets" aria-autocomplete="list"
                                            aria-labelledby="vs4__combobox" aria-controls="vs4__listbox" type="search"
                                            autocomplete="off" class="vs__search">
                                    </div>
                                    <div class="vs__actions">
                                        <button type="button" title="Clear Selected" aria-label="Clear Selected"
                                            class="vs__clear" style="display: none;">
                                            <span>×</span>
                                        </button>
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
                                <ul id="vs4__listbox" role="listbox" style="display: none; visibility: hidden;"></ul>
                            </div>
                            <p class="text-sm font-medium mt-6 mb-2">Prefix</p>
                            <p class="text-2xs text-gray mb-2">Every field in the linked fieldset will be prefixed with
                                this.
                                Useful if you want to import the same fields multiple times.</p>
                            <div class="flex items-center">
                                <div class="input-group">
                                    <!----><input type="text" placeholder="e.g. hero_" class="input-text">
                                    <!---->
                                </div>
                                <!---->
                            </div><button disabled="disabled" class="btn-primary w-full mt-6 opacity-50">Link</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>