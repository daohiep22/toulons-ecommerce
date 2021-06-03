<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use Illuminate\Support\Facades\DB;
use App\Models\body;
use App\Models\lens;
use App\Models\User;
use App\Models\bill;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Mail;
use App\Mail\myMail;

session_start();

class clientController extends Controller
{
    private function countBody($product) {
        $count_body['Canon'] = $product->where('type', 1)->where('brand', 'Canon')->count();
        $count_body['Nikon'] = $product->where('type', 1)->where('brand', 'Nikon')->count();
        $count_body['Sony'] = $product->where('type', 1)->where('brand', 'Sony')->count();
        $count_body['Fujifilm'] = $product->where('type', 1)->where('brand', 'Fujifilm')->count();
        $count_body['Olympus'] = $product->where('type', 1)->where('brand', 'Olympus')->count();
        $count_body['Leica'] = $product->where('type', 1)->where('brand', 'Leica')->count();
        $count_body['Hasselblad'] = $product->where('type', 1)->where('brand', 'Hasselblad')->count();
        return $count_body;
    }

    private function countLens($product) {
        $count_lens['Canon'] = $product->where('type', 2)->where('brand', 'Canon')->count();
        $count_lens['Nikon'] = $product->where('type', 2)->where('brand', 'Nikon')->count();
        $count_lens['Sony'] = $product->where('type', 2)->where('brand', 'Sony')->count();
        $count_lens['Fujifilm'] = $product->where('type', 2)->where('brand', 'Fujifilm')->count();
        $count_lens['Sigma'] = $product->where('type', 2)->where('brand', 'Sigma')->count();
        $count_lens['Tamron'] = $product->where('type', 2)->where('brand', 'Tamron')->count();
        return $count_lens;
    }

    private function countBrand($product) {
        $count_brand['Canon'] = $product->where('brand', 'Canon')->count();
        $count_brand['Nikon'] = $product->where('brand', 'Nikon')->count();
        $count_brand['Sony'] = $product->where('brand', 'Sony')->count();
        $count_brand['Fujifilm'] = $product->where('brand', 'Fujifilm')->count();
        $count_brand['Olympus'] = $product->where('brand', 'Olympus')->count();
        $count_brand['Leica'] = $product->where('brand', 'Leica')->count();
        $count_brand['Hasselblad'] = $product->where('brand', 'Hasselblad')->count();
        $count_brand['Sigma'] = $product->where('brand', 'Sigma')->count();
        $count_brand['Tamron'] = $product->where('brand', 'Tamron')->count();
        return $count_brand;
    }

    public function index() {
        $product = product::get();
        $count_body = $this->countBody($product);
        $count_lens = $this->countLens($product);
        $count_brand = $this->countBrand($product);
        $product = product::paginate(20);
        $type = 'all';
        $brand = 'all';
        $order = 'default';
        return view('client.homepage', compact(
            'product',
            'type',
            'brand',
            'order',
            'count_body',
            'count_lens',
            'count_brand'
        ));
    }

