<button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#view-<?php echo $products->product_id	?>">
  <i class="fa fa-eye" ></i> Detail
</button>

<div class="modal fade" id="view-<?php echo $products->product_id	?>">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title ml-auto">PRODUK DETAIL</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
      </div>          
        
      <div class="modal-body">	
      <table class="table table-bordered detail-view" style="text-transform: uppercase">

<tr>
<th style="width: 300px;">No Manufacture</th><td style="width: 300px;"><b>: </b><?php echo $products->no_manufacture ?></td>
<th style="width: 300px;">No Material</th><td style="width: 300px;"><b>: </b><?php echo $products->no_material ?></td>
</tr>

<tr>
<th style="width: 300px;">Branch Plant</th><td style="width: 300px;"><b>: </b><?php echo $products->branch_plant ?></td>
<th style="width: 300px;">Plant</th><td style="width: 300px;"><b>: </b><?php echo $products->plant ?></td>
</tr>

<tr>
<th style="width: 300px;">Departement</th><td style="width: 300px;"><b>: </b><?php echo $products->dept?></td>
<th style="width: 300px;">No Rack</th><td style="width: 300px;"><b>: </b><?php echo $products->no_rack ?></td>
</tr>

<tr>
<th style="width: 300px;">No Bin</th><td style="width: 300px;"><b>: </b><?php echo $products->no_bin ?></td>
<th style="width: 300px;">UOM</th><td style="width: 300px;"><b>: </b><?php echo $products->uom ?></td>
</tr>

<tr>
<th style="width: 300px;">Store Loc</th><td style="width: 300px;"><b>: </b><?php echo $products->store_loc ?></td>
<th style="width: 300px;">Stock</th><td style="width: 300px;"><b>: </b><?php echo $products->stock ?? '0' ?></td>
</tr>

<tr>
<th style="width: 300px;">DESC 1</th><td style="width: 300px;"><b>: </b><?php echo $products->desc_1 ?></td>
<th style="width: 300px;">DESC 2</th><td style="width: 300px;"><b>: </b><?php echo $products->desc_2 ?></td>
</tr>

</table>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-success" data-dismiss="modal"><i class="fa fa-time"></i>Close</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->