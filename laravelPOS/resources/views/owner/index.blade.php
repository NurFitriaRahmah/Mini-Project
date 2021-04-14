@extends('dashboard.index')
@section('name','Owner')
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
            <li class="nav-item">
                <li class="nav-item menu-open">
                    <a href="" class="nav-link">
                        <i class="far"></i>
                            <p>Laporan Harian</p>
                        <i class="right fas fa-angle-left"></i>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item" role="staff" >
                            <a href="" class="nav-link">
                                <i class="far  nav-icon"></i>
                                <p>Total Pemasukan</p>
                            </a>
                        </li>
                        
                        <li class="nav-item" role="cashier" >
                            <a href="./index2.html" class="nav-link">
                                <i class="far  nav-icon"></i>
                                <p>Total Pengeluaran</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./index3.html" class="nav-link active">
                                <i class="far  nav-icon"></i>
                                <p>Kasir</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </li>
            
            <li class="nav-item" role="cashier" >
                <a href="./index2.html" class="nav-link">
                    <i class="far"></i>
                    <p>Laporan Bulanan</p>
                    <i class="right fas fa-angle-left"></i>
                </a>
            <ul class="nav nav-treeview">
                        <li class="nav-item" role="staff" >
                            <a href="" class="nav-link">
                                <i class="far  nav-icon"></i>
                                <p>Stok Barang</p>
                            </a>
                        </li>
                        
                        <li class="nav-item" role="cashier" >
                            <a href="./index2.html" class="nav-link">
                                <i class="far  nav-icon"></i>
                                <p>Pemasukan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./index3.html" class="nav-link active">
                                <i class="far  nav-icon"></i>
                                <p>Pengeluaran</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./index3.html" class="nav-link active">
                                <i class="far  nav-icon"></i>
                                <p>Absensi Kasir</p>
                            </a>
                        </li>
                    </ul>
            </li>
        </ul>
        </li>

@endsection

<script>
    $.ajax({
        url: "{{url('api.profile')}}",
        headers: {
            Authorization: "Bearer" + localStorage.getItem('token')
        },
        method: "GET",
        succes: function(data){
            if (data.role == 'owner'){
                $('#user_dashboard').text('Dasboard.staff')
                $('#username').text(data.name)
                // $('#acces_user_dashboard').removeAttr('hidden')
            }else if(data.role.id == 2){
                $('#user_dashboard').text('Dashboard.cashier')
            }else{
                window.location.replace('login')
            }
        }
    })
</script>