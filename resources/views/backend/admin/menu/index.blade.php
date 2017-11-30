@extends('backend.layouts.app')

@section('title', 'List Menu')

@section('header_script')
    <link rel="stylesheet" type="text/css" href="{{ asset('dash/js/DataTables/datatables.min.css') }}"/>
@endsection

@section('footer_script')
    <script type="text/javascript" charset="utf8" src="{{ asset('dash/js/DataTables/datatables.min.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#datatables').DataTable();
        } );
    </script>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="typo-wells">
                <div class="distracted">
                    <div class="row">
                        <div class="col-md-6"><h3 class="ghj">List Menu</h3></div>
                        <div class="col-md-6">
                            <div class="pull-right">
                                <a href="{{ route('menus.create') }}" class="btn btn-primary btn-md">Create New Menu</a>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="table-responsive">
                        <table id="datatables" class="table table-hover" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>#ID</th>
                                <th>Nama Menu</th>
                                <th>Jenis</th>
                                <th>Harga</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($menus as $menu)
                                <tr>
                                    <td>{{ $menu->id }}</td>
                                    <td>{{ $menu->nama_menu }}</td>
                                    <td>{{ $menu->jenis }}</td>
                                    <td>{{ $menu->harga }}</td>
                                    <td><a href="{{ route('menus.show', $menu) }}" class="btn btn-default btn-sm">View</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
@endsection