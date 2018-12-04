@extends('layouts.admin.admin')
@section('css')
    @include('layouts.admin.css')
@stop
@section('title')
    <title>Admin User Create</title>
@stop
@section('content')
    <header class="head">

        <div class="main-bar">
            <div class="row">
                <div class="col-lg-6">
                    <h4 class="nav_top_align">
                        <i class="fa fa-user"></i>
                        <lable>Add User</lable>
                    </h4>
                </div>
                <div class="col-lg-6">
                    <div class="float-right">
                        <ol class="breadcrumb nav_breadcrumb_top_align">
                            <li class="breadcrumb-item">
                                <a href="index.html">
                                    <i class="fa fa-home" data-pack="default" data-tags=""></i>
                                    <lable>Dashboard</lable>
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#"><lable>Users</lable></a>
                            </li>
                            <li class="breadcrumb-item active"><lable>Add User</lable></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="outer">
        <div class="inner bg-container">
            <div class="card">

                <div class="card-body m-t-35">
                    <div>
                        <h4>Personal Information</h4>
                    </div>
                    {!! Form::open(array('route'=>'store', 'method'=>'POST', 'class'=>'form-horizontal login_validator')) !!}
                    {{--<form class="form-horizontal login_validator" id="tryitForm" action="{{route('store')}}"--}}
                          {{--method="post">--}}
                    @include('common/message')
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group row">
                                    <div class="col-lg-3 text-center text-lg-right">
                                        <label class="col-form-label">Profile Pic</label>
                                    </div>
                                    <div class="col-lg-6 text-center text-lg-left">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class="fileinput-new img-thumbnail text-center">
                                                <img src="{!! asset('img/admin2.jpg') !!}" data-src="holder.js/100%x100%"  alt="not found"></div>
                                            <div class="fileinput-preview fileinput-exists img-thumbnail"></div>
                                            <div class="m-t-20 text-center">
                                                        <span class="btn btn-primary btn-file">
                                                            <span class="fileinput-new">Select image</span>
                                                            <span class="fileinput-exists">Change</span>
                                                            <input type="file" name="..."></span>
                                                <a href="#" class="btn btn-warning fileinput-exists"
                                                   data-dismiss="fileinput">Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3 text-lg-right">
                                        <label class="col-form-label {{ $errors->first('userName')?'help-block' :''}}">User Name *</label>
                                    </div>
                                    <div class="col-xl-4 col-lg-5">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-user text-primary"></i>
                                            </span>
                                            <input type="text" name="userName" id="userName" placeholder="User Name"
                                                   class="form-control" value="{{old('userName')}}">
                                        </div>
                                        <span class="help-block">{!!$errors->first('userName')!!}</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3 text-lg-right">
                                        <label class="col-form-label {{ $errors->first('firstName')?'help-block' :''}}">First Name*</label>
                                    </div>
                                    <div class="col-xl-6 col-lg-8">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-user-circle text-primary"></i>
                                            </span>
                                            <input type="text" name="firstName" id="firstName" placeholder="First Name"
                                                   class="form-control">
                                        </div>
                                        <span class="help-block">{!!$errors->first('firstName')!!}</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3 text-lg-right">
                                        <label class="col-form-label {{ $errors->first('lastName')?'help-block' :''}}">Last Name*</label>
                                    </div>
                                    <div class="col-xl-6 col-lg-8">
                                        <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user-circle text-primary"></i>
                                    </span>
                                            <input type="text" name="lastName" id="lastName" placeholder="Last Name"
                                                   class="form-control">
                                        </div>
                                        <span class="help-block">{!!$errors->first('lastName')!!}</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3 text-lg-right">
                                        <label class="col-form-label {{ $errors->first('email')?'help-block' :''}}">Email*</label>
                                    </div>
                                    <div class="col-xl-6 col-lg-8">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-envelope text-primary"></i></span>
                                            <input type="text" placeholder="Email " id="email" name="email"
                                                   class="form-control">
                                        </div>
                                        <span class="help-block">{!!$errors->first('lastName')!!}</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3 text-lg-right">
                                        <label class="col-form-label {{ $errors->first('password')?'help-block' :''}}">Password*</label>
                                    </div>
                                    <div class="col-xl-6 col-lg-8">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock text-primary"></i></span>
                                            <input type="password" name="password" id="password" placeholder="Password"
                                                   class="form-control">
                                        </div>
                                        <span class="help-block">{!!$errors->first('password')!!}</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3 text-lg-right">
                                        <label class="col-form-label {{ $errors->first('confirmPassword')?'help-block' :''}}">Confirm Password *</label>
                                    </div>
                                    <div class="col-xl-6 col-lg-8">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock text-primary"></i></span>
                                            <input type="password" name="confirmPassword" placeholder="Confirm Password" id="cpwd"
                                                   class="form-control">
                                        </div>
                                        <span class="help-block">{!!$errors->first('confirmPassword')!!}</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3 text-lg-right">
                                        <label for="phone" class="col-form-label">Phone</label>
                                    </div>
                                    <div class="col-xl-4 col-lg-5">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-phone text-primary"></i></span>
                                            <input type="text" placeholder="Phone Number " id="phone" name="cell"
                                                   class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3 text-lg-right">
                                        <label for="phone" class="col-form-label">Mobile</label>
                                    </div>
                                    <div class="col-xl-4 col-lg-5">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-mobile text-primary"></i></span>
                                            <input type="text" placeholder="Mobile Number" id="mobile" name="mobile"
                                                   class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group gender_message row">
                                    <div class="col-lg-3 text-lg-right">
                                        <label class="col-form-label {{ $errors->first('sex')?'help-block' :''}}">Gender *</label>
                                    </div>
                                    <div class="col-xl-6 col-lg-8">
                                        <div class="custom-controls-stacked">
                                            <label class="custom-control custom-radio">
                                                <input id="radio1" type="radio" name="sex"
                                                       class="custom-control-input">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">Male</span>
                                            </label>
                                            <label class="custom-control custom-radio">
                                                <input id="radio2" type="radio" name="sex"
                                                       class="custom-control-input">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">Female</span>
                                            </label>
                                        </div>
                                        <span class="help-block">{!!$errors->first('sex')!!}</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3 text-lg-right">
                                        <label class="col-form-label {{ $errors->first('birthDay')?'help-block' :''}}">Birth Day *</label>
                                    </div>
                                    <div class="col-xl-6 col-lg-8">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-birthday-cake text-primary"></i></span>
                                            <input type="text" class="form-control form_val_popup_dp3" name="birthDay" placeholder="YYYY-MM-DD" />
                                        </div>
                                        <span class="help-block">{!!$errors->first('birthDay')!!}</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3 text-lg-right">
                                        <label for="address" class="col-form-label">Post Code</label>
                                    </div>
                                    <div class="col-xl-6 col-lg-8">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-location-arrow text-primary"></i></span>
                                            <input type="text" placeholder="Post Code"  id="PostCode" name="PostCode"
                                                   class="form-control col-xl-3 col-lg-3" >
                                            <input type="button" title="Search" value="Search" class="col-lg-2 col-xl-2 btn btn-info" style="margin-left: 2%">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3 text-lg-right">
                                        <label for="address" class="col-form-label">Country</label>
                                    </div>
                                    <div class="col-xl-4 col-lg-5">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-map-marker text-primary"></i></span>
                                            <input type="text" placeholder="Country "  id="country" name="country"  class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3 text-lg-right">
                                        <label for="city" class="col-form-label">City</label>
                                    </div>
                                    <div class="col-xl-4 col-lg-5">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-map-marker text-primary"></i></span>
                                            <input type="text" placeholder="City " name="city" id="city"
                                                   class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3 text-lg-right">
                                        <label for="pincode" class="col-form-label">Address</label>
                                    </div>
                                    <div class="col-xl-6 col-lg-8">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-map-marker text-primary"></i></span>
                                            <input type="text" placeholder="Address " name="address" id="address"
                                                   class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3 text-lg-right">
                                        <label>User Type </label>
                                    </div>
                                    <div class="col-xl-2 col-lg-3">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user-md text-primary"></i></span>
                                            <select class="form-control" name="userType">
                                                @foreach( $userType as $key => $value)
                                                    <option value=" {{$key}}" >{!! $value !!}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-9 add_user_checkbox_error ml-auto">
                                        <div>
                                            <label class="custom-control custom-checkbox">
                                                <input id="checkbox1" type="checkbox" name="check_active"
                                                       class="custom-control-input">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">Activate your account</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-9 ml-auto">
                                        <button class="btn btn-primary" type="submit">
                                            <i class="fa fa-user"></i>
                                            Add User
                                        </button>
                                        <button class="btn btn-warning" type="reset" id="clear">
                                            <i class="fa fa-refresh"></i>
                                            Reset
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {{--</form>--}}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>

        <!-- /.inner -->
    </div>
@stop
@section('script')
    @include('layouts.admin.script')
@stop
