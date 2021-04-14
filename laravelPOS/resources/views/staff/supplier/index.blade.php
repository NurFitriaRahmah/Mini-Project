@extends('staff.dashboard')

@section('content')
    
<div class="card">
    <div class="card-body">
        <button type="button" class="btn btn-primary" onclick="formtambah()" >
            Tambah Data Supplier
        </button>

        <div id="datatable_wrapper" class="col-sm-12 col-md-2 float-right">
            <label>
                Search : 
                <input type="search" class="form-control form-control-sm " placeholder="Cari Supplier....">
            </label>
        </div>
        <table id="supplierForm" class="table table-bordered table-striped center">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>No.Telp</th>
                <th>Alamat</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($supplier as $s)
                <tr>
                    <td>{{$s->id}}</td>
                    <td>{{$s->nama}}</td>
                    <td>{{$s->no_telp}}</td>
                    <td>{{$s->alamat}}</td>
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
        window.location = "{{'supplier/create'}}";
    }
    function formubah()
    {
        window.location = "{{'supplier/{s}/edit'}}";
    }
   
</script>
@endsection

