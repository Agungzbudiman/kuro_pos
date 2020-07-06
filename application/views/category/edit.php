<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">Update Category</h4>
            <p class="card-category">Complete your profile</p>
          </div>
          <div class="card-body">
            <?= $this->session->flashdata('msgbox') ?>
            <form action="<?=  base_url('category/doUpdate/'.$dataCategory->category_id)?>" method="post">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group bmd-form-group">
                    <label class="bmd-label-floating">Category Name</label>
                    <input type="text" class="form-control" name="category_name" value="<?= $dataCategory->category_name ?>" required="">
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