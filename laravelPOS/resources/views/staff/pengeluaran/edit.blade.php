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
                  <h3 class="card-title">Ubah Pengeluaran</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                {{-- @if ($supplier->id) --}}
                
                  <form>
                  <div class="card-body">
                    @csrf
                    <div class="form-group">
                      <label>Pengeluaran</label>
                      <input type="text" class="form-control" id="nama" placeholder="Pengeluaran">
                    </div>
                    <div class="form-group">
                      <label>Tanggal</label>
                      <input type="date" class="form-control" id="tanggal" placeholder="" >
                    </div>
                    <div class="form-group">
                        <label>Harga</label>
                        <input type="text" class="form-control" id="harga" placeholder="Harga" >
                      </div>
                  <!-- /.card-body -->
  
                  <div class="card-footer">
                    <button type="submit" class="btn btn-ubah btn-primary">Ubah</button>
                  </div>
                </form>
                    
                {{-- @endif --}}
              </div>
            </div>
          </div>
        </div>
    </section>         
    <!-- /.card -->
@endsection
@section('js')
<script>
    $(".btn-ubah").click( function() {

    var nama = $("#nama").val();
    var tanggal = $("#tanggal").val();
    var harga = $("#harga").val();
    var token = $("meta[name='csrf-token']").attr("content");

        $.ajax({

            url: "{{'api.pengeluaran.update'}}",
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