@extends('layouts.main')

@section('title', 'Config Navigations')

@section('content')
<div class="page-wrapper max-w-xl">
    <div>
      <header class="mb-6">
        <div class="breadcrumb flex">
          <a
            href="{{route('navigations.index')}}"
            class="flex-initial flex p-2 -m-2 items-center text-xs text-gray-700 hover:text-gray-900"
            ><svg
              viewBox="0 0 24 24"
              class="align-middle h-6 w-4 rotate-180"
            >
              <path
                fill="currentColor"
                fill-rule="evenodd"
                d="m10.414 7.05 4.95 4.95-4.95 4.95L9 15.534 12.536 12 9 8.464z"
              ></path></svg
            ><span>Navigation</span></a
          >
        </div>
        <div class="flex items-center">
          <h1 class="flex-1">{{$navigation->title}}</h1>
          <!----><!----><!---->
          <div class="dropdown-list">
            <div aria-haspopup="true">
              <button class="btn">
                Add Nav Item
                <!---->
              </button>
            </div>
            <div class="v-portal" style="display: none"></div>
          </div>
          <button
            disabled="disabled"
            class="btn-primary rtl:mr-4 ltr:ml-4 disabled"
          >
            Save Changes
          </button>
        </div>
      </header>
      <div>
        <div class="mb-2 flex justify-end">
          <a class="text-2xs text-blue rtl:ml-4 ltr:mr-4 underline"
            >Expand All</a
          ><a class="text-2xs text-blue rtl:ml-2 ltr:mr-2 underline"
            >Collapse All</a
          >
        </div>
        <!---->
        <div class="no-results w-full flex items-center">
          <div class="card p-4 content w-full">
            <div class="flex flex-wrap w-full">
              <a
                href="{{route('navigations.edit',['navigation' => $navigation->handle])}}"
                class="w-full lg:w-1/2 p-4 flex items-start hover:bg-gray-200 rounded-md group"
                ><svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 24 24"
                  class="h-8 w-8 rtl:ml-4 ltr:mr-4 text-gray-800"
                >
                  <path
                    fill="none"
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M18.25 2.251c-1.061 1.061-3.04.96-4.75-.75L12 3l8 8 3.5-3.5zM11.939 9.94 8.146 6.148A4 4 0 0 0 2.854.855L5 3v2H3L.854 2.855a4 4 0 0 0 5.292 5.293l3.793 3.792m2.122 2.122 3.793 3.793a4 4 0 0 0 5.292 5.293L19 21v-2h2l2.146 2.147a4 4 0 0 0-5.292-5.293l-3.793-3.793"
                  ></path>
                  <path
                    fill="none"
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="m15.439 6.44-14.5 14.5a1.5 1.5 0 0 0 2.122 2.122l14.5-14.5"
                  ></path>
                </svg>
                <div
                  class="flex-1 mb-4 md:mb-0 rtl:md:ml-6 ltr:md:mr-6"
                >
                  <h3 class="mb-2 text-blue">
                    Configure Navigation <span>→</span>
                  </h3>
                  <p>
                    Enable linking to collections, set a max depth, and
                    other behaviors.
                  </p>
                </div></a
              ><a
                class="w-full lg:w-1/2 p-4 flex items-start hover:bg-gray-200 rounded-md group"
                ><svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 24 24"
                  class="h-8 w-8 rtl:ml-4 ltr:mr-4 text-gray-800"
                >
                  <path
                    fill="none"
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="1.5"
                    d="M23.25 9.9 12.273 20.878a6.75 6.75 0 0 1-9.546-9.546l9.016-9.015a4.5 4.5 0 1 1 6.363 6.363L9.091 17.7a2.25 2.25 0 0 1-3.182-3.181L14.925 5.5"
                  ></path>
                </svg>
                <div
                  class="flex-1 mb-4 md:mb-0 rtl:md:ml-6 ltr:md:mr-6"
                >
                  <h3 class="mb-2 text-blue">
                    Link to URL <span>→</span>
                  </h3>
                  <p>
                    Add a link to any internal or external URL. Enable
                    linking to entries in the config area.
                  </p>
                </div></a
              ><!----><a
                href="https://statamic.dev/navigation"
                class="w-full lg:w-1/2 p-4 flex items-start hover:bg-gray-200 rounded-md group"
                ><svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 24 24"
                  class="h-8 w-8 rtl:ml-4 ltr:mr-4 text-gray-800"
                >
                  <path
                    fill="none"
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="m4.435.913 8.936 3.573a1 1 0 0 1 .629.928v16.848a1 1 0 0 1-1.371.927l-8-3.2A1 1 0 0 1 4 19.062V1.739a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v17a1 1 0 0 1-1 1h-2"
                  ></path>
                  <path
                    fill="none"
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="m4.552.845 11.636 2.237a1 1 0 0 1 .812.982v16.675a1 1 0 0 1-1 1h-2"
                  ></path>
                </svg>
                <div
                  class="flex-1 mb-4 md:mb-0 rtl:md:ml-6 ltr:md:mr-6"
                >
                  <h3 class="mb-2 text-blue">
                    Read the Documentation <span>→</span>
                  </h3>
                  <p>
                    Learn more about building, configuring, and
                    rendering Navigations.
                  </p>
                </div></a
              >
            </div>
          </div>
        </div>
        <div class="page-tree w-full">
          <div class="he-tree tree">
            <div id="tree_84_node_root" class="tree-node">
              <!---->
              <div class="tree-node-children"></div>
            </div>
          </div>
        </div>
      </div>
      <!----><!----><!----><!---->
    </div>
  </div>

@endsection