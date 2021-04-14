@extends('dashboard.index')

@section('name','Staff')
@section('container')
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
        <li class="nav-item menu-open">
        <a href="#" class="nav-link active">
            <i class="nav-icon fas bi fa-list-alt"></i>
            <p>
            Menu
            <i class="right fas fa-angle-left"></i>
            </p>
        </a>
       
        <ul class="nav nav-treeview">
            <li class="nav-item" role="staff" >
                <div class="nav-link" id="pembelian" onclick="staff()">
                    <i class="far nav-icon"></i>
                    <p>Daftar Staff</p>
                </div>
            </li>
            <li class="nav-item" role="staff" >
                <div class="nav-link" id="pembelian" onclick="pembelian()">
                    <i class="far nav-icon"></i>
                    <p>Pembelian</p>
                </div>
            </li>
            
            <li class="nav-item">
            <div class="nav-link" id="supplier" onclick="supplier()">
                <i class="far nav-icon"></i>
                <p>Supplier</p>
            </div>
            </li>
            <li class="nav-item">
                <div class="nav-link" id="produk" onclick="produk()">
                    <i class="far nav-icon"></i>
                    <p>Produk</p>
                </div>
            </li>
            <li class="nav-item">
                <div class="nav-link" id="kategori" onclick="kategori()">
                    <i class="far nav-icon"></i>
                    <p>Kategori</p>
                </div>
            </li>
            <li class="nav-item">
                <div class="nav-link" id="pengeluaran" onclick="pengeluaran()">
                    <i class="far nav-icon"></i>
                    <p>Pengeluaran</p>
                </div>
            </li>
        </ul>
        </li>

       

        

@endsection
@section('js')
<script>
    function staff()
    {
        window.location = "{{'staff/daftar'}}";
    }
    function pembelian()
    {
        window.location = "{{'pembelian'}}";
    }
    function supplier()
    {
        window.location = "{{'supplier'}}";
    }
    function produk()
    {
        window.location = "{{'produk'}}";
    }
    function kategori()
    {
        window.location = "{{'kategori'}}";
    }
    function pengeluaran()
    {
        window.location = "{{'pengeluaran'}}";
    }
    
</script>
@endsection
