<div class="inner_content_w3_agile_info">
</div>
<div class="col-md-12 fallowers_agile agile_info_shadow">
	<h3 class="w3_inner_tittle two">Daftar Admin</h3>
	<div class="card-header border-bottom">
	<a class="mb-3 btn  btn-primary" href="<?= site_url('Admin/tambah_admin'); ?>">Tambah Data</a>
	</div>

	<div class="work-progres">
	<div class="table-responsive">

		<?php
		$form = new ecrud();
		$form->init('roll');
		$form->setTable('user');

		$form->setView('admin/list_admin');
		$form->search();
		$form->setField(array('id', 'nama'));

		$form->addInput('nama', 'plaintext');
		$form->addInput('username', 'plaintext');
		$form->addInput('password', 'plaintext');

		$form->addInput('id', 'link');
		$form->setLabel('id', 'update');
		$form->setLink('id',base_url('admin/edit_admin'), 'id');

		$form->setDelete(true);

		$form->form();
		?>
	</div>
	</div>											
</div>
<div class="clearfix"></div>
<div class="clearfix"></div>
</div>
<br><br><br><br><br><br><br><br>
									
<div class="clearfix"></div>
<div class="clearfix"></div>