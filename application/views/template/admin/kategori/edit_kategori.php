<div class="inner_content_w3_agile_info">
</div>
<div class="col-md-12 fallowers_agile agile_info_shadow">
	<h3 class="w3_inner_tittle two">Edit Kategori</h3>
	<div class="card-header border-bottom">
		<a class="mb-3 btn  btn-primary" href="<?= site_url('Admin/list_kategori'); ?>">Kelola</a><br><br>
	</div>

	<div class="work-progres">
	<div class="table-responsive">
		<?php
		$id = $this->input->get('id');
		$form = new ecrud();
		$form->init('edit');
		$form->setId($id);
		$form->setTable('kategori');
		$form->addInput('judul_kategori', 'text');

		$form->form();
		?>
	</div>											
	</div>
<div class="clearfix"></div>
<div class="clearfix"></div>
</div>
<br><br><br><br><br><br>
<div class="clearfix"></div>
									 
<div class="clearfix"></div>
													
						