@extends('admin_layout')
@section('admin_content')
    <h3>Welcome to TOULONS ÉCOMMERCE</h3>
    <br>
    @if($product && $status)
    <section id="cart_items">
        @foreach ($product as $key => $value)
            <div class="table-agile-info">
                <div class="panel panel-default">
                    <div class="table-responsive">
                        <table class="table table-striped b-t b-light">
                            <thead>
                                <tr class="cart_menu">
                                    <td class="image"></td>
                                    <td class="description">Tên mặt hàng</td>
                                    <td class="description">Người đặt</td>
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
                                        <td class="cart_description">
                                            <h5>{{$value2['username']}}</h5>
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
                    {{-- <br><br>
                    <div style="position:relative;"><a style="position:absolute;right:20px;" class="btn btn-default check_out" href="{{URL::to('checkout')}}">Tiếp tục thanh toán</a></div>
                    <br><br> --}}
                </div>
            </div>
            <div style="color:rgb(192, 7, 7);font-weight:bold;font-size:20px;position:absolute;right:50px;">Tổng thanh toán: 
            <?php
                $final = 0;
                foreach($value as $key2 => $value2) $final += $value2['total'];
                echo number_format($final) . ',000đ';
            ?>
            </div><br><br>
            <?php
                if($status[$key] == 2) echo '<div style="color:green;font-weight:bold;font-size:20px;position:absolute;right:50px;">Đặt hàng thành công</div>';
                if($status[$key] == 1) echo '<div style="color:rgb(192, 7, 7);font-weight:bold;font-size:25px;right:0px;position:absolute;right:50px;">Đang chờ xử lí</div>' . '<br><br>' .
                                            '<button class="btn" style="position:absolute;right:50px;"><a href="' . URL::to('confirm/' . $key) . '">Xác nhận đơn hàng</a></button>';
            ?>
            <br><br>
            {{-- <button class="btn" style="position:absolute;right:50px;"><a href='{{URL::to('confirm/' . $key)}}'>Xác nhận đơn hàng</a></button> --}}
            <br><br><br>
        @endforeach
        
	</section>
    @endif

@endsection