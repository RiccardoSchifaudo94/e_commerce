<!-- MODALE DI MODIFICA PRODOTTO -->
<div id="updateProdutcModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header btn-warning">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modifica prodotto</h4>
      </div>
      <div class="modal-body">
        <p>Aggiorna i dati relativo a questo prodotto.</p>
        	<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<label>Nome Prodotto</label>
					<input type="text" class="form-control">
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12">
					<label>Seleziona una categoria</label>
					<select type="text" class="form-control">
						<option value="0">Seleziona una categoria</option>
					</select>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12">
					<label>Seleziona un Fornitore</label>
					<select type="text" class="form-control">
						<option value="0">Seleziona un fornitore</option>
					</select>
				</div>
			</div><!-- close row -->
			<br>
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<label>Inserisci prezzo</label>
					<input type="number" required name="price" min="0" value="0" step=".01" class="form-control">
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12">
					<label>Inserisci Quantità</label>
					<input type="number" required name="price" min="0" value="0" class="form-control">
				</div>
			</div><!-- close row -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Salva</button>
      </div>
    </div>

  </div>
</div>

<!-- MODALE DI VISUALIZZA PRODOTTO -->
<div id="visualizeProdutcModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header btn-info">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Visualizza prodotto</h4>
      </div>
      <div class="modal-body">
        <p>Visualizza i dati relativo a questo prodotto.</p>
        	<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<label>Nome Prodotto</label>
					<input type="text" class="form-control" disabled>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12">
					<label>Seleziona una categoria</label>
					<select type="text" class="form-control" disabled>
						<option value="0">Seleziona una categoria</option>
					</select>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12">
					<label>Seleziona un Fornitore</label>
					<select type="text" class="form-control" disabled>
						<option value="0">Seleziona un fornitore</option>
					</select>
				</div>
			</div><!-- close row -->
			<br>
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<label>Inserisci prezzo</label>
					<input type="number" required name="price" min="0" value="0" step=".01" class="form-control" disabled>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12">
					<label>Inserisci Quantità</label>
					<input type="number" required name="price" min="0" value="0" class="form-control" disabled>
				</div>
			</div><!-- close row -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- MODALE DI ELIMINA PRODOTTO -->
<div id="deleteProdutcModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header btn-danger">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Elimina prodotto</h4>
      </div>
      <div class="modal-body">
        <p>Sei sicuro di voler eliminare questo prodotto?</p>
      </div>
      <div class="modal-footer">
      	<button type="button" class="btn btn-danger" data-dismiss="modal">SI</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">NO</button>
      </div>
    </div>

  </div>
</div>
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
														<button class="btn btn-info"
																data-toggle="modal" 
																data-target="#visualizeProdutcModal">
															        Visualizza
														</button>
													</td>
													<td>
														<button class="btn btn-warning" 
																data-toggle="modal" 
																data-target="#updateProdutcModal">
																	Modifica
														</button>
													</td>
													<td>
														<button class="btn btn-danger" 
														        data-toggle="modal" 
																data-target="#deleteProdutcModal">
															        Elimina
														</button>
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
														<button class="btn btn-info"
																data-toggle="modal" 
																data-target="#visualizeProdutcModal">
															        Visualizza
														</button>
													</td>
													<td>
														<button class="btn btn-warning" 
																data-toggle="modal" 
																data-target="#updateProdutcModal">
																	Modifica
														</button>
													</td>
													<td>
														<button class="btn btn-danger" 
														        data-toggle="modal" 
																data-target="#deleteProdutcModal">
															        Elimina
														</button>
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
														<button class="btn btn-info"
																data-toggle="modal" 
																data-target="#visualizeProdutcModal">
															        Visualizza
														</button>
													</td>
													<td>
														<button class="btn btn-warning" 
																data-toggle="modal" 
																data-target="#updateProdutcModal">
																	Modifica
														</button>
													</td>
													<td>
														<button class="btn btn-danger" 
														        data-toggle="modal" 
																data-target="#deleteProdutcModal">
															        Elimina
														</button>
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
														<button class="btn btn-info"
																data-toggle="modal" 
																data-target="#visualizeProdutcModal">
															        Visualizza
														</button>
													</td>
													<td>
														<button class="btn btn-warning" 
																data-toggle="modal" 
																data-target="#updateProdutcModal">
																	Modifica
														</button>
													</td>
													<td>
														<button class="btn btn-danger" 
														        data-toggle="modal" 
																data-target="#deleteProdutcModal">
															        Elimina
														</button>
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
														<button class="btn btn-info"
																data-toggle="modal" 
																data-target="#visualizeProdutcModal">
															        Visualizza
														</button>
													</td>
													<td>
														<button class="btn btn-warning" 
																data-toggle="modal" 
																data-target="#updateProdutcModal">
																	Modifica
														</button>
													</td>
													<td>
														<button class="btn btn-danger" 
														        data-toggle="modal" 
																data-target="#deleteProdutcModal">
															        Elimina
														</button>
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
														<button class="btn btn-info"
																data-toggle="modal" 
																data-target="#visualizeProdutcModal">
															        Visualizza
														</button>
													</td>
													<td>
														<button class="btn btn-warning" 
																data-toggle="modal" 
																data-target="#updateProdutcModal">
																	Modifica
														</button>
													</td>
													<td>
														<button class="btn btn-danger" 
														        data-toggle="modal" 
																data-target="#deleteProdutcModal">
															        Elimina
														</button>
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