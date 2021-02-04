<div class="row" style="padding: 5px 25px 25px 25px">
  <div class="col-12">
<!-- ----------------- -->


<div class="row">
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-info"><i class="fas fa-angle-down"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">In</span>
                <span class="info-box-number"><?= $trans_in ?> Transaksi</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-success"><i class="fas fa-angle-double-down"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Open</span>
                <span class="info-box-number"><?= $trans_open ?> Transaksi</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-warning"><i class="fas fa-angle-up"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Out</span>
                <span class="info-box-number"><?= $trans_out ?> Transaksi</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-danger"><i class="fas fa-angle-double-up"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Consign</span>
                <span class="info-box-number"><?= $trans_consign ?> Transaksi</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        <!-- INFO BOX -->
      <div class="row">
        <div class="col-md-5">
          <div class="card shadow mb-4 card-info">
            <div class="card-header">
              <h3 class="card-title">Stocks</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
              </div>
            </div>
            <div class="card-body">
              <div id="chartStocks" style="height: 370px; width: 100%;"></div>
            </div>
          </div>
        </div>
        <div class="col-md-7">
          <div class="card shadow mb-4 card-success">
            <div class="card-header">
              <h3 class="card-title">Product By Dept</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
              </div>
            </div>
            <div class="card-body">
              <div class="chart">
              <div id="chartStockbyDept" style="height: 370px; width: 100%;"></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      
      <div class="row">
        <div class="col-md-12">
          <div class="card shadow mb-4 card-warning">
            <div class="card-header">
              <h3 class="card-title">Transaksi by Mont</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
              </div>
            </div>
            <div class="card-body">
              <div class="chart">
              <canvas id="myAreaChart" style="height: 370px; width: 100%;"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>
<!-- ----------------- -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
<!-- /.content -->



