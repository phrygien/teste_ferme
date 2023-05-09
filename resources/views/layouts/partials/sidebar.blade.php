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
								<i>
								<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 30 30" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
									<path stroke-linecap="round" stroke-linejoin="round" d="M6.115 5.19l.319 1.913A6 6 0 008.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 002.288-4.042 1.087 1.087 0 00-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 01-.98-.314l-.295-.295a1.125 1.125 0 010-1.591l.13-.132a1.125 1.125 0 011.3-.21l.603.302a.809.809 0 001.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 001.528-1.732l.146-.292M6.115 5.19A9 9 0 1017.18 4.64M6.115 5.19A8.965 8.965 0 0112 3c1.929 0 3.716.607 5.18 1.64" />
								</svg>

								</i>
								<span class="menu-text">{{ __('Gestion site')}}</span>
							</a>
						</li>
						<li>
							<a href="{{ route('parametrages.batiments')}}">
							<i>
								<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 30 30" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
								<path stroke-linecap="round" stroke-linejoin="round" d="M8.25 21v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21m0 0h4.5V3.545M12.75 21h7.5V10.75M2.25 21h1.5m18 0h-18M2.25 9l4.5-1.636M18.75 3l-1.5.545m0 6.205l3 1m1.5.5l-1.5-.5M6.75 7.364V3h-3v18m3-13.636l10.5-3.819" />
								</svg>
								</i>
								<span class="menu-text">{{ __('Gestion batiment')}}</span>
							</a>
						</li>
						<li>
							<a href="{{ route('parametrages.type_poulets')}}">
								<i>
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" fill="currentColor" class="w-5 h-5">
								<path d="M5.127 3.502L5.25 3.5h9.5c.041 0 .082 0 .123.002A2.251 2.251 0 0012.75 2h-5.5a2.25 2.25 0 00-2.123 1.502zM1 10.25A2.25 2.25 0 013.25 8h13.5A2.25 2.25 0 0119 10.25v5.5A2.25 2.25 0 0116.75 18H3.25A2.25 2.25 0 011 15.75v-5.5zM3.25 6.5c-.04 0-.082 0-.123.002A2.25 2.25 0 015.25 5h9.5c.98 0 1.814.627 2.123 1.502a3.819 3.819 0 00-.123-.002H3.25z" />
								</svg>

								</i>
								<span class="menu-text">{{ __('Type de poulet')}}</span>
							</a>
						</li>
						<li>
							<a href="{{ route('parametrages.type_oeufs')}}">
								<i>
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" fill="currentColor" class="w-5 h-5">
								<path fill-rule="evenodd" d="M5.5 3A2.5 2.5 0 003 5.5v2.879a2.5 2.5 0 00.732 1.767l6.5 6.5a2.5 2.5 0 003.536 0l2.878-2.878a2.5 2.5 0 000-3.536l-6.5-6.5A2.5 2.5 0 008.38 3H5.5zM6 7a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
								</svg>
								</i>
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