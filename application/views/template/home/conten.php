<div class="container">
		<div class="row">
			<div class="slider">
				<div class="img-responsive">
					<ul class="bxslider">	
						<?php 
						foreach ($slide as $key) {
	
						?>			
						<li><img style="width: 200%; height: 100%" src="<?= image_module('slide',$key['id'].'/'.$key['images']);?>" alt=""/></li>	
						<?php } ?>				
					</ul>
				</div>	
			</div>
		</div>
	</div>
		
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="text-center">
					<h2>Tentang Usaha Kita</h2>
					<p>Usaha mebel kita ini menjual barang yang berkualitas.<br>
					Usaha kita ini menggunakan bahan yang sangat bagus, dan harganya pun terjangkau.</p>
				</div>
				<hr>
			</div>
		</div>
	</div>
	
	<div class="container">
		<div class="row">
			<div class="box">
				
			</div>
		</div>
	</div>
	
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="text-center">
					<h2>Galery</h2>
					<p>Untuk galery itu asli fotonya.<br>
					Jika anda tidak yakin, anda bisa datang langsung ke tempat usaha kita<br>
					yang letaknya di Kaligarang RT 17 RW 06 | Keling Jepara Jawa Tengah <br>
					Jepara 59454 Indonesia
					</p>
				</div>
				<hr>
			</div>
		</div>
	</div>
	
	<div class="content">
		<div class="grid">
			<?php 
			foreach ($artikel as $key) {
	
			?>
			<figure class="effect-zoe">
				<img style="width: 200%; height: 100%" src="<?= image_module('artikel',$key['id'].'/'.$key['images']);?>" />
				<figcaption>
					<h2><span><a href="<?= site_url('Home/contact'); ?>"><?php echo $key['judul']; ?></a></span></h2>
					<p class="description" style="color: black; text-shadow: 5px;"><b>
						<?php echo $key['isi']; ?>
					</b></p>
				</figcaption>			
			</figure>
			<?php } ?>
		</div>
	</div>
