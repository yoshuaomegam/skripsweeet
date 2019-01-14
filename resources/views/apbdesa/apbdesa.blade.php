@extends('adminlte::page')

@section('title', 'Pelaporan')

@section('content_header')

@stop

@section('content')
<div class="row">

    
    <div class="col-md-1">
    </div>
    <div class="col-md-10">
            <div class="box box-info">
                    <div class="box-header">
                          <div class="box-body">
                              <div class="container" style="width: auto;">
                                  <div class="form-group">
                                      <h4>APBDesa Tahun {{$data->tahun_apbd}}</h4>
                                      <table>
                                      <tr>
                                        <td><h4>Desa </h4></td> <td><h4>:</h4></td> <td><h4>{{ ucfirst($desa->nama) }}</h4></td>
                                    </tr>
                                    <tr>
                                            <td><h4>Kepala Desa &nbsp;</h4></td> <td><h4>: &nbsp;</h4></td> <td><h4>{{ucfirst($desa->nama_kades)}}</h4></td>
                                        </tr>
                                    <tr>
                                            <td><h4>Kecamatan </h4></td> <td><h4>: </h4></td> <td><h4>{{ucfirst($kecamatan->nama)}}</h4></td>
                                    </tr>
                                    <tr>
                                        <td><h4>Status </h4></td> <td><h4>: </h4></td> <td><h4>@if($data->status==0)
                                            APBDesa belum dikonfirmasi
                                            @elseif($data->status==1)
                                            APBDesa
                                            @elseif($data->status==2)
                                            Perubahan APBDesa
                                            @elseif($data->status==3)
                                            Realisasi APBDesa
                                         @endif   </h4></td>
                                </tr>
                                    </table>
                                    <br>
                                   
                                        </div>
                                        
                                        </div>
                                        {!! Form::model($data,['route'=>['admin.pelaporan.konfirmasi', $data->id,],'method'=>'POST']) !!}
                                        {!! Form::button('Konfirmasi APBDesa', array('type'=>'submit','class'=>'btn btn-xs btn-success form-control konfirmasi', 'rel'=>'tooltip', 'title'=>'konfirmasi')) !!}
                                        {!! Form::close() !!} 
                                  </div>
                              </div>
