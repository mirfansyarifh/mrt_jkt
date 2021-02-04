
<?php 
// Notifikasi 
if($this->session->flashdata('sukses')){
    echo '<p class="alert alert-success">';
    echo $this->session->flashdata('sukses');
    echo '</p>';
}elseif($this->session->flashdata('gagal')){
    echo '<p class="alert alert-danger">';
    echo $this->session->flashdata('gagal');
    echo '</p>';
}
?>
<div class="row" style="padding: 5px 25px 25px 25px" >
  <div class="col-12">
    <p>
        <a href="<?php echo base_url ('products/add'); ?>" class="btn btn-success btn-m">
            <i class="fa fa-plus">	</i> Tambah Baru
        </a>
    </p> 
        
        <div class="card shadow mb-4">
            <div class="card-body">
                <table id="example2" class="table table-bordered table-hover; text-align: center;">
                    <thead>
                    <tr>
                        <th>NO</th>
                        <th>NO MANUFACTURE</th>
                        <th>NO MATERIAL</th>
                        <th>BRANCH PLANT</th>
                        <th>STOCK</th>
                        <th>AKSI</th>
                    </tr>
                    </thead>
                        <tbody>
                        <?php $no=1; foreach($products as $products) { ?>
                        <tr>
                            <td><?php echo $no ?></td>
                            <td><?php echo $products->no_manufacture ?></td>
                            <td><?php echo $products->no_material ?></td>
                            <td><?php echo $products->branch_plant ?></td>
                            <td><?php echo $products->stock ?? '0' ?></td>
                            <td style="width: 200px;">
                            <?php include ('detail.php')?>
                            <?php 
                                if ($this->session->userdata('akses_level') == 'admin') {
                                     include ('delete.php');
                                };
                            ?>
                            </td>
                        </tr>
                            <?php $no++;} ?>
                        </tbody>
                </table>
            </div>
        <!-- /.card-body -->
        </div>
        <!-- /.card -->
<!-- ----------------- -->
    </div>
    <!-- /.col -->
  </div>
   <!-- /.row -->
 </section>
  <!-- /.content -->