@extends('admin_layout')
@section('admin_content')
    <div class="form-w3layouts">
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        EDIT PRODUCT
                    </header>
                    <div class="panel-body">
                        <div class="position-center">
                            <form action="{{ URL::to('/update-product/' . $product->product_id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="bodyName">Name</label>
                                    <input type="text" class="form-control" name="name" id="bodyName"
                                        placeholder="Enter body name"
                                        value="{{$product->name}}">
                                </div>
                                <div class="form-group">
                                    <label for="bodyImage">Image</label>
                                    <input type="file" class="form-control" name="image" id="bodyimage"
                                        placeholder="Upload image">
                                </div>
                                @if($product->type == 1)
                                    <div>
                                        <label>Brand</label>
                                        <select class="form-control input-md m-bot15" name="brand" autofocus="{{$product->brand}}">
                                            <option <?php if($product->brand == 'Canon') echo 'selected' ?> value="Canon">Canon</option>
                                            <option <?php if($product->brand == 'Nikon') echo 'selected' ?> value="Nikon">Nikon</option>
                                            <option <?php if($product->brand == 'Sony') echo 'selected' ?> value="Sony">Sony</option>
                                            <option <?php if($product->brand == 'Fuifilm') echo 'selected' ?> value="Fuifilm">Fuifilm</option>
                                            <option <?php if($product->brand == 'Olympus') echo 'selected' ?> value="Olympus">Olympus</option>
                                            <option <?php if($product->brand == 'Lumix') echo 'selected' ?> value="Lumix">Lumix</option>
                                            <option <?php if($product->brand == 'Leica') echo 'selected' ?> value="Leica">Leica</option>
                                            <option <?php if($product->brand == 'Hasselblad') echo 'selected' ?> value="Hasselblad">Hasselblad</option>
                                        </select>
                                    </div>
                                @endif
                                @if($product->type == 2)
                                    <div>
                                        <label>Brand</label>
                                        <select class="form-control input-md m-bot15" name="brand" autofocus="{{$product->brand}}">
                                            <option <?php if($product->brand == 'Canon') echo 'selected' ?> value="Canon">Canon</option>
                                            <option <?php if($product->brand == 'Nikon') echo 'selected' ?> value="Nikon">Nikon</option>
                                            <option <?php if($product->brand == 'Sony') echo 'selected' ?> value="Sony">Sony</option>
                                            <option <?php if($product->brand == 'Fuifilm') echo 'selected' ?> value="Fuifilm">Fuifilm</option>
                                            <option <?php if($product->brand == 'Olympus') echo 'selected' ?> value="Olympus">Olympus</option>
                                            <option <?php if($product->brand == 'Lumix') echo 'selected' ?> value="Lumix">Lumix</option>
                                            <option <?php if($product->brand == 'Leica') echo 'selected' ?> value="Leica">Leica</option>
                                            <option <?php if($product->brand == 'Hasselblad') echo 'selected' ?> value="Hasselblad">Hasselblad</option>
                                            <option <?php if($product->brand == 'Sigma') echo 'selected' ?> value="Sigma">Sigma</option>
                                            <option <?php if($product->brand == 'Tamron') echo 'selected' ?> value="Tamron">Tamron</option>
                                            <option <?php if($product->brand == 'Tonika') echo 'selected' ?> value="Tonika">Tonika</option>
                                            <option <?php if($product->brand == 'Samyang') echo 'selected' ?> value="Samyang">Samyang</option>
                                            <option <?php if($product->brand == 'Zeiss') echo 'selected' ?> value="Zeiss">Zeiss</option>
                                        </select>
                                    </div>
                                @endif
                                <div class="form-group">
                                    <label for="bodyPrice1">Price</label>
                                    <input type="number" class="form-control" name="price_1" id="bodyPrice1"
                                        placeholder="Standard Price"
                                        value="{{$product->price_1}}">
                                </div>
                                <div class="form-group">
                                    <label for="bodyPrice2">Promotion Price</label>
                                    <input type="number" class="form-control" name="price_2" id="bodyPrice2"
                                        placeholder="Promotion Price"
                                        value="{{$product->price_2}}">
                                </div>
                                <div class="form-group">
                                    <label for="Description">Description</label>
                                    <input type="text" class="form-control" name="description" id="Description"
                                        placeholder="Description"
                                        value="{{$product->description}}">
                                </div>
                                <div class="form-group">
                                    <label for="bodyQuantity">Quantity</label>
                                    <input type="number" class="form-control" name="quantity" id="bodyQuantity"
                                        placeholder="Enter quantity"
                                        value="{{$product->quantity}}">
                                </div>
                                @if($product->type == 1)
                                    <div>
                                        <label>Body Type</label>
                                        <select class="form-control input-md m-bot15" name="body_type">
                                            <option value="1" <?php if($product_moreinfo->body_type == 1) echo 'selected' ?>>DSLR</option>
                                            <option value="2" <?php if($product_moreinfo->body_type == 2) echo 'selected' ?>>Mirrorless</option>
                                        </select>
                                    </div><br>
                                    <div>
                                        <label>Body Sensor</label>
                                        <select class="form-control input-md m-bot15" name="body_sensor">
                                            <option value="1" <?php if($product_moreinfo->body_sensor == 1) echo 'selected' ?>>Medium Format</option>
                                            <option value="2" <?php if($product_moreinfo->body_sensor == 2) echo 'selected' ?>>Full Frame</option>
                                            <option value="3" <?php if($product_moreinfo->body_sensor == 3) echo 'selected' ?>>APS-H</option>
                                            <option value="4" <?php if($product_moreinfo->body_sensor == 4) echo 'selected' ?>>APS-C</option>
                                            <option value="5" <?php if($product_moreinfo->body_sensor == 5) echo 'selected' ?>>Micro Four-third</option>
                                            <option value="6" <?php if($product_moreinfo->body_sensor == 6) echo 'selected' ?>>1 inch</option>
                                            <option value="7" <?php if($product_moreinfo->body_sensor == 7) echo 'selected' ?>>1/2.3 inch</option>
                                        </select>
                                    </div><br>
                                @endif
                                @if($product->type == 2)
                                    <div>
                                        <label>Body type</label>
                                        <select class="form-control input-md m-bot15" name="lens_body">
                                            <option value="1" <?php if($product_moreinfo->lens_body == 1) echo 'selected' ?>>DSLR</option>
                                            <option value="2" <?php if($product_moreinfo->lens_body == 2) echo 'selected' ?>>Mirrorless</option>
                                        </select>
                                    </div><br>
                                    <div>
                                        <label>Lens Sensor</label>
                                        <select class="form-control input-md m-bot15" name="lens_sensor">
                                            <option value="1" <?php if($product_moreinfo->lens_sensor == 1) echo 'selected' ?>>Medium Format</option>
                                            <option value="2" <?php if($product_moreinfo->lens_sensor == 2) echo 'selected' ?>>Full Frame</option>
                                            <option value="3" <?php if($product_moreinfo->lens_sensor == 3) echo 'selected' ?>>APS-H</option>
                                            <option value="4" <?php if($product_moreinfo->lens_sensor == 4) echo 'selected' ?>>APS-C</option>
                                            <option value="5" <?php if($product_moreinfo->lens_sensor == 5) echo 'selected' ?>>Micro Four-third</option>
                                            <option value="6" <?php if($product_moreinfo->lens_sensor == 6) echo 'selected' ?>>1 inch</option>
                                            <option value="7" <?php if($product_moreinfo->lens_sensor == 7) echo 'selected' ?>>1/2.3 inch</option>
                                        </select>
                                    </div><br>
                                    <div class="checkbox">
                                        <label><input type="checkbox" value=1 <?php if($product_moreinfo->lens_tele == 1) echo 'checked' ?> name="lens_tele">Tele</label>
                                        <label><input type="checkbox" value=1 <?php if($product_moreinfo->lens_standard == 1) echo 'checked' ?> name="lens_standard">Standard</label>
                                        <label><input type="checkbox" value=1 <?php if($product_moreinfo->lens_wide == 1) echo 'checked' ?> name="lens_wide">Wide</label>
                                        <label><input type="checkbox" value=1 <?php if($product_moreinfo->lens_macro == 1) echo 'checked' ?> name="lens_macro">Macro</label>
                                        <label><input type="checkbox" value=1 <?php if($product_moreinfo->lens_portrait == 1) echo 'checked' ?> name="lens_portrait">Portrait</label>
                                        <label><input type="checkbox" value=1 <?php if($product_moreinfo->lens_fisheye == 1) echo 'checked' ?> name="lens_fisheye">Fisheye</label>
                                        <label><input type="checkbox" value=1 <?php if($product_moreinfo->lens_cine == 1) echo 'checked' ?> name="lens_cine">Cine</label>
                                        <label><input type="checkbox" value=1 <?php if($product_moreinfo->lens_extender == 1) echo 'checked' ?> name="lens_extender">Extender</label>
                                    </div>
                                @endif
                                <button type="submit" class="btn btn-info">Submit</button>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
