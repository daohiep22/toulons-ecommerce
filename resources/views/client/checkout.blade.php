<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <base href="{{ asset('public/user_source') }}/">
    <link rel="shortcut icon" type="image/png" href="logo.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Thanh toán</title>
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
    <header id="header">
        <div class="header_top">
            <!--header_top-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="contactinfo">
                            <ul class="nav nav-pills">
                                <li><a href="#"><i class="fa fa-phone"></i> 0858596196</a></li>
                                <li><a href="#"><i class="fa fa-envelope"></i> daodaihiep22ussr@gmail.com</a></li>
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
    
        <div class="header-middle">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo pull-left">
                            <a href="/"><img style="height:60%;" src="toulonslogo.png" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">
                                <li><a <?php if($_SERVER['REQUEST_URI'] == '/bill') echo 'class="active"' ?> href="checkout.html"><i class="fa fa-crosshairs"></i> Đơn hàng</a></li>
                                <li><a <?php if($_SERVER['REQUEST_URI'] == '/cart') echo 'class="active"' ?> href="{{URL::to('cart')}}"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>
                                <?php
                                    if(session()->get('user_id')) {
                                        echo '<li><a href=' . URL::to('userlogout') . '><i class="fa fa-lock"></i> Đăng xuất</a></li>';
                                    } else {
                                        echo '<li><a href=' . URL::to('login') . '><i class="fa fa-lock"></i> Đăng nhập</a></li>';
                                    }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section id="cart_items">
        <div class="container">
            <div class="review-payment">
                <h2>Thông tin đơn hàng</h2>
            </div>
            <div class="table-responsive cart_info">
                <table class="table table-condensed">
                    <thead>
						<tr class="cart_menu">
							<td class="image"></td>
							<td class="description">Tên mặt hàng</td>
							<td class="price">Đơn giá</td>
							<td class="quantity">Số lượng</td>
							<td class="total">Thành tiền</td>
							<td></td>
						</tr>
					</thead>
                    <tbody>
                        @foreach ($product as $key => $value)
                            <tr>
                                <td class="cart_product" style="width:150px;">
                                    <img width="100px" src="{{'../upload/product/' . $value->image}}" alt="">
                                </td>
                                <td class="cart_description">
                                    <h5>{{$value->name}}</h5>
                                </td>
                                <td class="cart_price">
                                    <h5>{{number_format($value->price)}},000đ</h5>
                                </td>
                                <td class="cart_quantity">
                                    <p>{{$value->quantity}}</p>
                                </td>
                                <td class="cart_total">
                                    <h5 style="color:rgb(163, 22, 22);">{{number_format($value->total)}},000đ</h5>
                                </td>
                                <td class="cart_delete">
                                    <a class="cart_quantity_delete" href="{{URL::to('delete_from_cart/' . $value->bill_id)}}"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        <?php
                            $final = 0;
                            foreach($product as $key => $value) $final += $value->total;
                        ?>
                        <tr>
                            <td colspan="4">&nbsp;</td>
                            <td colspan="2">
                                <table class="table table-condensed total-result">
                                    <tr>
                                        <td>Tổng tiền</td>
                                        <td><?php echo number_format($final) . ',000đ' ?></td>
                                    </tr>
                                    <tr class="shipping-cost">
                                        <td>Phí vận chuyển</td>
                                        <td style="color:green">Free</td>
                                    </tr>
                                    <tr>
                                        <td>Số tiền cần thanh toán</td>
                                        <td style="color:red;"><span><?php echo number_format($final) . ',000đ' ?></span></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="shopper-informations">
                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-8 clearfix">
                        <p>Thông tin người nhận</p>
                        <div class="form-one">
                            <form>
                                <input type="text" placeholder="Tên người nhận" required>
                                <input type="text" placeholder="Địa chỉ Email*" required>
                                <input type="text" placeholder="Địa chỉ nhận hàng" required>
                                <input type="text" placeholder="Số điện thoại" required>
                            </form>
                        </div>
                    </div>
                    <div style="position:relative;"><a style="position:absolute;right:20px;" class="btn btn-default check_out col-sm-3" href="{{URL::to('send_bill/' . $product[0]->order_id)}}">Xác nhận đơn hàng</a></div>
                </div>
            </div>
            <br><br><br><br>
        </div>
    </section>
    <!--/#cart_items-->

    @include('footer')
</body>
