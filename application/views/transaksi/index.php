<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">User Table</h4>
            <p class="card-category">Informasi Untuk Mobile memakai Status (Meja,Kasir,Dapur) dan untuk web Memakai (Manager,Admin) </p>
          </div>
          <div class="card-body">
            <?= $this->session->flashdata('msgbox') ?>
            <h2>Total Penjualan Periode : Rp.<?= number_format($pendapatan,0) ?></h2>
            <form class="row" action="" method="get">
              <?php 
              if (empty($_GET['date_to'])) {
                $date_to = date('Y-m-d');
              }else{
                $date_to = $_GET['date_to'];
              }
              if (empty($_GET['date_from'])) {
                $date_from = date('Y-m-d',strtotime($date_to . "-1 month"));
              }else{
                $date_from = $_GET['date_from'];
              }
              ?>
              <div class="col-md-3"><input type="date" class="form-control" name="date_from" value="<?= $date_from ?>" placeholder="Date From.."></div>
              <div class="col-md-3"><input type="date" class="form-control" name="date_to" value="<?= $date_to ?>" placeholder="Date To.."></div>
              <div class="col-md-6">
                <button type="submit" class="btn btn-primary" style="margin-top: 3px;margin-right: 5px;">Search</button>
              </div>
            </form>
            <div class="table-responsive">
              <table class="table niceTable">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Atas Nama</th>
                    <th>Transaksi No</th>
                    <th>Tanggal</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    $status = ['0'=>'Baru','1'=>'Kasir','2'=>'Selesai'];
                    foreach ($data_table as $key => $value) {
                  ?>
                    <tr class="gradeX">
                      <td><?= $key+1 ?></td>
                      <td><?= $value->transaksi_atasnama ?></td>
                      <td><?= $value->transaksi_no ?></td>
                      <td><?= $value->transaksi_tanggal ?></td>
                      <td><?= $status[$value->transaksi_status] ?></td>
                      <td>
                        <a style="font-size: 24px;margin-right: 10px;" href="<?= base_url('transaksi/detail/'.$value->transaksi_id) ?>">Detail</a>
                        <a style="font-size: 24px;margin-right: 10px;" href="<?= base_url('welcome/print_invoice/'.$value->transaksi_no.'/'.$value->id_toko) ?>"><i class="material-icons">print</i></a>
                      </td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>