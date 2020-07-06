<!DOCTYPE html>
<html lang="en">

<head>
    <?php  $this->load->view('include/head') ?>
</head>

<body class="">
  <div class="wrapper ">

    <?php  $this->load->view('include/sidebar') ?>

    <div class="main-panel">
      <!-- Navbar -->
      <?php  $this->load->view('include/nav') ?>

      <!-- End Navbar -->
      <?php $this->load->view($v_content) ?>
      

      <?php $this->load->view('include/footer') ?>

  </div>
</div>

<?php $this->load->view('include/script') ?>
</body>

</html>

