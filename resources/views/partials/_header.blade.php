            <!-- HEADER -->
        <header>
            <!-- TOP HEADER -->
            <div id="top-header">
                <div class="container">
                    <ul class="header-links pull-left">
                        <li><a href="https://wasap.my/+60163851670"><i class="fa fa-phone"></i> +03-95-51-84</a></li>
                        <li><a href="#"><i class="fa fa-envelope-o"></i> ezrent@gmail.com</a></li>
                        <li><a href="https://goo.gl/maps/RgCewD5yjfvdK76s7"><i class="fa fa-map-marker"></i> IIUM Gombak</a></li>
                    </ul>
                    <ul class="header-links pull-right">
                        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
                    </ul>
                </div>
            </div>
            <!-- /TOP HEADER -->

            <!-- MAIN HEADER -->
            <div id="header">
                <!-- container -->
                <div class="container">
                    <!-- row -->
                    <div class="row">
                        <!-- LOGO -->
                        <div class="col-md-3">
                            <div class="header-logo">
                                <a href={{url ('/')}} class="logo">
                                    <img src="./img/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- /LOGO -->

                        <!-- SEARCH BAR -->
                        <div class="col-md-6">
                            <div class="header-search">
                                <form>
                                    <select class="input-select">
                                        <option value="0">All Categories</option>
                                        <option value="1">Category 01</option>
                                        <option value="1">Category 02</option>
                                    </select>
                                    <input class="input" placeholder="Search here">
                                    <button class="search-btn">Search</button>
                                </form>
                            </div>
                        </div>
                        <!-- /SEARCH BAR -->

                        <!-- ACCOUNT -->
                        <div class="col-md-3 clearfix">
                            <div class="header-ctn">
                                <!-- Wishlist -->
                                @guest
                                <div>
                                    <a href={{url('/login')}}>
                                        <i class="fa fa-comment"></i>
                                        <span>Messages</span>
                                        <div class="qty">3</div>
                                    </a>
                                </div>
                                @endguest
                                @auth
                                <div>
                                    <a href={{url('/login')}}>
                                        <i class="fa fa-comment"></i>
                                        <span>Messages</span>
                                        <div class="qty">3</div>
                                    </a>
                                </div>
                                @endauth
                                <!-- /Wishlist -->

                                <!-- Cart -->
                                @guest
                                <div class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                        <i class="fa fa-user-circle"></i>
                                        <a href={{url ('/login')}}>
                                        <span>My Profile</span>
                                    </a>
                                </div>
                                @endguest
                                @auth
                                <div class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                        <i class="fa fa-user-circle"></i>
                                        <a href={{url ('/owner')}}>
                                        <span>My Profile</span>
                                    </a>
                                </div>
                                @endauth
                                <!-- /Cart -->

                                <!-- Menu Toogle -->
                                <div class="menu-toggle">
                                    <a href="#">
                                        <i class="fa fa-bars"></i>
                                        <span>Menu</span>
                                    </a>
                                </div>
                                <!-- /Menu Toogle -->
                            </div>
                        </div>
                        <!-- /ACCOUNT -->
                    </div>
                    <!-- row -->
                </div>
                <!-- container -->
            </div>
            <!-- /MAIN HEADER -->
        </header>
        <!-- /HEADER -->