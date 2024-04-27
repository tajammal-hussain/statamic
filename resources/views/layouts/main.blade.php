@php
    $sideBar = [
        [
            'parent' => 'Content',
            'name' => 'Dashboard',
            'url' => 'https://demo.statamic.com/cp/dashboard',
            'svg' => '',
        ],
    ];
@endphp


<!DOCTYPE html>
<html lang="en" dir="ltr" class=" ">
<script src="chrome-extension://eppiocemhmnlbhjplcgkofciiegomcon/content/location/location.js"
    id="eppiocemhmnlbhjplcgkofciiegomcon"></script>
<script src="chrome-extension://eppiocemhmnlbhjplcgkofciiegomcon/libs/extend-native-history-api.js"></script>
<script src="chrome-extension://eppiocemhmnlbhjplcgkofciiegomcon/libs/requests.js"></script>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width">
    <meta name="robots" content="noindex,nofollow">

    <title>Dashboard :: Statamic</title>

    <link rel="icon" type="image/png"
        href="https://demo.statamic.com/vendor/statamic/cp/build/assets/favicon-32x32-c29eba9f.png" sizes="32x32">
    <link rel="icon" type="image/png"
        href="https://demo.statamic.com/vendor/statamic/cp/build/assets/favicon-16x16-a15cab2f.png" sizes="16x16">
    <link rel="shortcut icon" type="image/x-icon"
        href="https://demo.statamic.com/vendor/statamic/cp/build/assets/favicon-bbfe21cf.ico" sizes="16x16 32x32">

    <link rel="preload" as="style" href="{{ url('css/app-e0fc4bb9.css') }}">
    <link rel="preload" as="style" href="{{ url('css/tailwind-dbc9382a.css') }}">
    <link rel="modulepreload" href="{{ url('js/app-77beb8be.js') }}">
    <link rel="stylesheet" href="{{ url('css/app-e0fc4bb9.css') }}">
    <link rel="stylesheet" href="{{ url('css/tailwind-dbc9382a.css') }}">
    <link rel="stylesheet" href="{{ url('css/dashboardMain.css') }}">
    <script type="module" src="{{ url('js/app-77beb8be.js') }}"></script>

    {{-- <script bis_use="true" type="text/javascript" charset="utf-8"
        data-bis-config="[&quot;facebook.com/&quot;,&quot;twitter.com/&quot;,&quot;youtube-nocookie.com/embed/&quot;,&quot;//vk.com/&quot;,&quot;//www.vk.com/&quot;,&quot;//linkedin.com/&quot;,&quot;//www.linkedin.com/&quot;,&quot;//instagram.com/&quot;,&quot;//www.instagram.com/&quot;,&quot;//www.google.com/recaptcha/api2/&quot;,&quot;//hangouts.google.com/webchat/&quot;,&quot;//www.google.com/calendar/&quot;,&quot;//www.google.com/maps/embed&quot;,&quot;spotify.com/&quot;,&quot;soundcloud.com/&quot;,&quot;//player.vimeo.com/&quot;,&quot;//disqus.com/&quot;,&quot;//tgwidget.com/&quot;,&quot;//js.driftt.com/&quot;,&quot;friends2follow.com&quot;,&quot;/widget&quot;,&quot;login&quot;,&quot;//video.bigmir.net/&quot;,&quot;blogger.com&quot;,&quot;//smartlock.google.com/&quot;,&quot;//keep.google.com/&quot;,&quot;/web.tolstoycomments.com/&quot;,&quot;moz-extension://&quot;,&quot;chrome-extension://&quot;,&quot;/auth/&quot;,&quot;//analytics.google.com/&quot;,&quot;adclarity.com&quot;,&quot;paddle.com/checkout&quot;,&quot;hcaptcha.com&quot;,&quot;recaptcha.net&quot;,&quot;2captcha.com&quot;,&quot;accounts.google.com&quot;,&quot;www.google.com/shopping/customerreviews&quot;,&quot;buy.tinypass.com&quot;,&quot;gstatic.com&quot;,&quot;secureir.ebaystatic.com&quot;,&quot;docs.google.com&quot;,&quot;contacts.google.com&quot;,&quot;github.com&quot;,&quot;mail.google.com&quot;,&quot;chat.google.com&quot;,&quot;audio.xpleer.com&quot;,&quot;keepa.com&quot;,&quot;static.xx.fbcdn.net&quot;,&quot;sas.selleramp.com&quot;,&quot;1plus1.video&quot;,&quot;console.googletagservices.com&quot;]"
        src="chrome-extension://eppiocemhmnlbhjplcgkofciiegomcon/executers/vi-tr.js"></script> --}}
</head>

