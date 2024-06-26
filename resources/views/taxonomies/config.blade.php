@extends('layouts.main')

@section('title', 'Config Taxonomy')

@section('content')
<div class="page-wrapper max-w-xl">
    <header class="mb-6">
      <div class="flex">
        <a
          href="{{route('taxonomies.index')}}"
          class="flex-initial flex p-2 -m-2 items-center text-xs text-gray-700 hover:text-gray-900"
          ><div class="h-6 rotate-180 svg-icon using-svg">
            <svg viewBox="0 0 24 24" class="align-middle">
              <path
                fill="currentColor"
                fill-rule="evenodd"
                d="m10.414 7.05 4.95 4.95-4.95 4.95L9 15.534 12.536 12 9 8.464z"
              ></path>
            </svg>
          </div>
          <span>Taxonomies</span></a
        >
      </div>
      <h1>{{$taxonomy->title}}</h1>
    </header>
    <div class="card p-4 content">
      <div class="flex flex-wrap">
        <a
          href="{{route('taxonomies.edit',['taxonomy' => $taxonomy->handle])}}"
          class="w-full lg:w-1/2 p-4 flex items-start hover:bg-gray-200 rounded-md group"
          ><div class="h-8 w-8 rtl:ml-4 ltr:mr-4 text-gray-800">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
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
          </div>
          <div class="flex-1 mb-4 md:mb-0 rtl:md:ml-6 ltr:md:mr-6">
            <h3 class="mb-2 text-blue">Configure Taxonomy →</h3>
            <p>
              Configure names, associate collections, define blueprints,
              and more.
            </p>
          </div></a
        >
        <a
          href="{{ route('terms.index', ['taxonomy' => $taxonomy->handle])}}"
          class="w-full lg:w-1/2 p-4 flex items-start hover:bg-gray-200 rounded-md group"
          ><div class="h-8 w-8 rtl:ml-4 ltr:mr-4 text-gray-800">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
              <path
                fill="none"
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M19.479 8V2.5a2 2 0 0 0-2-2h-12a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h8l3 3v-3h1a2 2 0 0 0 1.721-.982"
              ></path>
              <path
                fill="none"
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M1.485 3.764A2 2 0 0 0 .479 5.5v16a2 2 0 0 0 2 2h8a2 2 0 0 0 1.712-.967M5.479 3.5h4m-2 4.5V3.5M15.7 7.221l-4.2-1.2 1.2 4.2 7.179 7.179a2.121 2.121 0 0 0 3-3zm3.279 9.279 3-3M12.7 10.221l3-3M12.479 3.5h4m-10 8h4m-4 3h6.5m-6.5 3h9"
              ></path>
            </svg>
          </div>
          <div class="flex-1 mb-4 md:mb-0 rtl:md:ml-6 ltr:md:mr-6">
            <h3 class="mb-2 text-blue">Create Term →</h3>
            <p>
              Create the first term or stub out a handful of placeholder
              terms, it's up to you.
            </p>
          </div></a
        >
        <div
          class="hidden first:flex justify-center items-center p-8 w-full"
        >
          <svg
            width="164"
            height="145"
            viewBox="0 0 164 145"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M86.4617 130C120.899 130 148.817 102.081 148.817 67.5213C148.817 32.9612 120.776 5.04251 86.4617 5.04251C52.0246 5.04251 24.106 32.9612 24.106 67.5213C24.106 102.081 52.0246 130 86.4617 130Z"
              fill="#EAEEF9"
            ></path>
            <path
              d="M144.759 26.5658C147.544 26.5658 149.801 24.3082 149.801 21.5233C149.801 18.7383 147.544 16.4807 144.759 16.4807C141.974 16.4807 139.716 18.7383 139.716 21.5233C139.716 24.3082 141.974 26.5658 144.759 26.5658Z"
              fill="#F1F3F9"
            ></path>
            <path
              d="M152.138 6.88742C154.04 6.88742 155.582 5.34562 155.582 3.44371C155.582 1.5418 154.04 0 152.138 0C150.236 0 148.694 1.5418 148.694 3.44371C148.694 5.34562 150.236 6.88742 152.138 6.88742Z"
              fill="#F1F3F9"
            ></path>
            <path
              d="M27.4266 26.4428C29.3285 26.4428 30.8703 24.901 30.8703 22.9991C30.8703 21.0972 29.3285 19.5554 27.4266 19.5554C25.5247 19.5554 23.9829 21.0972 23.9829 22.9991C23.9829 24.901 25.5247 26.4428 27.4266 26.4428Z"
              fill="#F1F3F9"
            ></path>
            <path
              d="M6.39546 92.8571C9.92758 92.8571 12.7909 89.9938 12.7909 86.4617C12.7909 82.9295 9.92758 80.0662 6.39546 80.0662C2.86335 80.0662 0 82.9295 0 86.4617C0 89.9938 2.86335 92.8571 6.39546 92.8571Z"
              fill="#F1F3F9"
            ></path>
            <g filter="url(#filter0_d_79_1403)">
              <rect
                x="81.0845"
                y="29.5686"
                width="60.2418"
                height="77.1619"
                rx="6"
                fill="url(#paint0_linear_79_1403)"
              ></rect>
            </g>
            <rect
              opacity="0.7"
              x="89.8696"
              y="89.1032"
              width="42.6713"
              height="8.81361"
              rx="2"
              fill="#D6DCE8"
            ></rect>
            <path
              d="M89.8696 76.5124H131.913"
              stroke="#D6DCE8"
              stroke-width="2"
              stroke-miterlimit="10"
            ></path>
            <path
              d="M89.8696 70.0926H131.913"
              stroke="#D6DCE8"
              stroke-width="2"
              stroke-miterlimit="10"
            ></path>
            <path
              d="M89.8696 82.5203H114.343"
              stroke="#D6DCE8"
              stroke-width="2"
              stroke-miterlimit="10"
            ></path>
            <path
              d="M82.3389 34.8277C82.3389 32.6185 84.1297 30.8277 86.3389 30.8277H136.071C138.28 30.8277 140.071 32.6185 140.071 34.8277V61.6209H82.3389V34.8277Z"
              fill="#F1F3F9"
            ></path>
            <path
              d="M114.469 42.3175C115.176 42.3175 115.749 41.7184 115.749 40.9794C115.749 40.2404 115.176 39.6413 114.469 39.6413C113.762 39.6413 113.189 40.2404 113.189 40.9794C113.189 41.7184 113.762 42.3175 114.469 42.3175Z"
              fill="#D6DCE8"
            ></path>
            <path
              d="M114.544 51.0055H104.782C104.152 51.0055 103.785 50.2412 104.152 49.7498L109.033 42.6525C109.348 42.2157 109.978 42.2157 110.293 42.6525L115.174 49.7498C115.541 50.2958 115.174 51.0055 114.544 51.0055Z"
              fill="#D6DCE8"
            ></path>
            <path
              opacity="0.7"
              d="M117.942 50.8608H113.138C112.408 50.8608 112.043 50.0672 112.408 49.5178L114.78 46.1605C115.145 45.6722 115.814 45.6722 116.179 46.1605L118.551 49.5178C119.098 50.0672 118.672 50.8608 117.942 50.8608Z"
              fill="#D6DCE8"
            ></path>
            <g filter="url(#filter1_d_79_1403)">
              <rect
                x="32.0737"
                y="29.5686"
                width="60.2418"
                height="77.1619"
                rx="6"
                fill="url(#paint1_linear_79_1403)"
              ></rect>
            </g>
            <rect
              opacity="0.7"
              x="40.8604"
              y="89.1032"
              width="42.6713"
              height="8.81361"
              rx="2"
              fill="#D6DCE8"
            ></rect>
            <path
              d="M40.8604 76.5124H82.9041"
              stroke="#D6DCE8"
              stroke-width="2"
              stroke-miterlimit="10"
            ></path>
            <path
              d="M40.8604 70.0926H82.9041"
              stroke="#D6DCE8"
              stroke-width="2"
              stroke-miterlimit="10"
            ></path>
            <path
              d="M40.8604 82.5203H65.3336"
              stroke="#D6DCE8"
              stroke-width="2"
              stroke-miterlimit="10"
            ></path>
            <path
              d="M33.3291 34.8277C33.3291 32.6185 35.12 30.8277 37.3291 30.8277H87.0609C89.27 30.8277 91.0609 32.6185 91.0609 34.8277V61.6209H33.3291V34.8277Z"
              fill="#F1F3F9"
            ></path>
            <path
              d="M65.4939 42.3175C66.2006 42.3175 66.7734 41.7184 66.7734 40.9794C66.7734 40.2404 66.2006 39.6413 65.4939 39.6413C64.7872 39.6413 64.2144 40.2404 64.2144 40.9794C64.2144 41.7184 64.7872 42.3175 65.4939 42.3175Z"
              fill="#D6DCE8"
            ></path>
            <path
              d="M65.5692 51.0055H55.8073C55.1775 51.0055 54.8101 50.2412 55.1775 49.7498L60.0584 42.6525C60.3733 42.2157 61.0031 42.2157 61.318 42.6525L66.199 49.7498C66.5664 50.2958 66.199 51.0055 65.5692 51.0055Z"
              fill="#D6DCE8"
            ></path>
            <path
              opacity="0.7"
              d="M68.9669 50.8608H64.1625C63.4327 50.8608 63.0678 50.0672 63.4327 49.5178L65.8045 46.1605C66.1694 45.6722 66.8384 45.6722 67.2033 46.1605L69.5751 49.5178C70.1224 50.0672 69.6967 50.8608 68.9669 50.8608Z"
              fill="#D6DCE8"
            ></path>
            <g filter="url(#filter2_d_79_1403)">
              <rect
                x="54.1245"
                y="26.0601"
                width="67.3763"
                height="85.8949"
                rx="6"
                fill="url(#paint2_linear_79_1403)"
              ></rect>
            </g>
            <rect
              x="63.9512"
              y="92.3328"
              width="47.7249"
              height="9.81112"
              rx="2"
              fill="#D6DCE8"
            ></rect>
            <path
              d="M63.9512 78.317H110.974"
              stroke="#AAB2C5"
              stroke-width="2"
              stroke-miterlimit="10"
            ></path>
            <path
              d="M63.9512 71.1707H110.974"
              stroke="#AAB2C5"
              stroke-width="2"
              stroke-miterlimit="10"
            ></path>
            <path
              d="M63.9512 85.0047H91.3228"
              stroke="#AAB2C5"
              stroke-width="2"
              stroke-miterlimit="10"
            ></path>
            <path
              d="M55.5293 31.4615C55.5293 29.2524 57.3202 27.4615 59.5293 27.4615H116.098C118.307 27.4615 120.098 29.2523 120.098 31.4615V61.7398H55.5293V31.4615Z"
              fill="#F1F3F9"
            ></path>
            <path
              d="M91.5756 40.252C92.366 40.252 93.0067 39.5851 93.0067 38.7625C93.0067 37.9398 92.366 37.2729 91.5756 37.2729C90.7852 37.2729 90.1445 37.9398 90.1445 38.7625C90.1445 39.5851 90.7852 40.252 91.5756 40.252Z"
              fill="#AAB2C5"
            ></path>
            <path
              d="M91.6585 49.9234H80.7405C80.0361 49.9234 79.6252 49.0726 80.0361 48.5256L85.4951 40.625C85.8473 40.1388 86.5517 40.1388 86.9039 40.625L92.3629 48.5256C92.7738 49.1333 92.3629 49.9234 91.6585 49.9234Z"
              fill="#AAB2C5"
            ></path>
            <path
              opacity="0.7"
              d="M95.4596 49.7621H90.0862C89.27 49.7621 88.8619 48.8787 89.27 48.2672L91.9227 44.5299C92.3308 43.9863 93.079 43.9863 93.4871 44.5299L96.1398 48.2672C96.7519 48.8787 96.2758 49.7621 95.4596 49.7621Z"
              fill="#AAB2C5"
            ></path>
            <defs>
              <filter
                id="filter0_d_79_1403"
                x="59.0845"
                y="18.5686"
                width="104.242"
                height="121.162"
                filterUnits="userSpaceOnUse"
                color-interpolation-filters="sRGB"
              >
                <feflood
                  flood-opacity="0"
                  result="BackgroundImageFix"
                ></feflood>
                <fecolormatrix
                  in="SourceAlpha"
                  type="matrix"
                  values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                  result="hardAlpha"
                ></fecolormatrix>
                <feoffset dy="11"></feoffset>
                <fegaussianblur stdDeviation="11"></fegaussianblur>
                <fecolormatrix
                  type="matrix"
                  values="0 0 0 0 0.397708 0 0 0 0 0.47749 0 0 0 0 0.575 0 0 0 0.27 0"
                ></fecolormatrix>
                <feblend
                  mode="normal"
                  in2="BackgroundImageFix"
                  result="effect1_dropShadow_79_1403"
                ></feblend>
                <feblend
                  mode="normal"
                  in="SourceGraphic"
                  in2="effect1_dropShadow_79_1403"
                  result="shape"
                ></feblend>
              </filter>
              <filter
                id="filter1_d_79_1403"
                x="10.0737"
                y="18.5686"
                width="104.242"
                height="121.162"
                filterUnits="userSpaceOnUse"
                color-interpolation-filters="sRGB"
              >
                <feflood
                  flood-opacity="0"
                  result="BackgroundImageFix"
                ></feflood>
                <fecolormatrix
                  in="SourceAlpha"
                  type="matrix"
                  values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                  result="hardAlpha"
                ></fecolormatrix>
                <feoffset dy="11"></feoffset>
                <fegaussianblur stdDeviation="11"></fegaussianblur>
                <fecolormatrix
                  type="matrix"
                  values="0 0 0 0 0.397708 0 0 0 0 0.47749 0 0 0 0 0.575 0 0 0 0.27 0"
                ></fecolormatrix>
                <feblend
                  mode="normal"
                  in2="BackgroundImageFix"
                  result="effect1_dropShadow_79_1403"
                ></feblend>
                <feblend
                  mode="normal"
                  in="SourceGraphic"
                  in2="effect1_dropShadow_79_1403"
                  result="shape"
                ></feblend>
              </filter>
              <filter
                id="filter2_d_79_1403"
                x="32.1245"
                y="15.0601"
                width="111.376"
                height="129.895"
                filterUnits="userSpaceOnUse"
                color-interpolation-filters="sRGB"
              >
                <feflood
                  flood-opacity="0"
                  result="BackgroundImageFix"
                ></feflood>
                <fecolormatrix
                  in="SourceAlpha"
                  type="matrix"
                  values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                  result="hardAlpha"
                ></fecolormatrix>
                <feoffset dy="11"></feoffset>
                <fegaussianblur stdDeviation="11"></fegaussianblur>
                <fecolormatrix
                  type="matrix"
                  values="0 0 0 0 0.397708 0 0 0 0 0.47749 0 0 0 0 0.575 0 0 0 0.27 0"
                ></fecolormatrix>
                <feblend
                  mode="normal"
                  in2="BackgroundImageFix"
                  result="effect1_dropShadow_79_1403"
                ></feblend>
                <feblend
                  mode="normal"
                  in="SourceGraphic"
                  in2="effect1_dropShadow_79_1403"
                  result="shape"
                ></feblend>
              </filter>
              <lineargradient
                id="paint0_linear_79_1403"
                x1="111.186"
                y1="27.7838"
                x2="111.186"
                y2="107.562"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="#FDFEFF"></stop>
                <stop offset="0.9964" stop-color="#ECF0F5"></stop>
              </lineargradient>
              <lineargradient
                id="paint1_linear_79_1403"
                x1="62.175"
                y1="27.7838"
                x2="62.175"
                y2="107.562"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="#FDFEFF"></stop>
                <stop offset="0.9964" stop-color="#ECF0F5"></stop>
              </lineargradient>
              <lineargradient
                id="paint2_linear_79_1403"
                x1="87.7907"
                y1="24.0733"
                x2="87.7907"
                y2="112.881"
                gradientUnits="userSpaceOnUse"
              >
                <stop stop-color="#FDFEFF"></stop>
                <stop offset="0.9964" stop-color="#ECF0F5"></stop>
              </lineargradient>
            </defs>
          </svg>
        </div>
      </div>
    </div>
    <div class="flex justify-center text-center mt-16">
      <div
        class="bg-white rounded-full px-6 py-2 shadow-sm text-sm text-gray-700"
      >
        Learn more about
        <a
          href="{{route('taxonomies.index')}}"
          target="_blank"
          rel="noopener noopener"
          class="text-blue hover:text-blue-700"
          >Taxonomies</a
        >
      </div>
    </div>
  </div>

@endsection