    public function show($type, $brand, $order) {
        $product = product::get();
        $count_body = $this->countBody($product);
        $count_lens = $this->countLens($product);
        $count_brand = $this->countBrand($product);
        if($type == 'all') {
            if($order == 'default') {
                return Redirect::to('/');
            }
            if($order == 'incr') {
                $product = product::orderBy('price_1')->paginate(20);
            }
            if($order == 'desc') {
                $product = product::orderBy('price_1', 'desc')->paginate(20);
            }
        } else {
            if($order == 'default') {
                if($type == 'body') {
                    $product = product::where('type', 1)->where('brand', $brand)->paginate(20);
                }
                if($type == 'lens') {
                    $product = product::where('type', 2)->where('brand', $brand)->paginate(20);
                }
                if($type == 'brand') {
                    $product = product::where('brand', $brand)->paginate(20);
                }
            }
            if($order == 'incr') {
                if($type == 'body') {
                    $product = product::where('type', 1)->where('brand', $brand)->orderBy('price_1')->paginate(20);
                }
                if($type == 'lens') {
                    $product = product::where('type', 2)->where('brand', $brand)->orderBy('price_1')->paginate(20);
                }
                if($type == 'brand') {
                    $product = product::where('brand', $brand)->orderBy('price_1')->paginate(20);
                }
            }
            if($order == 'desc') {
                if($type == 'body') {
                    $product = product::where('type', 1)->where('brand', $brand)->orderBy('price_1', 'desc')->paginate(20);
                }
                if($type == 'lens') {
                    $product = product::where('type', 2)->where('brand', $brand)->orderBy('price_1', 'desc')->paginate(20);
                }
                if($type == 'brand') {
                    $product = product::where('brand', $brand)->orderBy('price_1', 'desc')->paginate(20);
                }
            }
        }
        return view('client.homepage', compact(
            'product',
            'type',
            'brand',
            'order',
            'count_body',
            'count_lens',
            'count_brand'
        ));
    }

    public function search(Request $request) {
        $product = product::get();
        $count_body = $this->countBody($product);
        $count_lens = $this->countLens($product);
        $count_brand = $this->countBrand($product);
        $type = 'all';
        $brand = 'all';
        $order = 'default';
        $product = product::where('name', 'like', '%' . $request->search . '%')->paginate(20);
        return view('client.homepage', compact(
            'product',
            'type',
            'brand',
            'order',
            'count_body',
            'count_lens',
            'count_brand'
        ));
    }

    public function product_detail($product_name) {
        $product = product::get();
        $count_body = $this->countBody($product);
        $count_lens = $this->countLens($product);
        $count_brand = $this->countBrand($product);
        $type = 'all';
        $brand = 'all';
        $order = 'default';
        $product = product::where('name', $product_name)->first();
        return view('client.product_detail', compact(
            'product',
            'type',
            'brand',
            'order',
            'count_body',
            'count_lens',
            'count_brand'
        ));
    }

    public function add_to_cart(Request $request, $product_id) {
        $user_id = session()->get('user_id');
        $price = product::where('product_id', $product_id)->value('price_1');
        $last = bill::where('user_id', $user_id)->orderby('bill_id', 'desc')->first();
        
        if($last == null) {
            $newbill = new bill();
            $newbill->user_id = $user_id;
            $newbill->product_id = $product_id;
            $newbill->order_id = bill::max('order_id') + 1;
            $newbill->status = 0;
            $newbill->quantity = $request->quantity;
            $newbill->total = $newbill->quantity * $price;
            $newbill->save();
        } else {
            $status = $last->status;
            if($status == 0) {
                $bill = bill::where('user_id', $user_id)->where('product_id', $product_id)->where('status', '0')->first();
                if($bill) {
                    $bill->quantity += $request->quantity;
                    $bill->total += $request->quantity * $price;
                    $bill->save();
                } else {
                    $newbill = new bill();
                    $newbill->user_id = $user_id;
                    $newbill->product_id = $product_id;
                    $newbill->order_id = bill::where('user_id', $user_id)->max('order_id');
                    $newbill->status = 0;
                    $newbill->quantity = $request->quantity;
                    $newbill->total = $newbill->quantity * $price;
                    $newbill->save();
                }
            } else {
                $newbill = new bill();
                $newbill->user_id = $user_id;
                $newbill->product_id = $product_id;
                $newbill->order_id = bill::max('order_id') + 1;
                $newbill->status = 0;
                $newbill->quantity = $request->quantity;
                $newbill->total = $newbill->quantity * $price;
                $newbill->save();
            }
        }
        return Redirect::to('cart');
    }

