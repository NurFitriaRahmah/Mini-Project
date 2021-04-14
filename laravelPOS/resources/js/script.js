$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

var form_supplier   = $("#formsupplier").serialize();

function createSupplier(form_supplier) {
    
            $.ajax({
    
                url: "{{route('api.supplier.')}}",
                type: "POST",
                // cache: false,
                data: {form_supplier},
    
                success:function(success){
    
                    console.log(data)
                    //localStorage.setItem(token, email, password)
                    ;
    
                    window.location.href = "{{ route('supplier') }}";
    
                    $("#nama").val('');
                    $("#no_telp").val('');
                    $("#alamat").val('');
                },
    
                error:function(response){
                    console.log(data);
                },
            });
}
