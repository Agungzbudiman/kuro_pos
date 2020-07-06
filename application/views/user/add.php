<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">Tambah User</h4>
            <p class="card-category">Complete your profile</p>
          </div>
          <div class="card-body">
            <?= $this->session->flashdata('msgbox') ?>
            <form action="<?=  base_url('user/doAdd')?>" method="post">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group bmd-form-group">
                    <label class="bmd-label-floating">Name User</label>
                    <input type="text" class="form-control" name="user_name" required="">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group bmd-form-group">
                    <label class="bmd-label-floating">Username</label>
                    <input type="text" class="form-control" name="username" required="">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group bmd-form-group">
                    <label class="">User Status</label>
                    <select class="form-control" name="user_status" required="">
                      <option value="">Select Option</option>
                      <option value="0">Meja</option>
                      <option value="1">Kasir</option>
                      <option value="2">Dapur</option>
                      <option value="3">Manager</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group bmd-form-group">
                    <label class="bmd-label-floating">Password</label>
                    <input type="password" class="form-control" name="password" required="">
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