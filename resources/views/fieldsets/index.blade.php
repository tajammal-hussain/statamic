@extends('layouts.main')

@section('title', 'Fieldsets')

@section('content')
    @if ($fieldsetsInfo->isEmpty())
        <div class="page-wrapper max-w-xl" bis_skin_checked="1">
            <div class="no-results md:mt-4 max-w-md mx-auto" bis_skin_checked="1">
                <div class="card rounded-xl text-center p-6 lg:py-10" bis_skin_checked="1">
                    <h1 class="mb-8">{{ 'Fieldsets' }}</h1>
                    <div class="hidden md:block" bis_skin_checked="1">
                        <svg width="133" height="125" viewBox="0 0 133 125" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M62.7309 125C97.2239 125 125.186 97.0178 125.186 62.5C125.186 27.9822 97.2239 0 62.7309 0C28.238 0 0.275879 27.9822 0.275879 62.5C0.275879 97.0178 28.238 125 62.7309 125Z"
                                fill="#EAEEF9"></path>
                            <mask id="mask0_80_1411" maskUnits="userSpaceOnUse" x="0" y="0" width="126" height="125"
                                style="mask-type: alpha;">
                                <path
                                    d="M62.7309 125C97.2239 125 125.186 97.0178 125.186 62.5C125.186 27.9822 97.2239 0 62.7309 0C28.238 0 0.275879 27.9822 0.275879 62.5C0.275879 97.0178 28.238 125 62.7309 125Z"
                                    fill="#EAEEF9"></path>
                            </mask>
                            <g mask="url(#mask0_80_1411)">
                                <rect x="8.67041" y="52.0098" width="111.546" height="20.6989" rx="3" fill="#C2C8D6"
                                    stroke="#989FB0" stroke-width="2"></rect>
                                <path opacity="0.6"
                                    d="M71.2349 40.245H-0.248592C-1.17352 40.245 -1.96631 39.4517 -1.96631 38.5261V33.1047C-1.96631 32.1792 -1.17352 31.3858 -0.248592 31.3858H71.2349C72.1598 31.3858 72.9526 32.1792 72.9526 33.1047V38.5261C72.9526 39.4517 72.1598 40.245 71.2349 40.245Z"
                                    fill="#C2C8D6"></path>
                                <path opacity="0.6"
                                    d="M127.26 40.245H81.9384C81.0135 40.245 80.2207 39.4517 80.2207 38.5261V33.1047C80.2207 32.1792 81.0135 31.3858 81.9384 31.3858H127.26C128.185 31.3858 128.977 32.1792 128.977 33.1047V38.5261C128.977 39.4517 128.185 40.245 127.26 40.245Z"
                                    fill="#C2C8D6"></path>
                                <path opacity="0.6"
                                    d="M124.088 66.9539H208.388C209.313 66.9539 210.106 66.1606 210.106 65.235V59.8137C210.106 58.8881 209.313 58.0947 208.388 58.0947H124.088C123.163 58.0947 122.37 58.8881 122.37 59.8137V65.235C122.37 66.1606 123.163 66.9539 124.088 66.9539Z"
                                    fill="#C2C8D6"></path>
                                <path
                                    d="M58.4179 66.9539H112.064C112.988 66.9539 113.781 66.1606 113.781 65.235V59.8137C113.781 58.8881 112.988 58.0947 112.064 58.0947H58.4179C57.493 58.0947 56.7002 58.8881 56.7002 59.8137V65.235C56.8323 66.1606 57.493 66.9539 58.4179 66.9539Z"
                                    fill="#989FB0"></path>
                                <path
                                    d="M15.873 66.9539H47.0562C47.9811 66.9539 48.7739 66.1606 48.7739 65.235V59.8137C48.7739 58.8881 47.9811 58.0947 47.0562 58.0947H15.873C14.9481 58.0947 14.1553 58.8881 14.1553 59.8137V65.235C14.1553 66.1606 14.8159 66.9539 15.873 66.9539Z"
                                    fill="#989FB0"></path>
                                <path opacity="0.6"
                                    d="M84.0519 84.1437H-3.81597C-4.7409 84.1437 -5.53369 84.9371 -5.53369 85.8627V91.284C-5.53369 92.2096 -4.7409 93.0029 -3.81597 93.0029H84.184C85.1089 93.0029 85.9017 92.2096 85.9017 91.284V85.8627C85.7696 84.9371 84.9768 84.1437 84.0519 84.1437Z"
                                    fill="#C2C8D6"></path>
                                <path opacity="0.6"
                                    d="M84.0519 6.74699H-3.81597C-4.7409 6.74699 -5.53369 7.54036 -5.53369 8.46595V13.8873C-5.53369 14.8129 -4.7409 15.6062 -3.81597 15.6062H84.184C85.1089 15.6062 85.9017 14.8129 85.9017 13.8873V8.46595C85.7696 7.54036 84.9768 6.74699 84.0519 6.74699Z"
                                    fill="#C2C8D6"></path>
                                <path opacity="0.6"
                                    d="M152.497 84.1437H96.3412C95.4163 84.1437 94.6235 84.9371 94.6235 85.8627V91.284C94.6235 92.2096 95.4163 93.0029 96.3412 93.0029H152.365C153.29 93.0029 154.083 92.2096 154.083 91.284V85.8627C154.083 84.9371 153.422 84.1437 152.497 84.1437Z"
                                    fill="#C2C8D6"></path>
                                <path opacity="0.6"
                                    d="M152.497 6.74699H96.3412C95.4163 6.74699 94.6235 7.54036 94.6235 8.46595V13.8873C94.6235 14.8129 95.4163 15.6062 96.3412 15.6062H152.365C153.29 15.6062 154.083 14.8129 154.083 13.8873V8.46595C154.083 7.54036 153.422 6.74699 152.497 6.74699Z"
                                    fill="#C2C8D6"></path>
                                <path opacity="0.6"
                                    d="M80.0881 108.892H136.244C137.169 108.892 137.962 109.685 137.962 110.611V116.032C137.962 116.958 137.169 117.751 136.244 117.751H80.2202C79.2953 117.751 78.5025 116.958 78.5025 116.032V110.611C78.5025 109.685 79.1632 108.892 80.0881 108.892Z"
                                    fill="#C2C8D6"></path>
                                <path opacity="0.6"
                                    d="M-3.81545 108.892H68.3287C69.2536 108.892 70.0464 109.685 70.0464 110.611V116.032C70.0464 116.958 69.2536 117.751 68.3287 117.751H-3.81545C-4.74037 117.751 -5.53315 116.958 -5.53315 116.032V110.611C-5.53315 109.685 -4.74037 108.892 -3.81545 108.892Z"
                                    fill="#C2C8D6"></path>
                            </g>
                            <path
                                d="M125.709 70.7846L103.232 59.42C102.127 58.8514 100.751 59.8778 100.918 61.1463L105.384 85.9485C105.569 87.1106 107.156 87.4123 107.827 86.3543L111.208 81.8816C111.656 81.1763 112.7 81.1405 113.144 81.7374L118.88 89.4362C119.236 89.9137 119.878 89.9918 120.378 89.6185L124.943 86.2125C125.444 85.8392 125.552 85.2012 125.196 84.7238L119.461 77.0249C118.972 76.3684 119.348 75.4374 120.152 75.2095L125.401 73.2434C126.543 72.9483 126.77 71.2935 125.709 70.7846Z"
                                fill="#C2C8D6" stroke="#989FB0" stroke-width="2" stroke-miterlimit="10">
                            </path>
                        </svg>
                    </div>
                    <p class="text-gray-700 leading-normal my-8 text-lg antialiased">
                        {{ 'Fieldsets are an optional companion to blueprints, acting as reusable partials that can be used within blueprints.' }}
                    </p>
                    <a href="{{ route('fieldsets.create') }}" class="btn-primary btn-lg">
                        {{ 'Create Fieldset' }}
                    </a>
                </div>
            </div>
        </div>
    @else
        <div class="page-wrapper max-w-xl">
            <div class="flex items-center justify-between mb-6">
                <h1>Fieldsets</h1>
                {{-- Add any additional buttons or actions here --}}
                <a href="{{ route('fieldsets.create') }}" class="btn-primary">Create Fieldset</a>
            </div>
            @if (session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('error'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                    {{ session('error') }}
                </div>
            @endif
            <div class="card p-0">
                <table class="data-table" data-size="sm">
                    {{-- Table Head --}}
                    <x-table-head :columns="$columns" />

                    <tbody>
                        @foreach ($fieldsetsInfo as $fieldset)
                            <tr class="sortable-row outline-none">
                                <td>
                                    <a href="{{ route('fieldsets.edit', $fieldset->handle) }}">
                                        {{ $fieldset->title }}
                                    </a>
                                </td>
                                <td class="rtl:text-left ltr:text-right rtl:pl-8 ltr:pr-8">
                                    {{ $fieldset->handle }}
                                </td>
                                <td class="rtl:text-left ltr:text-right rtl:pl-8 ltr:pr-8">
                                    1
                                </td>
                                <td>
                                    <div>
                                        @php
                                            $menuItems = [
                                                [
                                                    'label' => 'Edit',
                                                    'route' => route('fieldsets.edit', $fieldset->handle),
                                                ],
                                                [
                                                    'label' => 'Delete',
                                                    'route' => route('fieldsets.destroy', $fieldset->handle),
                                                ],
                                            ];
                                        @endphp
                                        <x-customDropdown :menuItems="$menuItems" />
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@endsection
