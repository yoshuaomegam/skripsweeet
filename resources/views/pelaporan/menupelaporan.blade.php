{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Menu Pelaporan')

@section('content_header')

@stop

@section('content')

<div class="box">
        <div class="box-header with-border">
                <a href="{{ url()->previous() }}" class="fa fa-chevron-circle-left" aria-hidden="true"></a>
          <h3 class="box-title">APBDesa tahun {{$data->tahun_apbd}}</h3>
          <div class="box-tools pull-right">
          </div><!-- /.box-tools -->
        </div><!-- /.box-header -->
        <div class="box-body">
                <!-- Apply any bg-* class to to the info-box to color it -->


                      <div class="info-box bg-yellow">
                            <span class="info-box-icon"><i class="fa fa-files-o"></i></span>
                            <div class="info-box-content">
                              <span class="info-box-text"><a href="/admin/menupelaporan/{{$data->id}}/apbdesa" style="color:white;">APBDesa tahun {{$data->tahun_apbd}}</span>
                              <span class="info-box-number">41,410</span>
                              <!-- The progress section is optional -->
                              <div class="progress">
                                <div class="progress-bar" style="width: 100%"></div>
                              </div>
                              <span class="progress-description">
                                70% Increase in 30 Days
                              </span>

                              
                            </div><!-- /.info-box-content -->
                          </div><!-- /.info-box -->

                          <div class="info-box bg-red">
                            <span class="info-box-icon"><i class="fa fa-tasks"></i></span>
                            <div class="info-box-content">
                    
                              <span class="info-box-text"> <a href="/admin/menupelaporan/{{$data->id}}/papbdesa" style="color:white;"> PERUBAHAN APBDESA TAHUN {{$data->tahun_apbd}}</a></span>
                              <span class="info-box-number">Total Dana 41,410</span>
                              <!-- The progress section is optional -->
                              <div class="progress">
                                <div class="progress-bar" style="width: 100%"></div>
                              </div>
                              <span class="progress-description">
                                70% Increase in 30 Days
                              </span>
                            </div><!-- /.info-box-content -->
                          </div><!-- /.info-box -->

                          <div class="info-box bg-green">
                            <span class="info-box-icon"><i class="fa fa-tasks"></i></span>
                            <div class="info-box-content">
                    
                              <span class="info-box-text"> <a href="/admin/menupelaporan/{{$data->id}}/rapbdesa" style="color:white;"> PERUBAHAN APBDESA TAHUN {{$data->tahun_apbd}}</a></span>
                              <span class="info-box-number">Total Dana 41,410</span>
                              <!-- The progress section is optional -->
                              <div class="progress">
                                <div class="progress-bar" style="width: 100%"></div>
                              </div>
                              <span class="progress-description">
                                70% Increase in 30 Days
                              </span>
                            </div><!-- /.info-box-content -->
                          </div><!-- /.info-box -->
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop