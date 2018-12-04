@extends('layouts.admin.admin')
@section('css')
    @include('layouts.admin.css')
@stop
@section('title')
    <title>Admin User Change Password</title>
@stop
@section('content')
    <header class="head">

        <div class="main-bar">
            <div class="row">
                <div class="col-lg-6">
                    <h4 class="nav_top_align">
                        <i class="fa fa-user"></i>
                        Change Password
                    </h4>
                </div>
                <div class="col-lg-6">
                    <div class="float-right">
                        <ol class="breadcrumb nav_breadcrumb_top_align">
                            <li class="breadcrumb-item">
                                <a href="index.html">
                                    <i class="fa fa-home" data-pack="default" data-tags=""></i>
                                    Dashboard
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">Users</a>
                            </li>
                            <li class="breadcrumb-item active">Change Password</li>
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
                    <div class="form-title">
                        <h4>User Change Password</h4>
                    </div>
                    <form class="form-horizontal login_validator" id="tryitForm" action="#"
                          method="post">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group row">
                                    <div class="col-lg-3 text-lg-right">
                                        <label for="pwd" class="col-form-label">Password
                                            *</label>
                                    </div>
                                    <div class="col-xl-6 col-lg-8">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock text-primary"></i></span>
                                            <input type="password" name="password" id="pwd"
                                                   class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3 text-lg-right">
                                        <label for="cpwd" class="col-form-label">Confirm
                                            Password *</label>
                                    </div>
                                    <div class="col-xl-6 col-lg-8">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock text-primary"></i></span>
                                            <input type="password" name="confirmpassword" placeholder=" " id="cpwd"
                                                   class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-lg-9 ml-auto">
                                        <button class="btn btn-primary" type="submit">
                                            <i class="fa fa-user"></i>
                                            Change Password
                                        </button>
                                        <button class="btn btn-warning" type="reset" id="clear">
                                            <i class="fa fa-refresh"></i>
                                            Reset
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- /.inner -->
    </div>
@stop
@section('script')
    @include('layouts.admin.script')
@stop
