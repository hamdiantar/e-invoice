<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
    <a href="javascript:;" class="menu-link menu-toggle">
        <span class="svg-icon menu-icon">
            <i class="fas fa-cogs"></i>
        </span>
        <span class="menu-text">@lang('pages.Courses')</span>
        <i class="menu-arrow"></i>
    </a>
    <div class="menu-submenu">
        <i class="menu-arrow"></i>
        <ul class="menu-subnav">
            <li class="menu-item" aria-haspopup="true" data-menu-toggle="hover">
                <a href="javascript:void(0)" class="menu-link menu-toggle">
                    <i class="menu-bullet menu-bullet-dot">
                        <span></span>
                    </i>
                    <span class="menu-text">@lang('pages.Show All Courses')</span>
                </a>
                @if(user()->getTeacherSubjects())
                    @foreach(user()->getTeacherSubjects() as $subject)
                        <a href="{{route('teacher.subject.index', $subject->id)}}" class="menu-link menu-toggle">
                            <i class="menu-bullet menu-bullet-dot">
                                <span></span>
                            </i>
                            <span class="menu-text">{{$subject->address}}</span>
                        </a>
                    @endforeach
                @endif
            </li>
            <li class="menu-item" aria-haspopup="true" data-menu-toggle="hover">
                <a href="javascript:void(0)" class="menu-link menu-toggle">
                    <i class="menu-bullet menu-bullet-dot">
                        <span></span>
                    </i>
                    <span class="menu-text text-muted">@lang('pages.Club Courses')</span>
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
        <i class="fas fa-boxes svg-icon menu-icon"></i>
        <span class="menu-text text-muted">@lang('pages.Contests')</span>
    </a>
</li>

<li class="menu-item " aria-haspopup="true">
    <a href="javascript:void(0)" class="menu-link">
        <i class="fas fa-eye svg-icon menu-icon"></i>
        <span class="menu-text text-muted">@lang('pages.Classroom Attention Indicator')</span>
    </a>
</li>

<li class="menu-item " aria-haspopup="true">
    <a href="javascript:void(0)" class="menu-link">
        <i class="fas fa-futbol svg-icon menu-icon"></i>
        <span class="menu-text text-muted">@lang('pages.Summer Clubs')</span>
    </a>
</li>

<li class="menu-item " aria-haspopup="true">
    <a href="javascript:void(0)" class="menu-link">
        <i class="fas fa-book-reader svg-icon menu-icon"></i>
        <span class="menu-text text-muted">@lang('pages.Training Courses')</span>
    </a>
</li>

<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
    <a href="javascript:void(0);" class="menu-link menu toggle">
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

<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
    <a href="javascript:;" class="menu-link menu toggle">
        <span class="svg-icon menu-icon">
            <i class="fas fa-chart-bar"></i>
        </span>
        <span class="menu-text text-muted">@lang('pages.Grade Management')</span>
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
                    <span class="menu-text">@lang('pages.Combined Reports')</span>
                </a>
            </li>
            <li class="menu-item" aria-haspopup="true" data-menu-toggle="hover">
                <a href="{{route('index')}}" class="menu-link menu-toggle">
                    <i class="menu-bullet menu-bullet-dot">
                        <span></span>
                    </i>
                    <span class="menu-text">@lang('pages.Analysis')</span>
                </a>
            </li>
        </ul>
    </div>
</li>

<li class="menu-item " aria-haspopup="true">
    <a href="{{ route('discussion-rooms.index') }}" class="menu-link">
        <i class="far fa-comments svg-icon menu-icon"></i>
        <span class="menu-text">@lang('pages.Discussion Rooms')</span>
    </a>
</li>

<li class="menu-item " aria-haspopup="true">
    <a href="javascript:void(0)" class="menu-link">
        <i class="fas fa-question svg-icon menu-icon"></i>
        <span class="menu-text text-muted">@lang('pages.Questions Bank')</span>
    </a>
</li>

<li class="menu-item " aria-haspopup="true">
    <a href="javascript:void(0)" class="menu-link">
        <i class="fas fa-calendar svg-icon menu-icon"></i>
        <span class="menu-text text-muted">@lang('pages.Calendar')</span>
    </a>
</li>

<li class="menu-item " aria-haspopup="true">
    <a href="{{ route('smart-classes.index') }}" class="menu-link">
        <i class="fas fa-chalkboard svg-icon menu-icon"></i>
        <span class="menu-text">@lang('pages.Virtual Classrooms')</span>
    </a>
</li>

<li class="menu-item " aria-haspopup="true">
    <a href="javascript:void(0)" class="menu-link">
        <i class="fas fa-hourglass-half svg-icon menu-icon"></i>
        <span class="menu-text text-muted">@lang('pages.IB Unit Planning')</span>
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
        <i class="fas fa-user-clock svg-icon menu-icon"></i>
        <span class="menu-text text-muted">@lang('pages.Absence Report')</span>
    </a>
</li>

<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
    <a href="javascript:;" class="menu-link menu toggle">
        <i class="far fa-copy svg-icon menu-icon"></i>
        <span class="menu-text text-muted">@lang('pages.Eportofolios')</span>
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
                    <span class="menu-text">@lang('pages.Eportofolios')</span>
                </a>
            </li>
            <li class="menu-item" aria-haspopup="true" data-menu-toggle="hover">
                <a href="{{route('index')}}" class="menu-link menu-toggle">
                    <i class="menu-bullet menu-bullet-dot">
                        <span></span>
                    </i>
                    <span class="menu-text">@lang('pages.Review Students Eportofolios')</span>
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

<li class="menu-item " aria-haspopup="true">
    <a href="javascript:void(0)" class="menu-link">
        <i class="fas fa-laptop-house svg-icon menu-icon"></i>
        <span class="menu-text text-muted">@lang('pages.Virtual Meetings')</span>
    </a>
</li>

<li class="menu-item " aria-haspopup="true">
    <a href="javascript:void(0)" class="menu-link">
        <i class="fas fa-hand-holding svg-icon menu-icon"></i>
        <span class="menu-text text-muted">@lang('pages.Parents Requests')</span>
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
        <i class="fas fa-handshake svg-icon menu-icon"></i>
        <span class="menu-text text-muted">@lang('pages.Education Partners')</span>
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
        <i class="fas fa-clipboard-list svg-icon menu-icon"></i>
        <span class="menu-text text-muted">@lang('pages.Forms')</span>
    </a>
</li>

<li class="menu-item " aria-haspopup="true">
    <a href="javascript:void(0)" class="menu-link">
        <i class="fas fa-user-tag svg-icon menu-icon"></i>
        <span class="menu-text text-muted">@lang('pages.My Behaviors')</span>
    </a>
</li>

<li class="menu-item " aria-haspopup="true">
    <a href="javascript:void(0)" class="menu-link">
        <i class="fas fa-users-cog svg-icon menu-icon"></i>
        <span class="menu-text text-muted">@lang('pages.HR')</span>
    </a>
</li>

<li class="menu-item " aria-haspopup="true">
    <a href="javascript:void(0)" class="menu-link">
        <i class="fas fa-tools svg-icon menu-icon"></i>
        <span class="menu-text text-muted">@lang('pages.Support')</span>
    </a>
</li>
