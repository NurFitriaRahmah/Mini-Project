@extends('staff.index')


@section('content')

<section class="content">
    <div class="container-fluid">
    <div class="row">
    
        <div class="col-12 ">
            <h4>Daftar Supplier</h4>
        <!-- Default box -->
    <div class="card">
            
        {{-- <div class="card-header">

        </div> --}}
        <div class="col card-body">
            <form id="formsupplier">
                @csrf
                <div class="col box-body">
                    <div class="form-group">
                    <label>Nama Supplier</label>
                    <input type="text" class="form-control" id="nama" placeholder="Nama Supplier" name="nama">
                    </div>
                    <div class="form-group">
                    <label>No.Telp</label>
                    <input type="number" name="no_telp" class="form-control" id="no_telp" placeholder="No.Telp">
                    </div>
                    <div class="form-group">
                    <label>Alamat</label>
                    <textarea class="form-control" rows="5" name="alamat" id="alamat"></textarea>
    
                    </div>
                </div>
                <!-- /.box-body -->
    
                <div class="box-footer">
                    <button type="submit" class="btn btn-tambah btn-primary">Tambah</button>
                </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-back btn-primary" style="float: right" href="{{'supplier/back'}}">Back</button>
                </div>
                </form>
                
            </div>
        </div>
        <!-- /.card -->
        </div>
    </div>
    </div>
</section>

@endsection
