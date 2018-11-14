<div class="inner_content_w3_agile_info">
</div>
<div class="col-md-12 fallowers_agile agile_info_shadow">
	<h3 class="w3_inner_tittle two">Daftar Barang</h3>
	<div class="card-header border-bottom">
	<a class="mb-3 btn  btn-primary" href="<?= site_url('Admin/create'); ?>">Tambah Data</a>
</div>

<div class="work-progres">
	<div class="table-responsive">
			<?php

			$form = new ecrud();
			$form->init('roll');
			$form->setTable('barang');

			$form->setView('admin');
			$form->search();
			$form->setField(array('id', 'nama_barang'));

			$form->addInput('nama_barang', 'plaintext');
			$form->addInput('images', 'thumbnail');
			$form->setImage('images', 'barang');
			$form->addInput('isi', 'plaintext');
			$form->addInput('harga_barang', 'plaintext');
			$form->addInput('jumlah_barang', 'plaintext');
			$form->addInput('id_kategori', 'plaintext');


			$form->addInput('id', 'link');
			$form->setLabel('id', 'update');
			$form->setLink('id',base_url('admin/edit'), 'id');

			$form->setDelete(true);

			$form->form();
			?>
		</div>
	</div>											
	</div>
	<div class="clearfix"></div>
	<div class="clearfix"></div>
</div>
<!-- //bottom_agileits_grids-->
<br><br><br><br><br><br><br>
									
<div class="clearfix"></div>
									 
<div class="clearfix"></div>