@extends('admin_layout')
@section('admin_content')
    <div class="form-w3layouts">
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        ADD LENS
                    </header>
                    <div class="panel-body">
                        <div class="position-center">
                            <form action="{{URL::to('/save-product/2')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter lens name">
                                </div>
                                <div class="form-group">
                                    <label for="image">Image</label>
                                    <input type="file" class="form-control" name="image" id="image" placeholder="Upload image">
                                </div>
                                <div>
                                    <label>Brand</label>
                                    <select class="form-control input-md m-bot15" name="brand">
                                        <option value="Canon">Canon</option>
                                        <option value="Nikon">Nikon</option>
                                        <option value="Sony">Sony</option>
                                        <option value="Fuifilm">Fuifilm</option>
                                        <option value="Olympus">Olympus</option>
                                        <option value="Lumix">Lumix</option>
                                        <option value="Leica">Leica</option>
                                        <option value="Hasselblad">Hasselblad</option>
                                        <option value="Sigma">Sigma</option>
                                        <option value="Tamron">Tamron</option>
                                        <option value="Tonika">Tonika</option>
                                        <option value="Samyang">Samyang</option>
                                        <option value="Zeiss">Zeiss</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="price1">Price</label>
                                    <input type="number" class="form-control" name="price_1" id="price1" placeholder="Standard Price">
                                </div>
                                <div class="form-group">
                                    <label for="price2">Promotion Price</label>
                                    <input type="number" class="form-control" name="price_2" id="price2" placeholder="Promotion Price">
                                </div>
                                <div class="form-group">
                                    <label for="Description">Description</label>
                                    <input type="text" class="form-control" name="description" id="Description" placeholder="Description">
                                </div>
                                <div class="form-group">
                                    <label for="quantity">Quantity</label>
                                    <input type="number" class="form-control" name="quantity" id="quantity" placeholder="Enter quantity">
                                </div>
                                <div>
                                    <label>Body type</label>
                                    <select class="form-control input-md m-bot15" name="lens_body">
                                        <option value="1">DSLR</option>
                                        <option value="2">Mirrorless</option>
                                        <option value="3">Cine</option>
                                    </select>
                                </div><br>
                                <div>
                                    <label>Body Sensor</label>
                                    <select class="form-control input-md m-bot15" name="lens_sensor">
                                        <option value="1">Medium Format</option>
                                        <option value="2">Full Frame</option>
                                        <option value="3">APS-H</option>
                                        <option value="4">APS-C</option>
                                        <option value="5">Micro Four-third</option>
                                        <option value="6">1 inch</option>
                                        <option value="7">1/2.3 inch</option>
                                        <option value="8">Cine</option>
                                    </select>
                                </div><br>
                                <div class="checkbox">
                                    <label><input type="checkbox" value=1 name="lens_tele">Tele</label>
                                    <label><input type="checkbox" value=1 name="lens_standard">Standard</label>
                                    <label><input type="checkbox" value=1 name="lens_wide">Wide</label>
                                    <label><input type="checkbox" value=1 name="lens_macro">Macro</label>
                                    <label><input type="checkbox" value=1 name="lens_portrait">Portrait</label>
                                    <label><input type="checkbox" value=1 name="lens_fisheye">Fisheye</label>
                                    <label><input type="checkbox" value=1 name="lens_cine">Cine</label>
                                    <label><input type="checkbox" value=1 name="lens_extender">Extender</label>
                                </div>
                                {{-- <div class="checkbox" name="typeoflens">
                                    <label><input type="checkbox" value="tele">Tele</label>
                                    <label><input type="checkbox" value="standard">Standard</label>
                                    <label><input type="checkbox" value="wide">Wide</label>
                                    <label><input type="checkbox" value="macro">Macro</label>
                                    <label><input type="checkbox" value="portrait">Portrait</label>
                                    <label><input type="checkbox" value="fisheye">Fisheye</label>
                                    <label><input type="checkbox" value="cine">Cine</label>
                                    <label><input type="checkbox" value="extender">Extender</label>
                                </div> --}}
                                <button type="submit" class="btn btn-info">Submit</button>
                            </form>
                        </div>

                    </div>
                </section>

            </div>
        </div>
    </div>
@endsection