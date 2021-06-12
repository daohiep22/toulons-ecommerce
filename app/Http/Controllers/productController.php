<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\body;
use App\Models\lens;
use Illuminate\Support\Facades\Redirect;
session_start();

class productController extends Controller
{
    public function add_body() {
        return view('admin.add_body');
    }

    public function add_lens() {
        return view('admin.add_lens');
    }

    // public function save_body(Request $request) {
    //     $data = $request->all();
    //     $product = new product();
    //     $body = new body();
    //     $product->name = $data['name'];
    //     $product->brand = $data['brand'];
    //     $product->type = 1;
    //     $product->price_1 = $data['price_1'];
    //     $product->price_2 = $data['price_2'];
    //     $product->description = $data['description'];
    //     $product->quantity = $data['quantity'];
    //     $get_image = $request->file('image');
    //     if($get_image) {
    //         $new_image = (product::max('product_id') + 1) . '_' . $data['name'] . '.' . $get_image->getClientOriginalExtension();
    //         $get_image->move('public/upload/product', $new_image);
    //         $product->image = $new_image;
    //     } else {
    //         $product->image =  '';
    //     }
    //     $product->save();
    //     $body->product_id = $product->product_id;
    //     $body->body_type = $data['body_type'];
    //     $body->body_sensor = $data['body_sensor'];
    //     $body->save();
    //     session()->put('message', 'Add Body to database successfully');
    //     return Redirect::to('dashboard');
    // }

    // public function save_lens(Request $request) {
    //     $data = $request->all();
    //     $product = new product();
    //     $lens = new lens();
    //     $product->name = $data['name'];
    //     $product->brand = $data['brand'];
    //     $product->type = 2;
    //     $product->price_1 = $data['price_1'];
    //     $product->price_2 = $data['price_2'];
    //     $product->description = $data['description'];
    //     $product->quantity = $data['quantity'];
    //     $get_image = $request->file('image');
    //     if($get_image) {
    //         $new_image = (product::max('product_id') + 1) . '_' . $data['name'] . '.' . $get_image->getClientOriginalExtension();
    //         $get_image->move('public/upload/product', $new_image);
    //         $product->image = $new_image;
    //     } else {
    //         $product->image =  '';
    //     }
    //     $product->save();
    //     $lens->product_id = $product->product_id;
    //     $lens->lens_body = $data['lens_body'];
    //     $lens->lens_sensor = $data['lens_sensor'];
    //     $lens->lens_tele = $data['lens_tele'] ?? 0;
    //     $lens->lens_standard = $data['lens_standard'] ?? 0;
    //     $lens->lens_wide = $data['lens_wide'] ?? 0;
    //     $lens->lens_macro = $data['lens_macro'] ?? 0;
    //     $lens->lens_portrait = $data['lens_portrait'] ?? 0;
    //     $lens->lens_fisheye = $data['lens_fisheye'] ?? 0;
    //     $lens->lens_cine = $data['lens_cine'] ?? 0;
    //     $lens->lens_extender = $data['lens_extender'] ?? 0;
    //     $lens->save();
    //     session()->put('message', 'Add Lens to database successfully');
    //     return Redirect::to('dashboard');
    // }

