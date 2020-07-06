<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">Update User</h4>
            <p class="card-category">Complete your profile</p>
          </div>
          <div class="card-body">
            <?= $this->session->flashdata('msgbox') ?>
            <form action="<?=  base_url('user/doUpdate/'.$dataUser->user_id)?>" method="post">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group bmd-form-group">
                    <label class="bmd-label-floating">Name User</label>
                    <input type="text" class="form-control" name="user_name" value="<?= $dataUser->user_name ?>" required="">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group bmd-form-group">
                    <label class="bmd-label-floating">Username</label>
                    <input type="text" class="form-control" name="username" value="<?= $dataUser->username ?>" readonly required="">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group bmd-form-group">
                    <label class="">User Status</label>
                    <select class="form-control" name="user_status" disabled="">
                      <option value="">Select Option</option>
                      <option value="0" <?= ($dataUser->user_status=='0'?'selected':'') ?>>Meja</option>
                      <option value="1" <?= ($dataUser->user_status=='1'?'selected':'') ?>>Kasir</option>
                      <option value="2" <?= ($dataUser->user_status=='2'?'selected':'') ?>>Dapur</option>
                      <option value="3" <?= ($dataUser->user_status=='3'?'selected':'') ?>>Manager</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group bmd-form-group">
                    <label class="bmd-label-floating">Password *)isi jika ingin mengubah data</label>
                    <input type="password" class="form-control" name="password" value="">
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-primary pull-right">Update</button>
              <div class="clearfix"></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>