    public function add_to_cart_get($product_id) {
        $user_id = session()->get('user_id');
        $price = product::where('product_id', $product_id)->value('price_1');
        $last = bill::where('user_id', $user_id)->orderby('bill_id', 'desc')->first();
        
        if($last == null) {
            $newbill = new bill();
            $newbill->user_id = $user_id;
            $newbill->product_id = $product_id;
            $newbill->order_id = bill::max('order_id') + 1;
            $newbill->status = 0;
            $newbill->quantity = 1;
            $newbill->total = $newbill->quantity * $price;
            $newbill->save();
        } else {
            $status = $last->status;
            if($status == 0) {
                $bill = bill::where('user_id', $user_id)->where('product_id', $product_id)->where('status', '0')->first();
                if($bill) {
                    $bill->quantity += 1;
                    $bill->total += $price;
                    $bill->save();
                } else {
                    $newbill = new bill();
                    $newbill->user_id = $user_id;
                    $newbill->product_id = $product_id;
                    $newbill->order_id = bill::where('user_id', $user_id)->max('order_id');
                    $newbill->status = 0;
                    $newbill->quantity = 1;
                    $newbill->total = $price;
                    $newbill->save();
                }
            } else {
                $newbill = new bill();
                $newbill->user_id = $user_id;
                $newbill->product_id = $product_id;
                $newbill->order_id = bill::max('order_id') + 1;
                $newbill->status = 0;
                $newbill->quantity = 1;
                $newbill->total = $price;
                $newbill->save();
            }
        }
        return Redirect::to('cart');
    }

    public function login() {
        if(session()->get('user_id')) {
            session()->put('message', 'Xin chào TESTER, bạn phải đăng nhập để sử dụng tính năng này!');
            return Redirect::to('/');
        }
        return view('client.login');
    }

    public function signin(Request $request) {
        $user_email = $request->user_email;
        $user_password =$request->user_password;
        $result = User::where('email', $user_email)->where('password', $user_password)->first();
        if($result) {
            session()->put('user_email', $user_email);
            session()->put('user_name', $result->name);
            session()->put('user_id', $result->id);
            return Redirect::to('/');
        } else {
            session()->put('message', 'Đăng nhập sai, vui lòng thử lại!');
            return Redirect::to('login');
        }
    }

    public function logout() {
        session()->put('user_id', null);
        session()->put('user_name', null);
        return Redirect::to('/');
    }

    public function cart() {
        $product = bill::where('user_id', session()->get('user_id'))->where('status', '0')->get();
        foreach($product as $key => $value) {
            $product_temp = product::where('product_id', $value->product_id)->first();
            $value->name = $product_temp->name;
            $value->price = $product_temp->price_1;
            $value->image = $product_temp->image;
        }
        return view('client.cart', compact('product'));
    }

    public function delete_from_cart($bill_id) {
        bill::where('bill_id', $bill_id)->delete();
        return Redirect::to('cart');
    }

    public function checkout() {
        $product = bill::where('user_id', session()->get('user_id'))->where('status', '0')->get();
        foreach($product as $key => $value) {
            $product_temp = product::where('product_id', $value->product_id)->first();
            $value->name = $product_temp->name;
            $value->price = $product_temp->price_1;
            $value->image = $product_temp->image;
        }
        return view('client.checkout', compact('product'));
    }

    public function send_bill($order_id) {
        // echo session()->get('user_email');
        $order_bill = bill::where('order_id', $order_id)->get();
        foreach($order_bill as $key => $value) {
            $value->status = 1;
            $value->save();
        }
        session()->put('message', 'Đặt hàng thành công, hãy kiểm tra trong mục ĐƠN HÀNG và trong HÒM THƯ EMAIL và đợi chúng tôi kiểm duyệt.');
        Mail::to(session()->get('user_email'))->send(new myMail(session()->get('user_name'), 3));
        return Redirect::to('/');
    }

