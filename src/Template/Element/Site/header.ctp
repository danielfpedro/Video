<!-- <div class="header-wrap">
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
								<input type="text" class="form-control" name="q" placeholder="Pesquisar..." style="padding-left: 18px;border-bottom-left-radius: 40px;border-top-left-radius: 40px;">
								<span class="input-group-btn">
									<button class="btn btn-default" type="button" style="border-bottom-right-radius: 40px;border-top-right-radius: 40px;">
										<span class="glyphicon glyphicon-search"></span>
									</button>
								</span>
							</div>
						</form>
						
					</div>
				</div>
			</div>
			<div class="col-md-7" style="margin-top: 8px;">

				<div class="row">
					<div class="col-md-8">
<ul class="nav nav-pills pull-right">
					<li>
						<?= $this->Html->link('Home', ['action' => 'home']) ?>	
					</li>
					<li>
						<?= $this->Html->link('Playlists', ['action' => 'playlists']) ?>	
					</li>
				</ul>
					</div>
					<div class="col-md-4" style="">
						<div class="media">
						<div class="media-left">
							<?= $this->Html->image('kanye-avatar.jpg', ['class' => 'media-object img-circle', 'width' => 35]) ?>
						</div>
						<div class="media-body">
							<a href="#" data-toggle="dropdown">
								<h5 class="media-heading clearfix" style="margin-top: 12px;">Daniel Pedro
									<span class="caret"></span>
								</h5>
							</a>
							<ul class="dropdown-menu dropdown-menu-right" role="menu" style="z-index: 9999999">
								<li role="presentation" class="dropdown-header">
									Minha Coleção
								</li>
								<li role="presentation">
									<?= $this->Html->link('Artistas', ['action' => 'myProfile']) ?>
								</li>
								<li role="presentation">
									<?= $this->Html->link('Favoritos', ['action' => 'stared']) ?>
								</li>
								<li role="presentation">
									<?= $this->Html->link('Playlists', ['action' => 'myPlaylists']) ?>
								</li>
								<li class="divider">
									
								</li>
								<li role="presentation">
									<?= $this->Html->link('Configurações', []) ?>
								</li>
								<li class="divider">
									
								</li>
								<li role="presentation">
									<?= $this->Html->link('Sair', []) ?>
								</li>
							</ul>
						</div>
					</div>

					</div>
				
					
				
				</div>
			</div>
		</div>
	</div>
</div> -->
<nav class="navbar navbar-default navbar-fixed-top" >
	<div class="container" >

<div class="navbar-header" >
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
      <?= $this->Html->image('logo.png', ['class' => 'navbar-brand', 'url' => ['controller' => 'Site', 'action' => 'home']]) ?>	
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <form class="navbar-form navbar-left" role="search">
			<div class="form-group">
		<input type="text" class="form-control" name="q" placeholder="Pesquisar" style="padding-left: 20px;border-radius: 40px; width: 250px;" autocomplete="off">
		
			<button class="btn btn-default" type="button" style="border: 0; background: none;margin-left: -40px">
				<span class="glyphicon glyphicon-search"></span>
			</button>
		
	</div>
      </form>
   <ul class="nav navbar-nav navbar-left">
        <li>
        	<?= $this->Html->link('Home', ['action' => 'home']) ?>
        </li>
                <li>
        	<?= $this->Html->link('Playlists', ['action' => 'playlists']) ?>
        </li>
        </ul> 
      <ul class="nav navbar-nav navbar-right">

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
          <?= $this->Html->image('kanye-avatar.jpg', ['class' => 'img-circle', 'width' => 23]) ?>&nbsp;&nbsp;Daniel Pedro <span class="glyphicon glyphicon-chevron-down" style="font-size:10px;"></span></a>
<ul class="dropdown-menu" role="menu">
				<li role="presentation" class="dropdown-header">
					Minha Coleção
				</li>
				<li role="presentation">
					<?= $this->Html->link('Artistas', ['action' => 'myProfile']) ?>
				</li>
				<li role="presentation">
					<?= $this->Html->link('Favoritos', ['action' => 'stared']) ?>
				</li>
				<li role="presentation">
					<?= $this->Html->link('Playlists', ['action' => 'myPlaylists']) ?>
				</li>
				<li class="divider">
					
				</li>
				<li role="presentation">
					<?= $this->Html->link('Configurações', []) ?>
				</li>
				<li class="divider">
					
				</li>
				<li role="presentation">
					<?= $this->Html->link('Sair', []) ?>
				</li>
			</ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->

 <!-- <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      			<?= $this->Html->image('logo.png', ['class' => 'navbar-brand', 'url' => ['controller' => 'Site', 'action' => 'home']]) ?>	
    </div>
		<form class="navbar-form navbar-left collapse navbar-collapse" role="search">
							<div class="input-group">
								<input type="text" class="form-control" name="q" placeholder="Pesquisar..." style="padding-left: 18px;border-bottom-left-radius: 40px;border-top-left-radius: 40px;">
								<span class="input-group-btn">
									<button class="btn btn-default" type="button" style="border-bottom-right-radius: 40px;border-top-right-radius: 40px;">
										<span class="glyphicon glyphicon-search"></span>
									</button>
								</span>
							</div>
		</form>

		<ul class="nav navbar-nav navbar-right collapse navbar-collapse">
		<li><a href="#">Link</a></li>
		<li class="dropdown">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
			<?= $this->Html->image('kanye-avatar.jpg', ['class' => 'img-circle', 'width' => 30]) ?> Daniel Pedro <span class="caret"></span></a>
			<ul class="dropdown-menu" role="menu">
				<li role="presentation" class="dropdown-header">
					Minha Coleção
				</li>
				<li role="presentation">
					<?= $this->Html->link('Artistas', ['action' => 'myProfile']) ?>
				</li>
				<li role="presentation">
					<?= $this->Html->link('Favoritos', ['action' => 'stared']) ?>
				</li>
				<li role="presentation">
					<?= $this->Html->link('Playlists', ['action' => 'myPlaylists']) ?>
				</li>
				<li class="divider">
					
				</li>
				<li role="presentation">
					<?= $this->Html->link('Configurações', []) ?>
				</li>
				<li class="divider">
					
				</li>
				<li role="presentation">
					<?= $this->Html->link('Sair', []) ?>
				</li>
			</ul>
		</li>
		</ul> -->
	</div>
</nav>
<div style="margin-bottom: 45px;"></div>