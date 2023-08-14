<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
    <a href="javascript:;" class="menu-link menu toggle">
        <span class="svg-icon menu-icon">
            <i class="fas fa-cogs"></i>
        </span>
        <span class="menu-text text-muted">@lang('pages.Courses')</span>
        <i class="menu-arrow"></i>
    </a>
    <div class="menu-submenu">
        <i class="menu-arrow"></i>
        <ul class="menu-subnav">
            <li class="menu-item" aria-haspopup="true" data-menu-toggle="hover">
                <a href="{{route('index')}}" class="menu-link menu-toggle">
                    <i class="menu-bullet menu-bullet-dot">
                        <span></span>
                    </i>
                    <span class="menu-text">@lang('pages.Show All Courses')</span>
                </a>
            </li>
            <li class="menu-item" aria-haspopup="true" data-menu-toggle="hover">
                <a href="{{route('index')}}" class="menu-link menu-toggle">
                    <i class="menu-bullet menu-bullet-dot">
                        <span></span>
                    </i>
                    <span class="menu-text">@lang('pages.Computer')</span>
                </a>
            </li>
            <li class="menu-item" aria-haspopup="true" data-menu-toggle="hover">
                <a href="{{route('index')}}" class="menu-link menu-toggle">
                    <i class="menu-bullet menu-bullet-dot">
                        <span></span>
                    </i>
                    <span class="menu-text">@lang('pages.Training Courses')</span>
                </a>
            </li>
            <li class="menu-item" aria-haspopup="true" data-menu-toggle="hover">
                <a href="{{route('index')}}" class="menu-link menu-toggle">
                    <i class="menu-bullet menu-bullet-dot">
                        <span></span>
                    </i>
                    <span class="menu-text">@lang('pages.Club Courses')</span>
                </a>
            </li>
        </ul>
    </div>
</li>

<li class="menu-item " aria-haspopup="true">
    <a href="javascript:void(0)" class="menu-link">
        <i class="fas fa-book svg-icon menu-icon"></i>
        <span class="menu-text text-muted">@lang('pages.Books')</span>
    </a>
</li>

<li class="menu-item " aria-haspopup="true">
    <a href="javascript:void(0)" class="menu-link">
        <i class="fas fa-clipboard-list svg-icon menu-icon"></i>
        <span class="menu-text text-muted">@lang('pages.Forms')</span>
    </a>
</li>

<li class="menu-item " aria-haspopup="true">
    <a href="javascript:void(0)" class="menu-link">
        <i class="fas fa-calendar-week svg-icon menu-icon"></i>
        <span class="menu-text text-muted">@lang('pages.Weekly Study Plan')</span>
    </a>
</li>

<li class="menu-item " aria-haspopup="true">
    <a href="javascript:void(0)" class="menu-link">
        <i class="fas fa-calendar-alt svg-icon menu-icon"></i>
        <span class="menu-text text-muted">@lang('pages.Schedule')</span>
    </a>
</li>

<li class="menu-item " aria-haspopup="true">
    <a href="javascript:void(0)" class="menu-link">
        <i class="fas fa-calendar-day svg-icon menu-icon"></i>
        <span class="menu-text text-muted">@lang('pages.Exam Schedule')</span>
    </a>
</li>

<li class="menu-item " aria-haspopup="true">
    <a href="javascript:void(0)" class="menu-link">
        <i class="fas fa-calendar svg-icon menu-icon"></i>
        <span class="menu-text text-muted">@lang('pages.Calendar')</span>
    </a>
</li>

