@extends('layouts.main')

@section('title', 'Edit Global')

@section('content')
    <div class="page-wrapper max-w-xl">
        <div>
            <form action="{{ route('globals.edit', ['id' => $globals->id]) }}" method="POST">
                @csrf
                <header class="mb-6">
                    <div class="breadcrumb flex">
                        <a href="{{ route('globals.globals') }}"
                            class="flex-initial flex p-2 -m-2 items-center text-xs text-gray-700 hover:text-gray-900">
                            <svg viewBox="0 0 24 24" class="align-middle h-6 w-4 rotate-180">
                                <path fill="currentColor" fill-rule="evenodd"
                                    d="m10.414 7.05 4.95 4.95-4.95 4.95L9 15.534 12.536 12 9 8.464z"></path>
                            </svg>
                            <span>Globals</span>
                        </a>
                    </div>
                    <div class="flex items-center">
                        <h1 class="flex-1">{{ $globals->title }}</h1>
                        <button type="submit" class="btn-primary min-w-100">Save</button>
                    </div>
                </header><!---->
                @if (session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative"
                        role="alert">
                        {{ session('success') }}
                    </div>
                @endif
                @if (session('error'))
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                        {{ session('error') }}
                    </div>
                @endif
                <div>
                    <div><!---->
                        <div class="publish-tab-outer">
                            <div class="publish-tab-wrapper w-full min-w-0">
                                <div data-tab-handle="main" tabindex="0" class="publish-tab w-full">
                                    <div class="publish-sections">
                                        <div class="publish-sections-section">
                                            <div class="p-0 card"><!---->
                                                <div class="publish-fields @container">
                                                    <div
                                                        class="form-group publish-field publish-field__name text-fieldtype w-full">
                                                        <div class="field-inner"><label for="field_name"
                                                                class="publish-field-label"><span
                                                                    class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Name</span><!----><!----><!----><!----><button
                                                                    class="outline-none" style="display: none;"><svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 24 24"
                                                                        class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                        <path fill="none" stroke="currentColor"
                                                                            stroke-linecap="round" stroke-linejoin="round"
                                                                            stroke-width="1.5"
                                                                            d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5">
                                                                        </path>
                                                                    </svg></button><button class="outline-none"
                                                                    style="display: none;"><svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 24 24"
                                                                        class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                        <path fill="none" stroke="currentColor"
                                                                            stroke-linecap="round" stroke-linejoin="round"
                                                                            stroke-width="1.5"
                                                                            d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                                        </path>
                                                                    </svg></button></label><!----></div><!---->
                                                        <div class="flex items-center">
                                                            <div class="input-group"><!----><input id="field_name"
                                                                    name="name" type="text" class="input-text"
                                                                    value="{{ $globals->title }}"><!----></div><!---->
                                                        </div><!----><!---->
                                                    </div>
                                                    <div
                                                        class="form-group publish-field publish-field__tagline text-fieldtype w-full">
                                                        <div class="field-inner"><label for="field_tagline"
                                                                class="publish-field-label"><span
                                                                    class="rtl:ml-1 ltr:mr-1 v-popper--has-tooltip">Tagline</span><!----><!----><!----><!----><button
                                                                    class="outline-none" style="display: none;"><svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 24 24"
                                                                        class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                        <path fill="none" stroke="currentColor"
                                                                            stroke-linecap="round" stroke-linejoin="round"
                                                                            stroke-width="1.5"
                                                                            d="M10.082 9.5A4.47 4.47 0 0 0 6.75 8h-1.5a4.5 4.5 0 0 0 0 9h1.5a4.474 4.474 0 0 0 3.332-1.5m3.836-6A4.469 4.469 0 0 1 17.25 8h1.5a4.5 4.5 0 1 1 0 9h-1.5a4.472 4.472 0 0 1-3.332-1.5M6.75 12.499h10.5">
                                                                        </path>
                                                                    </svg></button><button class="outline-none"
                                                                    style="display: none;"><svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 24 24"
                                                                        class="h-4 w-4 rtl:ml-1.5 ltr:mr-1.5 mb-1 text-gray-600 v-popper--has-tooltip">
                                                                        <path fill="none" stroke="currentColor"
                                                                            stroke-linecap="round" stroke-linejoin="round"
                                                                            stroke-width="1.5"
                                                                            d="M16.5 15.749h1.875A3.963 3.963 0 0 0 22.5 12h0a3.962 3.962 0 0 0-4.125-3.75H16.5m-9 7.499H5.625A3.963 3.963 0 0 1 1.5 12h0a3.963 3.963 0 0 1 4.125-3.75H7.5M12 5.249v-4.5m-3 4.5-1.5-1.5m7.5 1.5 1.5-1.5m-4.5 15v4.5m-3-4.5-1.5 1.5m7.5-1.5 1.5 1.5">
                                                                        </path>
                                                                    </svg></button></label><!----></div><!---->
                                                        <div class="flex items-center">
                                                            <div class="input-group"><!----><input id="field_tagline"
                                                                    name="tagline" type="text" class="input-text"
                                                                    value="{{ json_decode($globals->settings)->tagline != null ? json_decode($globals->settings)->tagline : false }}"><!---->
                                                            </div><!---->
                                                        </div><!----><!---->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </header><!---->
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
