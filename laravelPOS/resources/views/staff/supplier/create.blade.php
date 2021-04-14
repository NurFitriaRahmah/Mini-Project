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
                  <h3 class="card-title">Tambah Data Supplier</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form>
                  <div class="card-body">
                    @csrf
                    <div class="form-group">
                      <label>Nama Supplier</label>
                      <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Supplier">
                    </div>
                    <div class="form-group">
                      <label>No.Telp</label>
                      <input type="text" class="form-control" id="no_telp" name="no_telp" placeholder="No.Telp">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat">
                      </div>
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
    var no_telp = $("#no_telp").val();
    var alamat = $("#alamat").val();
    var token = $("meta[name='csrf-token']").attr("content");

        $.ajax({

            url: "{{ route('api.supplier.store') }}",
            type: "POST",
            cache: false,
            data: {
                "nama": nama,
                "no_telp": no_telp,
                "alamat": alamat,
                "token": token
            },

            success:function(success){

                console.log(nama,no_telp,alamat)
                //localStorage.setItem(token, email, password)
                ;

                window.location.href = "{{ route('supplier') }}";

                $("id").data("id");
                $("#nama").val('');
                $("#no_telp").val('');
                $("#alamat").val('');
                
            },

            error:function(response){
                console.log(nama,no_telp,alamat);
            },

        })

    });

</script>
@endsection