<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
    <a href="javascript:;" class="menu-link menu toggle">
        <i class="fas fa-atlas svg-icon menu-icon"></i>
        <span class="menu-text text-muted">@lang('pages.Digital Library')</span>
        <i class="menu-arrow"></i>
    </a>
    <div class="menu-submenu">
        <i class="menu-arrow"></i>
        <ul class="menu-subnav">
            <li class="menu-item" aria-haspopup="true" data-menu-toggle="hover">
                <a href="{{route('index')}}" class="menu-link menu-toggle">
                    <i class="menu-bullet menu-bullet-dot">
                        <span></span>
                    </i>
                    <span class="menu-text">@lang('pages.Courses Library')</span>
                </a>
            </li>
            <li class="menu-item" aria-haspopup="true" data-menu-toggle="hover">
                <a href="{{route('index')}}" class="menu-link menu-toggle">
                    <i class="menu-bullet menu-bullet-dot">
                        <span></span>
                    </i>
                    <span class="menu-text">@lang('pages.Public Library')</span>
                </a>
            </li>
            <li class="menu-item" aria-haspopup="true" data-menu-toggle="hover">
                <a href="{{route('index')}}" class="menu-link menu-toggle">
                    <i class="menu-bullet menu-bullet-dot">
                        <span></span>
                    </i>
                    <span class="menu-text">@lang('pages.Custom Libraries')</span>
                </a>
            </li>
            <li class="menu-item" aria-haspopup="true" data-menu-toggle="hover">
                <a href="{{route('index')}}" class="menu-link menu-toggle">
                    <i class="menu-bullet menu-bullet-dot">
                        <span></span>
                    </i>
                    <span class="menu-text">@lang('pages.My Files')</span>
                </a>
            </li>
        </ul>
    </div>
</li>

<li class="menu-item " aria-haspopup="true">
    <a href="{{ route('smart-classes.index') }}" class="menu-link">
        <i class="fas fa-chalkboard svg-icon menu-icon"></i>
        <span class="menu-text text-muted">@lang('pages.Virtual Classrooms')</span>
    </a>
</li>

<li class="menu-item " aria-haspopup="true">
    <a href="javascript:void(0)" class="menu-link">
        <i class="fas fa-laptop-house svg-icon menu-icon"></i>
        <span class="menu-text text-muted">@lang('pages.Virtual Meetings')</span>
    </a>
</li>

<li class="menu-item " aria-haspopup="true">
    <a href="javascript:void(0)" class="menu-link">
        <i class="far fa-check-square svg-icon menu-icon"></i>
        <span class="menu-text text-muted">@lang('pages.Evaluations|Surveys')</span>
    </a>
</li>

<li class="menu-item " aria-haspopup="true">
    <a href="javascript:void(0)" class="menu-link">
        <i class="fas fa-star svg-icon menu-icon"></i>
        <span class="menu-text text-muted">@lang('pages.My Score')</span>
    </a>
</li>

<li class="menu-item " aria-haspopup="true">
    <a href="javascript:void(0)" class="menu-link">
        <i class="fas fa-hands-helping svg-icon menu-icon"></i>
        <span class="menu-text text-muted">@lang('pages.Education Partners')</span>
    </a>
</li>

<li class="menu-item " aria-haspopup="true">
    <a href="javascript:void(0)" class="menu-link">
        <i class="fas fa-boxes svg-icon menu-icon"></i>
        <span class="menu-text text-muted">@lang('pages.Contests')</span>
    </a>
</li>

<li class="menu-item " aria-haspopup="true">
    <a href="javascript:void(0)" class="menu-link">
        <i class="fas fa-medal svg-icon menu-icon"></i>
        <span class="menu-text text-muted">@lang('pages.My Award')</span>
    </a>
</li>

<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
    <a href="javascript:;" class="menu-link menu toggle">
        <i class="fas fa-hat-wizard svg-icon menu-icon"></i>
        <span class="menu-text text-muted">@lang('pages.Talent')</span>
        <i class="menu-arrow"></i>
    </a>
    <div class="menu-submenu">
        <i class="menu-arrow"></i>
        <ul class="menu-subnav">
            <li class="menu-item" aria-haspopup="true" data-menu-toggle="hover">
                <a href="{{route('index')}}" class="menu-link menu-toggle">
                    <i class="menu-bullet menu-bullet-dot">
                        <span></span>
                    </i>
                    <span class="menu-text">@lang('pages.Change Students Status')</span>
                </a>
            </li>
            <li class="menu-item" aria-haspopup="true" data-menu-toggle="hover">
                <a href="{{route('index')}}" class="menu-link menu-toggle">
                    <i class="menu-bullet menu-bullet-dot">
                        <span></span>
                    </i>
                    <span class="menu-text">@lang('pages.Talent Service')</span>
                </a>
            </li>
        </ul>
    </div>
