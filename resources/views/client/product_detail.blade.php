<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <base href="{{ asset('public/user_source') }}/">
    <link rel="shortcut icon" type="image/png" href="logo.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>{{ $product->name }}</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head>

<body>
    @include('header')

    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>Danh mục sản phẩm</h2>
                        <div class="panel-group category-products" id="accordian">
                            <!--category-productsr-->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
                                            <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                            Body máy ảnh
                                        </a>
                                    </h4>
                                </div>
                                <div id="sportswear" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul>
                                            <li style="margin-bottom:10px"><a
                                                    href="{{ URL::to('filtre/body/Canon/' . $order) }}"
                                                    style="font-size:14px;"><span
                                                        class="pull-right">({{ $count_body['Canon'] }})</span>Canon</a>
                                            </li>
                                            <li style="margin-bottom:10px"><a
                                                    href="{{ URL::to('filtre/body/Nikon/' . $order) }}"
                                                    style="font-size:14px;"><span
                                                        class="pull-right">({{ $count_body['Nikon'] }})</span>Nikon</a>
                                            </li>
                                            <li style="margin-bottom:10px"><a
                                                    href="{{ URL::to('filtre/body/Sony/' . $order) }}"
                                                    style="font-size:14px;"><span
                                                        class="pull-right">({{ $count_body['Sony'] }})</span>Sony</a>
                                            </li>
                                            <li style="margin-bottom:10px"><a
                                                    href="{{ URL::to('filtre/body/Fujifilm/' . $order) }}"
                                                    style="font-size:14px;"><span
                                                        class="pull-right">({{ $count_body['Fujifilm'] }})</span>Fujifilm</a>
                                            </li>
                                            <li style="margin-bottom:10px"><a
                                                    href="{{ URL::to('filtre/body/Olympus/' . $order) }}"
                                                    style="font-size:14px;"><span
                                                        class="pull-right">({{ $count_body['Olympus'] }})</span>Olympus</a>
                                            </li>
                                            <li style="margin-bottom:10px"><a
                                                    href="{{ URL::to('filtre/body/Leica/' . $order) }}"
                                                    style="font-size:14px;"><span
                                                        class="pull-right">({{ $count_body['Leica'] }})</span>Leica</a>
                                            </li>
                                            <li style="margin-bottom:10px"><a
                                                    href="{{ URL::to('filtre/body/Hasselblad/' . $order) }}"
                                                    style="font-size:14px;"><span
                                                        class="pull-right">({{ $count_body['Hasselblad'] }})</span>Hasselblad</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordian" href="#mens">
                                            <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                            Ống kính
                                        </a>
                                    </h4>
                                </div>
                                <div id="mens" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul>
                                            <li style="margin-bottom:10px"><a
                                                    href="{{ URL::to('filtre/lens/Canon/' . $order) }}"
                                                    style="font-size:14px;"><span
                                                        class="pull-right">({{ $count_lens['Canon'] }})</span>Canon</a>
                                            </li>
                                            <li style="margin-bottom:10px"><a
                                                    href="{{ URL::to('filtre/lens/Nikon/' . $order) }}"
                                                    style="font-size:14px;"><span
                                                        class="pull-right">({{ $count_lens['Nikon'] }})</span>Nikon</a>
                                            </li>
                                            <li style="margin-bottom:10px"><a
                                                    href="{{ URL::to('filtre/lens/Sony/' . $order) }}"
                                                    style="font-size:14px;"><span
                                                        class="pull-right">({{ $count_lens['Sony'] }})</span>Sony</a>
                                            </li>
                                            <li style="margin-bottom:10px"><a
                                                    href="{{ URL::to('filtre/lens/Fujifilm/' . $order) }}"
                                                    style="font-size:14px;"><span
                                                        class="pull-right">({{ $count_lens['Fujifilm'] }})</span>Fujifilm</a>
                                            </li>
                                            <li style="margin-bottom:10px"><a
                                                    href="{{ URL::to('filtre/lens/Sigma/' . $order) }}"
                                                    style="font-size:14px;"><span
                                                        class="pull-right">({{ $count_lens['Sigma'] }})</span>Sigma</a>
                                            </li>
                                            <li style="margin-bottom:10px"><a
                                                    href="{{ URL::to('filtre/lens/Tamron/' . $order) }}"
                                                    style="font-size:14px;"><span
                                                        class="pull-right">({{ $count_lens['Tamron'] }})</span>Tamron</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/category-products-->

                        <div class="brands_products">
                            <!--brands_products-->
                            <h2>Thương hiệu</h2>
                            <div class="brands-name">
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href="{{ URL::to('filtre/brand/Canon/' . $order) }}"> <span
                                                class="pull-right">({{ $count_brand['Canon'] }})</span>Canon</a></li>
                                    <li><a href="{{ URL::to('filtre/brand/Nikon/' . $order) }}"> <span
                                                class="pull-right">({{ $count_brand['Nikon'] }})</span>Nikon</a></li>
                                    <li><a href="{{ URL::to('filtre/brand/Sony/' . $order) }}"> <span
                                                class="pull-right">({{ $count_brand['Sony'] }})</span>Sony</a></li>
                                    <li><a href="{{ URL::to('filtre/brand/Fujifilm/' . $order) }}"> <span
                                                class="pull-right">({{ $count_brand['Fujifilm'] }})</span>Fujifilm</a>
                                    </li>
                                    <li><a href="{{ URL::to('filtre/brand/Olympus/' . $order) }}"> <span
                                                class="pull-right">({{ $count_brand['Olympus'] }})</span>Olympus</a>
                                    </li>
                                    <li><a href="{{ URL::to('filtre/brand/Leica/' . $order) }}"> <span
                                                class="pull-right">({{ $count_brand['Leica'] }})</span>Leica</a></li>
                                    <li><a href="{{ URL::to('filtre/brand/Hasselblad/' . $order) }}"> <span
                                                class="pull-right">({{ $count_brand['Hasselblad'] }})</span>Hasselblad</a>
                                    </li>
                                    <li><a href="{{ URL::to('filtre/brand/Sigma/' . $order) }}"> <span
                                                class="pull-right">({{ $count_brand['Sigma'] }})</span>Sigma</a></li>
                                    <li><a href="{{ URL::to('filtre/brand/Tamron/' . $order) }}"> <span
                                                class="pull-right">({{ $count_brand['Tamron'] }})</span>Tamron</a></li>
                                </ul>
                            </div>
                        </div>
                        <!--/brands_products-->

                        <div class="price-range">
                            <!--price-range-->
                            <h2>Price Range</h2>
                            <div class="well text-center">
                                <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600"
                                    data-slider-step="5" data-slider-value="[250,450]" id="sl2"><br />
                                <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
                            </div>
                        </div>
                        <!--/price-range-->

                        <div class="shipping text-center">
                            <!--shipping-->
                            <img src="images/home/shipping.jpg" alt="" />
                        </div>
                        <!--/shipping-->

                    </div>
                </div>

                <div class="col-sm-9 padding-right">
                    <div class="product-details">
                        <div class="col-sm-5">
                            <div class="view-product">
                                <img src="{{'../upload/product/' . $product->image}}" alt="" />
                            </div>
                            {{-- <div id="similar-product" class="carousel slide" data-ride="carousel">

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <a href=""><img src="images/product-details/similar1.jpg" alt=""></a>
                                        <a href=""><img src="images/product-details/similar2.jpg" alt=""></a>
                                        <a href=""><img src="images/product-details/similar3.jpg" alt=""></a>
                                    </div>
                                    <div class="item">
                                        <a href=""><img src="images/product-details/similar1.jpg" alt=""></a>
                                        <a href=""><img src="images/product-details/similar2.jpg" alt=""></a>
                                        <a href=""><img src="images/product-details/similar3.jpg" alt=""></a>
                                    </div>
                                    <div class="item">
                                        <a href=""><img src="images/product-details/similar1.jpg" alt=""></a>
                                        <a href=""><img src="images/product-details/similar2.jpg" alt=""></a>
                                        <a href=""><img src="images/product-details/similar3.jpg" alt=""></a>
                                    </div>

                                </div>

                                <!-- Controls -->
                                <a class="left item-control" href="#similar-product" data-slide="prev">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                                <a class="right item-control" href="#similar-product" data-slide="next">
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div> --}}

                        </div>
                        <div class="col-sm-7">
                            <div class="product-information">
                                <!--/product-information-->
                                {{-- <img src="images/product-details/new.jpg" class="newarrival" alt="" /> --}}
                                <span style="font-size:25px;font-weight:bold;">{{$product->name}}</span>
                                <div style="color:red;font-weight:bold;font-size:30px">{{number_format($product->price_1)}},000đ</div><br>
                                <form action="{{URL::to('add_to_cart/' . $product->product_id)}}" method="post">
                                    @csrf
                                    {{-- <span class="form-group">
                                        Số lượng: <input type="number" class="form-control" name="price_1" id="bodyPrice1" placeholder="Standard Price">
                                    </span> --}}
                                    Số lượng: <input type="number" value="1" id="quantity" name="quantity" max="{{$product->quantity}}" min="1"><br><br>
                                    <p><b>Thương hiệu: </b>{{$product->brand}}</p>
                                    <p><b>Tình trạng: </b>
                                    <?php
                                        if($product->quantity != 0) {
                                            echo "<span style='color:green'>Còn hàng</span><p>";
                                            echo '<p><b>Số lượng còn trong kho: ' . $product->quantity . '</b></p>';
                                        } else  {
                                            echo "<br style='color:red'>Hết hàng</p>";
                                        }
                                    ?>
                                    <button type="submit" style="margin:10px;top:10px;" class="btn btn-fefault cart">
                                        <i class="fa fa-shopping-cart"></i>
                                        Thêm vào giỏ hàng
                                    </button>
                                </form>
                                {{-- <a href=""><img src="images/product-details/share.png" class="share img-responsive"
                                        alt="" /></a> --}}
                            </div>
                            <!--/product-information-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('footer')

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
