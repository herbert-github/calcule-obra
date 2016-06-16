<?php require_once('topo.php'); ?>
<script src="js/app.js"></script>

			<div class="titulo">
				<h3>Defina as Medidas</h3>
			</div>

			<div class="medidas">
			<div class="col-xs-6 col-md-6">
				<div class="titulo">Cômodos</div>
			</div>
			<div class="col-xs-6 col-md-6">
				 <a class="btn btn-default" href ng-click="show()">Novo</a>
				  <p>{{message}}</p>


					<script type="text/ng-template" id="modal.html">
				        <div class="modal-header">
				            <h3 class="modal-title">Definas as Medidas</h3>
				        </div>
				        <div class="modal-body">
				            <div ng-repeat="contato in contatos" class="form-group">
				      <div class="col-sm-10">
				        <h4><b><i>Contato {{$index + 1}}</b></i></h4>
				        <label for="nomeContato">Nome:</label>
				        <input  type="text" name="nomeContato" id="nomeContato" class="form-control" ng-model="contato.nome">
				        <br>
				        <div class="control-group">
				          <select selectize="single.options" placeholder="Selecionar uma ag&ecirc;ncia" ng-model="contato.agencia" options="listaAgencias"></select>
						        </select>
						      </div>
						      <div ng-repeat="dado in contato.dados">
						      <label for="campoValor">{{dado.campo}}</label>
						      <input  type="text" name="dadoValor" id="dadoValor" class="form-control" ng-model="dado.valor">
						        <button type="button" class="btn btn-xs btn-default" ng-click="excluirCampo">
						          <span class="glyphicon glyphicon-remove"></span>
						        </button>
						    </div>
						      <div align="right"><button type="button" class="btn btn-xs btn-primary" ng-click="novoCampo($index)">Inserir novo campo</button></div>
						    </div>
						  </div>
						  <div align="right">
						    <button type="button" class="btn btn-xs btn-primary" ng-click="novoContato(contato.nome, contato.agencia, dado)">
						      <span class="glyphicon glyphicon-plus"></span>
						    </button>
						    <button type="button" class="btn btn-xs btn-danger" ng-click="excluirContato()"
						    ng-disabled="contatosVazio()">
						    <span class="glyphicon glyphicon-minus"></span>
						  </button>
						</div>
				        </div>
				        <div class="modal-footer">
				            <button class="btn btn-primary" type="button" ng-click="ok()">OK</button>
				            <button class="btn btn-warning" type="button" ng-click="cancel()">Cancel</button>
				        </div>
				    </script>




	<script>
function comodos($scope) {
    $scope.itens = [
        {tipo: 'Quarto', area: 3.5, portas: 2, janelas: 2},
        {tipo: 'Cozinha', area: 7, portas: 1, janelas: 1},
        {tipo: 'Sala', area: 5.5, portas: 1, janelas: 1},
       
    ];
}
</script>		

</div>		  

	<div class="table-container" ng-controller="comodos" ng-app="comodos">

	<table class="table table-filter">
								<tbody>
									 <thead>
								      <tr>
								      	<th></th>
								        <th>Tipo</th>
								        <th>Área</th>
								        <th></th>
								        <th></th>
								      </tr>
								    </thead>
									<tr ng-repeat="item in itens">
										
									
										<td>
											<div class="media">
												<a href="#" class="pull-left">
													<img src="https://s3.amazonaws.com/uifaces/faces/twitter/fffabs/128.jpg" class="media-photo">
												</a>												
											</div>
										</td>

										<td>
										<div class="media-body">													
													<h4 class="title">
														{{ item.tipo }}
													</h4>													
												</div>
										</td>
										 
										<td>
											{{ item.area }}
										</td>
											
										<td>
										<div class="blocos-edicao">
											<p>{{ item.portas }} <img src="https://s3.amazonaws.com/uifaces/faces/twitter/fffabs/128.jpg" class="media-photo"></p>
											<p>{{ item.janelas }} <img src="https://s3.amazonaws.com/uifaces/faces/twitter/fffabs/128.jpg" class="media-photo">
										
										</div>
										</td>
										<td><button>EDITAR</button></td>
									</tr>
									
								
								</tbody>
							</table>


				</div>
<?php require_once('rodape.php'); ?>