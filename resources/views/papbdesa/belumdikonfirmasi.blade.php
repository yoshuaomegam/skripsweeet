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
                    <div class="box box-info">
                            <div class="box-header">
                                  <div class="box-body">
                                      <div class="container" style="width: auto;">
                                          <div class="form-group">
                                           <h5 style="text-align:center;">APBDesa belum dikonfirmasi (diisi) tidak bisa memasukkan Perubahan APBDesa</h5>    
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


<script>$(document).ready(function(){
    $('#pelaporan').dataTable( {
        "columnDefs": [
            { "orderable": false, 
            "targets": [3],
         }
          ]
      } );
      $('[data-toggle="edit"]').tooltip();   
      $('[data-toggle="hapus"]').tooltip(); 
      $('[data-toggle="tambah"]').tooltip();
      $('[data-toggle="import"]').tooltip();  
});</script>
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

      <script src="{{ asset('js/sweetalert.min.js') }}"></script>
  <!-- Include this after the sweet alert js file -->
@include('sweet::alert')
@stop