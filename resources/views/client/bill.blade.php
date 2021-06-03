<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <base href="{{ asset('public/user_source') }}/">
    <link rel="shortcut icon" type="image/png" href="logo.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Danh sách đơn hàng</title>
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

    @if($product && $status)
    <section id="cart_items">
        @foreach ($product as $key => $value)
            <div class="container" style="position:relative;">
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
                            @foreach ($value as $key2 => $value2)
                                <tr>
                                    <td class="cart_product" style="width:150px;">
                                        <img width="100px" src="{{'../upload/product/' . $value2['image']}}" alt="">
                                    </td>
                                    <td class="cart_description">
                                        <h5>{{$value2['name']}}</h5>
                                    </td>
                                    <td class="cart_price">
                                        <h5>{{number_format($value2['price'])}},000đ</h5>
                                    </td>
                                    <td class="cart_quantity">
                                        <p>{{$value2['quantity']}}</p>
                                    </td>
                                    <td class="cart_total">
                                        <h4 class="cart_total_price">{{number_format($value2['total'])}},000đ</h4>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div style="color:rgb(192, 7, 7);font-weight:bold;font-size:25px;right:0px;position:absolute;right:10px;">Tổng thanh toán: 
                <?php
                    $final = 0;
                    foreach($value as $key2 => $value2) $final += $value2['total'];
                    echo number_format($final) . ',000đ';
                ?>
                </div><br><br>
                <?php
                    if($status[$key] == 2) echo '<div style="color:green;font-weight:bold;font-size:25px;right:0px;position:absolute;right:10px;">Đặt hàng thành công</div>';
                    if($status[$key] == 1) echo '<div style="color:rgb(192, 7, 7);font-weight:bold;font-size:25px;right:0px;position:absolute;right:10px;">Đang chờ xử lí</div>';
                ?>
                <br><br><br><br><br><br><br><br>
                {{-- <br><br>
                <div style="position:relative;"><a style="position:absolute;right:20px;" class="btn btn-default check_out" href="{{URL::to('checkout')}}">Tiếp tục thanh toán</a></div>
                <br><br> --}}
            </div>
        @endforeach
        
	</section> <!--/#cart_items-->
    @endif

    @include('footer')
</body>