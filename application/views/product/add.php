<?php 
// Error Upload 
if (isset($error))  {
  echo '<div class="alert alert-warning">';
  echo $error;
  echo '</div>';
}
// Notifikasi error
echo validation_errors('<div class="alert alert-warning">', '</div>');

//Form open ubah menjadi menjadi multipart karena fungsinya bukan hanya entry melainkan uplaod jg
echo form_open_multipart(base_url('products/add'),' class="form-horizontal"');
?>

<div class="row" style="padding: 5px 25px 25px 25px">
  <div class="col-12">
<!-- ----------------- -->
      <div class="card shadow mb-4 card-info">
          <div class="card-header ">
            <h3 class="card-title "><?php echo $title ?></h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
        <form class="form-horizontal ">
          <div class="card-body">
            <div class="form-group row">
              <label class="col-md-2 col-form-label"> No Manufacture</label>
              <div class="col-md-4">
                <input type="text" name="no_manufacture" class="form-control" placeholder="No Manufacture" value ="<?php echo set_value('no_manufacture')?>" required>
              </div>
              <label class="col-md-2 col-form-label"> No Material</label>
              <div class="col-md-4">
                <input type="text" name="no_material" class="form-control" placeholder="No Material" value ="<?php echo set_value('no_material')?>" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-2 col-form-label"> Branch Plant</label>
              <div class="col-md-4">
                <select name="branch_plant" class="form-control col-md-12"">
                  <option value="ASN">ASN</option> 
                  <option value="BHI">BHI</option> 
                  <option value="BLA">BLA</option> 
                  <option value="BLM">BLM</option> 
                  <option value="BNH">BNH</option> 
                  <option value="CPR">CPR</option> 
                  <option value="DEPO">DEPO</option> 
                  <option value="DKA">DKA</option> 
                  <option value="FTM">FTM</option> 
                  <option value="MHJN">MHJN</option> 
                  <option value="LBB">LBB</option> 
                  <option value="SNY">SNY</option> 
                  <option value="STB">STB</option> 
                  <option selected="selected"value="OTHER">OTHER</option> 
                </select>
            </div>
              <label class="col-md-2 col-form-label"> Plant</label>
              <div class="col-md-4">
                <input type="text" name="plant" class="form-control" placeholder="Plant" >
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-2 col-form-label"> Departement</label>
              <div class="col-md-4">
                <select name="dept" class="form-control col-md-12">
                  <option value="PWR">PWR</option> 
                  <option value="AFC">AFC</option> 
                  <option value="CVL">CVL</option> 
                  <option value="DWE">DWE</option> 
                  <option value="GEN">GEN</option> 
                  <option value="ME">ME</option> 
                  <option value="PSD">PSD</option> 
                  <option value="RS">RS</option> 
                  <option value="SCM">SCM</option> 
                  <option value="SIG">SIG</option> 
                  <option value="TEL">TEL</option> 
                  <option value="TWK">TWK</option> 
                  <option selected="selected"value="(OTHER)">(OTHER)</option> 
                </select>
            </div>
              <label class="col-md-2 col-form-label"> No Rack</label>
              <div class="col-md-4">
                <input type="text" name="no_rack" class="form-control" placeholder="No Rack" value ="<?php echo set_value('no_rack')?>">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-2 col-form-label"> No Bin</label>
              <div class="col-md-4">
                <input type="text" name="no_bin" class="form-control" placeholder="No Bin" value ="<?php echo set_value('no_bin')?>">
              </div>
              <label class="col-md-2 col-form-label"> UOM</label>
              <div class="col-md-4">
                <input type="text" name="uom" class="form-control" placeholder="UOM" value ="<?php echo set_value('uom')?>">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-2 col-form-label"> Store Loc</label>
              <div class="col-md-4">
                <input type="text" name="store_loc" class="form-control" placeholder="Store Loc" value ="<?php echo set_value('store_loc')?>">
              </div>
              <label class="col-md-2 col-form-label"> Stock</label>
              <div class="col-md-4">
                <input type="text" name="stock" class="form-control" placeholder="Stock" value ="0" disabled>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-2 col-form-label"> DESC 1</label>
              <div class="col-md-4">
                <input type="text" name="desc_1" class="form-control" placeholder="DESC 1" value ="<?php echo set_value('desc_1')?>" >
              </div>
              <label class="col-md-2 col-form-label"> DESC 2</label>
              <div class="col-md-4">
                <input type="text" name="desc_2" class="form-control" placeholder="DESC 2" value ="<?php echo set_value('desc_2')?>" >
              </div>
            </div>

            <div class="form-group row ">
            <label class="col-md-2 col-form-label"> Comment</label>
              <div class="col-md-10">
                <textarea name="comment" class="form-control" placeholder="Comment" value ="<?php echo set_value('comment')?>"></textarea>
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
