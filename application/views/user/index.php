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
            <a href="<?= base_url('user/add') ?>" class="btn btn-primary pull-right" style="margin-top: 3px;margin-right: 5px;"><i class="material-icons">add</i> Tambah</a>
            <div class="table-responsive">
              <table class="table niceTable">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Name User</th>
                    <th>Username</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    $status = ['0'=>'Meja','1'=>'Kasir','2'=>'Dapur','3'=>'Manager'];
                    foreach ($data_table as $key => $value) {
                  ?>
                    <tr class="gradeX">
                      <td><?= $key+1 ?></td>
                      <td><?= $value->user_name ?></td>
                      <td><?= $value->username ?></td>
                      <td><?= $status[$value->user_status] ?></td>
                      <td>
                        <a style="font-size: 24px;margin-right: 10px;" href="<?= base_url('user/edit/'.$value->user_id) ?>"><i class="material-icons">edit</i></a>
                        <a style="font-size: 24px;margin-right: 10px;" href="<?= base_url('user/delete/'.$value->user_id) ?>" onclick="return confirm('Are you sure?')"><i class="material-icons">delete</i></a>
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