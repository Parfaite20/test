<!--start top header-->
<header class="top-header">
    <nav class="container gap-3 navbar navbar-expand-xl w-100 navbar-dark">
      <a class="navbar-brand d-none d-xl-inline" href="/"><img src="{{asset('lien/images/logo.webp')}}" class="logo-img" alt=""></a>
      <a class="mobile-menu-btn d-inline d-xl-none" href="javascript:;" data-bs-toggle="offcanvas"
        data-bs-target="#offcanvasNavbar">
        <i class="bi bi-list"></i>
      </a>
      <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar">
        <div class="offcanvas-header">
          <div class="offcanvas-logo"><img src="assets/images/logo.webp" class="logo-img" alt="">
          </div>
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body primary-menu">
          <ul class="gap-1 navbar-nav justify-content-start flex-grow-1">
            <li class="nav-item">
              <a class="nav-link" href="/">Accueil</a>
            </li>
            {{--<li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="tv-shows.html"
                data-bs-toggle="dropdown">
                Categories
              </a>
              <div class="dropdown-menu dropdown-large-menu">
                <div class="row">
                  <div class="col-12 col-xl-4">
                    <h6 class="large-menu-title">Fashion</h6>
                    <ul class="list-unstyled">
                      <li><a href="javascript:;">Casual T-Shirts</a>
                      </li>
                      <li><a href="javascript:;">Formal Shirts</a>
                      </li>
                      <li><a href="javascript:;">Jackets</a>
                      </li>
                      <li><a href="javascript:;">Jeans</a>
                      </li>
                      <li><a href="javascript:;">Dresses</a>
                      </li>
                      <li><a href="javascript:;">Sneakers</a>
                      </li>
                      <li><a href="javascript:;">Belts</a>
                      </li>
                      <li><a href="javascript:;">Sports Shoes</a>
                      </li>
                    </ul>
                  </div>
                  <!-- end col-3 -->
                  <div class="col-12 col-xl-4">
                    <h6 class="large-menu-title">Electronics</h6>
                    <ul class="list-unstyled">
                      <li><a href="javascript:;">Mobiles</a>
                      </li>
                      <li><a href="javascript:;">Laptops</a>
                      </li>
                      <li><a href="javascript:;">Macbook</a>
                      </li>
                      <li><a href="javascript:;">Televisions</a>
                      </li>
                      <li><a href="javascript:;">Lighting</a>
                      </li>
                      <li><a href="javascript:;">Smart Watch</a>
                      </li>
                      <li><a href="javascript:;">Galaxy Phones</a>
                      </li>
                      <li><a href="javascript:;">PC Monitors</a>
                      </li>
                    </ul>
                  </div>
                  <!-- end col-3 -->
                  <div class="col-12 col-xl-4 d-none d-xl-block">
                    <div class="pramotion-banner1">
                      <img src="assets/images/menu-img.webp" class="img-fluid" alt="" />
                    </div>
                  </div>
                  <!-- end col-3 -->
                </div>
                <!-- end row -->
              </div>
            </li>--}}
            {{--<li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
                Shop
              </a>
              <ul class="dropdown-menu">
			   	<li><a class="dropdown-item" href="{{route('cont.shop')}}">Shop</a></li>
                <li><a class="dropdown-item" href="/cart">Cart</a></li>
                <li><a class="dropdown-item" href="#">Wishlist</a></li>
                <li><a class="dropdown-item" href="#">Product Details</a></li>
                <li><a class="dropdown-item" href="/checkout">Payment Method</a></li>
                <li><a class="dropdown-item" href="#">Billing Details</a></li>
              </ul>
            </li>--}}
            <li class="nav-item">
              <a class="nav-link" href="/blog">Biblioteque</a>
            </li>

            {{--<li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
                Parcourir
              </a>
              <ul class="dropdown-menu">
                @foreach($categorie as $cate)
                <li><a class="dropdown-item" href="blog-post.html">{{$cate->name}}</a></li>
                <li><a class="dropdown-item" href="blog-read.html">Blog Read</a></li>
                @endforeach
              </ul>
            </li>--}}
          </ul>
        </div>
      </div>
      <ul class="flex-row navbar-nav secondary-menu">
        <li class="nav-item">
          <a class="nav-link dark-mode-icon" href="javascript:;">
            <div class="mode-icon">
              <i class="bi bi-moon"></i>
            </div>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="bi bi-search"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="bi bi-suit-heart"></i></a>
        </li>
        @if(Route::has('login'))
				@auth
          @if(Auth::user()->utype === 'ADM')
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
                            <i class="bi bi-person-circle"></i> ({{Auth::user()->name}})
							</a>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="{{route('admin.dashboard')}}">Dashboard</a></li>
								<li><a class="dropdown-item" href="#">My Orders</a></li>
								<li><a class="dropdown-item" href="#">My Profile</a></li>
								<li><a class="dropdown-item" href="#">Edit Profile</a></li>
								<li><a class="dropdown-item" href="#">Addresses</a></li>
								<hr class="dropdown-divider">
								<li><a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">Se deconnecter</a></li>
								<form id='logout-form' method='post' action='{{route('logout')}}'>
									@csrf
								</form>
							</ul>
						</li>
					@else
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
                            <i class="bi bi-person-circle"></i> ({{Auth::user()->name}})
							</a>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="{{route('user.dashboard')}}">Dashboard</a></li>
								<li><a class="dropdown-item" href="#">My Orders</a></li>
								<li><a class="dropdown-item" href="#">My Profile</a></li>
								<li><a class="dropdown-item" href="#">Edit Profile</a></li>
								<li><a class="dropdown-item" href="#">Addresses</a></li>
								<hr class="dropdown-divider">
								<li><a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">Se deconnecter</a></li>
								<form id='logout-form' method='post' action='{{route('logout')}}'>
									@csrf
								</form>
							</ul>
						</li>
					@endif
				@else
					<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
                                <i class="bi bi-person-circle"></i>
							</a>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="{{route('login')}}">Login</a></li>
                				<li><a class="dropdown-item" href="{{route('register')}}">Register</a></li>
							</ul>
						</li>
				@endif
			@endif
      </ul>
    </nav>
  </header>
  <!--end top header-->
