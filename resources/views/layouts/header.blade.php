<header id="m_header" class="m-grid__item    m-header "  m-minimize-offset="200" m-minimize-mobile-offset="200" >
	<div class="m-container m-container--fluid m-container--full-height">
		<div class="m-stack m-stack--ver m-stack--desktop">		
            <div class="m-stack__item m-brand  m-brand--skin-light ">
                <div class="m-stack m-stack--ver m-stack--general">
                    <div class="m-stack__item m-stack__item--middle m-brand__logo">
                        <a href="{{ route('home') }}" class="m-brand__logo-wrapper">
                            <img alt="" src="{{ url('assets/demo/demo6/media/img/logo/logo.png') }}"/>
                        </a>  
                        <h3 class="m-header__title">Project Management</h3>
                    </div>
                    <div class="m-stack__item m-stack__item--middle m-brand__tools">			
                            <a href="javascript:;" id="m_aside_left_offcanvas_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
                                <span></span>
                            </a>
                            <a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
                                <span></span>
                            </a>
                        <a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
                            <i class="flaticon-more"></i>
                        </a>
                    </div>
                </div>
            </div>
			<div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">
				<div class="m-header__title">
					<h3 class="m-header__title-text">Project Management</h3>
				</div>
                <div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general">
                    <div class="m-stack__item m-stack__item--middle m-dropdown m-dropdown--arrow m-dropdown--large m-dropdown--mobile-full-width m-dropdown--align-right m-dropdown--skin-light m-header-search m-header-search--expandable m-header-search--skin-light" id="m_quicksearch" m-quicksearch-mode="default">
                    <!--BEGIN: Search Form -->
                        <form class="m-header-search__form">
                            <div class="m-header-search__wrapper">
                                <span class="m-header-search__icon-search" id="m_quicksearch_search">
                                    <i class="flaticon-search"></i>
                                </span>
                                <span class="m-header-search__input-wrapper">
                                    <input autocomplete="off" type="text" name="q" class="m-header-search__input" value="" placeholder="Search..." id="m_quicksearch_input">
                                </span>
                                <span class="m-header-search__icon-close" id="m_quicksearch_close">
                                    <i class="la la-remove"></i> 
                                </span>
                                <span class="m-header-search__icon-cancel" id="m_quicksearch_cancel">
                                    <i class="la la-remove"></i>
                                </span>
                            </div>
                        </form>  
                    <!--END: Search Form -->
                    </div>	
                    <div class="m-stack__item m-topbar__nav-wrapper">
                        <ul class="m-topbar__nav m-nav m-nav--inline">
                            <li class="m-nav__item m-topbar__user-profile  m-dropdown m-dropdown--medium m-dropdown--arrow  m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light" m-dropdown-toggle="click">
                                <a href="#" class="m-nav__link m-dropdown__toggle">
                                    <span class="m-topbar__userpic m--hide">
                                        @if (Auth::user()->avatar)
                                            <img src="{{ url('uploads/' . Auth::user()->avatar) . '.png' }}" class="m--img-rounded m--marginless m--img-centered" alt="" />
                                        @else
                                            <img src="{{ url('assets/app/media/img/users/user4.jpg') }}" class="m--img-rounded m--marginless m--img-centered" alt="" />
                                        @endif
                                    </span>
                                    <span class="m-nav__link-icon m-topbar__usericon">
                                        <span class="m-nav__link-icon-wrapper"><i class="flaticon-user-ok"></i></span>
                                    </span>
                                    <span class="m-topbar__username m--hide">Nick</span>					
                                </a>
                                <div class="m-dropdown__wrapper">
                                    <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                    <div class="m-dropdown__inner">
                                        <div class="m-dropdown__header m--align-center">
                                            <div class="m-card-user m-card-user--skin-light">
                                                <div class="m-card-user__pic">
                                                    @if (Auth::user()->avatar)
                                                        <img src="{{ url('uploads/' . Auth::user()->avatar) . '.png' }}" class="m--img-rounded m--marginless m--img-centered" alt="" />
                                                    @else
                                                        <img src="{{ url('assets/app/media/img/users/user4.jpg') }}" class="m--img-rounded m--marginless m--img-centered" alt="" />
                                                    @endif
                                                </div>
                                                <div class="m-card-user__details">
                                                    <span class="m-card-user__name m--font-weight-500">{{ Auth::user()->fullname }}</span>
                                                    <a href="#" class="m-card-user__email m--font-weight-300 m-link">{{ Auth::user()->email }}</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="m-dropdown__body">
                                            <div class="m-dropdown__content">
                                                <ul class="m-nav m-nav--skin-light">
                                                    <li class="m-nav__section m--hide">
                                                        <span class="m-nav__section-text">Section</span>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="{{ route('profile') }}" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-profile-1"></i>
                                                            <span class="m-nav__link-title">  
                                                                <span class="m-nav__link-wrap">      
                                                                    <span class="m-nav__link-text">My Profile</span>
                                                                    <!--<span class="m-nav__link-badge">
                                                                        <span class="m-badge m-badge--success">2</span>
                                                                    </span> --> 
                                                                </span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__separator m-nav__separator--fit">
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a class="btn m-btn--pill btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none">
                                                            {{ csrf_field() }}
                                                        </form>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
		</div>
	</div>
</header>