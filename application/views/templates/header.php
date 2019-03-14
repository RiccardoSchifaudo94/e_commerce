<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>E_commerce</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

	<script src="main.js"></script>
	<style>
		.footer {
		  display:block;
		  width: 100%;
		  background-color: #818181;
		  color: #fff;
		  text-align: center;
		  padding-top:10px;
		  margin:20px auto;
		  min-height:40px;
		}
		.footer a{
			text-decoration:none;
			border-bottom:1px solid #dedede;
			margin-bottom:10px;
			padding-bottom:5px;
			color:#ffffff;
		}
	</style>
</head>
<body>
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
				<a class="navbar-brand" href="<?php echo base_url().'index.php'; ?>/home">Ecommerce</a>
				</div>
				<ul class="nav navbar-nav">
					<li class="<?php if(basename($_SERVER['PHP_SELF']=='home')){ echo 'active'; } ?>">
						<a href="<?php echo base_url().'index.php'; ?>/home">Prodotti</a>
					</li>
					<li class="<?php if(basename($_SERVER['PHP_SELF']=='fornitori')){ echo 'active'; }  ?>">
						<a href="<?php echo base_url().'index.php'; ?>/fornitori">Fornitori</a>
					</li>
					<li class="<?php if(basename($_SERVER['PHP_SELF']=='categorie')){ echo 'active'; } ?>">
						<a href="<?php echo base_url().'index.php'; ?>/categorie">Categorie</a>
					</li>
				</ul>
			</div>
		</nav>