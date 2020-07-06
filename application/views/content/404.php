<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Error 404</h4>
            <p class="card-category"> Opps, You're lost. </p>
          </div>
          <div class="card-body">
            <?= $this->session->flashdata('msgbox') ?>
              <p>We can not find the page you're looking for.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>