<div class="inner_content_w3_agile_info">
</div>
<div class="col-md-12 fallowers_agile agile_info_shadow">
	<h3 class="w3_inner_tittle two">Edit Data Barang</h3>
	<div class="card-header border-bottom">
		<a class="mb-3 btn  btn-primary" href="<?= site_url('Admin'); ?>">Kelola</a><br><br>
	</div>

	<div class="work-progres">
		<div class="table-responsive">
			<?php
			$id = $this->input->get('id');
			$form = new ecrud();
			$form->setId($id);
			$form->init('edit');
			$form->setTable('barang');
			$form->addInput('nama_barang', 'text');
			$form->addInput('images', 'upload');
			$form->setAccept('image', '.jpeg', '.png', '.jpg', '.PNG', '.JPG');
			$form->addInput('isi', 'textarea');
			$form->addInput('harga_barang', 'text');
			$form->addInput('jumlah_barang', 'text');
			$form->addInput('id_kategori','dropdown');
			$form->setLabel('id_kategori','kategori');
			$form->tableOptions('id_kategori','kategori','id','judul_kategori');
			$form->form();
			?>
		</div>											
	</div>
	<div class="clearfix"></div>
	<div class="clearfix"></div>
</div>
<!-- //bottom_agileits_grids-->
<br><br><br><br><br><br>
									
<div class="clearfix"></div>
									 
<div class="clearfix"></div>