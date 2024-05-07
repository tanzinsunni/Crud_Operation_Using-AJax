<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Crud Operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel= "stylesheet" href= "https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" >

</head>
  <body>
    <h1></h1>

<div class="container">
<div class="row">

<div class="col-md-2"></div>
<div class="col-md-8">
<h1 class="mb-6 text-center">Crud Operation</h1>
<a  http="" class="btn btn-success my-3" data-bs-toggle="modal" data-bs-target="#addModal">Add Product</a>

<div class="table-data">
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Product Name</th>
      <th scope="col">Size</th>
      <th scope="col">Total Amount</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($product as $key=>$product)
    <tr>
      <th>{{$key+1}}</th>
      <td>{{$product->product_name}}</td>
      <td>{{$product->size}}</td>
      <td>{{$product->total_amount}}</td>
      <td>   <a href="" class="btn btn-success update_product_form" data-bs-toggle="modal" data-bs-target="#upModal"
        data-id="{{$product->id}}"
        data-product_name="{{$product->product_name}}"
        data-size="{{$product->size}}"
        data-total_amount="{{$product->total_amount}}"
        >

      <i class="las la-edit"></i> </a>

        <a href="" class="btn btn-danger delete_product" data-id="{{$product->id}}"> <i class="las la-trash">  </i> </a>
     </td>

    </tr>
@endforeach

  </tbody>
</table>
</div>
</div>
</div>






</div>








    @include('product_modal')
    @include('update_modal')
    @include('product_js')


</body>
</html>
