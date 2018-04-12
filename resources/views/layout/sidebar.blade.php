<section>
	<!-- Left Sidebar -->
	<aside id="leftsidebar" class="sidebar">
		<!-- User Info -->
		<div class="user-info">
			<div class="image">
				<img src="images/user.png" width="48" height="48" alt="User" />
			</div>
			<div class="info-container">
				<div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">John Doe</div>
				<div class="email">john.doe@example.com</div>
				<div class="btn-group user-helper-dropdown">
					<i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
					<ul class="dropdown-menu pull-right">
						<li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
						<li role="seperator" class="divider"></li>
						<li><a href="{{ route('login') }}"><i class="material-icons">input</i>Sign Out</a></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- #User Info -->
		<!-- Menu -->
		<div class="menu">
			<ul class="list">
				<li class="header">MENU UTAMA</li>
				<li class="{{ Route::is('beranda') ? 'active' : '' }}">
					<a href="{{ route('beranda') }}">
						<i class="material-icons">home</i>
						<span>Beranda</span>
					</a>
				</li>
				<li class="{{ Route::is('pendaftaran*') ? 'active' : '' }}">
					<a href="javascript:void(0);" class="menu-toggle">
						<i class="material-icons">assignment</i>
						<span>Pendaftaran</span>
					</a>
					<ul class="ml-menu">
						<li class="{{ Route::is('pendaftaran-restoran*') ? 'active' : '' }}">
							<a href="{{ route('pendaftaran-restoran') }}">Restoran</a>
						</li>
						<li class="{{ Route::is('pendaftaran-pbb*') ? 'active' : '' }}">
							<a href="{{ route('pendaftaran-pbb') }}">PBB</a>
						</li>
						<li class="{{ Route::is('pendaftaran-hotel') ? 'active' : '' }}">
							<a href="{{ route('pendaftaran-hotel') }}">Hotel</a>
						</li>
					</ul>
				</li>
				<li class="{{ Route::is('pelaporan-restoran*') ? 'active' : '' }}">
					<a href="javascript:void(0);" class="menu-toggle">
						<i class="material-icons">description</i>
						<span>Pelaporan</span>
					</a>
					<ul class="ml-menu">
						<li class="{{ Route::is('pelaporan-restoran*') ? 'active' : '' }}">
							<a href="{{ route('pelaporan-restoran') }}">Restoran</a>
						</li>
						<li>
							<a href="">PBB</a>
						</li>
						<li>
							<a href="">Hotel</a>
						</li>
					</ul>
				</li>
				<li class="{{ Route::is('pembayaran-restoran*') ? 'active' : '' }}{{ Route::is('transaksi-pembayaran') ? 'active' : '' }}{{ Route::is('bukti-pembayaran') ? 'active' : '' }}">
					<a href="javascript:void(0);" class="menu-toggle">
						<i class="material-icons">receipt</i>
						<span>Pembayaran</span>
					</a>
					<ul class="ml-menu">
						<li class="{{ Route::is('pembayaran-restoran*') ? 'active' : '' }}">
							<a href="{{ route('pembayaran-restoran') }}">Restoran</a>
						</li>
						<li>
							<a href="">PBB</a>
						</li>
						<li>
							<a href="">Hotel</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
		<!-- #Menu -->
		<!-- Footer -->
		<div class="legal">
			<div class="copyright">
				&copy; 2018 <a href="javascript:void(0);">Solusindo</a>.
			</div>
			<div class="version">
				<b>Version: </b> Dev Mode
			</div>
		</div>
		<!-- #Footer -->
	</aside>
	<!-- #END# Left Sidebar -->
</section>