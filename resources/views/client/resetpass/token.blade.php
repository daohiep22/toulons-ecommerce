<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <base href="{{ asset('public/user_source') }}/">
    <link rel="shortcut icon" type="image/png" href="logo.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Toulons Écommerce</title>
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
    @include('headerlogin')
    <section class="login_box_area section-margin">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="login_box_img">
                        <div class="hover">
                            <h4>Quên mật khẩu?</h4>
							<p>Đừng lo! Để tôi giúp bạn đặt mật khẩu mới nhé!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login_form_inner">
                        <h3>Nhập mã xác thực</h3>
                        <h6>Mã xác thực là 1 số có 6 chữ số được gửi vào hòm thư của bạn</h6>
                        <?php
                            $message = session()->get('message');
                            if($message) {
                                echo '<div style="color:red;text-align:center;font-weight:bold;">' . $message . '</div>';
                                session()->put('message', null);
                            }
                        ?>
                        <form class="row login_form" action="{{URL::to('/resetpost-token')}}" id="register_form" method="post">
                            @csrf
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="name" name="token" placeholder="Mã xác thực"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Mã xác thực'" required>
                            </div>
                            <div class="col-md-12 form-group">
                                <button type="submit" value="submit"
                                    class="button button-register w-100">Tiếp theo</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('footer')
</body>
