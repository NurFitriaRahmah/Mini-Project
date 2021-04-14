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
                  <h3 class="card-title">Pengeluaran</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form>
                  <div class="card-body">
                    @csrf
                    <div class="form-group">
                      <label>Pengeluaran</label>
                      <input type="text" class="form-control" id="nama" name="nama" placeholder="Pengeluaran">
                    </div>
                    <div class="form-group">
                      <label>Tanggal</label>
                      <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>Harga</label>
                        <input type="text" class="form-control" id="harga" name="harga" placeholder="Harga">
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
    var tanggal = $("#tanggal").val();
    var harga = $("#harga").val();
    var token = $("meta[name='csrf-token']").attr("content");

        $.ajax({

            url: "{{ route('api.pengeluaran.store') }}",
            type: "POST",
            cache: false,
            data: {
                "nama": nama,
                "tanggal": tanggal,
                "harga": harga,
                "token": token
            },

            success:function(success){

                console.log(nama,tanggal,harga)
                //localStorage.setItem(token, email, password)
                ;

                window.location.href = "{{ route('pengeluaran') }}";

                $("id").data("id");
                $("#nama").val('');
                $("#tanggal").val('');
                $("#harga").val('');
                
            },

            error:function(response){
                console.log(nama,tanggal,harga);
            },

        })

    });

</script>
@endsection