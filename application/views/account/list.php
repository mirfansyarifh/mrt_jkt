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
        <a href="<?php echo base_url ('account/add'); ?>" class="btn btn-success btn-m">
            <i class="fa fa-plus">	</i> Tambah Baru
        </a>
    </p> 
        
        <div class="card shadow mb-4">
            <div class="card-body">
                <table id="example2" class="table table-bordered table-hover" style="text-align:center;">
                            <thead>
                            <tr>
                                <th style="width: 40px;" >NO</th>
                                <th>USERNAME</th>
                                <th>NAMA</th>
                                <th>JABATAN</th>
                                <th>AKSES LEVEL</th>
                                <th  style="width: 200px;">AKSI</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $no=1; foreach($users as $users) { ?>

                            <tr>
                                <td><?php echo $no ?></td>
                                <td><?php echo $users->username ?></td>
                                <td><?php echo $users->name ?></td>
                                <td><?php echo $users->jabatan ?></td>
                                <td><?php echo $users->akses_level ?></td>
                                <td>
                                <a href="<?php echo base_url ('account/edit/'.$users->id_user) ?>" class ="btn btn-warning btn-xs"><i class ="fa fa-edit"></i> Edit </a>
                                                    <?php include ('delete.php')?>
                                </td>
                            </tr>
                <?php $no++;} ?>
                </tbody>
                </table>
            </div>
        </div>
    </div>
  </div>
 </section>
  <!-- /.content -->