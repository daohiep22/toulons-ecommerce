@extends('admin_layout')
@section('admin_content')
    <div class="form-w3layouts">
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        ADD BODY
                    </header>
                    <div class="panel-body">
                        <div class="position-center">
                            <form action="{{URL::to('/save-product/1')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="bodyName">Name</label>
                                    <input type="text" class="form-control" name="name" id="bodyName" placeholder="Enter body name">
                                </div>
                                <div class="form-group">
                                    <label for="bodyImage">Image</label>
                                    <input type="file" class="form-control" name="image" id="bodyimage" placeholder="Upload image">
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
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="bodyPrice1">Price</label>
                                    <input type="number" class="form-control" name="price_1" id="bodyPrice1" placeholder="Standard Price">
                                </div>
                                <div class="form-group">
                                    <label for="bodyPrice2">Promotion Price</label>
                                    <input type="number" class="form-control" name="price_2" id="bodyPrice2" placeholder="Promotion Price">
                                </div>
                                <div class="form-group">
                                    <label for="Description">Description</label>
                                    <input type="text" class="form-control" name="description" id="Description" placeholder="Description">
                                </div>
                                <div class="form-group">
                                    <label for="bodyQuantity">Quantity</label>
                                    <input type="number" class="form-control" name="quantity" id="bodyQuantity" placeholder="Enter quantity">
                                </div>
                                <div>
                                    <label>Body Type</label>
                                    <select class="form-control input-md m-bot15" name="body_type">
                                        <option value="1">DSLR</option>
                                        <option value="2">Mirrorless</option>
                                        <option value="3">Cine</option>
                                    </select>
                                </div><br>
                                <div>
                                    <label>Body Sensor</label>
                                    <select class="form-control input-md m-bot15" name="body_sensor">
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
                                <button type="submit" class="btn btn-info">Submit</button>
                            </form>
                        </div>

                    </div>
                </section>

            </div>
        </div>
        {{-- <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Inline form
                    </header>
                    <div class="panel-body">
                        <div class="position-center">
                            <form class="form-inline" role="form">
                                <div class="form-group">
                                    <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail2"
                                        placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="exampleInputPassword2">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword2"
                                        placeholder="Password">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Remember me
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-success">Sign in</button>
                            </form>
                        </div>
                    </div>
                </section>

            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Modal form
                    </header>
                    <div class="panel-body">
                        <div class="position-center ">
                            <div class="text-center">
                                <a href="#myModal" data-toggle="modal" class="btn btn-success">
                                    Form in Modal
                                </a>
                                <a href="#myModal-1" data-toggle="modal" class="btn btn-warning">
                                    Form in Modal 2
                                </a>
                                <a href="#myModal-2" data-toggle="modal" class="btn btn-danger">
                                    Form in Modal 3
                                </a>
                            </div>

                            <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal"
                                class="modal fade">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button aria-hidden="true" data-dismiss="modal" class="close"
                                                type="button">×</button>
                                            <h4 class="modal-title">Form Tittle</h4>
                                        </div>
                                        <div class="modal-body">

                                            <form role="form">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Email address</label>
                                                    <input type="email" class="form-control" id="exampleInputEmail3"
                                                        placeholder="Enter email">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Password</label>
                                                    <input type="password" class="form-control" id="exampleInputPassword3"
                                                        placeholder="Password">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputFile">File input</label>
                                                    <input type="file" id="exampleInputFile3">
                                                    <p class="help-block">Example block-level help text
                                                        here.</p>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox"> Check me out
                                                    </label>
                                                </div>
                                                <button type="submit" class="btn btn-default">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1"
                                id="myModal-1" class="modal fade">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button aria-hidden="true" data-dismiss="modal" class="close"
                                                type="button">×</button>
                                            <h4 class="modal-title">Form Tittle</h4>
                                        </div>
                                        <div class="modal-body">

                                            <form class="form-horizontal" role="form">
                                                <div class="form-group">
                                                    <label for="inputEmail1"
                                                        class="col-lg-2 col-sm-2 control-label">Email</label>
                                                    <div class="col-lg-10">
                                                        <input type="email" class="form-control" id="inputEmail4"
                                                            placeholder="Email">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputPassword1"
                                                        class="col-lg-2 col-sm-2 control-label">Password</label>
                                                    <div class="col-lg-10">
                                                        <input type="password" class="form-control" id="inputPassword4"
                                                            placeholder="Password">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-lg-offset-2 col-lg-10">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox"> Remember me
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-lg-offset-2 col-lg-10">
                                                        <button type="submit" class="btn btn-default">Sign
                                                            in</button>
                                                    </div>
                                                </div>
                                            </form>

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1"
                                id="myModal-2" class="modal fade">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button aria-hidden="true" data-dismiss="modal" class="close"
                                                type="button">×</button>
                                            <h4 class="modal-title">Form Tittle</h4>
                                        </div>
                                        <div class="modal-body">
                                            <form class="form-inline" role="form">
                                                <div class="form-group">
                                                    <label class="sr-only" for="exampleInputEmail2">Email
                                                        address</label>
                                                    <input type="email" class="form-control sm-input"
                                                        id="exampleInputEmail5" placeholder="Enter email">
                                                </div>
                                                <div class="form-group">
                                                    <label class="sr-only" for="exampleInputPassword2">Password</label>
                                                    <input type="password" class="form-control sm-input"
                                                        id="exampleInputPassword5" placeholder="Password">
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox"> Remember me
                                                    </label>
                                                </div>
                                                <button type="submit" class="btn btn-default">Sign
                                                    in</button>
                                            </form>

                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Form Elements
                    </header>
                    <div class="panel-body">
                        <form class="form-horizontal bucket-form" method="get">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Default</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Help text</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control">
                                    <span class="help-block">A block of help text that breaks onto a new
                                        line and may extend beyond one line.</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Rounder</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control round-input">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Input focus</label>
                                <div class="col-sm-6">
                                    <input class="form-control" id="focusedInput" type="text" value="This is focused...">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Disabled</label>
                                <div class="col-sm-6">
                                    <input class="form-control" id="disabledInput" type="text"
                                        placeholder="Disabled input here..." disabled="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Placeholder</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" placeholder="placeholder">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Password</label>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class=" col-sm-3 control-label">Static control</label>
                                <div class="col-lg-6">
                                    <p class="form-control-static">email@example.com</p>
                                </div>
                            </div>
                            <div class="form-group has-success">
                                <label class="col-sm-3 control-label col-lg-3" for="inputSuccess">Input with
                                    success</label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="inputSuccess">
                                </div>
                            </div>
                            <div class="form-group has-warning">
                                <label class="col-sm-3 control-label col-lg-3" for="inputWarning">Input with
                                    warning</label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="inputWarning">
                                </div>
                            </div>
                            <div class="form-group has-error">
                                <label class="col-sm-3 control-label col-lg-3" for="inputError">Input with
                                    error</label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="inputError">
                                </div>
                            </div>
                        </form>
                    </div>
                </section>

                <section class="panel">
                    <div class="panel-body">
                        <form class="form-horizontal bucket-form" method="get">
                            <div class="form-group">
                                <label class="col-sm-3 control-label col-lg-3" for="inputSuccess">Control
                                    sizing</label>
                                <div class="col-lg-6">
                                    <input class="form-control input-lg m-bot15" type="text" placeholder=".input-lg">
                                    <input class="form-control m-bot15" type="text" placeholder="Default input">
                                    <input class="form-control input-sm m-bot15" type="text" placeholder=".input-sm">

                                    <select class="form-control input-lg m-bot15">
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                    </select>
                                    <select class="form-control m-bot15">
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                    </select>
                                    <select class="form-control input-sm m-bot15">
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>
                <section class="panel">
                    <div class="panel-body">
                        <form class="form-horizontal bucket-form" method="get">
                            <div class="form-group">
                                <label class="col-sm-3 control-label col-lg-3" for="inputSuccess">Checkboxes
                                    and radios</label>
                                <div class="col-lg-6">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="">
                                            Option one is this and that—be sure to include why it's great
                                        </label>
                                    </div>

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="">
                                            Option one is this and that—be sure to include why it's great
                                            option one
                                        </label>
                                    </div>

                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1"
                                                checked="">
                                            Option one is this and that—be sure to include why it's great
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                            Option two can be something else and selecting it will deselect
                                            option one
                                        </label>
                                    </div>

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label col-lg-3" for="inputSuccess">Inline
                                    checkboxes</label>
                                <div class="col-lg-6">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" id="inlineCheckbox1" value="option1"> 1
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" id="inlineCheckbox2" value="option2"> 2
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" id="inlineCheckbox3" value="option3"> 3
                                    </label>

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label col-lg-3" for="inputSuccess">Selects</label>
                                <div class="col-lg-6">
                                    <select class="form-control m-bot15">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>

                                    <select multiple="" class="form-control">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label col-lg-3" for="inputSuccess">Column
                                    sizing</label>
                                <div class="col-lg-8">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <input type="text" class="form-control" placeholder=".col-lg-2">
                                        </div>
                                        <div class="col-lg-3">
                                            <input type="text" class="form-control" placeholder=".col-lg-3">
                                        </div>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" placeholder=".col-lg-4">
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </form>
                    </div>
                </section>

                <section class="panel">
                    <header class="panel-heading">
                        Input groups
                    </header>
                    <div class="panel-body">
                        <form class="form-horizontal bucket-form" method="get">
                            <div class="form-group">
                                <label class="col-sm-3 control-label col-lg-3">Basic examples</label>
                                <div class="col-lg-6">
                                    <div class="input-group m-bot15">
                                        <span class="input-group-addon btn-success">@</span>
                                        <input type="text" class="form-control" placeholder="Username">
                                    </div>

                                    <div class="input-group m-bot15">
                                        <input type="text" class="form-control">
                                        <span class="input-group-addon btn-warning">.00</span>
                                    </div>

                                    <div class="input-group m-bot15">
                                        <span class="input-group-addon">$</span>
                                        <input type="text" class="form-control">
                                        <span class="input-group-addon ">.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label col-lg-3">Sizing</label>
                                <div class="col-lg-6">
                                    <div class="input-group input-group-lg m-bot15">
                                        <span class="input-group-addon btn-danger">@</span>
                                        <input type="text" class="form-control input-lg" placeholder="Username">
                                    </div>

                                    <div class="input-group m-bot15">
                                        <span class="input-group-addon">@</span>
                                        <input type="text" class="form-control" placeholder="Username">
                                    </div>

                                    <div class="input-group input-group-sm m-bot15">
                                        <span class="input-group-addon">@</span>
                                        <input type="text" class="form-control" placeholder="Username">
                                    </div>

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label col-lg-3">Iconic</label>
                                <div class="col-lg-6">
                                    <div class="input-group m-bot15">
                                        <span class="input-group-addon btn-white"><i class="fa fa-user"></i></span>
                                        <input type="text" class="form-control" placeholder="Username">
                                    </div>
                                    <div class="input-group m-bot15">
                                        <span class="input-group-addon btn-white"><i class="fa fa-envelope"></i></span>
                                        <input type="text" class="form-control" placeholder="Email">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label col-lg-3">Checkboxe and radio</label>
                                <div class="col-lg-6">
                                    <div class="input-group m-bot15">
                                        <span class="input-group-addon">
                                            <input type="checkbox">
                                        </span>
                                        <input type="text" class="form-control">
                                    </div>

                                    <div class="input-group m-bot15">
                                        <span class="input-group-addon">
                                            <input type="radio">
                                        </span>
                                        <input type="text" class="form-control">
                                    </div>

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label col-lg-3">Button addons</label>
                                <div class="col-lg-6">
                                    <div class="input-group m-bot15">
                                        <span class="input-group-btn">
                                            <button class="btn btn-danger" type="button">Go!</button>
                                        </span>
                                        <input type="text" class="form-control">
                                    </div>

                                    <div class="input-group m-bot15">
                                        <input type="text" class="form-control">
                                        <span class="input-group-btn">
                                            <button class="btn btn-success" type="button">Go!</button>
                                        </span>
                                    </div>

                                    <div class="input-group m-bot15">
                                        <div class="input-group-btn">
                                            <button type="button" class="btn btn-danger dropdown-toggle"
                                                data-toggle="dropdown">Action <span class="caret"></span></button>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Separated link</a></li>
                                            </ul>
                                        </div>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="input-group m-bot15">
                                        <input type="text" class="form-control">
                                        <div class="input-group-btn">
                                            <button type="button" class="btn btn-danger dropdown-toggle"
                                                data-toggle="dropdown">Action <span class="caret"></span></button>
                                            <ul class="dropdown-menu pull-right">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Separated link</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label col-lg-3">Segmented buttons</label>
                                <div class="col-lg-6">
                                    <div class="input-group m-bot15">
                                        <div class="input-group-btn">
                                            <button tabindex="-1" class="btn btn-info" type="button">Action</button>
                                            <button tabindex="-1" data-toggle="dropdown"
                                                class="btn btn-info dropdown-toggle" type="button">
                                                <span class="caret"></span>
                                            </button>
                                            <ul role="menu" class="dropdown-menu">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Separated link</a></li>
                                            </ul>
                                        </div>
                                        <input type="text" class="form-control">
                                    </div>

                                    <div class="input-group m-bot15">
                                        <input type="text" class="form-control">
                                        <div class="input-group-btn">
                                            <button tabindex="-1" class="btn btn-info" type="button">Action</button>
                                            <button tabindex="-1" data-toggle="dropdown"
                                                class="btn btn-info dropdown-toggle" type="button">
                                                <span class="caret"></span>
                                            </button>
                                            <ul role="menu" class="dropdown-menu pull-right">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Separated link</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </section>

            </div>
        </div>

        <div class="row">
            <div class="col-md-12">

                <div data-collapsed="0" class="panel">

                    <div class="panel-heading">
                        <div class="panel-title">
                            Input Grid
                        </div>
                    </div>

                    <div class="panel-body">

                        <div class="row">

                            <div class="col-md-12 form-group">
                                <input type="text" placeholder=".col-md-12" class="form-control">
                            </div>

                            <div class="col-md-6 form-group">
                                <input type="text" placeholder=".col-md-6" class="form-control">
                            </div>

                            <div class="col-md-6 form-group">
                                <input type="text" placeholder=".col-md-6" class="form-control">
                            </div>


                            <div class="col-md-4 form-group">
                                <input type="text" placeholder=".col-md-4" class="form-control">
                            </div>

                            <div class="col-md-4 form-group">
                                <input type="text" placeholder=".col-md-4" class="form-control">
                            </div>

                            <div class="col-md-4 form-group">
                                <input type="text" placeholder=".col-md-4" class="form-control">
                            </div>


                            <div class="col-md-3 form-group">
                                <input type="text" placeholder=".col-md-3" class="form-control">
                            </div>

                            <div class="col-md-3 form-group">
                                <input type="text" placeholder=".col-md-3" class="form-control">
                            </div>

                            <div class="col-md-3 form-group">
                                <input type="text" placeholder=".col-md-3" class="form-control">
                            </div>

                            <div class="col-md-3 form-group">
                                <input type="text" placeholder=".col-md-3" class="form-control">
                            </div>


                            <div class="col-md-2 form-group">
                                <input type="text" placeholder=".col-md-2" class="form-control">
                            </div>

                            <div class="col-md-2 form-group">
                                <input type="text" placeholder=".col-md-2" class="form-control">
                            </div>

                            <div class="col-md-2 form-group">
                                <input type="text" placeholder=".col-md-2" class="form-control">
                            </div>

                            <div class="col-md-2 form-group">
                                <input type="text" placeholder=".col-md-2" class="form-control">
                            </div>

                            <div class="col-md-2 form-group">
                                <input type="text" placeholder=".col-md-2" class="form-control">
                            </div>

                            <div class="col-md-2 form-group">
                                <input type="text" placeholder=".col-md-2" class="form-control">
                            </div>


                            <div class="col-md-1 form-group">
                                <input type="text" placeholder=".col-md-1" class="form-control">
                            </div>

                            <div class="col-md-1 form-group">
                                <input type="text" placeholder=".col-md-1" class="form-control">
                            </div>

                            <div class="col-md-1 form-group">
                                <input type="text" placeholder=".col-md-1" class="form-control">
                            </div>

                            <div class="col-md-1 form-group">
                                <input type="text" placeholder=".col-md-1" class="form-control">
                            </div>

                            <div class="col-md-1 form-group">
                                <input type="text" placeholder=".col-md-1" class="form-control">
                            </div>

                            <div class="col-md-1 form-group">
                                <input type="text" placeholder=".col-md-1" class="form-control">
                            </div>

                            <div class="col-md-1 form-group">
                                <input type="text" placeholder=".col-md-1" class="form-control">
                            </div>

                            <div class="col-md-1 form-group">
                                <input type="text" placeholder=".col-md-1" class="form-control">
                            </div>

                            <div class="col-md-1 form-group">
                                <input type="text" placeholder=".col-md-1" class="form-control">
                            </div>

                            <div class="col-md-1 form-group">
                                <input type="text" placeholder=".col-md-1" class="form-control">
                            </div>

                            <div class="col-md-1 form-group">
                                <input type="text" placeholder=".col-md-1" class="form-control">
                            </div>

                            <div class="col-md-1 form-group">
                                <input type="text" placeholder=".col-md-1" class="form-control">
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div> --}}
        <!-- page end-->
    </div>
@endsection
