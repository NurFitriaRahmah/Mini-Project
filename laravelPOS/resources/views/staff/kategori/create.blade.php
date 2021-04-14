@extends('staff.dashboard')
@section('content')
     <!-- Main content -->
     <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Tambah Kategori</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form>
                  <div class="card-body">
                    @csrf
                    <div class="form-group">
                      <label>Kategori</label>
                      <input type="text" class="form-control" id="nama" name="nama" placeholder="Kategori">
                    </div>
                  <!-- /.card-body -->
  
                  <div class="card-footer">
                    <button type="submit" class="btn btn-tambah btn-primary">Tambah</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
     </section>
              <!-- /.card -->
@endsection
@section('js')
<script>

    $(".btn-tambah").click( function() {
    
    
    var nama = $("#nama").val();
    var token = $("meta[name='csrf-token']").attr("content");

        $.ajax({

            url: "{{ route('api.kategori.store') }}",
            type: "POST",
            cache: false,
            data: {
                "nama": nama,
                "token": token
            },

            success:function(success){

                console.log(nama)
                //localStorage.setItem(token, email, password)
                ;

                window.location.href = "{{ route('kategori') }}";

                $("id").data("id");
                $("#nama").val('');
                
            },

            error:function(response){
                console.log(nama);
            },

        })

    });

</script>
@endsection