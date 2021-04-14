@extends('staff.dashboard')

@section('content')
    
<div class="card">
    <div class="card-body">
        <button type="button" class="btn btn-primary" onclick="formtambah()" >
            Tambah Pembelian
        </button>

        <div id="datatable_wrapper" class="col-sm-12 col-md-2 float-right">
            <label>
                Search : 
                <input type="search" class="form-control form-control-sm " placeholder="">
            </label>
        </div>
        <table id="supplierForm" class="table table-bordered table-striped center">
        <thead>
            <tr>
                <th>#</th>
                <th>Tanggal</th>
                <th>Barang</th>
                <th>Supplier</th>
                <th>Pembelian</th>
                <th>Jumlah Barang</th>
                <th>Harga<br>(Rp.)</th>
                <th>Staff</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pembelian as $b)
                <tr>
                    <td>{{$b->id}}</td>
                    <td>{{$b->tanggal}}</td>
                    <td>{{$b->produk->nama}}</td>
                    <td>{{$b->supplier->nama}}</td>
                    <td>{{$b->jumlah}}</td>
                    <td>{{$b->harga}}</td>
                    <td>{{$b->staff->nama}}</td>
                    <td>
                    <button class="btn btn-info btn-sm" id="" onclick="formubah()">
                        <i class="fas fa-pencil-alt">
                        </i>
                        Edit
                    </button>
                    <button class="btn btn-danger btn-sm" id="delete" onclick="delete()">
                        <i class="fas fa-trash">
                        </i>
                        Delete
                    </button>
                    </td>
                </tr>
                
            @endforeach
            </tbody>
       
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->

 

@endsection

@section('js')
{{-- <script src="/adminlte/dist/js/adminlte.min.js"></script> --}}
<script>
    function formtambah()
    {
        window.location = "{{'pembelian/create'}}";
    }
    function formubah()
    {
        window.location = "{{'pembelian/{b}/edit'}}";
    }
</script>
@endsection

