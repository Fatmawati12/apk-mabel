	<div class="content">
		<div class="grid">
					<center><h3 class="widgetheading">Gambar Produk Yang Kita Jual</h3></center>
					<?php 
					foreach ($barang as $key) {
	
					?>
					<figure class="effect-zoe">
					<img style="width: 200%; height: 200%;" src="<?= image_module('barang',$key['id'].'/'.$key['images']);?>"/>
					<figcaption>
					<h2><span><a href="<?= site_url('Home/contact'); ?>"><?php echo $key['nama_barang']; ?></a></span></h2>
					<p class="description"><b><?php echo $key['isi']; ?></b></p>
					</figcaption>			
					</figure>
					<?php } ?>
		</div>
	</div>
