<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <base href="{{ asset('public/user_source') }}/">
    <link rel="shortcut icon" type="image/png" href="logo.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Giỏ hàng</title>
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

    <section id="cart_items">
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
                                    <h4 class="cart_total_price">{{number_format($value->total)}},000đ</h4>
                                </td>
                                <td class="cart_delete">
                                    <a class="cart_quantity_delete" href="{{URL::to('delete_from_cart/' . $value->bill_id)}}"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                        @endforeach
					</tbody>
				</table>
			</div>
            <div style="color:rgb(192, 7, 7);font-weight:bold;font-size:25px;right:0px;position:absolute;right:10px;">Tổng thanh toán: 
            <?php
                $final = 0;
                foreach($product as $key => $value) $final += $value->total;
                echo number_format($final) . ',000đ';
            ?>
            </div><br><br>
            <div style="position:relative;"><a style="position:absolute;right:20px;" class="btn btn-default check_out" href="{{URL::to('checkout')}}">Tiếp tục thanh toán</a></div>
            <br><br>
		</div>
        
	</section> <!--/#cart_items-->
    <br><br>
    @include('footer')
</body>