@extends('backend.layouts.app')

@section('title', 'New Order')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="typo-wells">
                <div class="distracted">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="ghj">New Order</h3>
                        </div>
                        <div class="col-md-6">
                            <div class="pull-right">
                                <a href="{{ route('menus.index') }}" class="btn btn-default">Back</a>
                            </div>
                        </div>
                    </div>
                    <br>
                    <form method="post" action="{{ route('menus.store') }}" class="form-horizontal" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="row">
                            <div class="col-sm-12">
                                <label class="col-sm-3 text-right">Nama Menu</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="nama_menu">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-12">
                                <label class="col-sm-3 text-right">Jenis</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="jenis">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-12">
                                <label class="col-sm-3 text-right">Harga</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="harga">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-12">
                                <label class="col-sm-3 text-right">Gambar</label>
                                <div class="col-sm-8">
                                    <div class="well" style="background-color: white;">
                                        <input type="file" name="gambar" />
                                        <span class="small">Ekstensi gambar : jpeg,png,jpg.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
@endsection