<!-- Modal -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
  <form action="" method="post" id="addProductForm">
    @csrf
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addModalLabel">Add Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="errorMsg">

        </div>

       <div class="form-group">
        <label for="product_name">Product Name  </label>
        <input type="text" class="form-control" name="product_name" id="product_name">
       </div>
       <div class="form-group">
    <label for="size">Size</label>
    <select class="form-control" name="size" id="size">
        <option value="sm">SM</option>
        <option value="m">M</option>
        <option value="l">L</option>
        <option value="xl">XL</option>
        <option value="xxl">XXL</option>
    </select>
</div>
       <div class="form-group">
        <label for="total_amount">Total Amount</label>
        <input type="text" class="form-control" name="total_amount" id="total_amount">
       </div>



      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary add_product"> Save</button>
      </div>
    </div>
  </div>

</form>
</div>
