<header id="header">
    <!--header-->
    <div class="header_top">
        <!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a><i class="fa fa-phone"></i> 0858596196</a></li>
                            <li><a><i class="fa fa-envelope"></i> daodaihiep22ussr@gmail.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            <?php
                                if(session()->get('user_id')) {
                                    echo '<li style="margin-top:9px;">Xin chào ' . session()->get('user_name') . ' </li>';
                                }
                            ?>
                            <li><a href="https://www.facebook.com/daohiep.cccp"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.instagram.com/daohiep_22/"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="https://www.flickr.com/photos/186493712@N05/"><i class="fa fa-flickr"></i></a></li>
                            <li><a href="https://www.youtube.com/channel/UCRH8iP9oeB8fSc4-SdB4IyA"><i class="fa fa-play"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/header_top-->

    <div class="header-middle">
        <!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                        <a href="/"><img style="width:60%;" src="toulonslogo.png" alt="" /></a>
                    </div>
                    {{-- <div class="btn-group pull-right">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                USA
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Canada</a></li>
                                <li><a href="#">UK</a></li>
                            </ul>
                        </div>

                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                DOLLAR
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Canadian Dollar</a></li>
                                <li><a href="#">Pound</a></li>
                            </ul>
                        </div>
                    </div> --}}
                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
                            {{-- <li><a href="#"><i class="fa fa-user"></i> Tài khoản</a></li> --}}
                            <li><a <?php if($_SERVER['REQUEST_URI'] == '/bill') echo 'class="active"' ?> href="{{URL::to('bill')}}"><i class="fa fa-crosshairs"></i> Đơn hàng</a></li>
                            <li><a <?php if($_SERVER['REQUEST_URI'] == '/cart') echo 'class="active"' ?> href="{{URL::to('cart')}}"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>
                            <?php
                                if(session()->get('user_id')) {
                                    echo '<li><a href=' . URL::to('userlogout') . '><i class="fa fa-sign-out"></i> Đăng xuất</a></li>';
                                } else {
                                    echo '<li><a href=' . URL::to('login') . '><i class="fa fa-sign-in"></i> Đăng nhập</a></li>';
                                }
                            ?>
                            <li><a <?php if($_SERVER['REQUEST_URI'] == '/register') echo 'class="active"' ?> href="{{URL::to('register')}}"><i class="fa fa-lock"></i> Đăng kí</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/header-middle-->

    <div class="header-bottom">
        <!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="/" class="active">Home</a></li>
                            {{-- <li class="dropdown"><a href="#">Danh mục sản phẩm<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="shop.html">Body máy ảnh</a></li>
                                    <li><a href="product-details.html">Ống kính</a></li>
                                    <li><a href="checkout.html">Flash</a></li>
                                    <li><a href="cart.html">Tripod-Gimbal</a></li>
                                    <li><a href="login.html">Kính lọc</a></li>
                                    <li><a href="login.html">Tủ chống ẩm</a></li>
                                    <li><a href="login.html">Kính lọc</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="blog.html">Blog List</a></li>
                                    <li><a href="blog-single.html">Blog Single</a></li>
                                </ul>
                            </li>
                            <li><a href="404.html">404</a></li>
                            <li><a href="contact-us.html">Contact</a></li> --}}
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div id="wrap">
                        <form action="{{URL::to('search')}}" autocomplete="on" method="post">
                            @csrf
                            <input id="search" name="search" type="text" placeholder="Bạn cần tìm gì?">
                            <input id="search_submit" value="Rechercher" type="submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/header-bottom-->
</header>
