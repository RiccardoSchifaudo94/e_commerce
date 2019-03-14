<!-- MODALE DI MODIFICA CATEGORIA -->
<div id="updateCategoryModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header btn-warning">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modifica categoria</h4>
      </div>
      <div class="modal-body">
        <p>Aggiorna i dati relativo a questa Categoria.</p>
        	<div class="row">
				<div class="col-md-6 col-sm-12 col-xs-12">
					<label>Nome Categoria</label>
					<input type="text" class="form-control" required>
				</div>
			</div><!-- close row -->
			<br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Salva</button>
      </div>
    </div>

  </div>
</div>

<!-- MODALE DI VISUALIZZA CATEGORIA -->
<div id="visualizeCategoryModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header btn-info">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Visualizza categoria</h4>
      </div>
      <div class="modal-body">
        <p>Visualizza i dati relativo a questa categoria.</p>
        	<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<label>Nome Categoria</label>
					<input type="text" class="form-control" disabled>
				</div>
			</div><!-- close row -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- MODALE DI ELIMINA CATEGORIA -->
<div id="deleteCategoryModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header btn-danger">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Elimina Categoria</h4>
      </div>
      <div class="modal-body">
        <p>
        	<strong>Sei sicuro di voler eliminare questa categoria?</strong>
        	<span>Tutti i riferimenti associati ai prodotti potrebbero andare persi!</span>
        </p>
      </div>
      <div class="modal-footer">
      	<button type="button" class="btn btn-danger" data-dismiss="modal">SI</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">NO</button>
      </div>
    </div>

  </div>
</div>
<div class="container">
			<h1>Sezione <?= $title ?></h1>
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="jumbotron">
						<h2>Aggiungi nuovo categoria</h2>
						<div class="row">
							<div class="col-md-4 col-sm-12 col-xs-12">
								<label>Nome Categoria</label>
								<input type="text" class="form-control">
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
									Lista Categorie
								</div>
								<div class="panel-body">
									<div class="table-responsive">
										<table class="table table-collapsed" id="myTable">
											<thead>
											<tr>
												<th>Nome Categoria</th>
												<th>Data creazione</th>
												<th>Data ultima modifica</th>
												<th>Visualizza</th>
												<th>Modifica</th>
												<th>Elimina</th>
											<tr>
											</thead>
											<tbody>
												<tr>
													<td>Nome Categoria 1</td>
													<td>Data Creazione 1</td>
													<td>Data ultima modifica 1</td>
													<td>
														<button class="btn btn-info"
																data-toggle="modal" 
																data-target="#visualizeCategoryModal">
															        Visualizza
														</button>
													</td>
													<td>
														<button class="btn btn-warning" 
																data-toggle="modal" 
																data-target="#updateCategoryModal">
																	Modifica
														</button>
													</td>
													<td>
														<button class="btn btn-danger" 
														        data-toggle="modal" 
																data-target="#deleteCategoryModal">
															        Elimina
														</button>
													</td>
												</tr>
												<tr>
													<td>Nome Categoria 2</td>
													<td>Data Creazione 2</td>
													<td>Data ultima modifica 2</td>
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
													<td>Nome Categoria 3</td>
													<td>Data Creazione 3</td>
													<td>Data ultima modifica 3</td>
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
													<td>Nome Categoria 4</td>
													<td>Data Creazione 4</td>
													<td>Data ultima modifica 4</td>
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