@extends('layouts.main')
@section('content')
    <title>Navigation add :: Cedar</title>
    <div class="page-wrapper max-w-xl">
        <div class="max-w-lg mt-4 mx-auto">
            <div class="rounded p-6 lg:px-20 lg:py-10 shadow bg-white">
                <header class="text-center mb-16">
                    <h1 class="mb-6">Create Navigation</h1>
                    <p class="text-gray">Navigations
                        are multi-level lists of links that can be used to build navbars,
                        footers, sitemaps, and other forms of frontend navigation.</p>
                </header>
                <div class="mb-10"><label for="name" class="font-bold text-base mb-1">Title</label><input type="text"
                                                                                                          autofocus="autofocus" tabindex="1" class="input-text">
                    <div class="text-2xs text-gray-600 mt-2 flex items-center"> We recommend a name that matches where it
                        will be used, like "Main Nav" or "Footer Nav". </div>
                </div>
                <div class="mb-4"><label for="name" class="font-bold text-base mb-1">Handle</label><input type="text"
                                                                                                          tabindex="2" class="input-text">
                    <div class="text-2xs text-gray-600 mt-2 flex items-center"> Used to reference this navigation on the
                        frontend. It's non-trivial to change later. </div>
                </div>
            </div>
            <div class="flex justify-center mt-8"><button tabindex="4" disabled="disabled"
                                                          class="btn-primary mx-auto btn-lg"> Create Navigation </button></div>
        </div>
    </div>
@endsection
