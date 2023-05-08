		<nav id="sidebar" class="sidebar-wrapper">
			
			<!-- Sidebar brand start  -->
			<div class="sidebar-brand">
				<a href="{{ route('home') }}" class="logo">
					<img src="{{ asset('img/logo.png') }}" alt="Le Rouge Admin Dashboard" />
				</a>
			</div>
			<!-- Sidebar brand end  -->

			<!-- Sidebar content start -->
			<div class="sidebar-content">

				<!-- sidebar menu start -->
				<div class="sidebar-menu">
					<ul>
						<li class="header-menu">General</li>
						<li class="sidebar-dropdown active">
							<a href="#">
								<i class="icon-devices_other"></i>
								<span class="menu-text">Dashboards</span>
							</a>
							<div class="sidebar-submenu">
								<ul>
									<li>
										<a href="{{ route('home') }}" class="current-page">Admin Dashboard</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="header-menu">Parametrage globale</li>
						<li>
							<a href="{{ route('parametrages.site')}}">
								<i class="icon-globe"></i>
								<span class="menu-text">Gestion site</span>
							</a>
						</li>
						<li>
							<a href="{{ route('parametrages.batiments')}}">
								<i class="icon-home"></i>
								<span class="menu-text">Gestion batiments</span>
							</a>
						</li>
						<li>
							<a href="pricing.html">
								<i class="icon-file"></i>
								<span class="menu-text">Type poulet</span>
							</a>
						</li>
						<li>
							<a href="user-profile.html">
								<i class="icon-user1"></i>
								<span class="menu-text">Type oeud</span>
							</a>
						</li>
						<li>
							<a href="tasks.html">
								<i class="icon-file"></i>
								<span class="menu-text">Type charge</span>
							</a>
						</li>
						<li>
							<a href="tasks.html">
								<i class="icon-dollar-sign"></i>
								<span class="menu-tlext">Type depense</span>
							</a>
						</li>
						<li class="header-menu">UI Elements</li>
						<li class="sidebar-dropdown">
							<a href="#">
								<i class="icon-list2"></i>
								<span class="menu-text">Accordions</span>
							</a>
							<div class="sidebar-submenu">
								<ul>
									<li>
										<a href="accordion.html">Accordion</a>
									</li>
									<li>
										<a href="accordion-icons.html">Accordion Icons</a>
									</li>
									<li>
										<a href="accordion-arrows.html">Accordion Arrows</a>
									</li>
									<li>
										<a href="accordion-lg.html">Accordion Large</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="sidebar-dropdown">
							<a href="#">
								<i class="icon-disc"></i>
								<span class="menu-text">Buttons</span>
							</a>
							<div class="sidebar-submenu">
								<ul>
									<li>
										<a href="buttons.html">Buttons</a>
									</li>
									<li>
										<a href="button-groups.html">Button Groups</a>
									</li>
									<li>
										<a href="dropdowns.html">Dropdowns</a>
									</li>
								</ul>
							</div>
						</li>
						<li>
							<a href="carousel.html">
								<i class="icon-toll"></i>
								<span class="menu-text">Carousels</span>
							</a>
						</li>
						<li class="sidebar-dropdown">
							<a href="#">
								<i class="icon-star2"></i>
								<span class="menu-text">Components</span>
							</a>
							<div class="sidebar-submenu">
								<ul>
									<li>
										<a href="jumbotron.html">Jumbotron</a>
									</li>
									<li>
										<a href="labels-badges.html">Labels &amp; Badges</a>
									</li>
									<li>
										<a href="list-items.html">List Items</a>
									</li>
									<li>
										<a href="pagination.html">Paginations</a>
									</li>
									<li>
										<a href="progress.html">Progress Bars</a>
									</li>
									<li>
										<a href="pills.html">Pills</a>
									</li>
								</ul>
							</div>
						</li>
						<li>
							<a href="gallery.html">
								<i class="icon-image"></i>
								<span class="menu-text">Gallery</span>
							</a>
						</li>
						<li class="sidebar-dropdown">
							<a href="#">
								<i class="icon-box"></i>
								<span class="menu-text">Grid</span>
							</a>
							<div class="sidebar-submenu">
								<ul>
									<li>
										<a href="grid.html">Grid</a>
									</li>
									<li>
										<a href="grid-doc.html">Grid Doc</a>
									</li>
								</ul>
							</div>
						</li>
						<li>
							<a href="icons.html">
								<i class="icon-timer"></i>
								<span class="menu-text">Icons</span>
							</a>
						</li>
						<li class="sidebar-dropdown">
							<a href="#">
								<i class="icon-image"></i>
								<span class="menu-text">Images</span>
							</a>
							<div class="sidebar-submenu">
								<ul>
									<li>
										<a href="avatars.html">Avatars</a>
									</li>
									<li>
										<a href="media-objects.html">Media Objects</a>
									</li>
									<li>
										<a href="images.html">Thumbnails</a>
									</li>
									<li>
										<a href="text-avatars.html">Text Avatars</a>
									</li>
								</ul>
							</div>
						</li>
						<li>
							<a href="modals.html">
								<i class="icon-credit-card"></i>
								<span class="menu-text">Modals</span>
							</a>
						</li>
						<li>
							<a href="alerts.html">
								<i class="icon-bell"></i>
								<span class="menu-text">Notifications</span>
							</a>
						</li>
						<li>
							<a href="spinners.html">
								<i class="icon-circular-graph"></i>
								<span class="menu-text">Spinners</span>
							</a>
						</li>
						<li>
							<a href="tooltips.html">
								<i class="icon-change_history"></i>
								<span class="menu-text">Tooltips</span>
							</a>
						</li>
						<li>
							<a href="typography.html">
								<i class="icon-sort_by_alpha"></i>
								<span class="menu-text">Typography</span>
							</a>
						</li>
						<li class="header-menu">Tables</li>
						<li class="sidebar-dropdown">
							<a href="#">
								<i class="icon-border_all"></i>
								<span class="menu-text">Tables</span>
							</a>
							<div class="sidebar-submenu">
								<ul>
									<li>
										<a href="custom-tables.html">Custom Tables</a>
									</li>
									<li>
										<a href="default-table.html">Default Table</a>
									</li>
									<li>
										<a href="table-bordered.html">Table Bordered</a>
									</li>
									<li>
										<a href="table-hover.html">Table Hover</a>
									</li>
									<li>
										<a href="table-striped.html">Table Striped</a>
									</li>
									<li>
										<a href="table-small.html">Table Small</a>
									</li>
									<li>
										<a href="table-colors.html">Table Colors</a>
									</li>
								</ul>
							</div>
						</li>
						<li>
							<a href="data-tables.html">
								<i class="icon-border_all"></i>
								<span class="menu-text">Data Tables</span>
							</a>
						</li>
						<li class="header-menu">Graphs &amp; Maps</li>
						<li class="sidebar-dropdown">
							<a href="#">
								<i class="icon-line-graph"></i>
								<span class="menu-text">Apex Graphs</span>
							</a>
							<div class="sidebar-submenu">
								<ul>
									<li>
										<a href="area-graphs.html">Area Charts</a>
									</li>
									<li>
										<a href="bubble.html">Bubble Graphs</a>
									</li>
									<li>
										<a href="bar-graphs.html">Bar Charts</a>
									</li>
									<li>
										<a href="candlestick.html">Candlestick</a>
									</li>
									<li>
										<a href="column-graphs.html">Column Charts</a>
									</li>
									<li>
										<a href="donut-graphs.html">Donut Charts</a>
									</li>
									<li>
										<a href="line-graphs.html">Line Charts</a>
									</li>
									<li>
										<a href="mixed-graphs.html">Mixed Charts</a>
									</li>
									<li>
										<a href="pie-graphs.html">Pie Charts</a>
									</li>
									<li>
										<a href="radial-chart.html">Radial Graph</a>
									</li>
								</ul>
							</div>
						</li>
						<li>
							<a href="morris-graphs.html">
								<i class="icon-tonality"></i>
								<span class="menu-text">Morris Graphs</span>
							</a>
						</li>
						<li class="sidebar-dropdown">
							<a href="#">
								<i class="icon-map2"></i>
								<span class="menu-text">Maps</span>
							</a>
							<div class="sidebar-submenu">
								<ul>
									<li>
										<a href="vector-maps.html">Vector Maps</a>
									</li>
									<li>
										<a href="google-maps.html">Google Maps</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="header-menu">Extra</li>
						<li class="sidebar-dropdown">
							<a href="#">
								<i class="icon-airplay"></i>
								<span class="menu-text">Login</span>
							</a>
							<div class="sidebar-submenu">
								<ul>
									<li>
										<a href="login.html">Login</a>
									</li>
									<li>
										<a href="signup.html">Signup</a>
									</li>
									<li>
										<a href="forgot-pwd.html">Forgot Password</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="sidebar-dropdown">
							<a href="#">
								<i class="icon-alert-triangle"></i>
								<span class="menu-text">Error Pages</span>
							</a>
							<div class="sidebar-submenu">
								<ul>
									<li>
										<a href="error.html">404</a>
									</li>
									<li>
										<a href="error2.html">505</a>
									</li>
								</ul>
							</div>
						</li>
						<li>
							<a href="coming-soon.html">
								<i class="icon-schedule"></i>
								<span class="menu-text">Coming Soon</span>
							</a>
						</li>
					</ul>
				</div>
				<!-- sidebar menu end -->

			</div>
			<!-- Sidebar content end -->
			
		</nav>