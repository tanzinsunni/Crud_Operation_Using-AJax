<!-- Modal -->
<div class="modal fade" id="upModal" tabindex="-1" role="dialog" aria-labelledby="upModalLabel" aria-hidden="true">
  <form action="" method="post" id="upProductForm">
    @csrf
   <input type="hidden" id="up_id">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="upModalLabel">Update Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="errorMsg">

        </div>

       <div class="form-group">
        <label for="up_product_name">Product Name  </label>
        <input type="text" class="form-control" name="up_product_name" id="up_product_name">
       </div>
       <div class="form-group">
    <label for="up_size">Size</label>
    <select class="form-control" name="up_size" id="up_size">
        <option value="sm">SM</option>
        <option value="m">M</option>
        <option value="l">L</option>
        <option value="xl">XL</option>
        <option value="xxl">XXL</option>
    </select>
</div>
       <div class="form-group">
        <label for="up_total_amount">Total Amount</label>
        <input type="text" class="form-control" name="up_total_amount" id="up_total_amount">
       </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary update_product">Update</button>
      </div>
    </div>
  </div>

</form>
</div>
