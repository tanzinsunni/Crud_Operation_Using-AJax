<!-- JavaScript code -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(document).ready(function(){
        // Add Product
        $(document).on('click','.add_product',function(e){
            e.preventDefault();
            let product_name=$('#product_name').val();
            let size=$('#size').val();
            let total_amount=$('#total_amount').val();
            $.ajax({
                url:"{{route('add.product')}}",
                method:'post',
                data: { product_name: product_name, size: size, total_amount: total_amount },
                success:function(res){
                    if(res.status=='success'){
                        $('#addModal').modal('hide');
                        $('#addProductForm')[0].reset();
                        $('.table').load(location.href+' .table');
                    }
                },
                error:function(err){
                    let error=err.responseJSON;
                    $.each(error.errors,function(index,value){
                        $('.errorMsg').append('<span class="text-danger">'+value+'</span>'+'<br>');
                    });
                }
            });
        });

        // Update Product
        $(document).on('click','.update_product_form',function(e){
            e.preventDefault();
            let id=$(this).data('id');
            let product_name=$(this).data('product_name');
            let size=$(this).data('size');
            let total_amount=$(this).data('total_amount');
            $('#up_id').val(id);
            $('#up_product_name').val(product_name);
            $('#up_size').val(size);
            $('#up_total_amount').val(total_amount);
        });

        $(document).on('click','.update_product',function(e){
            e.preventDefault();
            let up_id=$('#up_id').val();
            let up_product_name=$('#up_product_name').val();
            let up_size=$('#up_size').val();
            let up_total_amount=$('#up_total_amount').val();
            $.ajax({
                url:"{{route('update.product')}}",
                method:'post',
                data: { up_id:up_id,up_product_name:up_product_name, up_size:up_size, up_total_amount: up_total_amount },
                success:function(res){
                    if(res.status=='success'){
                        $('#upModal').modal('hide');
                        $('#upProductForm')[0].reset();
                        $('.table').load(location.href+' .table');
                    }
                },
                error:function(err){
                    let error=err.responseJSON;
                    $.each(error.errors,function(index,value){
                        $('.errorMsg').append('<span class="text-danger">'+value+'</span>'+'<br>');
                    });
                }
            });
        });

        // Delete Product
        $(document).on('click','.delete_product',function(e){
            e.preventDefault();
            let product_id=$(this).data('id');
            if(confirm('Are you sure you want to delete this product?')) {
                $.ajax({
                    url:"{{route('delete.product')}}",
                    method:'post',
                    data: { product_id: product_id },
                    success:function(res){
                        if(res.status=='success'){
                            $('.table').load(location.href+' .table');
                        }
                    }
                });
            }
        });
    });
</script>
