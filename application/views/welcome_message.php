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
</head>
<body>
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
				<a class="navbar-brand" href="#">Ecommerce</a>
				</div>
				<ul class="nav navbar-nav">
				<li class="active"><a href="#">Prodotti</a></li>
				<li><a href="#">Fornitori</a></li>
				<li><a href="#">Categorie</a></li>
				</ul>
				<form class="navbar-form navbar-left" action="/action_page.php">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Search">
				</div>
				<button type="submit" class="btn btn-default">Submit</button>
				</form>
			</div>
		</nav>
		<div class="container">
			
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="jumbotron">
						<h2>Aggiungi nuovo prodotto</h2>
						<div class="row">
							<div class="col-md-4 col-sm-12 col-xs-12">
								<label>Nome Prodotto</label>
								<input type="text" class="form-control">
							</div>
							<div class="col-md-4 col-sm-12 col-xs-12">
								<label>Seleziona una categoria</label>
								<select type="text" class="form-control">
									<option value="0">Seleziona una categoria</option>
								</select>
							</div>
							<div class="col-md-4 col-sm-12 col-xs-12">
								<label>Seleziona un Fornitore</label>
								<select type="text" class="form-control">
									<option value="0">Seleziona un fornitore</option>
								</select>
							</div>
						</div><!-- close row -->
						<br>
						<div class="row">
							<div class="col-md-6 col-sm-12 col-xs-12">
								<label>Inserisci prezzo</label>
								<input type="number" required name="price" min="0" value="0" step=".01" class="form-control">
							</div>
							<div class="col-md-6 col-sm-12 col-xs-12">
								<label>Inserisci Quantità</label>
								<input type="number" required name="price" min="0" value="0" class="form-control">
							</div>
						</div><!-- close row -->
						<br>
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12 pull-left">
								<button class="btn btn-success">Aggiungi</button>
							</div>
						</div><!-- close row -->

						</div><!-- close jumbotron -->
					</div><!-- close col-md-12 -->
			
				</div><!-- close row -->
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="panel panel-primary">
								<div class="panel-heading">
									Lista Prodotti
								</div>
								<div class="panel-body">
									<div class="table-responsive">
										<table class="table table-collapsed" id="myTable">
											<thead>
											<tr>
												<th>Nome Prodotto</th>
												<th>Nome Categoria</th>
												<th>Nome Fornitore</th>
												<th>Data Creazione</th>
												<th>Range di Prezzo</th>
												<th>Quantità residua</th>
												<th>Visualizza</th>
												<th>Modifica</th>
												<th>Elimina</th>
											<tr>
											</thead>
											<tbody>
												<tr>
													<td>Nome Prodotto 1</td>
													<td>Nome Categoria 1</td>
													<td>Nome Fornitore 1</td>
													<td>Data Creazione 1</td>
													<td>Range di Prezzo 1</td>
													<td>Quantità residua 1</td>
													<td>
														<button class="btn btn-info">Visualizza</button>
													</td>
													<td>
														<button class="btn btn-warning">Modifica</button>
													</td>
													<td>
														<button class="btn btn-danger">Elimina</button>
													</td>
												</tr>
												<tr>
													<td>Nome Prodotto 2</td>
													<td>Nome Categoria 2</td>
													<td>Nome Fornitore 2</td>
													<td>Data Creazione 2</td>
													<td>Range di Prezzo 2</td>
													<td>Quantità residua 2</td>
													<td>
														<button class="btn btn-info">Visualizza</button>
													</td>
													<td>
														<button class="btn btn-warning">Modifica</button>
													</td>
													<td>
														<button class="btn btn-danger">Elimina</button>
													</td>
												</tr>
												<tr>
													<td>Nome Prodotto 3</td>
													<td>Nome Categoria 3</td>
													<td>Nome Fornitore 3</td>
													<td>Data Creazione 3</td>
													<td>Range di Prezzo 3</td>
													<td>Quantità residua 3</td>
													<td>
														<button class="btn btn-info">Visualizza</button>
													</td>
													<td>
														<button class="btn btn-warning">Modifica</button>
													</td>
													<td>
														<button class="btn btn-danger">Elimina</button>
													</td>
												</tr>
												<tr>
													<td>Nome Prodotto 4</td>
													<td>Nome Categoria 4</td>
													<td>Nome Fornitore 4</td>
													<td>Data Creazione 4</td>
													<td>Range di Prezzo 4</td>
													<td>Quantità residua 4</td>
													<td>
														<button class="btn btn-info">Visualizza</button>
													</td>
													<td>
														<button class="btn btn-warning">Modifica</button>
													</td>
													<td>
														<button class="btn btn-danger">Elimina</button>
													</td>
												</tr>
												<tr>
													<td>Nome Prodotto 5</td>
													<td>Nome Categoria 5</td>
													<td>Nome Fornitore 5</td>
													<td>Data Creazione 5</td>
													<td>Range di Prezzo 5</td>
													<td>Quantità residua 5</td>
													<td>
														<button class="btn btn-info">Visualizza</button>
													</td>
													<td>
														<button class="btn btn-warning">Modifica</button>
													</td>
													<td>
														<button class="btn btn-danger">Elimina</button>
													</td>
												</tr>
												<tr>
													<td>Nome Prodotto 6</td>
													<td>Nome Categoria 6</td>
													<td>Nome Fornitore 6</td>
													<td>Data Creazione 6</td>
													<td>Range di Prezzo 6</td>
													<td>Quantità residua 6</td>
													<td>
														<button class="btn btn-info">Visualizza</button>
													</td>
													<td>
														<button class="btn btn-warning">Modifica</button>
													</td>
													<td>
														<button class="btn btn-danger">Elimina</button>
													</td>
												</tr>
											</tbody>
										</table>
									</div><!-- close div panel body -->
								</div><!-- close div panel-primary -->
							</div><!-- close col-md-12 -->
						</div><!-- close row -->
					</div><!-- close container -->
			<script>
				$(document).ready( function () {
					$('#myTable').DataTable();
				} );
			</script>			
</body>
</html>