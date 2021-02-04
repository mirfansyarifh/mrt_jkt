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
echo form_open_multipart(base_url('products/edit/'.$products->product_id),' class="form-horizontal"');

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
              <label class="col-md-2 col-form-label"> No Manufacture</label>
              <div class="col-md-4">
                <input type="text" name="no_manufacture" class="form-control" placeholder="No Manufacture" value ="<?php echo $products->no_manufacture ?>" required>
              </div>
              <label class="col-md-2 col-form-label"> No Material</label>
              <div class="col-md-4">
                <input type="text" name="no_material" class="form-control" placeholder="No Material" value ="<?php echo $products->no_material ?>" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-2 col-form-label"> Branch Plant</label>
              <div class="col-md-4">
                <select name="branch_plant" class="form-control col-md-12"">
                  <?php
                  if ($products->branch_plant == NULL) { 
                    echo '<option selected="selected" value="NULL">BELUM ADA</option>';
                    echo ' <option value="ASN">ASN</option>';
                    echo ' <option value="BHI">BHI</option> ';
                    echo ' <option value="BLA">BLA</option> ';
                    echo ' <option value="BLM">BLM</option> ';
                    echo ' <option value="BNH">BNH</option> ';
                    echo ' <option value="CPR">CPR</option> ';
                    echo ' <option value="DEPO">DEPO</option> ';
                    echo ' <option value="DKA">DKA</option> ';
                    echo ' <option value="FTM">FTM</option> ';
                    echo ' <option value="MHJN">MHJN</option> ';
                    echo ' <option value="LBB">LBB</option> ';
                    echo ' <option value="SNY">SNY</option> ';
                    echo ' <option value="STB">STB</option> ';
                  } else if ($products->branch_plant != NULL) {
                    echo '<option selected="selected" value="'.$products->branch_plant.'">'.$products->branch_plant.'</option>';
                    echo ' <option value="ASN">ASN</option>';
                    echo ' <option value="BHI">BHI</option> ';
                    echo ' <option value="BLA">BLA</option> ';
                    echo ' <option value="BLM">BLM</option> ';
                    echo ' <option value="BNH">BNH</option> ';
                    echo ' <option value="CPR">CPR</option> ';
                    echo ' <option value="DEPO">DEPO</option> ';
                    echo ' <option value="DKA">DKA</option> ';
                    echo ' <option value="FTM">FTM</option> ';
                    echo ' <option value="MHJN">MHJN</option> ';
                    echo ' <option value="LBB">LBB</option> ';
                    echo ' <option value="SNY">SNY</option> ';
                    echo ' <option value="STB">STB</option> ';
                  }
                  ?>
                </select>
            </div>
              <label class="col-md-2 col-form-label"> Plant</label>
              <div class="col-md-4">
                <input type="text" name="plant" class="form-control" placeholder="Plant" value ="<?php echo $products->plant ?>" >
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-2 col-form-label"> Departement</label>
              <div class="col-md-4">
                <select name="dept" class="form-control col-md-12">
                  <?php
                  if ($products->dept == NULL) { 
                    echo '<option selected="selected" value="NULL">BELUM ADA</option>';
                    echo ' <option value="PWR">PWR</option> '; 
                    echo ' <option value="AFC">AFC</option> '; 
                    echo ' <option value="CVL">CVL</option> '; 
                    echo ' <option value="DWE">DWE</option> '; 
                    echo ' <option value="GEN">GEN</option> '; 
                    echo ' <option value="ME">ME</option> '; 
                    echo ' <option value="PSD">PSD</option> '; 
                    echo ' <option value="RS">RS</option> '; 
                    echo ' <option value="SCM">SCM</option> '; 
                    echo ' <option value="SIG">SIG</option> '; 
                    echo ' <option value="TEL">TEL</option> '; 
                    echo ' <option value="TWK">TWK</option> '; 
                  } else if ($products->branch_plant != NULL) {
                    echo '<option selected="selected" value="'.$products->plant.'">'.$products->plant.'</option>';
                    echo ' <option value="PWR">PWR</option> '; 
                    echo ' <option value="AFC">AFC</option> '; 
                    echo ' <option value="CVL">CVL</option> '; 
                    echo ' <option value="DWE">DWE</option> '; 
                    echo ' <option value="GEN">GEN</option> '; 
                    echo ' <option value="ME">ME</option> '; 
                    echo ' <option value="PSD">PSD</option> '; 
                    echo ' <option value="RS">RS</option> '; 
                    echo ' <option value="SCM">SCM</option> '; 
                    echo ' <option value="SIG">SIG</option> '; 
                    echo ' <option value="TEL">TEL</option> '; 
                    echo ' <option value="TWK">TWK</option> '; 

                  }
                  ?>
                </select>
            </div>
              <label class="col-md-2 col-form-label"> No Rack</label>
              <div class="col-md-4">
                <input type="text" name="no_rack" class="form-control" placeholder="No Rack" value ="<?php echo $products->no_rack ?>">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-2 col-form-label"> No Bin</label>
              <div class="col-md-4">
                <input type="text" name="no_bin" class="form-control" placeholder="No Bin" value ="<?php echo $products->no_bin?>">
              </div>
              <label class="col-md-2 col-form-label"> UOM</label>
              <div class="col-md-4">
                <input type="text" name="uom" class="form-control" placeholder="UOM" value ="<?php echo $products->uom?>">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-2 col-form-label"> Store Loc</label>
              <div class="col-md-4">
                <input type="text" name="store_loc" class="form-control" placeholder="Store Loc" value ="<?php echo $products->store_loc?>">
              </div>
              <label class="col-md-2 col-form-label"> Stock</label>
              <div class="col-md-4">
                <input type="text" name="stock" class="form-control" placeholder="Stock" value ="<?php echo $products->stock?>" disabled>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-2 col-form-label"> DESC 1</label>
              <div class="col-md-4">
                <input type="text" name="desc_1" class="form-control" placeholder="DESC 1" value ="<?php echo $products->desc_1?>" >
              </div>
              <label class="col-md-2 col-form-label"> DESC 2</label>
              <div class="col-md-4">
                <input type="text" name="desc_2" class="form-control" placeholder="DESC 2" value ="<?php echo $products->desc_2?>" >
              </div>
            </div>

            <div class="form-group row ">
            <label class="col-md-2 col-form-label"> Comment</label>
              <div class="col-md-10">
                <textarea name="comment" class="form-control" placeholder="Comment" ><?php echo $products->comment?></textarea>
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