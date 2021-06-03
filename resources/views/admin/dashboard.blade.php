@extends('admin_layout')
@section('admin_content')
    <h3>Welcome to TOULONS ÉCOMMERCE</h3>
    <br>
    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
                All Products
            </div>
            <?php
                $message = session()->get('message');
                if ($message) {
                echo '<div style="color:green;text-align:center;">' . $message . '</div>';
                session()->put('message', null);
            }
            ?>
            {{-- <div class="row w3-res-tb">
                <div class="col-sm-5 m-b-xs">
                    <select class="input-sm form-control w-sm inline v-middle">
                        <option value="0">Bulk action</option>
                        <option value="1">Delete selected</option>
                        <option value="2">Bulk edit</option>
                        <option value="3">Export</option>
                    </select>
                    <button class="btn btn-sm btn-default">Apply</button>
                </div>
                <div class="col-sm-4">
                </div>
                <div class="col-sm-3">
                    <div class="input-group">
                        <input type="text" class="input-sm form-control" placeholder="Search">
                        <span class="input-group-btn">
                            <button class="btn btn-sm btn-default" type="button">Go!</button>
                        </span>
                    </div>
                </div>
            </div> --}}
            <div class="table-responsive">
                <br>
                {{$product->links()}}
                <div id="wrap">
                    <form action="{{URL::to('adminsearch')}}" autocomplete="on" method="post">
                        @csrf
                        <input id="search" name="search" type="text" placeholder="Bạn cần tìm gì?">
                        <input id="search_submit" value="Rechercher" type="submit">
                    </form>
                </div>
                <br>
                <table class="table table-striped b-t b-light">
                    <thead>
                        <tr>
                            <th style="width:20px;">
                                <label class="i-checks m-b-none">
                                    <input type="checkbox"><i></i>
                                </label>
                            </th>
                            <th>ID</th>
                            <th>Product Name</th>
                            <th>Image</th>
                            <th>Brand</th>
                            <th>Price</th>
                            <th>Promotion Price</th>
                            <th>Description</th>
                            <th>Quantity</th>
                            <th></th>
                            <th style="width:30px;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($product as $key => $value)
                            <tr>
                                <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label>
                                </td>
                                <td><span class="text-ellipsis">{{ $value->product_id }}</span></td>
                                <td><span class="text-ellipsis">{{ $value->name }}</span></td>
                                <td><span class="text-ellipsis"><img height="100px"
                                            src="{{ asset('public/upload/product') . '/' . $value->image }}"></span></td>
                                <td><span class="text-ellipsis">{{ $value->brand }}</span></td>
                                <td><span class="text-ellipsis">{{ $value->price_1 }}</span></td>
                                <td><span class="text-ellipsis">{{ $value->price_2 }}</span></td>
                                <td><span class="text-ellipsis">{{ $value->description }}</span></td>
                                <td><span class="text-ellipsis">{{ $value->quantity }}</span></td>
                                <td>
                                    <div><a href="{{ URL::to('edit-product/' . $value->product_id) }}" class="active"
                                            ui-toggle-class=""><i style="font-size:20px;margin:5px;"
                                                class="fa fa-pencil text-success text-active"></i></div>
                                    <div><a onclick="return confirm('Are you sure to delete this product?')" href="{{URL::to('delete-product/' . $value->product_id)}}" class="active" ui-toggle-class=""><i style="font-size:20px;margin:10px;"
                                                class="fa fa-trash text-danger text"></i></a></div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$product->links()}}
            </div>
            <footer class="panel-footer">
                <div class="row">
                    <div class="col-sm-5 text-center">
                        <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
                    </div>
                </div>
            </footer>
        </div>
    </div>
@endsection
