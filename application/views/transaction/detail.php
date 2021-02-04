<button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#view-<?php echo $transaction->t_id	?>">
  <i class="fa fa-eye" ></i> Detail
</button>

<div class="modal fade" id="view-<?php echo $transaction->t_id	?>">
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
<th style="width: 300px;">No Dokumen</th><td style="width: 300px;"><b>: </b><?php echo $transaction->t_doc_no ?></td>
<th style="width: 300px;">Create By</th><td style="width: 300px;"><b>: </b><?php echo $transaction->t_by ?></td>
</tr>

<tr>
<th style="width: 300px;">Posting By</th><td style="width: 300px;"><b>: </b><?php echo $transaction->t_posting_by ?></td>
<th style="width: 300px;">Product Manufacture</th><td style="width: 300px;"><b>: </b><?php echo $transaction->no_manufacture ?></td>
</tr>

<tr>
<th style="width: 300px;">Stock</th><td style="width: 300px;"><b>: </b><?php echo $transaction->stock?></td>
<th style="width: 300px;">Detail</th><td style="width: 300px;"><b>: </b><?php echo $transaction->t_detail ?></td>
</tr>

<tr>
<th style="width: 300px;">Start</th><td style="width: 300px;"><b>: </b><?php echo $transaction->t_start ?></td>
<th style="width: 300px;">End</th><td style="width: 300px;"><b>: </b><?php echo $transaction->t_end ?></td>
</tr>

<tr>
<th style="width: 300px;">Date</th><td style="width: 300px;"><b>: </b><?php echo $transaction->t_date ?></td>
<th style="width: 300px;">Notes</th><td style="width: 300px;"><b>: </b><?php echo $transaction->t_notes ?? '0' ?></td>
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