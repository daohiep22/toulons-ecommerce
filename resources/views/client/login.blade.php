<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <base href="{{ asset('public/user_source') }}/">
    <link rel="shortcut icon" type="image/png" href="logo.png"/>
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
							<h4>Tạo tài khoản Toulons Compte</h4>
							<p>Chỉ với một tài khoản duy nhất để bạn khám phá thêm những sản phẩm tiếp theo của Toulons République</p>
							<a class="button button-account" href="{{URL::to('register')}}">Gia nhập Toulons République</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="login_form_inner">
						<h3>Đăng nhập</h3>
                        <?php
                            $message = session()->get('message');
                            if($message) {
                                echo '<div style="color:red;text-align:center;font-weight:bold;">' . $message . '</div>';
                                session()->put('message', null);
                            }
                        ?>
						<form class="row login_form" action="{{URL::to('signin')}}" method="post" id="contactForm" >
							@csrf
                            <div class="col-md-12 form-group">
								<input type="text" class="form-control" id="name" name="user_email" placeholder="Địa chỉ Gmail" onfocus="this.placeholder = ''" onblur="this.placeholder = 'gmail'">
							</div>
							<div class="col-md-12 form-group">
								<input type="password" class="form-control" id="name" name="user_password" placeholder="Mật khẩu" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Mật khẩu'">
							</div>
							{{-- <div class="col-md-12 form-group">
								<div class="creat_account">
									<input type="checkbox" id="f-option2" name="selector">
									<label for="f-option2">Keep me logged in</label>
								</div>
							</div> --}}
							<div class="col-md-12 form-group">
								<button type="submit" value="submit" class="button button-login w-100">Đăng nhập</button>
								<a href="{{URL::to('forgot-password')}}">Quên mật khẩu?</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

    @include('footer')
</body>