<body
    bis_register="W3sibWFzdGVyIjp0cnVlLCJleHRlbnNpb25JZCI6ImVwcGlvY2VtaG1ubGJoanBsY2drb2ZjaWllZ29tY29uIiwiYWRibG9ja2VyU3RhdHVzIjp7IkRJU1BMQVkiOiJkaXNhYmxlZCIsIkZBQ0VCT09LIjoiZGlzYWJsZWQiLCJUV0lUVEVSIjoiZGlzYWJsZWQiLCJSRURESVQiOiJkaXNhYmxlZCIsIlBJTlRFUkVTVCI6ImRpc2FibGVkIiwiSU5TVEFHUkFNIjoiZGlzYWJsZWQiLCJDT05GSUciOiJkaXNhYmxlZCJ9LCJ2ZXJzaW9uIjoiMi4wLjE0Iiwic2NvcmUiOjIwMDE0fV0="
    monica-version="5.1.3" monica-id="ofpnmcalabcbjgholdjcjblkibolbppb" cz-shortcut-listen="true">
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

            {{-- Left Side Content --}}
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
        <x-sidebar-content :sidebar="$sidebar" />

        <div class="portal-targets" bis_skin_checked="1">
            <div class="vue-portal-target popover-container " bis_skin_checked="1">
                <div class="" bis_skin_checked="1">
                    <div class="popover" bis_skin_checked="1">
                        <div class="popover-content bg-white shadow-popover rounded-md" bis_skin_checked="1">
                            <div class="p-4 pb-2" bis_skin_checked="1">
                                <h6 class="mb-2">Pin to Favorites</h6>
                                <div class="flex items-center" bis_skin_checked="1"><input type="text"
                                        class="input-text w-auto"><button
                                        class="btn-primary rtl:mr-2 ltr:ml-2">Save</button></div><button
                                    class="mt-2 text-xs text-blue outline-none hover:text-blue-800">Set as start page
                                    <span>→</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vue-portal-target popover-container dropdown-list" bis_skin_checked="1">
                <div class="" bis_skin_checked="1">
                    <div class="popover" bis_skin_checked="1">
                        <div class="popover-content bg-white shadow-popover rounded-md" bis_skin_checked="1"> <a
                                href="https://demo.statamic.com/cp/preferences">Preferences</a> <a
                                href="https://demo.statamic.com/cp/preferences/nav">CP Nav</a></div>
                    </div>
                </div>
            </div>
            <div class="vue-portal-target popover-container dropdown-list" bis_skin_checked="1">
                <div class="" bis_skin_checked="1">
                    <div class="popover" bis_skin_checked="1">
                        <div class="popover-content bg-white shadow-popover rounded-md" bis_skin_checked="1"> <a
                                href="https://statamic.dev/" target="_blank"
                                class="flex items-center"><!----><span>Documentation</span>
                                <i class="w-3 block rtl:mr-2 ltr:ml-2"><svg xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24">
                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="1.5"
                                            d="M23.251 7.498V.748h-6.75m6.75 0-15 15m3-10.5h-9a1.5 1.5 0 0 0-1.5 1.5v15a1.5 1.5 0 0 0 1.5 1.5h15a1.5 1.5 0 0 0 1.5-1.5v-9">
                                        </path>
                                    </svg></i></a> <a href="https://statamic.com/support" target="_blank"
                                class="flex items-center"><!----><span>Support</span> <i
                                    class="w-3 block rtl:mr-2 ltr:ml-2"><svg xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24">
                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="1.5"
                                            d="M23.251 7.498V.748h-6.75m6.75 0-15 15m3-10.5h-9a1.5 1.5 0 0 0-1.5 1.5v15a1.5 1.5 0 0 0 1.5 1.5h15a1.5 1.5 0 0 0 1.5-1.5v-9">
                                        </path>
                                    </svg></i></a> <a class="flex items-center"><!----><span>Keyboard
                                    Shortcuts</span></a></div>
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
                            <div class="divider" bis_skin_checked="1"></div> <a
                                href="https://demo.statamic.com/cp/account">Profile</a> <a
                                href="https://demo.statamic.com/cp/auth/logout?redirect=https%3A%2F%2Fdemo.statamic.com%2Fcp">Log
                                out</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vue-portal-target popover-container dropdown-list" bis_skin_checked="1">
                <div class="" bis_skin_checked="1"><!----></div>
            </div>
        </div>
    </div>

    <script src="{{ url('js/cp.js') }}" defer=""></script>

    <link rel="preload" as="style" href="{{ url('css/cp-56146771.css') }}">
    <link rel="preload" as="style" href="{{ url('css/cp-7025c2cd.css') }}">
    <link rel="modulepreload" href="{{ url('js/cp-c6df7fbd.js') }}">
    <link rel="stylesheet" href="{{ url('css/cp-56146771.css') }}">
    <link rel="stylesheet" href="{{ url('css/cp-7025c2cd.css') }}">
    <script type="module" src="{{ url('js/cp-c6df7fbd.js') }}"></script>




    <script src="data:text/javascript;base64,U3RhdGFtaWMuY29uZmlnKFN0YXRhbWljQ29uZmlnKTsgU3RhdGFtaWMuc3RhcnQoKQ==" defer="">
    </script>



    <div id="b5fNhGDkM" role="status" aria-live="polite" aria-atomic="false" class="toasted-container bottom-left"
        bis_skin_checked="1"></div>
    <div id="draggable-live-region" aria-relevant="additions" aria-atomic="true" aria-live="assertive"
        role="log" style="position: fixed; width: 1px; height: 1px; top: -1px; overflow: hidden;"
        bis_skin_checked="1"></div>
    <webchatgpt-custom-element-e6b064d5-8c24-473c-9a22-41fac41094ad id="webchatgpt-snackbar"
        style="color: rgb(255, 255, 255);"><template shadowrootmode="open">
            <style id="webchatgpt-snackbar-container-emotion-style"></style>
            <div id="webchatgpt-snackbar-container" style="z-index: 2147483647;"></div>
        </template></webchatgpt-custom-element-e6b064d5-8c24-473c-9a22-41fac41094ad>
    <div id="monica-content-root" class="monica-widget" data-darkreader-mode="dynamic" data-darkreader-scheme="dark"
        bis_skin_checked="1"><template shadowrootmode="open">


            <style data-rc-order="prependQueue" data-css-hash="1mlrqvk" data-token-hash="1svjfp6">

            </style>
            <style class="darkreader darkreader--sync" media="screen"></style>
            <style class="darkreader darkreader--inline" media="screen">
                [data-darkreader-inline-bgcolor] {
                    background-color: var(--darkreader-inline-bgcolor) !important;
                }

                [data-darkreader-inline-bgimage] {
                    background-image: var(--darkreader-inline-bgimage) !important;
                }

                [data-darkreader-inline-border] {
                    border-color: var(--darkreader-inline-border) !important;
                }

                [data-darkreader-inline-border-bottom] {
                    border-bottom-color: var(--darkreader-inline-border-bottom) !important;
                }

                [data-darkreader-inline-border-left] {
                    border-left-color: var(--darkreader-inline-border-left) !important;
                }

                [data-darkreader-inline-border-right] {
                    border-right-color: var(--darkreader-inline-border-right) !important;
                }

                [data-darkreader-inline-border-top] {
                    border-top-color: var(--darkreader-inline-border-top) !important;
                }

                [data-darkreader-inline-boxshadow] {
                    box-shadow: var(--darkreader-inline-boxshadow) !important;
                }

                [data-darkreader-inline-color] {
                    color: var(--darkreader-inline-color) !important;
                }

                [data-darkreader-inline-fill] {
                    fill: var(--darkreader-inline-fill) !important;
                }

                [data-darkreader-inline-stroke] {
                    stroke: var(--darkreader-inline-stroke) !important;
                }

                [data-darkreader-inline-outline] {
                    outline-color: var(--darkreader-inline-outline) !important;
                }

                [data-darkreader-inline-stopcolor] {
                    stop-color: var(--darkreader-inline-stopcolor) !important;
                }
            </style>
            <style class="darkreader darkreader--override" media="screen"></style>
            <style class="darkreader darkreader--invert" media="screen"></style>
            <style class="darkreader darkreader--sync" media="screen"></style>
            <div>
                <div class="_monica-dark root-container-UmvGjM" lang="en">
                    <div class="content-root-rb-FdpxmT"></div>
                    <div class="content-root-WCIiJJ">
                        <div class="sidebar-entry-btn-hvXPZj sidebar-entry-btn-right-doBuCO"
                            style="visibility: visible; bottom: 109.95px;">
                            <div class="float-btn-box-yen8CN">
                                <div class="float-btn-dmQyFz"><img
                                        src="chrome-extension://ofpnmcalabcbjgholdjcjblkibolbppb/static/global/src/static/monicaLogo.png"
                                        class="logo-img-drxdFH" alt=""
                                        style="width: 24px; height: 24px; border-radius: 4px;"><span
                                        class="shortcut--0OZjH" style="opacity: 0;">⌘M</span></div>
                            </div>
                            <div class="extra-tools-box-Q-raLQ toolbar-AlHpmQ" style="bottom: -12px;">
                                <div class="trigger-area-rZm0LF"></div>
                                <div class="top-t5av-O"></div>
                                <div class="bot-bqr602"></div>
                            </div>
                        </div>
                        <div class="dialog-root-ZbJNQk"></div>
                        <div class="reading-summary-status-bar-yFqhHz"></div>
                        <div class="contextual-toolbar-BjPOM3"></div>
                    </div>
                </div>
            </div>
        </template>
        <meta name="darkreader" content="ffd8fb97072548af9e29949b79ecf07b">
    </div>
</body>

</html>
