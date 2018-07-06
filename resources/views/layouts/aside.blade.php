<button class="m-aside-left-close  m-aside-left-close--skin-light " id="m_aside_left_close_btn">
	<i class="la la-close"></i>
</button>
<div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-light ">
	<!-- BEGIN: Aside Menu -->
	<div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-light m-aside-menu--submenu-skin-light" data-menu-vertical="true" m-menu-scrollable="1" m-menu-dropdown-timeout="500">
		<ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
				<a href="javascript:;" class="m-menu__link m-menu__toggle">
					<i class="m-menu__link-icon flaticon-layers"></i>
					<span class="m-menu__link-text">Projects</span>
					<i class="m-menu__ver-arrow la la-angle-right"></i>
				</a>
				<div class="m-menu__submenu ">
					<span class="m-menu__arrow"></span>
					<ul class="m-menu__subnav">
						<li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
							<a href="{{ route('projects') }}" class="m-menu__link ">
								<i class="m-menu__link-bullet m-menu__link-bullet--dot">
									<span></span>
								</i>
								<span class="m-menu__link-text">Dashboard</span>
							</a>
						</li>
						<li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
							<a href="inner.html" class="m-menu__link ">
								<i class="m-menu__link-bullet m-menu__link-bullet--dot">
									<span></span>
								</i>
								<span class="m-menu__link-text">Tasks</span>
							</a>
						</li>
						<li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
							<a href="inner.html" class="m-menu__link ">
								<i class="m-menu__link-bullet m-menu__link-bullet--dot">
									<span></span>
								</i>
								<span class="m-menu__link-text">Timesheets</span>
							</a>
						</li>
					</ul>
				</div>
			</li>
			
			<li class="m-menu__section ">
				<h4 class="m-menu__section-text">Reports</h4>
				<i class="m-menu__section-icon flaticon-more-v3"></i>
			</li>
            
			<li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
				<a href="inner.html" class="m-menu__link ">
					<i class="m-menu__link-icon flaticon-graphic"></i>
					<span class="m-menu__link-text">Accounting</span>
				</a>
			</li>
            
            @role('administrator')
                <li class="m-menu__section ">
                    <h4 class="m-menu__section-text">Administrator</h4>
                    <i class="m-menu__section-icon flaticon-more-v3"></i>
                </li>

                <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
                    <a href="{{ route('groups') }}" class="m-menu__link ">
                        <i class="m-menu__link-icon flaticon-users"></i>
                        <span class="m-menu__link-text">Groups Manager</span>
                    </a>
                </li>
                <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
                    <a href="{{ route('groups') }}" class="m-menu__link ">
                        <i class="m-menu__link-icon flaticon-user"></i>
                        <span class="m-menu__link-text">Users Manager</span>
                    </a>
                </li>
            @endrole
		</ul>
	</div>
	<!-- END: Aside Menu -->
</div>