</li>

<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
    <a href="javascript:;" class="menu-link menu toggle">
        <span class="svg-icon menu-icon">
            <i class="fas fa-mail-bulk"></i>
        </span>
        <span class="menu-text text-muted">@lang('pages.Mail Box')</span>
        <i class="menu-arrow"></i>
    </a>
    <div class="menu-submenu">
        <i class="menu-arrow"></i>
        <ul class="menu-subnav">
            <li class="menu-item" aria-haspopup="true" data-menu-toggle="hover">
                <a href="{{route('index')}}" class="menu-link menu-toggle">
                    <i class="menu-bullet menu-bullet-dot">
                        <span></span>
                    </i>
                    <span class="menu-text">@lang('pages.Compose')</span>
                </a>
            </li>
            <li class="menu-item" aria-haspopup="true" data-menu-toggle="hover">
                <a href="{{route('index')}}" class="menu-link menu-toggle">
                    <i class="menu-bullet menu-bullet-dot">
                        <span></span>
                    </i>
                    <span class="menu-text">@lang('pages.Inbox')</span>
                </a>
            </li>
            <li class="menu-item" aria-haspopup="true" data-menu-toggle="hover">
                <a href="{{route('index')}}" class="menu-link menu-toggle">
                    <i class="menu-bullet menu-bullet-dot">
                        <span></span>
                    </i>
                    <span class="menu-text">@lang('pages.Sent Messages')</span>
                </a>
            </li>
            <li class="menu-item" aria-haspopup="true" data-menu-toggle="hover">
                <a href="{{route('index')}}" class="menu-link menu-toggle">
                    <i class="menu-bullet menu-bullet-dot">
                        <span></span>
                    </i>
                    <span class="menu-text">@lang('pages.Draft Messages')</span>
                </a>
            </li>
            <li class="menu-item" aria-haspopup="true" data-menu-toggle="hover">
                <a href="{{route('index')}}" class="menu-link menu-toggle">
                    <i class="menu-bullet menu-bullet-dot">
                        <span></span>
                    </i>
                    <span class="menu-text">@lang('pages.Archived Messages')</span>
                </a>
            </li>
            <li class="menu-item" aria-haspopup="true" data-menu-toggle="hover">
                <a href="{{route('index')}}" class="menu-link menu-toggle">
                    <i class="menu-bullet menu-bullet-dot">
                        <span></span>
                    </i>
                    <span class="menu-text">@lang('pages.Trashed Messages')</span>
                </a>
            </li>
        </ul>
    </div>
</li>

<li class="menu-item " aria-haspopup="true">
    <a href="javascript:void(0)" class="menu-link">
        <i class="fas fa-store-alt svg-icon menu-icon"></i>
        <span class="menu-text text-muted">@lang('pages.Canteens')</span>
    </a>
</li>

<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
    <a href="javascript:;" class="menu-link menu toggle">
        <span class="svg-icon menu-icon">
            <i class="fas fa-user-clock"></i>
        </span>
        <span class="menu-text text-muted">@lang('pages.Attendance')</span>
        <i class="menu-arrow"></i>
    </a>
    <div class="menu-submenu">
        <i class="menu-arrow"></i>
        <ul class="menu-subnav">
            <li class="menu-item" aria-haspopup="true" data-menu-toggle="hover">
                <a href="{{route('index')}}" class="menu-link menu-toggle">
                    <i class="menu-bullet menu-bullet-dot">
                        <span></span>
                    </i>
                    <span class="menu-text">@lang('pages.Daily Absence')</span>
                </a>
            </li>
            <li class="menu-item" aria-haspopup="true" data-menu-toggle="hover">
                <a href="{{route('index')}}" class="menu-link menu-toggle">
                    <i class="menu-bullet menu-bullet-dot">
                        <span></span>
                    </i>
                    <span class="menu-text">@lang('pages.Course Absence')</span>
                </a>
            </li>
            <li class="menu-item" aria-haspopup="true" data-menu-toggle="hover">
                <a href="{{route('index')}}" class="menu-link menu-toggle">
                    <i class="menu-bullet menu-bullet-dot">
                        <span></span>
                    </i>
                    <span class="menu-text">@lang('pages.Absence Summary')</span>
                </a>
            </li>
            <li class="menu-item" aria-haspopup="true" data-menu-toggle="hover">
                <a href="{{route('index')}}" class="menu-link menu-toggle">
                    <i class="menu-bullet menu-bullet-dot">
                        <span></span>
                    </i>
                    <span class="menu-text">@lang('pages.Course Absence Summary')</span>
                </a>
            </li>
        </ul>
    </div>
