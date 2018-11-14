<div class="inner_content_w3_agile_info">
</div>
<div class="col-md-12 fallowers_agile agile_info_shadow">
	<h3 class="w3_inner_tittle two">Edit Slide</h3>
	<div class="card-header border-bottom">
		<a class="mb-3 btn  btn-primary" href="<?= site_url('Admin/list_slide'); ?>">Kelola</a><br><br>
	</div>

	<div class="work-progres">
	<div class="table-responsive">
		<?php
		$id = $this->input->get('id');
		$form = new ecrud();
		$form->setId($id);
		$form->init('edit');
		$form->setTable('slide');
		$form->addInput('images', 'upload');
		$form->setAccept('image', '.jpeg', '.png', '.jpg', '.PNG', '.JPG');
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