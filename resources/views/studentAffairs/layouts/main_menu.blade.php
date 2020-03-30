             {{-- notes --}}
    {{-- //has-sub class for arrow --}}
    
<div data-active-color="black" data-background-color="man-of-steel" data-image="http://localhost/mnagy/ERP_school/public/admin/app-assets/img/sidebar-bg/03.jpg" class="app-sidebar  @if(app()->getLocale() == 'ar') text-right @endif">
    <!-- main menu header-->
    <!-- Sidebar Header starts-->
    <div class="sidebar-header">
        <div class="logo clearfix">
            <a href="index-2.html" class="logo-text float-left">
            <div class="logo-img"><img src="{{url('/')}}/admin/image/{{$setting->logo}}" width="32px" /></div><span class="text align-middle">{{$setting['school_name_'.app()->getLocale()]}}</span></a>
            
            <a
                id="sidebarClose" href="javascript:;" class="nav-close d-block d-md-block d-lg-none d-xl-none"><i class="ft-x"></i></a>
        </div>
    </div>
    <!-- Sidebar Header Ends-->
    <!-- / main menu header-->
    <!-- main menu content-->
    <div class="sidebar-content">
        <div class="nav-container">
            <ul id="main-menu-navigation" data-menu="menu-navigation" data-scroll-to-active="true" class="navigation navigation-main">
                <li class="has-sub nav-item"><a href="#"><i class="ft-home"></i><span data-i18n="" class="menu-title">Dashboard</span><span class="tag badge badge-pill badge-danger float-right mr-1 mt-1">2</span></a>
                    <ul class="menu-content">
                        <li ><a href="dashboard1.html" class="menu-item">Dashboard1</a>
                        </li>
                        <li><a href="dashboard2.html" class="menu-item">Dashboard2</a>
                        </li>
                    </ul>
                </li>


                {{-- // admins --}}
                @if(auth()->guard('admin')->user()->can('admins') | auth()->guard('admin')->user()->can('create admin')
                |auth()->guard('admin')->user()->can('edit admin')|auth()->guard('admin')->user()->can('destroy admin')
                |auth()->guard('admin')->user()->can('show admin')|auth()->guard('admin')->user()->hasRole('super admin'))
                <li class=" nav-item"><a href="{{route('admins.index')}}"><i class="ft-user"></i><span data-i18n="" class="menu-title">{{__('lang.admins')}}</span></a>
                    {{-- <ul class="menu-content">
                    <li><a href="{{route('admins.index')}}" class="menu-item">{{__('lang.admins')}}</a>
                        </li>
                    <li><a href="{{route('admins.create')}}" class="menu-item">{{__('lang.new_admin')}}</a>
                        </li>
                    </ul> --}}
                </li>
                @endif

                {{-- // stages --}}
                @if(auth()->guard('admin')->user()->can('stages') | auth()->guard('admin')->user()->can('create stage')
                |auth()->guard('admin')->user()->can('edit stage')|auth()->guard('admin')->user()->can('destroy stage')
                |auth()->guard('admin')->user()->can('show stage')|auth()->guard('admin')->user()->hasRole('super admin'))
                <li class="nav-item"><a href="{{route('stage.index')}}"><i class="ft-home"></i><span data-i18n="" class="menu-title">{{__('lang.stages')}}</span></a>
                    {{-- <ul class="menu-content">
                    <li><a href="{{route('stage.index')}}" class="menu-item">{{__('lang.stages')}}</a>
                        </li>
                    <li><a href="{{route('stage.create')}}" class="menu-item">{{__('lang.new_stage')}}</a>
                        </li>
                    </ul> --}}
                </li>
                                            @endif

                {{-- // levels --}}
                @if(auth()->guard('admin')->user()->can('levels') | auth()->guard('admin')->user()->can('create level')
                |auth()->guard('admin')->user()->can('edit level')|auth()->guard('admin')->user()->can('destroy level')
                |auth()->guard('admin')->user()->can('show level')|auth()->guard('admin')->user()->hasRole('super admin'))
                <li class=" nav-item"><a href="{{route('level.index')}}"><i class="ft-home"></i><span data-i18n="" class="menu-title">{{__('lang.levels')}}</span></a>
                    {{-- <ul class="menu-content">
                    <li><a href="{{route('level.index')}}" class="menu-item">{{__('lang.levels')}}</a>
                        </li>
                    <li><a href="{{route('level.create')}}" class="menu-item">{{__('lang.new_level')}}</a>
                        </li>
                    </ul> --}}
                </li>
                                            @endif

                {{-- // Classes --}}
                @if(auth()->guard('admin')->user()->can('classes') | auth()->guard('admin')->user()->can('create class')
                |auth()->guard('admin')->user()->can('edit class')|auth()->guard('admin')->user()->can('destroy class')
                |auth()->guard('admin')->user()->can('show class')|auth()->guard('admin')->user()->hasRole('super admin'))
                <li class=" nav-item"><a href="{{route('class.index')}}"><i class="ft-home"></i><span data-i18n="" class="menu-title">{{__('lang.classes')}}</span></a>
                    {{-- <ul class="menu-content">
                    <li><a href="{{route('class.index')}}" class="menu-item">{{__('lang.classes')}}</a>
                        </li>
                    <li><a href="{{route('class.create')}}" class="menu-item">{{__('lang.new_class')}}</a>
                        </li>
                    </ul> --}}
                </li>
                                            @endif

                {{-- // std_affairs --}}
                @if(auth()->guard('admin')->user()->can('students') | auth()->guard('admin')->user()->can('create student')
                |auth()->guard('admin')->user()->can('edit student')|auth()->guard('admin')->user()->can('destroy student')
                |auth()->guard('admin')->user()->can('show student')|auth()->guard('admin')->user()->hasRole('super admin'))
            <li class=" nav-item"><a href="{{route('student.index')}}"><i class="ft-home"></i><span data-i18n="" class="menu-title">{{__('lang.stds')}}</span></a>
                {{-- <ul class="menu-content">
                <li><a href="{{route('student.index')}}" class="menu-item">{{__('lang.stds')}}</a>
                    </li>
                <li><a href="{{route('student.create')}}" class="menu-item">{{__('lang.new_std')}}</a>
                    </li>
                </ul> --}}
            </li>
                                            @endif

                    {{-- // nationality --}}
                @if(auth()->guard('admin')->user()->can('nationalities') | auth()->guard('admin')->user()->can('create nationality')
                |auth()->guard('admin')->user()->can('edit nationality')|auth()->guard('admin')->user()->can('destroy nationality')
                |auth()->guard('admin')->user()->can('show nationality')|auth()->guard('admin')->user()->hasRole('super admin'))
                    <li class=" nav-item"><a href="{{route('nationality.index')}}"><i class="ft-home"></i><span data-i18n="" class="menu-title">{{__('lang.nationalities')}}</span></a>
                    {{-- <ul class="menu-content">
                    <li><a href="{{route('nationality.index')}}" class="menu-item">{{__('lang.nationalities')}}</a>
                        </li>
                    <li><a href="{{route('nationality.create')}}" class="menu-item">{{__('lang.new_nationality')}}</a>
                        </li>
                    </ul> --}}
                </li>
                                            @endif

                   {{-- // place --}}
                                @if(auth()->guard('admin')->user()->can('places') | auth()->guard('admin')->user()->can('create place')
                |auth()->guard('admin')->user()->can('edit place')|auth()->guard('admin')->user()->can('destroy place')
                |auth()->guard('admin')->user()->can('show place')|auth()->guard('admin')->user()->hasRole('super admin'))
                   <li class=" nav-item"><a href="{{route('place.index')}}"><i class="ft-home"></i><span data-i18n="" class="menu-title">{{__('lang.places')}}</span></a>
                    {{-- <ul class="menu-content">
                    <li><a href="{{route('place.index')}}" class="menu-item">{{__('lang.places')}}</a>
                        </li>
                    <li><a href="{{route('place.create')}}" class="menu-item">{{__('lang.new_place')}}</a>
                        </li>
                    </ul> --}}
                </li>
                                            @endif

                       {{-- // region --}}
                                @if(auth()->guard('admin')->user()->can('regions') | auth()->guard('admin')->user()->can('create region')
                |auth()->guard('admin')->user()->can('edit region')|auth()->guard('admin')->user()->can('destroy region')
                |auth()->guard('admin')->user()->can('show region')|auth()->guard('admin')->user()->hasRole('super admin'))
            <li class=" nav-item"><a href="{{route('region.index')}}"><i class="ft-home"></i><span data-i18n="" class="menu-title">{{__('lang.regions')}}</span></a>
                {{-- <ul class="menu-content">
                <li><a href="{{route('region.index')}}" class="menu-item">{{__('lang.regions')}}</a>
                    </li>
                <li><a href="{{route('region.create')}}" class="menu-item">{{__('lang.new_region')}}</a>
                    </li>
                </ul> --}}
            </li>
                                            @endif

                            {{-- // academicyear --}}
                                @if(auth()->guard('admin')->user()->can('academicyears') | auth()->guard('admin')->user()->can('create academicyear')
                |auth()->guard('admin')->user()->can('edit academicyear')|auth()->guard('admin')->user()->can('destroy academicyear')
                |auth()->guard('admin')->user()->can('show academicyear')|auth()->guard('admin')->user()->hasRole('super admin'))
                   <li class=" nav-item"><a href="{{route('academicyear.index')}}"><i class="ft-home"></i><span data-i18n="" class="menu-title">{{__('lang.ac_years')}}</span></a>
                    {{-- <ul class="menu-content">
                    <li><a href="{{route('academicyear.index')}}" class="menu-item">{{__('lang.ac_years')}}</a>
                        </li>
                    <li><a href="{{route('academicyear.create')}}" class="menu-item">{{__('lang.new_ac_year')}}</a>
                        </li>
                    </ul> --}}
                </li>
                                            @endif

        
                       {{-- // setting --}}
                                @if(auth()->guard('admin')->user()->can('settings') | auth()->guard('admin')->user()->can('create setting')
                |auth()->guard('admin')->user()->can('edit setting')|auth()->guard('admin')->user()->can('destroy setting')
                |auth()->guard('admin')->user()->can('show setting')|auth()->guard('admin')->user()->hasRole('super admin'))
            <li class=" nav-item"><a href="{{route('setting.edit',1)}}"><i class="ft-home"></i><span data-i18n="" class="menu-title">{{__('lang.setting')}}</span></a></li>
                                            @endif
                
                                        {{-- // permissions --}}
                                @if(auth()->guard('admin')->user()->can('permissions') | auth()->guard('admin')->user()->can('create permission')
                |auth()->guard('admin')->user()->can('edit permission')|auth()->guard('admin')->user()->can('destroy permission')
                |auth()->guard('admin')->user()->can('show permission')|auth()->guard('admin')->user()->hasRole('super admin'))
                                        <li class="nav-item"><a href="{{route('permission.index')}}"><i class="ft-home"></i><span data-i18n="" class="menu-title">{{__('lang.permissions')}}</span></a>
{{--                                             
                                            <ul class="menu-content">
                                            <li><a href="{{route('permission.index')}}" class="menu-item">{{__('lang.permissions')}}</a>
                                                </li>
                                            <li><a href="{{route('permission.create')}}" class="menu-item">{{__('lang.new_permission')}}</a>
                                                </li>
                                            </ul> --}}
                                            </li>
                                            @endif

            </ul>
        </div>
    </div>
    <!-- main menu content-->
    <div class="sidebar-background"></div>
    <!-- main menu footer-->
    <!-- include includes/menu-footer-->
    <!-- main menu footer-->
</div>