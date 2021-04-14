@extends('staff.dashboard')
@section('content')
    <div class="card">
        <div class="card-body">
            <button type="button" class="btn btn-primary" onclick="formtambah()" >
                Tambah Staff
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
                    <th>Nama</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($staff as $st)
                    <tr>
                        <td>{{$st->id}}</td>
                        <td>{{$st->nama}}</td>
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
    </div>
@endsection
@section('js')
    <script>
        function formtambah()
        {
            window.location = "{{'staff/create'}}";
        }
        function formubah()
        {
            window.location = "{{'staff/{st}/edit'}}";
        }
    </script>
@endsection