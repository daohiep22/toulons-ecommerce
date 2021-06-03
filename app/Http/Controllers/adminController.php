<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use App\Models\product;
use App\Models\bill;
use App\Models\User;
use App\Mail\myMail;
use Illuminate\Support\Facades\Mail;
session_start();

class adminController extends Controller
{
    public function adminAuth() {
        $admin_id = session()->get('admin_id');
        if($admin_id) {
            return Redirect::to('admin.dashboard');
        } else {
            return Redirect::to('admin')->send();
        }
    }

    public function index() {
        if(session()->get('admin_id')) {
            return Redirect::to('/dashboard');
        }
        return view('admin.login');
    }

    public function dashboard() {
        $product = product::orderBy('quantity')->paginate(20);
        return view('admin.dashboard', compact('product'));
    }

    public function login(Request $request) {
        $admin_email = $request->admin_email;
        $admin_password = $request->admin_password;
        $result = DB::table('admin')->where('admin_email', $admin_email)->where('admin_password', $admin_password)->first();
        if($result) {
            session()->put('admin_name', $result->admin_name);
            session()->put('admin_id', $result->admin_id);
            return Redirect::to('/dashboard');
        } else {
            session()->put('message', 'Login failed. Please try again!');
            return Redirect::to('/admin');
        }
    }

    public function logout() {
        session()->put('admin_id', null);
        session()->put('admin_name', null);
        return Redirect::to('/admin');
    }

    public function search(Request $request) {
        $product = product::get();
        $product = product::where('name', 'like', '%' . $request->search . '%')->paginate(20);
        return view('admin.dashboard', compact('product'));
    }

    public function show_user() {
        $user = DB::table('Users')->paginate(20);
        return view('admin.user', compact('user'));
    }

    public function bill_manager() {
        $bill = bill::where('status', '>', '0')->orderby('order_id', 'desc')->get();
        // if(!$bill){
        //     echo "done";
        //     exit;
        // }
        // exit;
        // dd($bill);
        if(count($bill) == 0) {
            $product = null;
            $status = null;
            return view('admin.bill', compact('product', 'status'));
        } else {
            $product = [];
            foreach($bill as $key => $value) {
                $product_root = product::where('product_id', $value->product_id)->first();
                $product[$value->order_id][$value->bill_id]['image'] = $product_root->image;
                $product[$value->order_id][$value->bill_id]['name'] = $product_root->name;
                $product[$value->order_id][$value->bill_id]['username'] = DB::table('Users')->where('id', $value->user_id)->first()->name;
                $product[$value->order_id][$value->bill_id]['price'] = $product_root->price_1;
                $product[$value->order_id][$value->bill_id]['quantity'] = $value->quantity;
                $product[$value->order_id][$value->bill_id]['total'] = $value->total;
                $status[$value->order_id] = $value->status ?? null;
            }
            return view('admin.bill', compact('product', 'status'));
        }
    }

    public function confirm($order_id) {
        $bill = bill::where('order_id', $order_id)->get();
        foreach($bill as $key => $value) {
            $value->status = 2;
            $value->save();
            $product = product::where('product_id', $value->product_id)->first();
            $product->quantity -= $value->quantity;
            $product->save();
        }
        $user = User::where('id', $bill[0]->user_id)->first();
        Mail::to($user->email)->send(new myMail($user->name, 4));
        return Redirect::to('bill_manager');
    }

    public function show_body() {
        $product = product::where('type', 1)->paginate(20);
        return view('admin.dashboard', compact('product'));
    }

    public function show_lens() {
        $product = product::where('type', 2)->paginate(20);
        return view('admin.dashboard', compact('product'));
    }
}
