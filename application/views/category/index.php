<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Category Table</h4>
            <p class="card-category"> Here is a subtitle for this table </p>
          </div>
          <div class="card-body">
            <?= $this->session->flashdata('msgbox') ?>
            <a href="<?= base_url('category/add') ?>" class="btn btn-primary pull-right" style="margin-top: 3px;margin-right: 5px;"><i class="material-icons">add</i> Tambah</a>
            <div class="table-responsive">
              <table class="table niceTable">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Name Category</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($data_table as $key => $value) {?>
                    <tr class="gradeX">
                      <td><?= $key+1 ?></td>
                      <td><?= $value->category_name ?></td>
                      <td>
                        <a style="font-size: 24px;margin-right: 10px;" href="<?= base_url('category/edit/'.$value->category_id) ?>"><i class="material-icons">edit</i></a>
                        <a style="font-size: 24px;margin-right: 10px;" href="<?= base_url('category/delete/'.$value->category_id) ?>" onclick="return confirm('Are you sure?')"><i class="material-icons">delete</i></a>
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