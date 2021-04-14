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
                  <h3 class="card-title">Tambah Data Pembelian</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form>
                  <div class="card-body">
                    @csrf
                    <div class="form-group">
                      <label>Tanggal</label>
                      <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="">
                    </div>
                    <div class="form-group">
                      <select name="produkname" id="" class="form-control">
                        @foreach ($produk as $p)
                            <option value="{{$p->id}}">{{$p->nama}}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <select name="suppliername" id="" class="form-control">
                        @foreach ($supplier as $s)
                            <option value="{{$s->id}}">{{$s->nama}}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <select name="staffname" id="" class="form-control">
                        @foreach ($staff as $st)
                            <option value="{{$st->id}}">{{$st->nama}}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <select name="produkname" id="" class="form-control">
                        @foreach ($produk as $p)
                            <option value="{{$p->id}}">{{$p->name}}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Total Barang</label>
                      <input type="number" class="form-control" id="jumlah" name="jumlah" placeholder="Total Barang">
                    </div>
                    <div class="form-group">
                        <label>Total Bayar</label>
                        <input type="text" class="form-control" id="harga" name="harga" placeholder="Total Bayar">
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