<br>
          <div class="box box-info">
                  <div class="box-header with-border"><h3 class="box-title" style="margin-left: 15px;margin-bottom: 5px;" >Pendapatan Tahun {{$data->tahun_apbd}}</h3>
                      <td><a href="/admin/menupelaporan/{{$data->id}}/apbdesa/pendapatan" class="btn btn-xs btn-success fa fa-plus"  title="tambah" style="position:absolute;right:20px;"></a></td>
                    </div>
                        <div class="box-body">
                            <div class="container" style="width: auto;">
                                <div class="form-group">
                                    <h3>Total Pendapatan : Rp. {{number_format($total,0,",",".")}}</h3>
                                      <table id="pelaporan"  class="display table table-striped table-bordered" style="width:100%">
                                              <thead>
                                              <tr>
                                                  <th width="10">No</th>
                                                  <th>Nama Pendapatan</th>
                                                  <th>Pendapatan</th>
                                                  
                                                    <th width="20"></th>
                                                  <th width="20"></th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                        @foreach ($data2 as $index =>$pendapatan)
                                        <?php $no=1;?>
                                        <tr>
                                    <td>{{$index+1}}</td>
                                    <td>{{$pendapatan->nama}}</td>
                                    <td>Rp. {{number_format($pendapatan->pendapatan,0,",",".")}}</td>
                                    <td><a href="/admin/menupelaporan/{{$data->id}}/apbdesa/editpendapatan/{{$pendapatan->id}}" class="btn btn-xs btn-success fa fa-edit"  title="edit" ></td>
                                        <td>
                                                {!! Form::model($data,['route'=>['admin.pendapatan.delete', $data->id, $pendapatan->id],'method'=>'DELETE', 'id'=>'form']) !!}
                                               {!! Form::button('<i class="fa fa-trash" aria-hidden="true"></i>', array('type'=>'submit','class'=>'btn btn-xs btn-danger', 'rel'=>'tooltip', 'title'=>'Hapus')) !!}
                                               {!! Form::close() !!}
                                         </td>       
                                </tr>
                                
                                
                                    @endforeach
                                  </tbody>
                                          <tfoot>
                                      
                                          </tfoot>
                                          </table>
                                      </div>
                                      </div>
                                </div>
                            </div>
                            <hr>
                            <div class="box box-info">
                                <div class="box-header with-border"><h3 class="box-title" style="margin-left: 15px;margin-bottom: 5px;" > Grafis Belanja Tahun {{$data->tahun_apbd}}</h3>
                                   
                                  </div>
                                      <div class="box-body">
                                          <div class="container" style="width: auto;">
                                              <div class="form-group">
                                                <div id="chart-container">
                                                    <canvas id="belanja" style="height:60vh; width:80vw"></canvas>
                                                  </div>
                                                    </div>
                                                    </div>
                                              </div>
                                          </div>    

                              <hr>
                            <div class="box box-info">
                                    <div class="box-header with-border"><h3 class="box-title" style="margin-left: 15px;margin-bottom: 5px;" >Belanja Tahun {{$data->tahun_apbd}}</h3>
                                        <td><a href="/admin/menupelaporan/{{$data->id}}/apbdesa/belanja" class="btn btn-xs btn-success fa fa-plus"  title="tambah" style="position:absolute;right:20px;"></a></td>
                                      </div>
                                          <div class="box-body">
                                              <div class="container" style="width: auto;">
                                                  <div class="form-group">
                                                      <h3>Total Belanja : Rp. {{number_format($total2,0,",",".")}}</h3>
                                                        <table id="pelaporan"  class="display table table-striped table-bordered" style="width:100%">
                                                                <thead>
                                                                <tr>
                                                                    <th width="10">No</th>
                                                                    <th>Nama Belanja</th>
                                                                    <th>Belanja</th>
                                                                    <th>Tipe Belanja</th>
                                                                    <th width="20"></th>
                                                                      <th width="20"></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                          @foreach ($data4 as $index =>$belanja)
                                                          <?php $no=1;?>
                                                          <tr>
                                                      <td>{{$index+1}}</td>
                                                      <td>{{$belanja->nama}}</td>
                                                      <td>Rp. {{number_format($belanja->belanja,0,",",".")}}</td>
                                                      <td>{{$belanja->tipe}}</td>
                                                      <td><a href="/admin/menupelaporan/{{$data->id}}/apbdesa/editbelanja/{{$belanja->id}}" class="btn btn-xs btn-success fa fa-edit"  title="edit" ></td>
                                                          <td>
                                                                  {!! Form::model($data,['route'=>['admin.belanja.delete', $data->id, $belanja->id],'method'=>'DELETE', 'id'=>'form']) !!}
                                                                 {!! Form::button('<i class="fa fa-trash" aria-hidden="true"></i>', array('type'=>'submit','class'=>'btn btn-xs btn-danger', 'rel'=>'tooltip', 'title'=>'Hapus')) !!}
                                                                 {!! Form::close() !!}
                                                           </td>       
                                                  </tr>
                                                  
                                                  
                                                      @endforeach
                                                    </tbody>
                                                            <tfoot>
                                                        
                                                            </tfoot>
                                                            </table>
                                                        </div>
                                                        </div>
                                                  </div>
                                              </div>    
                            <hr>
                            <div class="box box-info">
                                <div class="box-header with-border"><h3 class="box-title" style="margin-left: 15px;margin-bottom: 5px;" >Pembiayaan Tahun {{$data->tahun_apbd}}</h3>
                                    <td><a href="/admin/menupelaporan/{{$data->id}}/apbdesa/pembiayaan" class="btn btn-xs btn-success fa fa-plus"  title="tambah" style="position:absolute;right:20px;"></a></td>
                                  </div>
                                      <div class="box-body">
                                          <div class="container" style="width: auto;">
                                              <div class="form-group">
                                                  <h3>Total Penerimaan Pembiayaan : Rp. {{number_format($totalpenerimaan,0,",",".")}}</h3>
                                                  <h3>Total Pengeluaran Pembiayaan : Rp. {{number_format($totalpengeluaran,0,",",".")}}</h3>
                                                    <table id="pembiayaan"  class="display table table-striped table-bordered" style="width:100%">
                                                            <thead>
                                                            <tr>
                                                                <th width="10">No</th>
                                                                <th>Nama Pembiayaan</th>
                                                                <th>Pembiayaan</th>
                                                                <th>Tipe Pembiayaan</th>
                                                                  <th width="20"></th>
                                                                <th width="20"></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                      @foreach ($data3 as $index =>$pembiayaan)
                                                      <?php $no=1;?>
                                                      <tr>
                                                  <td>{{$index+1}}</td>
                                                  <td>{{$pembiayaan->nama}}</td>
                                                  <td>Rp. {{number_format($pembiayaan->pembiayaan,0,",",".")}}</td>
                                                  <td>@if($pembiayaan->nama == "Pembentukan dana cadangan" || $pembiayaan->nama=="Penyertaan modal desa")
                                                        Pengeluaran Pembiayaan Desa
                                                      @else
                                                      Penerimaan Pembiayaan Desa
                                                        @endif
                                                  </td>
                                                  <td><a href="/admin/menupelaporan/{{$data->id}}/apbdesa/editpembiayaan/{{$pembiayaan->id}}" class="btn btn-xs btn-success fa fa-edit"  title="edit" ></td>
                                                      <td>
                                                              {!! Form::model($data,['route'=>['admin.pembiayaan.delete', $data->id, $pembiayaan->id],'method'=>'DELETE', 'id'=>'form']) !!}
                                                             {!! Form::button('<i class="fa fa-trash" aria-hidden="true"></i>', array('type'=>'submit','class'=>'btn btn-xs btn-danger', 'rel'=>'tooltip', 'title'=>'Hapus')) !!}
                                                             {!! Form::close() !!}
                                                       </td>       
                                              </tr>
                                              
                                              
                                                  @endforeach
                                                </tbody>
                                                        <tfoot>
                                                    
                                                        </tfoot>
                                                        </table>
                                                    </div>
                                                    </div>
                                              </div>
                                          </div>
                        </div>
                    </div>
                </div>
    

