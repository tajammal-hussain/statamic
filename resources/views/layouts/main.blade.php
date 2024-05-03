@php
    $baseUrl = url('/');
    $sidebar = [
        [
            'parent' => '',
            'name' => 'Dashboard',
            'url' => $baseUrl . '/dashboard',
            'svg' => '<svg
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <circle cx="7" cy="8.5" r="3.5" fill="none" stroke="currentColor" stroke-linecap="round"
                      stroke-linejoin="round"></circle>
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                      d="M7 5v3.5h3.5M9 22.5a6.979 6.979 0 0 0 1.5-4m4.5 4a6.979 6.979 0 0 1-1.5-4m-6.001 4h9M.5 15.5h23">
                    </path>
                    <rect width="23" height="17" x=".5" y="1.5" fill="none" stroke="currentColor" stroke-linecap="round"
                      stroke-linejoin="round" rx="1" ry="1"></rect>
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                      d="M13.5 7 15 5l3 2.5 2.5-3m-1 8V11m-2 1.5v-2m-2 2v-3m-2 3V11"></path>
                  </svg>',
        ],
        [
            'parent' => 'Content',
            'name' => 'Collection',
            'url' => $baseUrl . '/collections',
            'svg' => '<svg xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                      d="M19.479 8V2.5a2 2 0 0 0-2-2h-12a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h8l3 3v-3h1a2 2 0 0 0 1.721-.982">
                    </path>
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                      d="M1.485 3.764A2 2 0 0 0 .479 5.5v16a2 2 0 0 0 2 2h8a2 2 0 0 0 1.712-.967M5.479 3.5h4m-2 4.5V3.5M15.7 7.221l-4.2-1.2 1.2 4.2 7.179 7.179a2.121 2.121 0 0 0 3-3zm3.279 9.279 3-3M12.7 10.221l3-3M12.479 3.5h4m-10 8h4m-4 3h6.5m-6.5 3h9">
                    </path>
                  </svg>',
        ],
        [
            'parent' => 'Content',
            'name' => 'Navigation',
            'url' => $baseUrl . '/navigations',
            'svg' => '<svg xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                      d="M2.505 9.499v2.5m0 2.5v2.5m0-11.499v1a1 1 0 0 0 1 1h1m-2 12v1a1 1 0 0 0 1 1h1M7 7.499h3m-3 14h3m-7.495-21v2.5M20.5 9.5a1 1 0 0 1-1 1h-6a1 1 0 0 1-1-1v-8a1 1 0 0 1 1-1h3a2.782 2.782 0 0 1 1.707.707l1.586 1.586A2.782 2.782 0 0 1 20.5 4.5z">
                    </path>
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                      d="M17 .569V3a1 1 0 0 0 1 1h2.429m.071 18.5a1 1 0 0 1-1 1h-6a1 1 0 0 1-1-1v-8a1 1 0 0 1 1-1h3.114a2.139 2.139 0 0 1 1.513.627l1.666 1.666A2.782 2.782 0 0 1 20.5 17.5z">
                    </path>
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                      d="M17 13.536V16a1 1 0 0 0 1 1h2.43"></path>
                  </svg>',
        ],
        [
            'parent' => 'Content',
            'name' => 'Taxonomies',
            'url' => $baseUrl . '/taxonomies',
            'svg' => '<svg xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                      d="M23.03 14.545a.552.552 0 0 1-.249 1l-5.544 1.692-1.693 5.543a.551.551 0 0 1-1 .249L1.452 9.938a2.789 2.789 0 0 1-.708-1.707L.738 1.737a1 1 0 0 1 1-1h6.491a2.782 2.782 0 0 1 1.707.707z">
                    </path>
                    <circle cx="5.737" cy="5.737" r="2" fill="none" stroke="currentColor" stroke-linecap="round"
                      stroke-linejoin="round"></circle>
                  </svg>',
        ],
        [
            'parent' => 'Content',
            'name' => 'Assets',
            'url' => $baseUrl . '/assets',
            'svg' => '<svg xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                      d="m15.543 15.543-2.628-6.571c-.2-.511-.558-.519-.785-.018l-2.087 4.589-1.859-2.231a.667.667 0 0 0-1.155.089l-2.486 4.142">
                    </path>
                    <rect width="17" height="17" x="1.543" y="1.543" fill="none" stroke="currentColor"
                      stroke-linecap="round" stroke-linejoin="round" rx="1" ry="1"></rect>
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                      d="m20.551 7.424 1 .091a1 1 0 0 1 .901 1.085l-1.181 12.948a1 1 0 0 1-1.087.9L6.243 21.18m-4.7-5.637h17">
                    </path>
                    <circle cx="6.043" cy="6.043" r="1.5" fill="none" stroke="currentColor" stroke-linecap="round"
                      stroke-linejoin="round"></circle>
                  </svg>',
        ],
        [
            'parent' => 'Content',
            'name' => 'Globals',
            'url' => $baseUrl . '/globals',
            'svg' => '<svg xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24">
                    <circle cx="12" cy="11.985" r="11.5" fill="none" stroke="currentColor" stroke-linecap="round"
                      stroke-linejoin="round"></circle>
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                      d="M.673 9.985h6.084a3 3 0 0 1 2.122.878L10 11.984a3 3 0 0 1 .121 4.115l-1.363 1.533A3 3 0 0 0 8 19.625v3.145M20.261 3.985h-5.8a2.25 2.25 0 0 0 0 4.5h.432a3 3 0 0 1 2.5 1.335l2.218 3.329a3 3 0 0 0 2.5 1.336h1.121">
                    </path>
                  </svg>',
        ],
        [
            'parent' => 'Fields',
            'name' => 'Fieldsets',
            'url' => $baseUrl . '/fieldsets',
            'svg' => '<svg
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23.48 23.68">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                      d="M11.63 19.58H1.56A1.05 1.05 0 0 1 .5 18.52v-17A1.05 1.05 0 0 1 1.56.5h15.9a1.05 1.05 0 0 1 1.06 1.06v10.57">
                    </path>
                    <rect width="13.78" height="5.3" x="2.62" y="2.62" fill="none" stroke="currentColor"
                      stroke-linecap="round" stroke-linejoin="round" rx=".53"></rect>
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                      d="M2.62 10.57v6.36a.53.53 0 0 0 .53.53h6.72a.53.53 0 0 0 .53-.53.68.68 0 0 0 0-.14l-1.84-6.36a.53.53 0 0 0-.51-.43h-4.9a.53.53 0 0 0-.53.57Zm13.78 6.89v-6.89a.53.53 0 0 0-.53-.53h-4.06a.53.53 0 0 0-.53.53.39.39 0 0 0 0 .15l1.92 6.74h3.2m4.6-.28v3a3 3 0 0 1-3 3h-3m4-4 2-2 2 2">
                    </path>
                  </svg>',
        ],
        [
            'parent' => 'Tools',
            'name' => 'Forms',
            'url' => $baseUrl . '/forms',
            'svg' => '<svg xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                      d="M19.5 14.5v-13a1 1 0 0 0-1-1h-13a1 1 0 0 0-1 1v13m19 8a1 1 0 0 1-1 1h-21a1 1 0 0 1-1-1v-6h7v1a2.006 2.006 0 0 0 2 2h5a2.006 2.006 0 0 0 2-2v-1h7zm-23-6 4-6m15 0 4 6m-15-13h1.997m.003 3h5m-7 3h7m-7 3h7">
                    </path>
                  </svg>',
        ],
        [
            'parent' => 'Tools',
            'name' => 'Updates',
            'url' => $baseUrl . '/updates',
            'svg' => '<svg xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                      d="M23.5 19.5a2 2 0 0 1-2 2h-19a2 2 0 0 1-2-2v-14a2 2 0 0 1 2-2h19a2 2 0 0 1 2 2zM.5 8.498h23">
                    </path>
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                      d="M3.5 15A2.5 2.5 0 0 1 6 12.5h12a2.5 2.5 0 0 1 0 5H6A2.5 2.5 0 0 1 3.5 15zm2.041 2.455 4.957-4.957m-.5 5 5-5m-10.5-9v5m4-5v5">
                    </path>
                  </svg>',
        ],
        [
            'parent' => 'Tools',
            'name' => 'Utilities',
            'url' => $baseUrl . '/utilities',
            'svg' => '<svg xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24">
                    <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M1.5 23.501a1 1 0 0 1-1-1v-21a1 1 0 0 1 1-1h21a1 1 0 0 1 1 1v21a1 1 0 0 1-1 1z"></path>
                      <path
                        d="M11.121 4.38A3 3 0 1 1 6.88 8.622a3 3 0 0 1 4.24-4.242m6.501 11a3 3 0 1 1-4.242 4.242 3 3 0 0 1 4.242-4.242M12.5 17.5h-9m17 0h-2M12 6.5h8.5m-17 0H6">
                      </path>
                      <path
                        d="M9 6.251a.25.25 0 1 1-.25.25.25.25 0 0 1 .25-.25m6.5 11a.25.25 0 1 1-.25.25.25.25 0 0 1 .25-.25">
                      </path>
                    </g>
                  </svg>',
        ],
        [
            'parent' => 'Users',
            'name' => 'Users',
            'url' => $baseUrl . '/users',
            'svg' => '<svg xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                      d="M20.5 13.5v-8h-9.442A1.67 1.67 0 0 1 9.5 4.56 1.738 1.738 0 0 0 7.9 3.5H4a.5.5 0 0 0-.5.5v9.5m15-10h-6.456a1.739 1.739 0 0 1-1.574-1 1.741 1.741 0 0 0-1.57-1H5.5m-5 14 .839-4.2a1 1 0 0 1 .981-.8H3.5m20 5-.839-4.2a1 1 0 0 0-.981-.8H20.5">
                    </path>
                    <circle cx="12" cy="9.25" r="1.75" fill="none" stroke="currentColor" stroke-linecap="round"
                      stroke-linejoin="round"></circle>
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                      d="M15.5 14.5a3.612 3.612 0 0 0-7 0zm3 1a1.5 1.5 0 0 0-1.5 1.54 1.512 1.512 0 0 1-1.559 1.46H8.558A1.512 1.512 0 0 1 7 17.04a1.5 1.5 0 0 0-1.5-1.54h-5v6a1 1 0 0 0 1 1h21a1 1 0 0 0 1-1v-6z">
                    </path>
                  </svg>',
        ],
        [
            'parent' => '',
            'name' => 'Logout',
            'url' => $baseUrl . '/logout',
            'svg' => '<svg xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                      d="M20.5 13.5v-8h-9.442A1.67 1.67 0 0 1 9.5 4.56 1.738 1.738 0 0 0 7.9 3.5H4a.5.5 0 0 0-.5.5v9.5m15-10h-6.456a1.739 1.739 0 0 1-1.574-1 1.741 1.741 0 0 0-1.57-1H5.5m-5 14 .839-4.2a1 1 0 0 1 .981-.8H3.5m20 5-.839-4.2a1 1 0 0 0-.981-.8H20.5">
                    </path>
                    <circle cx="12" cy="9.25" r="1.75" fill="none" stroke="currentColor" stroke-linecap="round"
                      stroke-linejoin="round"></circle>
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                      d="M15.5 14.5a3.612 3.612 0 0 0-7 0zm3 1a1.5 1.5 0 0 0-1.5 1.54 1.512 1.512 0 0 1-1.559 1.46H8.558A1.512 1.512 0 0 1 7 17.04a1.5 1.5 0 0 0-1.5-1.54h-5v6a1 1 0 0 0 1 1h21a1 1 0 0 0 1-1v-6z">
                    </path>
                  </svg>',
        ],
    ];
@endphp

<!DOCTYPE html>
<html lang="en" dir="ltr" class=" ">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width">
    <meta name="robots" content="noindex,nofollow">

    <link rel="icon" type="image/png"
        href="https://demo.statamic.com/vendor/statamic/cp/build/assets/favicon-32x32-c29eba9f.png" sizes="32x32">
    <link rel="icon" type="image/png"
        href="https://demo.statamic.com/vendor/statamic/cp/build/assets/favicon-16x16-a15cab2f.png" sizes="16x16">
    <link rel="shortcut icon" type="image/x-icon"
        href="https://demo.statamic.com/vendor/statamic/cp/build/assets/favicon-bbfe21cf.ico" sizes="16x16 32x32">

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('css/tailwind-dbc9382a.css') }}">
    <link rel="stylesheet" href="{{ url('css/dashboardMain.css') }}">
    <link rel="stylesheet" href="{{ url('css/app-e0fc4bb9.css') }}">
    <link rel="stylesheet" href="{{ url('css/cp-56146771.css') }}">
    <link rel="stylesheet" href="{{ url('css/cp-7025c2cd.css') }}">

    {{-- Calling script before body to access script in body --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    {{--    ck-5 editor link--}}
    <script src="https://cdn.ckeditor.com/ckeditor5/41.3.1/classic/ckeditor.js"></script>
    <style>
        button.z-10 {
            float: right;
        }
        .publish-tabs {
            display: flex;
        }
        .tab-button {
            border: none;
            font-size: 17px;
            position: relative;
        }
        .tab-button:focus {
            outline: none;
        }
        .tab-button::after {
            content: "";
            display: block;
            width: 0;
            height: 2px;
            background-color: #2e9fff;
            position: absolute;
            bottom: 0;
            left: 50%;
            transition: width 0.3s ease;
            transform: translateX(-50%);
        }
        .tab-button[aria-selected="true"]::after {
            width: 100%;
        }
        .tab-button[aria-selected="true"] {
            color: #2e9fff;
        }
        .tab-panel {
            display: none;
        }
        .tab-panel.active {
            display: block;
        }
    </style>
</head>

<body>
    <div id="statamic" bis_skin_checked="1">
        {{-- Header --}}
        <div class="global-header" bis_skin_checked="1">

            {{-- Site Logo --}}
            <div class="lg:min-w-xl rtl:pr-2 ltr:pl-2 rtl:md:pr-6 ltr:md:pl-6 h-full flex items-center"
                bis_skin_checked="1">
                <button aria-label="Toggle Nav" class="nav-toggle hidden md:flex rtl:mr-1 ltr:ml-1 shrink-0"><svg
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-4 w-4">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="1.5" d="M2.25 18.003h19.5m-19.5-6h19.5m-19.5-6h19.5"></path>
                    </svg></button> <button aria-label="Toggle Mobile Nav"
                    class="nav-toggle md:hidden rtl:mr-1 ltr:ml-1 shrink-0"><svg xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24" class="h-4 w-4">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="1.5" d="M2.25 18.003h19.5m-19.5-6h19.5m-19.5-6h19.5"></path>
                    </svg></button> <a href="https://demo.statamic.com/cp" class="flex items-end">
                    <div class="hidden md:block shrink-0 v-popper--has-tooltip" bis_skin_checked="1"><svg
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 90 17.43" class="w-24">
                            <path fill="#3C4858"
                                d="M.53 14.2a.78.78 0 0 1 .62-.33 1.34 1.34 0 0 1 .76.29 4.88 4.88 0 0 0 2.81.84c.84 0 1.5-.35 1.5-1.06 0-1.85-6.14-.85-6.14-5 0-2.19 1.83-3.44 4.17-3.44a6.78 6.78 0 0 1 3.8 1.07.92.92 0 0 1 .37.76 1 1 0 0 1-.15.51L8 8.25a.81.81 0 0 1-.69.41 1.63 1.63 0 0 1-.64-.18 4.75 4.75 0 0 0-2.24-.54c-.88 0-1.41.48-1.41 1 0 1.89 6.13.86 6.13 4.86 0 2.24-1.82 3.64-4.59 3.64a6.11 6.11 0 0 1-4.27-1.57.84.84 0 0 1-.29-.64.76.76 0 0 1 .18-.53Zm17.57 1.19a.89.89 0 0 1-.31 1.23 5.17 5.17 0 0 1-2.85.76c-2.56 0-3.53-1.66-3.53-4.57V3.55a1 1 0 0 1 .95-.94h1a1 1 0 0 1 .95.94v2.22h2.73a1 1 0 0 1 .94.94v.86a1 1 0 0 1-.94.95h-2.71v4.14c0 1.24.41 2.06 1.35 2.06a2.13 2.13 0 0 0 .8-.13 1.76 1.76 0 0 1 .58-.12.85.85 0 0 1 .78.51Zm1.77-1.58c0-2.5 1.84-3.69 4.14-3.69a4.63 4.63 0 0 1 2.57.74v-.35c0-1.66-.53-2.57-2.11-2.57a5.59 5.59 0 0 0-1.95.31 1.85 1.85 0 0 1-.46.08.94.94 0 0 1-.86-.53l-.14-.31a1.17 1.17 0 0 1-.1-.41.91.91 0 0 1 .53-.8 7.94 7.94 0 0 1 3.28-.76c3.37 0 4.54 1.73 4.54 4.72v6a1 1 0 0 1-.95.95h-.65a1 1 0 0 1-.95-.95v-.37a4 4 0 0 1-3.36 1.43 3.31 3.31 0 0 1-3.53-3.49Zm6.71-1.17a3.3 3.3 0 0 0-2-.55c-1 0-1.83.45-1.83 1.42s.7 1.33 1.62 1.33a2.49 2.49 0 0 0 2.2-1Zm12.15 2.75a.85.85 0 0 1 .12.43.86.86 0 0 1-.43.8 5.17 5.17 0 0 1-2.85.76C33 17.38 32 15.72 32 12.81V3.55a1 1 0 0 1 1-.94h1a1 1 0 0 1 .94.94v2.22h2.73a1 1 0 0 1 1 .94v.86a1 1 0 0 1-1 .95H35v4.14c0 1.24.41 2.06 1.36 2.06a2.17 2.17 0 0 0 .8-.13 1.71 1.71 0 0 1 .57-.12.83.83 0 0 1 .78.51Zm1.76-1.58c0-2.5 1.85-3.69 4.15-3.69a4.66 4.66 0 0 1 2.57.74v-.35c0-1.66-.54-2.57-2.12-2.57a5.68 5.68 0 0 0-2 .31 1.78 1.78 0 0 1-.45.08.93.93 0 0 1-.86-.53l-.14-.31a1 1 0 0 1-.11-.41.92.92 0 0 1 .54-.8 7.94 7.94 0 0 1 3.28-.76c3.37 0 4.54 1.73 4.54 4.72v6a1 1 0 0 1-.95.95h-.65a1 1 0 0 1-1-.95v-.37A4 4 0 0 1 44 17.3a3.31 3.31 0 0 1-3.51-3.49Zm6.72-1.17a3.32 3.32 0 0 0-2-.55c-1 0-1.83.45-1.83 1.42s.7 1.33 1.62 1.33a2.49 2.49 0 0 0 2.2-1ZM55.83 7a4.82 4.82 0 0 1 3.55-1.46 3.29 3.29 0 0 1 3.3 1.83 4.6 4.6 0 0 1 3.84-1.83c2.07 0 3.63 1 3.63 4.15v6.48a1 1 0 0 1-.94.95h-1a1 1 0 0 1-.94-.95v-5.7c0-1.42-.58-2.18-1.95-2.18A2.54 2.54 0 0 0 63 9.61v6.58a1 1 0 0 1-.94.95H61a1 1 0 0 1-1-.95v-5.91a1.77 1.77 0 0 0-1.88-2 2.77 2.77 0 0 0-2.38 1.21v6.69a1 1 0 0 1-.95.95h-1a1 1 0 0 1-1-.95V6.71a1 1 0 0 1 1-.94h1a1 1 0 0 1 .95.94V7Zm20.89-5.32a1.71 1.71 0 0 1-1.66 1.83 1.75 1.75 0 0 1-1.83-1.83A1.71 1.71 0 0 1 75.06 0a1.67 1.67 0 0 1 1.66 1.68Zm-1.21 4.11a1 1 0 0 1 .94.94v9.48a1 1 0 0 1-.94.95h-1a1 1 0 0 1-.94-.95v-9.5a1 1 0 0 1 .94-.94h1Zm12.17 2.89a4.28 4.28 0 0 0-2-.45 3.13 3.13 0 0 0-3.16 3.22 3.2 3.2 0 0 0 3.28 3.27 3.72 3.72 0 0 0 2.2-.66 1.24 1.24 0 0 1 .61-.21 1 1 0 0 1 .78.37l.44.54a.76.76 0 0 1 .18.51 1 1 0 0 1-.35.8 5.74 5.74 0 0 1-4 1.33c-3.76 0-6.24-2.38-6.24-5.95a5.78 5.78 0 0 1 5.9-5.95 7.26 7.26 0 0 1 3.74.86 1 1 0 0 1 .45.84.65.65 0 0 1-.11.41l-.4.66a1.05 1.05 0 0 1-.87.54 1.78 1.78 0 0 1-.45-.13Z">
                            </path>
                        </svg> <span class="font-bold text-4xs align-top">PRO</span></div>
                </a>
            </div>

            {{-- Search Bar --}}
            <div class="sm:px-8 w-full flex-1 lg:flex items-center lg:justify-center mx-auto max-w-full"
                bis_skin_checked="1">
                <div class="global-search" bis_skin_checked="1">
                    <div class="state-container w-4 h-4 text-gray-500 flex items-center" bis_skin_checked="1"><svg
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-4 h-4">
                            <circle cx="9.813" cy="9.812" r="9.063" fill="none" stroke="currentColor"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                transform="rotate(-23.025 9.813 9.812)"></circle>
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5" d="m16.221 16.22 7.029 7.03"></path>
                        </svg></div><label for="global-search" class="sr-only">Global Search</label><input
                        type="text" autocomplete="off" name="search" id="global-search" placeholder="Search..."
                        tabindex="-1" class="search-input"><span
                        class="rounded px-1 pb-px text-2xs border text-gray-600">/</span><!---->
                    <div class="global-search-results" style="display: none;" bis_skin_checked="1"><!----></div>
                </div>
            </div>

            {{-- Right upper Side icons --}}
            <div class="head-link h-full rtl:md:pl-6 ltr:md:pr-6 flex items-center justify-end" bis_skin_checked="1">
                <div class="hidden md:block" bis_skin_checked="1">
                    <div class="" bis_skin_checked="1">
                        <div aria-haspopup="true" bis_skin_checked="1"><button slot="reference"
                                aria-label="Pin to Favorites"
                                class="h-6 w-6 block outline-none p-1 text-gray hover:text-gray-800 v-popper--has-tooltip"><svg
                                    xmlns="http://www.w3.org/2000/svg" fill="none" stroke-width="3"
                                    viewBox="0 0 48 48">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        d="M44.161 23.04c.591-.652.928-1.492.862-2.37-.154-2.04-1.17-6.246-6.286-11.363-5.1-5.1-9.318-6.147-11.378-6.319-.895-.074-1.756.266-2.42.87-3.978 3.623-5.3 9.72-5.733 12.961-.156 1.168-1.22 2.079-2.397 2.13-1.754.075-4.318.44-6.775 1.727-1.323.693-1.832 2.245-1.216 3.605.899 1.98 2.717 5.088 6.287 8.658 3.57 3.569 6.66 5.373 8.63 6.259 1.352.608 2.89.098 3.58-1.214 1.295-2.462 1.661-5.035 1.737-6.793.05-1.176.962-2.24 2.129-2.396 3.248-.434 9.36-1.76 12.98-5.755Z">
                                    </path>
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        d="M12.011 29.45C6.722 36.92 2.075 43.76 3.157 44.842c1.081 1.082 7.92-3.563 15.388-8.85M28 10.15c.94 1.646 2.312 3.505 4.31 5.502 2.07 2.07 3.995 3.473 5.69 4.42">
                                    </path>
                                </svg></button></div>
                        <div class="v-portal" style="display: none;" bis_skin_checked="1"></div>
                    </div>
                </div>
                <div class="dropdown-list" bis_skin_checked="1">
                    <div aria-haspopup="true" bis_skin_checked="1"><button aria-label="Manage Preferences"
                            class="hidden md:block h-6 w-6 rtl:mr-4 ltr:ml-4 p-1 text-gray hover:text-gray-800 v-popper--has-tooltip"><svg
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="1.5"
                                    d="M10.546 2.438a1.957 1.957 0 0 0 2.908 0L14.4 1.4a1.959 1.959 0 0 1 3.41 1.413l-.071 1.4a1.958 1.958 0 0 0 2.051 2.054l1.4-.071a1.959 1.959 0 0 1 1.41 3.41l-1.042.94a1.96 1.96 0 0 0 0 2.909l1.042.94a1.959 1.959 0 0 1-1.413 3.41l-1.4-.071a1.958 1.958 0 0 0-2.056 2.056l.071 1.4A1.959 1.959 0 0 1 14.4 22.6l-.941-1.041a1.959 1.959 0 0 0-2.908 0L9.606 22.6A1.959 1.959 0 0 1 6.2 21.192l.072-1.4a1.958 1.958 0 0 0-2.056-2.056l-1.4.071A1.958 1.958 0 0 1 1.4 14.4l1.041-.94a1.96 1.96 0 0 0 0-2.909L1.4 9.606A1.958 1.958 0 0 1 2.809 6.2l1.4.071a1.958 1.958 0 0 0 2.058-2.06L6.2 2.81A1.959 1.959 0 0 1 9.606 1.4Z">
                                </path>
                                <circle cx="12" cy="12.001" r="4.5" fill="none" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></circle>
                            </svg></button></div>
                    <div class="v-portal" style="display: none;" bis_skin_checked="1"></div>
                </div>
                <div class="dropdown-list" bis_skin_checked="1">
                    <div aria-haspopup="true" bis_skin_checked="1"><button aria-label="View Useful Links"
                            class="hidden md:block h-6 w-6 rtl:mr-4 ltr:ml-4 p-1 text-gray hover:text-gray-800 v-popper--has-tooltip"><svg
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="1.5"
                                    d="M12 22.125V4.712S9.545 1.985 1.268 1.875a.506.506 0 0 0-.366.15.522.522 0 0 0-.152.369v16.375a.515.515 0 0 0 .5.519C9.543 19.4 12 22.125 12 22.125M9 11.18a21.258 21.258 0 0 0-5.26-1.055M9 15.375a21.258 21.258 0 0 0-5.26-1.055M15 11.18a21.258 21.258 0 0 1 5.26-1.055M15 15.375a21.258 21.258 0 0 1 5.26-1.055">
                                </path>
                                <path fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="1.5"
                                    d="M12 22.125V4.712s2.455-2.727 10.732-2.837a.506.506 0 0 1 .366.15.522.522 0 0 1 .152.369v16.375a.515.515 0 0 1-.5.519C14.457 19.4 12 22.125 12 22.125">
                                </path>
                            </svg></button></div>
                    <div class="v-portal" style="display: none;" bis_skin_checked="1"></div>
                </div> <a href="https://demo.statamic.com/" target="_blank" aria-label="View Site"
                    class="hidden md:block h-6 w-6 p-1 text-gray rtl:mr-4 ltr:ml-4 hover:text-gray-800 v-popper--has-tooltip"><svg
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="1.5"
                            d="M23.25 19.5v.635a1.62 1.62 0 0 1-1.615 1.615H2.25a1.5 1.5 0 0 1-1.5-1.5v-.75m0-11.25V3.865A1.62 1.62 0 0 1 2.365 2.25h19.278a1.612 1.612 0 0 1 1.607 1.607V8.25m0-1.5H.75m7.5 4.5a3 3 0 0 0-3 3 3 3 0 0 0 3 3m4.5-6a1.5 1.5 0 0 0-1.5 1.5v3a1.5 1.5 0 0 0 3 0v-3a1.5 1.5 0 0 0-1.5-1.5zm9 6v-6L19.5 15l-2.25-3.75v6M2.625 16.5a.375.375 0 1 1-.375.375.375.375 0 0 1 .375-.375">
                        </path>
                    </svg></a>
                <div class="dropdown-list" bis_skin_checked="1">
                    <div aria-haspopup="true" bis_skin_checked="1"><a
                            class="dropdown-toggle items-center rtl:mr-4 ltr:ml-4 h-full hide flex relative group">
                            <div class="icon-header-avatar" bis_skin_checked="1"><img
                                    src="{{ asset('img/square') }}"></div>
                        </a></div>
                    <div class="v-portal" style="display: none;" bis_skin_checked="1"></div>
                </div>
            </div>
        </div>

        {{-- Include the sidebar component --}}
        <div id="main" class="" bis_skin_checked="1">
            <nav class="nav-main">
                <div class="nav-main-inner" bis_skin_checked="1">
                    <x-sidebarContent :sidebar="$sidebar" />
                </div>
            </nav>
            {{-- dynamic pages goes here  --}}
            <div class="workspace" bis_skin_checked="1">
                @yield('content')
                <div class="flex justify-center text-center mt-16" bis_skin_checked="1">
                    <div class="bg-white rounded-full px-6 py-2 shadow-sm text-sm text-gray-700" bis_skin_checked="1">
                        {{ '© 2024 Cedar Technologies. All Rights Reserved | Design and Developed by Cedar Technologies' }}
                    </div>
                </div>
            </div>
        </div>
        {{-- Right upper Side Content --}}
        <div class="portal-targets" bis_skin_checked="1">
            <div class="vue-portal-target popover-container " bis_skin_checked="1">
                <div class="" bis_skin_checked="1">
                    <div class="popover" bis_skin_checked="1">
                        <div class="popover-content bg-white shadow-popover rounded-md" bis_skin_checked="1">
                            <div class="p-4 pb-2" bis_skin_checked="1">
                                <h6 class="mb-2">Pin to Favorites</h6>
                                <div class="flex items-center" bis_skin_checked="1">
                                    <input type="text" class="input-text w-auto">
                                    <button class="btn-primary rtl:mr-2 ltr:ml-2">Save</button>
                                </div>
                                <button class="mt-2 text-xs text-blue outline-none hover:text-blue-800">Set as start
                                    page<span>→</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vue-portal-target popover-container dropdown-list" bis_skin_checked="1">
                <div class="" bis_skin_checked="1">
                    <div class="popover" bis_skin_checked="1">
                        <div class="popover-content bg-white shadow-popover rounded-md" bis_skin_checked="1">
                            <a href="https://demo.statamic.com/cp/preferences">Preferences</a>
                            <a href="https://demo.statamic.com/cp/preferences/nav">CP Nav</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vue-portal-target popover-container dropdown-list" bis_skin_checked="1">
                <div class="" bis_skin_checked="1">
                    <div class="popover" bis_skin_checked="1">
                        <div class="popover-content bg-white shadow-popover rounded-md" bis_skin_checked="1">
                            <a href="https://statamic.dev/" target="_blank"
                                class="flex items-center"><!----><span>Documentation</span>
                                <i class="w-3 block rtl:mr-2 ltr:ml-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="1.5"
                                            d="M23.251 7.498V.748h-6.75m6.75 0-15 15m3-10.5h-9a1.5 1.5 0 0 0-1.5 1.5v15a1.5 1.5 0 0 0 1.5 1.5h15a1.5 1.5 0 0 0 1.5-1.5v-9">
                                        </path>
                                    </svg>
                                </i>
                            </a>
                            <a href="https://statamic.com/support" target="_blank"
                                class="flex items-center"><!----><span>Support</span>
                                <i class="w-3 block rtl:mr-2 ltr:ml-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="1.5"
                                            d="M23.251 7.498V.748h-6.75m6.75 0-15 15m3-10.5h-9a1.5 1.5 0 0 0-1.5 1.5v15a1.5 1.5 0 0 0 1.5 1.5h15a1.5 1.5 0 0 0 1.5-1.5v-9">
                                        </path>
                                    </svg>
                                </i>
                            </a>
                            <a class="flex items-center"><!----><span>Keyboard Shortcuts</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vue-portal-target popover-container dropdown-list" bis_skin_checked="1">
                <div class="" bis_skin_checked="1">
                    <div class="popover" bis_skin_checked="1">
                        <div class="popover-content bg-white shadow-popover rounded-md" bis_skin_checked="1">
                            <div class="px-2" bis_skin_checked="1">
                                <div class="text-base mb-px" bis_skin_checked="1">david.hasselhoff@example.com</div>
                            </div>
                            <div class="divider" bis_skin_checked="1"></div>
                            <a href="https://demo.statamic.com/cp/account">Profile</a>
                            <a
                                href="https://demo.statamic.com/cp/auth/logout?redirect=https%3A%2F%2Fdemo.statamic.com%2Fcp">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vue-portal-target popover-container dropdown-list" bis_skin_checked="1">
                <div class="" bis_skin_checked="1">
                    <div class="popover" bis_skin_checked="1" style="transform: translate(1042px, 225px);">
                        <div class="popover-content bg-white shadow-popover rounded-md" bis_skin_checked="1">
                            <a href="https://demo.statamic.com/cp/collections/pages">View</a><!----><!---->
                            <a href="https://demo.statamic.com/cp/collections/pages/blueprints">EditBlueprints</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        // ck-5 editor
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
        // Get all tab buttons and tab panels
        const tabButtons = document.querySelectorAll('.tab-button');
        const tabPanels = document.querySelectorAll('.tab-panel');

        // Function to switch tabs
        function switchTab(event) {
            // Prevent default behavior
            event.preventDefault();

            // Hide all tab panels
            tabPanels.forEach(panel => {
                panel.classList.remove('active');
            });

            // Deactivate all tab buttons
            tabButtons.forEach(button => {
                button.setAttribute('aria-selected', 'false');
            });

            // Activate the clicked tab button
            this.setAttribute('aria-selected', 'true');

            // Show the corresponding tab panel
            const tabPanelId = this.getAttribute('aria-controls');
            const tabPanel = document.getElementById(tabPanelId);
            tabPanel.classList.add('active');
        }

        // Add click event listener to each tab button
        tabButtons.forEach(button => {
            button.addEventListener('click', switchTab);
        });
    </script>
    <script>
        $(document).ready(function() {

            // Select/deselect all checkboxes when header checkbox is clicked
            $('#checkerOfAllBoxes').on('click', function(){
                if(this.checked){
                    $('input[type="checkbox"]').each(function(){
                        this.checked = true;
                    });
                } else {
                    $('input[type="checkbox"]').each(function(){
                        this.checked = false;
                    });
                }
            });

            // table search field
            $(".input-text").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                var found = false;
                $(".data-table tr").each(function() {
                    var inputText = $(this).find("td:eq(0)").text().toLowerCase();
                    if (inputText.indexOf(value) > -1) {
                        $(this).show();
                        found = true;
                    } else {
                        $(this).hide();
                    }
                });
                if (!found) {
                    $(".no-Results").show();
                } else {
                    $(".no-Results").hide();
                }
            });
        });
    </script>
</body>
</html>
