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
            <h2 style="margin: unset;">Total Harga : Rp.<?= number_format($pendapatan,0) ?></h2>
            <h4 style="margin: unset;">Transaksi No : <?= $data_table[0]->transaksi_atasnama ?></h4>
            <h4 style="margin: unset;">Transaksi Atasnama : <?= $data_table[0]->transaksi_atasnama ?></h4>
            <div class="table-responsive">
              <table class="table niceTable">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    $status = ['0'=>'Tersedia','1'=>'Menu tidak jadi/ menu kosong'];
                    foreach ($data_table as $key => $value) {
                  ?>
                    <tr class="gradeX">
                      <td><?= $key+1 ?></td>
                      <td><?= $value->transaksi_detail_nama ?></td>
                      <td><?= $value->transaksi_detail_jumlah ?></td>
                      <td><?= $value->transaksi_detail_harga ?></td>
                      <td><?= $status[$value->transaksi_detail_ready] ?></td>
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