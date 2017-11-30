@extends('backend.layouts.app')

@section('title', 'Menu | '. $menu->nama_menu)

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="typo-wells">
                <div class="distracted">
                    <h3 class="ghj">Menu : {{ $menu->nama_menu }}</h3>
                    <form method="post" action="{{ route('menus.update', $menu) }}" class="form-horizontal" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('put') }}

                        <div class="row">
                            <div class="col-sm-12">
                                <label class="col-sm-3 text-right">Nama Menu</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="nama_menu" value="{{ $menu->nama_menu }}">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-12">
                                <label class="col-sm-3 text-right">Jenis</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="jenis" value="{{ $menu->jenis }}">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-12">
                                <label class="col-sm-3 text-right">Harga</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="harga" value="{{ $menu->harga }}">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-12">
                                <label class="col-sm-3 text-right">Gambar</label>
                                <div class="col-sm-8">
                                    <a href="{{ route('getImage', ['location' => 'menu', 'filename' => $menu->gambar]) }}">
                                        <img src="{{asset('thumbnail/'.$menu->gambar) }}" class="img">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-12">
                                <label class="col-sm-3 text-right">Upload Gambar</label>
                                <div class="col-sm-8">
                                    <div class="well" style="background-color: white;">
                                        <input type="file" name="gambar" />
                                        <span class="small">Ekstensi gambar : jpeg,png,jpg.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary btn-block">Edit</button>
                    </form>
                    <br>
                    <div class="btn-group col-md-12" role="group">
                        <div class="col-md-6">
                            <a href="{{ route('menus.index') }}" class="btn btn-default btn-block">Back</a>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('menus.destroy', $menu) }}"
                               onclick="event.preventDefault(); document.getElementById('delete-form').submit();"
                               class="btn btn-danger btn-block">
                                Delete</a>
                        </div>
                        <form id="delete-form" action="{{ route('menus.destroy', $menu) }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                            {{ method_field('delete') }}
                        </form>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
@endsection