
<?php 
// Notifikasi 
if($this->session->flashdata('sukses')){
    echo '<p class="alert alert-success">';
    echo $this->session->flashdata('sukses');
    echo '</p>';
}
?>
<div class="row" style="padding: 5px 25px 25px 25px" >
  <div class="col-12">
    <p>
        <a href="<?php echo base_url ('transactions/'.$category.'/add'); ?>" class="btn btn-success btn-m">
            <i class="fa fa-plus">	</i> Tambah Baru
        </a>
    </p> 
        
        <div class="card shadow mb-4">
            <div class="card-body">
                <table id="example2" class="table table-bordered table-hover"style="text-align: center;">
                    <thead>
                    <tr>
                        <th>NO</th>
                        <th>NO DOKUMEN</th>
                        <th>PRODUK MATERIAL</th>
                        <th>BY</th>
                        <th>TANGGAL</th>
                        <th>STOCK</th>
                        <th>AKSI</th>
                    </tr>
                    </thead>
                        <tbody>
                        <?php $no=1; foreach($transaction as $transaction) { ?>

                        <tr>
                            <td><?php echo $no ?></td>
                            <td><?php echo $transaction->t_doc_no ?></td>
                            <td><?php echo $transaction->no_material ?></td>
                            <td><?php echo $transaction->t_by ?></td>
                            <td><?php echo $transaction->t_date ?></td>
                            <td><?php echo $transaction->stock ?? '0' ?></td>
                            <td style="width: 200px">
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