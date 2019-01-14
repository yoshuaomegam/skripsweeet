@extends('adminlte::page')

@section('title', 'Pelaporan')

@section('content_header')

@stop

@section('content')  
                <div class="box box-info">
                    <div class="box-header with-border"><h3 class="box-title" style="margin-left: 15px;margin-bottom: 5px;" >APBDesa Tahun {{$data->tahun_apbd}}</h3>
                        
                      </div>
                      
                          <div class="box-body">
                              <div class="container" style="width: auto;">
                                    @if (count($errors) > 0)
                                    <div class="alert alert-danger">
                                        <strong>Whoops!</strong> Ada yang salah<br><br> 
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                    </div>
                              @endif
                                  <div class="form-group">
                                    {!! Form::model($data,['route'=>['admin.pembiayaan.update', $data->id_pelaporan,$data->id],'method'=>'POST']) !!}
                                    <div class="form-group">
                                            {{ Form::label('name', 'Name') }}
                                            <select class="form-control" name="nama" id="nama">
                                                @foreach($dropdown as $key=>$drop)
                                                <option value = "<?php echo $drop; ?>" 
                                                    <?php
                                                        if ($drop == $data->nama){
                                                            echo 'selected="selected"';
                                                        } 
                                                    ?> >
                                                    <?php echo $drop; ?> 
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    
                                        <div class="form-group">
                                            {{ Form::label('Pembiayaan', 'Pembiayaan') }}
                                            <div class="input-group margin-bottom-sm">
                                                <span class="input-group-addon">Rp.</span>
                                    <input type="text" id="pembiayaan" name="pembiayaan" value="{{$data->pembiayaan}}" class="form-control perencanaan_list" required></td>
                                        </div>
                                        </div>
                            </div>

                            {{ Form::submit('Tambah',  array('class'=>'form-control btn btn-success'))}}     
                            {!! Form::close() !!}  
                      
@stop


@section('css')
@stop

@section('js')
<script src="{{ asset('js/jquery.mask.js') }}"></script>
<script type="text/javascript">

    $(document).ready(function(){      

      var postURL = "<?php echo url('addmore'); ?>";

      var i=1;  


      $('#add').click(function(){  

           i++;  

           $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"><td><input type="file" name="file[]" placeholder="File" class="form-control file_list"></td><td><input type="text" name="deskripsi[]" placeholder="Deskripsi" class="form-control deskripsi_list"></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove"><span class="glyphicon glyphicon-remove"></span></button></td></tr>');  

      });  


      $(document).on('click', '.btn_remove', function(){  

           var button_id = $(this).attr("id");   

           $('#row'+button_id+'').remove();  

      });  


      $.ajaxSetup({

          headers: {

            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

          }

      });


      $('#submit').click(function(){            

           $.ajax({  

                url:postURL,  

                method:"POST",  

                data:$('#add_name').serialize(),

                type:'json',

                success:function(data)  

                {

                    if(data.error){

                        printErrorMsg(data.error);

                    }else{

                        i=1;

                        $('.dynamic-added').remove();

                        $('#add_name')[0].reset();

                        $(".print-success-msg").find("ul").html('');

                        $(".print-success-msg").css('display','block');

                        $(".print-error-msg").css('display','none');

                        $(".print-success-msg").find("ul").append('<li>Record Inserted Successfully.</li>');

                    }

                }  

           });  

      });  


      function printErrorMsg (msg) {

         $(".print-error-msg").find("ul").html('');

         $(".print-error-msg").css('display','block');

         $(".print-success-msg").css('display','none');

         $.each( msg, function( key, value ) {

            $(".print-error-msg").find("ul").append('<li>'+value+'</li>');

         });

      }

    });  

</script>
<script>
$(document).ready(function(){
    $('#pembiayaan').mask('000.000.000.000.000.000.000.000', {reverse: true});
})
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


      <script src="{{ asset('js/sweetalert.min.js') }}"></script>
  <!-- Include this after the sweet alert js file -->
@include('sweet::alert')
@stop