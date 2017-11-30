@extends('backend.layouts.app')

@section('title', 'Table Reservation')

@section('header_script')
    <link href="{{ asset('dash/datetimepicker/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="typo-wells">
                <div class="distracted">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="ghj">Table Reservation</h3>
                        </div>
                    </div>
                    <br>
                    <form method="post" action="#" class="form-horizontal" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="row">
                            <div class="col-sm-12">
                                <label class="col-sm-3 text-right">Nama</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="nama">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-12">
                                <label class="col-sm-3 text-right">Nomor HP</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="nomor_hp">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-12">
                                <label class="col-sm-3 text-right">Nomor Meja</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="nomor_meja">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-12">
                                <label class="col-sm-3 text-right">Kapasitas</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control disabled" name="kapasitas">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-12">
                                <label class="col-sm-3 text-right">Tanggal</label>
                                <div class="col-sm-8" style="margin-left: 14px;">
                                    <div class="form-group">
                                        <div class='input-group date' id='datetimepicker1'>
                                            <input type='text' class="form-control" name="tanggal" />
                                            <span class="input-group-addon">
                                                        <span class="glyphicon glyphicon-calendar"></span>
                                                    </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-12">
                                <label class="col-sm-3 text-right">Jam</label>
                                <div class="col-sm-8" style="margin-left: 14px;">
                                    <div class="form-group">
                                        <div class='input-group date' id='datetimepicker3'>
                                            <input type='text' class="form-control" name="jam"/>
                                            <span class="input-group-addon">
                                                        <span class="glyphicon glyphicon-time"></span>
                                                    </span>
                                        </div>
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

@section('footer_script')
    <script src="{{ asset('dash/datetimepicker/js/Moment.min.js') }}"></script>
    <script src="{{ asset('dash/datetimepicker/js/bootstrap-datetimepicker.min.js') }}"></script>
    <script type="text/javascript">
        $(function () {
            $('#datetimepicker1').datetimepicker({
                format: 'YYYY-M-DD'
            });
        });
    </script>
    <script type="text/javascript">
        $(function () {
            $('#datetimepicker3').datetimepicker({
                format: 'HH:mm'
            });
        });
    </script>
@endsection