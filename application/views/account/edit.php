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
echo form_open(base_url('account/edit/'.$users->id_user),' class="form-horizontal"');

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
              <div class="form-group row ">
                <label class="col-md-3 col-form-label"> Username</label>
                <div class="col-md-9">
                  <input type="text" name="username" class="form-control" placeholder="Username" value ="<?php echo $users->username ?>" required>  
                </div>
              </div>
              
              <div class="form-group row ">
                <label class="col-md-3 col-form-label"> Nama</label>
                <div class="col-md-9">
                  <input type="text" name="name" class="form-control" placeholder="Nama" value ="<?php echo $users->name ?>" required>  
                </div>
              </div>
              
              <div class="form-group row ">
                <label class="col-md-3 col-form-label"> Jabatan</label>
                <div class="col-md-9">
                  <input type="text" name="jabatan" class="form-control" placeholder="Jabatan" value ="<?php echo $users->jabatan ?>" required>  
                </div>
              </div>

              <div class="form-group row ">
                <label class="col-md-3 col-form-label"> Password</label>
                <div class="col-md-9">
                  <input type="password" name="password" class="form-control" placeholder="Password" value ="" required>
                </div>
              </div>

              <div class="form-group row ">
                <label class="col-md-3 col-form-label"> Akses Level</label>
                <div class="col-md-9">
                  <select id="akses_level" name="akses_level" class="form-control">
                  <?php echo '<option selected="selected" value="'.$users->akses_level.'">User (dipakai)</option>';
                        echo '<option value="admin">Administrator</option>';
                        echo '<option value="user">User</option>';?>
                </select>
                </div>
              </div>

              <div class="form-group row ">
                
                <div class="col-md-9">
                  <button class="btn btn-success btn-m" name="submit "type="submit">
                    <i class="fa fa-save"> Simpan</i>
                  </button>
                  <button class="btn btn-info btn-m" name="reset "type="reset">
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