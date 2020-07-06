<?php 
$uri = $this->uri->segment(1);
?>

<div class="sidebar" data-color="purple" data-background-color="white" data-image="<?= base_url('assets/') ?>img/sidebar-1.jpg">
	<div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
		Creative Tim
	</a></div>
	<div class="sidebar-wrapper">
		<ul class="nav">
			<li class="nav-item <?= ($uri=='dashboard'?'active':'') ?>">
				<a class="nav-link" href="<?= base_url('dashboard/') ?>">
					<i class="material-icons">dashboard</i>
					<p>Dashboard</p>
				</a>
			</li>
			<li class="nav-item <?= ($uri=='category'?'active':'') ?> ">
				<a class="nav-link" href="<?= base_url('category/') ?>">
					<i class="material-icons">Category</i>
					<p>Category</p>
				</a>
			</li>
			<li class="nav-item <?= ($uri=='toko'?'active':'') ?> ">
				<a class="nav-link" href="<?= base_url('toko/') ?>">
					<i class="material-icons">home</i>
					<p>Toko</p>
				</a>
			</li>
			<li class="nav-item <?= ($uri=='user'?'active':'') ?> ">
				<a class="nav-link" href="<?= base_url('user/') ?>">
					<i class="material-icons">supervised_user_circle</i>
					<p>User</p>
				</a>
			</li>
			<li class="nav-item <?= ($uri=='menu'?'active':'') ?>">
				<a class="nav-link" href="<?= base_url('menu/') ?>">
					<i class="material-icons">content_paste</i>
					<p>Menu</p>
				</a>
			</li>
			<li class="nav-item <?= ($uri=='transaksi'?'active':'') ?>">
				<a class="nav-link" href="<?= base_url('transaksi/') ?>">
					<i class="material-icons">library_books</i>
					<p>Transaksi</p>
				</a>
			</li>
		</ul>
	</div>
</div>