    public function show_bill() {
        // $max_index = bill::where('user_id', session()->get('user_id'))->where('status', '>', '0')->max('order_id');
        // $min_index = bill::where('user_id', session()->get('user_id'))->where('status', '>', '0')->min('order_id');
        $bill = bill::where('user_id', session()->get('user_id'))->where('status', '>', '0')->orderby('order_id', 'desc')->get();
        // dd(count($bill));
        if(count($bill) == 0) {
            $product = null;
            $status = null;
            return view('client.bill', compact('product', 'status'));
        } else {
            $product = [];
            // echo ($bill[9]);
            // exit;
            foreach($bill as $key => $value) {
                $product_root = product::where('product_id', $value->product_id)->first();
                // echo '<pre>';
                // echo $product_root->image;
                // echo '</pre>';
                $product[$value->order_id][$value->bill_id]['image'] = $product_root->image;
                $product[$value->order_id][$value->bill_id]['name'] = $product_root->name;
                $product[$value->order_id][$value->bill_id]['price'] = $product_root->price_1;
                $product[$value->order_id][$value->bill_id]['quantity'] = $value->quantity;
                $product[$value->order_id][$value->bill_id]['total'] = $value->total;
                // $product[$value->order_id][0]['status'] = $value->status;
                $status[$value->order_id] = $value->status;
            }
            // dd($product);
            return view('client.bill', compact('product', 'status'));
        }
    }




    // register
    public function register_handle(Request $request) {
        if($request->password != $request->confirmPassword) {
            session()->put('message', 'Mật khẩu không khớp, hãy kiểm tra lại!');
            return Redirect::to('/register');
        } elseif(User::where('email', $request->email)->first()) {
            session()->put('message', 'Email của bạn đã được sử dụng, vui lòng dùng email khác!');
            return Redirect::to('/register');
        } else {
            $token = $this->randomString();
            session()->put("token", $token);
            session()->put("username", $request->name);
            session()->put("password", $request->password);
            session()->put("email", $request->email);
            $order = [
                "token" => $token,
                "username" => $request->name,
            ];
            // dd($order);
            Mail::to($request->email)->send(new myMail($order, 1));
            return Redirect::to('register-confirm');
        }
    }

    public function register_final(Request $request) {
        if($request->token != session()->get('token')) {
            session()->put('message', 'Mã xác thực không hợp lệ');
            return Redirect::to('register-confirm');
        } else {
            $user = new user();
            $user->name = session()->get('username');
            $user->email = session()->get('email');
            $user->password = session()->get('password');
            // dd($user);
            $user->save();
            session()->forget('token');
            session()->forget('username');
            session()->forget('email');
            session()->forget('password');
            session()->put('message', "Bạn đã đăng kí tài khoản thành công. Hãy đăng nhập vào hệ thống.");
            return Redirect::to('/login');
        }
    }

    private function randomString() {
        $character = '0123456789';
        $str = '';
        for($i = 0 ; $i < 6 ; $i++) {
          $index = rand(0, strlen($character) - 1);
          $str .= $character[$index];
        }
        return $str;
    }

    //forgot password

    public function reset_checkmail(Request $request) {
        if(User::where('email', $request->email)->first()) {
            $token = $this->randomString();
            session()->put("token", $token);
            session()->put('email', $request->email);
            $order = [
                "token" => $token
            ];
            Mail::to($request->email)->send(new myMail($order, 2));
            return Redirect::to('reset-token');
        } else {
            session()->put('message', 'Chúng tôi không tìm thấy Email của bạn trong hệ thống');
            return Redirect::to('/forgot-password');
        }
    }

    public function reset_checktoken(Request $request) {
        if($request->token != session()->get('token')) {
            session()->put('message', 'Mã xác thực không hợp lệ');
            return Redirect::to('reset-token');
        } else {
            return Redirect::to('reset-final');
        }
    }

    public function reset_final(Request $request) {
        $user = User::where('email', session()->get('email'))->first();
        $user->password = $request->password;
        $user->save();
        session()->forget('token');
        session()->forget('email');
        session()->put('message', 'Thay đổi mật khẩu thành công. Đăng nhập thôi');
        return Redirect::to('/login');
    }
}
