@extends('admin_layout')
@section('admin_content')
    <h3>Welcome to TOULONS ÉCOMMERCE</h3>
    <br>
    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
                All Users
            </div>
            <div class="table-responsive">
                <br>
                {{$user->links()}}
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
                            <th>Name</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th style="width:30px;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user as $key => $value)
                            <tr>
                                <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label>
                                </td>
                                <td><span class="text-ellipsis">{{ $value->id }}</span></td>
                                <td><span class="text-ellipsis">{{ $value->name }}</span></td>
                                <td><span class="text-ellipsis">{{ $value->email }}</span></td>
                                <td><span class="text-ellipsis">{{ $value->password }}</span></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$user->links()}}
            </div>
        </div>
    </div>
@endsection