@stop


@section('css')
@stop

@section('js')


<script>$(document).ready(function() {
        $('table.display').DataTable();
    } );</script>
    <script>    
            $('.konfirmasi').on('click', function(e) {
                var form = e.target.form;
                e.preventDefault();
                swal({
                    title: "Apakah Anda yakin untuk mengonfirmasi APBDesa ini?",
                    // text: "Once deleted, you will not be able to recover this imaginary file!",
                    icon: "warning",
                    // buttons: true,
                    buttons: ["Tidak", "Konfirmasi"],
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        this.form.submit();
                    } else {
                        swal("Dibatalkan");
                    } 
                });
                }); 
          </script>
<script>    
        $('.btn-danger').on('click', function(e) {
            var form = e.target.form;
            e.preventDefault();
            swal({
                title: "Apakah Anda yakin untuk menghapus data ini?",
                // text: "Once deleted, you will not be able to recover this imaginary file!",
                icon: "warning",
                // buttons: true,
                buttons: ["Batal", "Hapus"],
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    this.form.submit();
                } else {
                    swal("Dibatalkan");
                } 
            });
            }); 
      </script>
      <script>
        var randomScalingFactor = function() {
            return Math.round(Math.random() * 100);
          };
          var randomColorFactor = function() {
            return Math.round(Math.random() * 255);
          };
          var randomColor = function(opacity) {
            return 'rgba(' + randomColorFactor() + ',' + randomColorFactor() + ',' + randomColorFactor() + ',' + (opacity || '.3') + ')';
          };
          var pemerintahan={{$pemerintahan}}
          var pembangunan={{$pembangunan}}
          var pembinaan={{$pembinaan}}
          var pemberdayaan={{$pemberdayaan}}
          var takterduga={{$takterduga}}
          var config = {
            type: 'doughnut',
            data: {
              datasets: [{
                data: [
                    pemerintahan,
                    pembangunan,
                    pembinaan,
                    pemberdayaan,
                    takterduga,
                ],
                backgroundColor: [
                  "#F7464A",
                  "#46BFBD",
                  "#FDB45C",
                  "#949FB1",
                  "#4D5360",
                ],
                label: 'Expenditures'
              }],
              labels: [
                "pemerintahan",
                "pembangunan",
                "pembinaan",
                "pemberdayaan",
                "takterduga"
              ]
            },
            options: {
              responsive: true,
              legend: {
                position: 'bottom',
              },
              title: {
                display: false,
                text: 'Chart.js Doughnut Chart'
              },
              animation: {
                animateScale: true,
                animateRotate: true
              },
              tooltips: {
                callbacks: {
                  label: function(tooltipItem, data) {
                      var dataset = data.datasets[tooltipItem.datasetIndex];
                    var total = dataset.data.reduce(function(previousValue, currentValue, currentIndex, array) {
                      return previousValue + currentValue;
                    });
                    var currentValue = dataset.data[tooltipItem.index];
                    var percentage = Math.floor(((currentValue/total) * 100)+0.5);         
                    return percentage + "%";
                  }
                }
              }
            }
          };
          
          
          var ctx = document.getElementById("belanja").getContext("2d");
          window.myDoughnut = new Chart(ctx, config); {
          
          }      
      </script>
      <script type="text/javascript" src="js/Chart.min.js"></script>      
      <script src="{{ asset('js/sweetalert.min.js') }}"></script>
  <!-- Include this after the sweet alert js file -->
@include('sweet::alert')
@stop