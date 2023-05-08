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
								<span class="menu-text">{{ __('Tbleau de bord')}}</span>
							</a>
							<div class="sidebar-submenu">
								<ul>
									<li>
										<a href="{{ route('home') }}" class="current-page">{{ __('Admin plateforme')}}</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="header-menu">{{ __('Parametrages globale ')}}</li>
						<li>
							<a href="{{ route('parametrages.site')}}">
								<i class="icon-globe"></i>
								<span class="menu-text">{{ __('Gestion site')}}</span>
							</a>
						</li>
						<li>
							<a href="{{ route('parametrages.batiments')}}">
								<i class="icon-home"></i>
								<span class="menu-text">{{ __('Gestion batiment')}}</span>
							</a>
						</li>
						<li>
							<a href="{{ route('parametrages.type_poulets')}}">
								<i class="icon-file"></i>
								<span class="menu-text">{{ __('Type de poulet')}}</span>
							</a>
						</li>
						<li>
							<a href="">
								<i class="icon-user1"></i>
								<span class="menu-text">{{ __("Type d'oeuf ")}}</span>
							</a>
						</li>
						<li>
							<a href="">
								<i class="icon-file"></i>
								<span class="menu-text">{{ __('Catégorie depense')}}</span>
							</a>
						</li>
						<li>
							<a href="">
								<i class="icon-dollar-sign"></i>
								<span class="menu-tlext">{{ __('Type depense')}}</span>
							</a>
						</li>
						<li class="header-menu">Gestion entrée</li>

					</ul>
				</div>
				<!-- sidebar menu end -->

			</div>
			<!-- Sidebar content end -->
			
		</nav>