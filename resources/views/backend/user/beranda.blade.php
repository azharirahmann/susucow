@extends('backend.layouts.app')

@section('title', 'Home')

@section('content')
    <div class="col-md-12">
        <div class="typo-wells">
            <div class="distracted">
                <h3 class="ghj">Welcome</h3>
                <div class="well text-center">
                    You are logged in as {{ Auth::guard('web')->user()->name }} !
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"> </div>
@endsection