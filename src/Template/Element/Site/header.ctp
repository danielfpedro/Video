<nav class="navbar navbar-default navbar-fixed-top" id="header">
	<div class="container" >

<div class="navbar-header" >
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <form class="navbar-form navbar-left" role="search" action="<?= $this->Url->build(['controller' => 'Site', 'action' => 'search'])?>">
			<div class="form-group">
		<input
			type="text"
			class="form-control header-input-search"
			name="q"
			placeholder="Pesquisar vídeos"
			style="width: 250px;"
			value="<?= h($this->request->query('q'))?>"
			autocomplete="off">
		
		<button class="btn btn-default" type="button" style="background: none; border: 0; box-shadow: none; margin-left: -40px;">
			<span class="glyphicon glyphicon-search"></span>
		</button>
		
	</div>
      </form>
   <ul class="nav navbar-nav navbar-left">
        <li>
        	<?= $this->Html->link('Home', ['controller' => 'Site', 'action' => 'home']) ?>
        </li>
                <li>
        	<?= $this->Html->link('Playlists', ['controller' => 'Site', 'action' => 'playlists']) ?>
        </li>
       </ul>

       <?php if (!$loggedinUser): ?>
       	
       
       <div class="pull-right">
    	
	    	<?= $this->Html->link('Criar Conta',
	    		['controller' => 'Users', 'action' => 'add'],
	    		['class' => 'btn btn-default btn-sm navbar-btn']) ?> 
	    	&nbsp;
	    	<?= $this->Html->link('Fazer login',
	    		['controller' => 'Users', 'action' => 'login'],
	    		['class' => 'btn btn-primary btn-sm navbar-btn']) ?> 
    	</div>
	<?php else: ?>
      <ul class="nav navbar-nav navbar-right">

		<li>
        	<?= $this->Html->link('<span class="fa fa-bell"></span>',
        		['action' => 'home'],
        		[
        			'escape' => false
        		]) ?>
        </li>
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
					<li class="divider"></li>
					<li role="presentation">
						<?= $this->Html->link('Sair', ['controller' => 'Users', 'action' => 'logout']) ?>
					</li>
				</ul>
	        </li>
      </ul>
        <?php endif ?>
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