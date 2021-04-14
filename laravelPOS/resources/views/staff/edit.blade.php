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
                  <h3 class="card-title">Ubah Nama Staff</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                {{-- @if ($supplier->id) --}}
                
                  <form>
                  <div class="card-body">
                    @csrf
                    <div class="form-group">
                      <label>Nama</label>
                      <input type="text" class="form-control" id="nama" placeholder="Nama Staff">
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
    var token = $("meta[name='csrf-token']").attr("content");

        $.ajax({

            url: "{{'api.staff.update'}}",
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

                window.location.href = "{{ route('staff') }}";

                $("#nama").val('');
            },

            error:function(response){
                console.log(nama);
            },

        })

    });
</script>
@endsection