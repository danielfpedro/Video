<div class="container">
<div class="row home-row-header">
		<div class="col-md-5">
			<div class="row">
				<div class="col-md-2">
					<?= $this->Html->image('logo.png', ['class' => 'img-responsive', 'url' => ['controller' => 'Site', 'action' => 'home']]) ?>		
				</div>
				<div class="col-md-10" style="margin-top: 8px;">
					
					<form action="/videos/site/search" method="GET">
						<div class="input-group">
							<input type="text" class="form-control input-lg" name="q" placeholder="Pesquisar...">
							<span class="input-group-btn">
								<button class="btn btn-danger btn-lg" type="button">
									<span class="glyphicon glyphicon-search"></span>
								</button>
							</span>
						</div>
					</form>
					
				</div>
			</div>
		</div>
		<div class="col-md-7 text-right" style="margin-top: 8px;">
			<div class="pull-right" style="margin-top: 5px">
				<button class="btn btn-sm btn-default">Entrar</button>
				<button class="btn btn-sm btn-success">Criar Conta</button>
			</div>
			<ul class="nav nav-pills pull-right">
				<li>
					<?= $this->Html->link('Home', ['action' => 'home']) ?>	
				</li>
				<li>
					<?= $this->Html->link('Playlists', ['action' => 'playlists']) ?>	
				</li>
			</ul>
		</div>
	</div>
</div>