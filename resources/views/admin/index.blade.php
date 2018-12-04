@extends('layouts.admin.admin')
    @section('css')
        @include('layouts.admin.mainCss')
    @stop
    @section('title')
        <title>Admin Page</title>
    @stop
    @section('content')
        @include('admin.content')
    @stop
    @section('script')
        @include('layouts.admin.mainScript')
    @stop



