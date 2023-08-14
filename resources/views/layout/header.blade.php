<div id="kt_header" class="header header-fixed">
    <!--begin::Container-->
    <div class="container-fluid d-flex align-items-stretch justify-content-between">
        <!--begin::Header Menu Wrapper-->
        <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
             <!--begin::Header Menu-->
            <div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">
                <!--begin::Header Nav-->
                <ul class="menu-nav">
                </ul>
                <!--end::Header Nav-->
            </div>
            <!--end::Header Menu-->
        </div>
        <!--end::Header Menu Wrapper-->
        <!--begin::Topbar-->
        <div class="topbar" style="align-items: center;">
            <!--begin::Search-->
  <i class="fa fa-bell"></i>         
      <!--end::Search-->
            <!--begin::Notifications-->
      

            <div class="dropdown">
{{--                <!--begin::Toggle-->--}}
{{--                <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">--}}
{{--                    <div class="btn btn-icon btn-clean btn-dropdown btn-lg mr-1">--}}
{{--                        @if (app()->getLocale() == "ar")--}}
{{--                        <img class="h-20px w-20px rounded-sm" src="{{ asset("assets/media/svg/flags/008-saudi-arabia.svg") }}" alt="">--}}
{{--                        @else--}}
{{--                        <img class="h-20px w-20px rounded-sm" src="{{ asset("assets/media/svg/flags/226-united-states.svg") }}" alt="">--}}
{{--                        @endif--}}

{{--                    </div>--}}
{{--                </div>--}}
                <!--end::Toggle-->
                <!--begin::Dropdown-->
{{--                <div class="dropdown-menu p-0 m-0 dropdown-menu-anim-up dropdown-menu-sm dropdown-menu-right">--}}
{{--                    <!--begin::Nav-->--}}
{{--                    <ul class="navi navi-hover py-4">--}}
{{--                        <!--begin::Item-->--}}
{{--                        <li class="navi-item">--}}
{{--                            <a href="{{ route("language", ['lang'=>'en']) }}" class="navi-link">--}}
{{--                                <span class="symbol symbol-20 mr-3">--}}
{{--                                    <img src="{{ asset("assets/media/svg/flags/226-united-states.svg") }}" alt="">--}}
{{--                                </span>--}}
{{--                                <span class="navi-text">English</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <!--end::Item-->--}}
{{--                        <!--begin::Item-->--}}
{{--                        <li class="navi-item active">--}}
{{--                            <a href="{{ route("language", ['lang'=>'ar']) }}" class="navi-link">--}}
{{--                                <span class="symbol symbol-20 mr-3">--}}
{{--                                    <img src="{{ asset("assets/media/svg/flags/008-saudi-arabia.svg") }}" alt="">--}}
{{--                                </span>--}}
{{--                                <span class="navi-text">العربية</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <!--end::Item-->--}}
{{--                    </ul>--}}
{{--                    <!--end::Nav-->--}}
{{--                </div>--}}
                <!--end::Dropdown-->
            </div>
            <!--end::Languages-->
            <!--begin::User-->
            <div class="topbar-item">
                <div class="btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">
                    <span class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">@lang('common.Hi'),</span>
                    <span class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">{{ user()->full_name }}</span>
                    <span class="symbol symbol-lg-35 symbol-25 symbol-light-success">
                        <span class="symbol-label font-size-h5 font-weight-bold">{{ nameLogo(user()->last_name) }}</span>
                    </span>
                </div>
            </div>
            <!--end::User-->
        </div>
        <!--end::Topbar-->
    </div>
    <!--end::Container-->
</div>