</li>

<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
    <a href="javascript:;" class="menu-link menu toggle">
        <span class="svg-icon menu-icon">
            <i class="fas fa-certificate"></i>
        </span>
        <span class="menu-text text-muted">@lang('pages.Certificates|Letter')</span>
        <i class="menu-arrow"></i>
    </a>
    <div class="menu-submenu">
        <i class="menu-arrow"></i>
        <ul class="menu-subnav">
            <li class="menu-item" aria-haspopup="true" data-menu-toggle="hover">
                <a href="{{route('index')}}" class="menu-link menu-toggle">
                    <i class="menu-bullet menu-bullet-dot">
                        <span></span>
                    </i>
                    <span class="menu-text">@lang('pages.My Certificates')</span>
                </a>
            </li>
            <li class="menu-item" aria-haspopup="true" data-menu-toggle="hover">
                <a href="{{route('index')}}" class="menu-link menu-toggle">
                    <i class="menu-bullet menu-bullet-dot">
                        <span></span>
                    </i>
                    <span class="menu-text">@lang('pages.My Letter')</span>
                </a>
            </li>
        </ul>
    </div>
</li>

<!-- <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
    <a href="javascript:;" class="menu-link menu toggle">
        <span class="svg-icon menu-icon">
            <i class="far fa-id-badge"></i>
        </span>
        <span class="menu-text text-muted">@lang('pages.My Profile')</span>
        <i class="menu-arrow"></i>
    </a>
    <div class="menu-submenu">
        <i class="menu-arrow"></i>
        <ul class="menu-subnav">
            <li class="menu-item" aria-haspopup="true" data-menu-toggle="hover">
                <a href="{{route('index')}}" class="menu-link menu-toggle">
                    <i class="menu-bullet menu-bullet-dot">
                        <span></span>
                    </i>
                    <span class="menu-text">@lang('pages.Public Profile')</span>
                </a>
            </li>
            <li class="menu-item" aria-haspopup="true" data-menu-toggle="hover">
                <a href="{{route('index')}}" class="menu-link menu-toggle">
                    <i class="menu-bullet menu-bullet-dot">
                        <span></span>
                    </i>
                    <span class="menu-text">@lang('pages.My Tag')</span>
                </a>
            </li>
            <li class="menu-item" aria-haspopup="true" data-menu-toggle="hover">
                <a href="{{route('index')}}" class="menu-link menu-toggle">
                    <i class="menu-bullet menu-bullet-dot">
                        <span></span>
                    </i>
                    <span class="menu-text">@lang('pages.Eportofolios')</span>
                </a>
            </li>
            <li class="menu-item" aria-haspopup="true" data-menu-toggle="hover">
                <a href="{{route('index')}}" class="menu-link menu-toggle">
                    <i class="menu-bullet menu-bullet-dot">
                        <span></span>
                    </i>
                    <span class="menu-text">@lang('pages.Timeline')</span>
                </a>
            </li>
        </ul>
    </div>
</li> -->


<li class="menu-item " aria-haspopup="true">
    <a href="javascript:void(0)" class="menu-link">
        <i class="fas fa-tools svg-icon menu-icon"></i>
        <span class="menu-text text-muted">@lang('pages.Support')</span>
    </a>
</li>
