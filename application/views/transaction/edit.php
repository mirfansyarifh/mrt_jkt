<?php 
// Error Upload 
if (isset($error))  {
  echo '<p class="alert alert-warning">';
  echo $error;
  echo '</p>';
}
// Notifikasi error
echo validation_errors('<div class="alert alert-warning">', '</div>');

//Form open ubah menjadi menjadi multipart karena fungsinya bukan hanya entry melainkan uplaod jg
echo form_open_multipart(base_url('transactions/'.$category.'/edit/'.$transaction->t_id),' class="form-horizontal"');
?>

<div class="row" style="padding: 25px 25px 25px 25px">
  <div class="col-12">
<!-- ----------------- -->
    <div class="card shadow mb-4 card-info">
        <div class="card-header ">
          <h3 class="card-title "><?php echo $title ?></h3>
        </div>
        <!-- /.card-header -->
      <form class="form-horizontal ">
          <div class="card-body">
            <div class="form-group row">
              <label class="col-md-2 col-form-label"> No Dokumen</label>
              <div class="col-md-4">
                <input type="text" name="t_doc_no" class="form-control" placeholder="No Dokumen" value ="<?php echo $transaction->t_doc_no ?>" required>
              </div>
              <label class="col-md-2 col-form-label"> By</label>
              <div class="col-md-4">
                <input type="text" name="t_by" class="form-control" placeholder="By" value ="<?php echo $transaction->t_by ?>" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-2 col-form-label"> Posting By</label>
              <div class="col-md-4">
                <input type="text" name="t_posting_by" class="form-control" placeholder="Posting By" value ="<?php echo $transaction->t_posting_by ?>">
              </div>
              <label class="col-md-2 col-form-label"> Product Material</label>
              <div class="col-md-4">
                <input type="text" name="product_id" class="form-control" placeholder="Product Material" value ="<?php echo $AmbilMaterial[0]->no_material ?>" disabled>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-2 col-form-label"> Stock</label>
              <div class="col-md-4">
                <input type="number" name="stock" class="form-control" placeholder="Stock" value ="<?php echo $transaction->stock ?>">
              </div>
              <label class="col-md-2 col-form-label"> Detail</label>
              <div class="col-md-4">
                <input type="text" name="t_detail" class="form-control" placeholder="Detail" value ="<?php echo $transaction->t_detail ?>">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-2 col-form-label"> Start</label>
              <div class="col-md-4">
                <input type="text" name="t_start" class="form-control" placeholder="00:00 AM/PM" value ="<?php echo $transaction->t_start?>">
              </div>
              <label class="col-md-2 col-form-label"> End</label>
              <div class="col-md-4">
                <input type="text" name="t_end" class="form-control" placeholder="00:00 AM/PM" value ="<?php echo $transaction->t_end?>">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-2 col-form-label"> Date</label>
              <div class="col-md-4">
                <input type="text" name="t_date" class="form-control" placeholder="Date" value ="<?php echo $transaction->t_date?>">
              </div>
              <label class="col-md-2 col-form-label"> Notes</label>
              <div class="col-md-4">
                <input type="text" name="t_notes" class="form-control" placeholder="Notes" value ="<?php echo $transaction->t_notes?>">
              </div>
            </div>

            <div class="form-group row ">
            <label class="col-md-2 col-form-label"> Comment</label>
              <div class="col-md-10">
                <textarea name="t_comment" class="form-control" placeholder="Comment" ><?php echo $transaction->t_comment?></textarea>
              </div>
            </div>
              <div class="col-md-9" style="padding-top: 25px;">
                <button class="btn btn-success btn-m" name="submit "type="submit">
                  <i class="fa fa-save"> Save</i>
                </button>
                <button class="btn btn-warning btn-m" name="reset "type="reset">
                  <i class="fa fa-times"> Reset</i>
                </button>
              </div>
            </div>
        </form>
    </div>

<?php echo form_close(); ?>
<!-- ----------------- -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
<!-- /.content -->