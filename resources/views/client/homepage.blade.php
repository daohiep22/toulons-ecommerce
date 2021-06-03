@extends('welcome')
@section('content')
    <div class="features_items">
        <!--features_items-->
        <?php
            if($_SERVER['REQUEST_URI'] == '/') echo '<h2 style="margin:5px;" class="title text-center">Tất cả Sản Phẩm</h2>';
            if(strpos($_SERVER['REQUEST_URI'], 'body')) echo '<h2 style="margin:5px;" class="title text-center">Danh sách Body máy ảnh ' . $product[0]->brand . '</h2>';
            if(strpos($_SERVER['REQUEST_URI'], 'lens')) echo '<h2 style="margin:5px;" class="title text-center">Danh sách Ống kính ' . $product[0]->brand . '</h2>';
            if(strpos($_SERVER['REQUEST_URI'], 'brand')) echo '<h2 style="margin:5px;" class="title text-center">Danh sách sản phẩm ' . $product[0]->brand . '</h2>';
        ?>
        <div class="header-bottom"> 
            {{-- thu tu hien thi san pham --}}
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
                                <li><a href="{{URL::to('filtre/' . $type . '/' . $brand . '/' . 'default')}}" <?php if($order == 'default') echo "class='active'" ?>>Thứ tự mặc định</a></li>
                                <li><a href="{{URL::to('filtre/' . $type . '/' . $brand . '/' . 'incr')}}" <?php if($order == 'incr') echo "class='active'" ?>>Giá tăng dần</a></li>
                                <li><a href="{{URL::to('filtre/' . $type . '/' . $brand . '/' . 'desc')}}" <?php if($order == 'desc') echo "class='active'" ?>>Giá giảm dần</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div>{{$product->links()}}</div>
        @foreach ($product as $key => $value)
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <div><a href="{{URL::to('productdetail/' . $value->name)}}"><img src="{{asset('public/upload/product/' . $value->image)}}" alt="" /></a></div>
                            <p height="40px">{{$value->name}}</p>
                            <h5 style="color:red;">{{number_format($value->price_1)}},000đ</h5>
                            <?php
                                if($value->quantity > 0) echo '<a href="' . URL::to('add_to_cart_get/' . $value->product_id) . '" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</a>';
                                else echo '<a class="btn btn-default add-to-cart">Hết hàng</a>'
                            ?>
                            
                        </div>
                    </div>
                    {{-- <div class="choose">
                        <ul class="nav nav-pills nav-justified">
                            <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                            <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
                        </ul>
                    </div> --}}
                </div>
            </div>
        @endforeach
        <div>{{$product->links()}}</div>
    </div>
    <!--features_items-->

    {{-- <div class="category-tab">
        <!--category-tab-->
        <div class="col-sm-12">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tshirt" data-toggle="tab">body máy ảnh</a></li>
                <li><a href="#blazers" data-toggle="tab">ống kính</a></li>
            </ul>
        </div>
        <div class="tab-content">
            <div class="tab-pane fade active in" id="tshirt">
                <div class="col-sm-3">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="images/home/gallery1.jpg" alt="" />
                                <h2>$56</h2>
                                <p>Easy Polo Black Edition</p>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to
                                    cart</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="blazers">
                <div class="col-sm-3">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="images/home/gallery4.jpg" alt="" />
                                <h2>$56</h2>
                                <p>Easy Polo Black Edition</p>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to
                                    cart</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="sunglass">
                <div class="col-sm-3">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="images/home/gallery3.jpg" alt="" />
                                <h2>$56</h2>
                                <p>Easy Polo Black Edition</p>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to
                                    cart</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="kids">
                <div class="col-sm-3">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="images/home/gallery1.jpg" alt="" />
                                <h2>$56</h2>
                                <p>Easy Polo Black Edition</p>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to
                                    cart</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="poloshirt">
                <div class="col-sm-3">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="images/home/gallery2.jpg" alt="" />
                                <h2>$56</h2>
                                <p>Easy Polo Black Edition</p>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to
                                    cart</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!--/category-tab-->
@endsection
