@extends('layouts.main')
@section('content')
    <title>Forms :: Cedar</title>
    <div class="page-wrapper max-w-xl" bis_skin_checked="1">
        <div class="flex items-center mb-6" bis_skin_checked="1">
            <h1 class="flex-1">Forms</h1> <a href="https://demo.statamic.com/cp/forms/create" class="btn-primary">Create
                Form</a>
        </div>
        <div class="card overflow-hidden p-0 relative" visible-columns="[object Object],[object Object]" bis_skin_checked="1">
            <!---->
            <table data-size="sm" tabindex="0" class="data-table">
                <thead>
                    <tr>
                        <th class="checkbox-column"><label for="checkerOfAllBoxes"
                                class="flex items-center justify-center relative cursor-pointer"><input type="checkbox"
                                    id="checkerOfAllBoxes" class="relative top-0"></label></th>
                        <th class="group current-column sortable-column"><span>Title</span><svg height="8"
                                width="8" viewBox="0 0 10 6.5"
                                class="rtl:mr-1 ltr:ml-1 opacity-0 group-hover:opacity-100 asc-opacity-100 pointer-events-none">
                                <path d="M9.9,1.4L5,6.4L0,1.4L1.4,0L5,3.5L8.5,0L9.9,1.4z" fill="currentColor"></path>
                            </svg></th>
                        <th class="group sortable-column"><span>Submissions</span><svg height="8" width="8"
                                viewBox="0 0 10 6.5" class="rtl:mr-1 ltr:ml-1 opacity-0 group-hover:opacity-100 asc">
                                <path d="M9.9,1.4L5,6.4L0,1.4L1.4,0L5,3.5L8.5,0L9.9,1.4z" fill="currentColor"></path>
                            </svg></th><!---->
                        <th class="actions-column"></th>
                    </tr>
                </thead>
                <tbody tabindex="0">
                    <tr class="sortable-row outline-none"><!---->
                        <th class="checkbox-column"><input type="checkbox" id="checkbox-contact" value="contact"></th>
                        <td class=""><a href="https://demo.statamic.com/cp/forms/contact">Contact</a></td>
                        <td class="">
                            <div bis_skin_checked="1">
                                <div handle="submissions" values="[object Object]" class="" bis_skin_checked="1">5
                                </div>
                            </div>
                        </td><!---->
                        <th class="actions-column">
                            <div class="dropdown-list" bis_skin_checked="1">
                                <div aria-haspopup="true" bis_skin_checked="1"><button aria-label="Open Dropdown"
                                        class="rotating-dots-button"><svg width="12" viewBox="0 0 24 24"
                                            class="rotating-dots fill-current">
                                            <circle cx="3" cy="12" r="3"></circle>
                                            <circle cx="12" cy="12" r="3"></circle>
                                            <circle cx="21" cy="12" r="3"></circle>
                                        </svg></button></div>
                                <div class="v-portal" style="display: none;" bis_skin_checked="1"></div>
                            </div>
                        </th>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
