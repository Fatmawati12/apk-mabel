<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mabel</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?= base_url('assets/enno/css/bootstrap.min.css');?>">
	<link rel="stylesheet" href="<?= base_url('assets/enno/css/animate.css');?>">
	<link rel="stylesheet" href="<?= base_url('assets/enno/css/font-awesome.min.css');?>">
	<link rel="stylesheet" href="<?= base_url('assets/enno/css/jquery.bxslider.css');?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/enno/css/normalize.css');?>" />
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/enno/css/demo.css');?>" />
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/enno/css/set1.css');?>" />
	<link href="<?= base_url('assets/enno/css/overwrite.css');?>" rel="stylesheet">
	<link href="<?= base_url('assets/enno/css/style.css');?>" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.html"><span>Aplikasi Mabel</span></a>
			</div>
			<div class="navbar-collapse collapse">							
				<div class="menu">
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation"><a href="<?= site_url('Home'); ?>">Home</a></li>
						<li role="presentation"><a href="<?= site_url('Home/galery');?>">Galery</a></li>
						<li role="presentation"><a href="<?= site_url('Home/contact');?>">Contact</a></li>						
					</ul>
				</div>
			</div>			
		</div>
	</nav>
	
	
	