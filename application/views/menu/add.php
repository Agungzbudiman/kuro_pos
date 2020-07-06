<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">Tambah Menu</h4>
            <p class="card-category">Complete your profile</p>
          </div>
          <div class="card-body">
            <?= $this->session->flashdata('msgbox') ?>
            <form action="<?=  base_url('menu/doAdd')?>" method="post" enctype="multipart/form-data">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group bmd-form-group">
                    <label class="bmd-label-floating">Menu Name</label>
                    <input type="text" class="form-control" name="menu_name" required="">
                  </div>
                  <div class="form-group bmd-form-group">
                    <label class="bmd-label-floating">Menu Harga</label>
                    <input type="text" class="form-control" name="menu_harga" required="">
                  </div>
                  <div class="form-group bmd-form-group">
                    <label>Category</label>
                    <select name="id_category" class="form-control" required="" style="padding: 5px">
                      <option value="">Select Option</option>
                      <?php foreach ($data_category as $key => $value) { ?>
                      <option value="<?= $value->category_id ?>"><?= $value->category_name ?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="form-group bmd-form-group">
                    <label>Gambar Menu</label>
                    <input type="file" class="form-control" name="menu_image" required="">
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-primary pull-right">Tambah</button>
              <div class="clearfix"></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>