    public function save_product(Request $request, $type) {
        $data = $request->all();
        $product = new product();
        $product->name = $data['name'];
        $product->brand = $data['brand'];
        $product->type = $type;
        $product->price_1 = $data['price_1'];
        $product->price_2 = $data['price_2'];
        $product->description = $data['description'];
        $product->quantity = $data['quantity'];
        $get_image = $request->file('image');
        if($get_image) {
            $new_image = (product::max('product_id') + 1) . '_' . $data['name'] . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('public/upload/product', $new_image);
            $product->image = $new_image;
        } else {
            $product->image =  '';
        }
        // if($get_image) {
        //     $new_image = 'image (' . (product::max('product_id') + 1) . ').' . $get_image->getClientOriginalExtension();
        //     $get_image->move('public/upload/product', $new_image);
        //     $product->image = $new_image;
        // } else {
        //     $product->image =  '';
        // }
        $product->save();
        if($type == 1) {
            $body = new body();
            $body->product_id = $product->product_id;
            $body->body_type = $data['body_type'];
            $body->body_sensor = $data['body_sensor'];
            $body->save();
            session()->put('message', 'Add Body to database successfully');
        }
        if($type == 2) {
            $lens = new lens();
            $lens->product_id = $product->product_id;
            $lens->lens_body = $data['lens_body'];
            $lens->lens_sensor = $data['lens_sensor'];
            $lens->lens_tele = $data['lens_tele'] ?? 0;
            $lens->lens_standard = $data['lens_standard'] ?? 0;
            $lens->lens_wide = $data['lens_wide'] ?? 0;
            $lens->lens_macro = $data['lens_macro'] ?? 0;
            $lens->lens_portrait = $data['lens_portrait'] ?? 0;
            $lens->lens_fisheye = $data['lens_fisheye'] ?? 0;
            $lens->lens_cine = $data['lens_cine'] ?? 0;
            $lens->lens_extender = $data['lens_extender'] ?? 0;
            $lens->save();
            session()->put('message', 'Add Lens to database successfully');
        }
        return Redirect::to('dashboard');
    }

    public function edit_product($id) {
        $product = product::where('product_id', $id)->first();
        if($product->type == 1) {
            $product_moreinfo = body::where('product_id', $id)->first();
        }
        if($product->type == 2) {
            $product_moreinfo = lens::where('product_id', $id)->first();
        }
        return view('admin.edit_product', compact('product', 'product_moreinfo'));
    }

    public function update_product(Request $request, $id) {
        $data = $request->all();
        $product = product::where('product_id', $id)->first();
        $product->name = $data['name'];
        $product->brand = $data['brand'];
        $product->price_1 = $data['price_1'];
        $product->price_2 = $data['price_2'];
        $product->description = $data['description'];
        $product->quantity = $data['quantity'];
        if($product->type == 1) {
            $body = body::where('product_id', $id)->first();
            $body->body_type = $data['body_type'];
            $body->body_sensor = $data['body_sensor'];
        }
        if($product->type == 2) {
            $lens = lens::where('product_id', $id)->first();
            $lens->lens_body = $data['lens_body'];
            $lens->lens_sensor = $data['lens_sensor'];
            $lens->lens_tele = $data['lens_tele'] ?? 0;
            $lens->lens_standard = $data['lens_standard'] ?? 0;
            $lens->lens_wide = $data['lens_wide'] ?? 0;
            $lens->lens_macro = $data['lens_macro'] ?? 0;
            $lens->lens_portrait = $data['lens_portrait'] ?? 0;
            $lens->lens_fisheye = $data['lens_fisheye'] ?? 0;
            $lens->lens_cine = $data['lens_cine'] ?? 0;
            $lens->lens_extender = $data['lens_extender'] ?? 0;
            $lens->save();
        }
        $get_image = $request->file('image');
        $old_image = 'public/upload/product/' . product::where('product_id', $id)->value('image');
        if($get_image) {
            unlink($old_image);
            $new_image = ($id) . '_' . $data['name'] . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('public/upload/product', $new_image);
            $product->image = $new_image;
        } else {
            $product->image = ($id) . '_' . $data['name'] . '.jpg';
            rename($old_image, 'public/upload/product/' . $product->image);
        }
        // if($get_image) {
        //     unlink($old_image);
        //     $new_image = 'image (' . $id . ').' . $get_image->getClientOriginalExtension();
        //     $get_image->move('public/upload/product', $new_image);
        //     $product->image = $new_image;
        // } else {
        //     $product->image = 'image (' . $id . ').jpg';
        //     rename($old_image, 'public/upload/product/' . $product->image);
        // }
        $product->save();
        session()->put('message', 'Update product successfully');
        return Redirect::to('dashboard');
    }

    public function delete_product($id) {
        $product = product::where('product_id', $id)->first();
        $old_image = 'public/upload/product/' . $product->image;
        unlink($old_image);
        if($product->type == 1) {
            body::where('product_id', $id)->delete();
        }
        if($product->type == 2) {
            lens::where('product_id', $id)->delete();
        }
        $product->delete();
        return Redirect::to('dashboard');
    }
}
