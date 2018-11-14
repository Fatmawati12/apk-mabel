<div class="inner_content_w3_agile_info">
</div>
<div class="col-md-12 fallowers_agile agile_info_shadow">
	<h3 class="w3_inner_tittle two">Daftar Kategori</h3>
	<div class="card-header border-bottom">
	<a class="mb-3 btn  btn-primary" href="<?= site_url('Admin/tambah_kategori'); ?>">Tambah Data</a>
	</div>

	<div class="work-progres">
	<div class="table-responsive">

		<?php
		$form = new ecrud();
		$form->init('roll');
		$form->setTable('kategori');

		$form->setView('admin/list_kategori');
		$form->search();
		$form->setField(array('id', 'judul_kategori'));

		$form->addInput('judul_kategori', 'plaintext');

		$form->addInput('id', 'link');
		$form->setLabel('id', 'update');
		$form->setLink('id',base_url('admin/edit_kategori'), 'id');

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