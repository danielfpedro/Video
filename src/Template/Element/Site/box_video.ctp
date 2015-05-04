<div class="box-video">
	<div class="row box-video-image-row">
		<div class="col-md-12">
			<div class="image-wrap">
				<?= $this->Html->image('iggy-video.jpg',
					['url' => ['controller' => 'Site', 'action' => 'player'], 'class' => 'img-responsive']) ?>		

				<div class="img-overlay" style="display: none;">
				</div>
				
				<div class="box-video-action-btns">				
					<div class="box-video-btns-btn">
						<a data-target="#" href="#" class="glyphicon glyphicon-plus dropdown-toggle" data-toggle="dropdown"></a>
						<ul class="dropdown-menu dropdown-menu-right" role="menu">
							<li role="presentation">
								<a role="menuitem" tabindex="-1" href="#">
									Rock
								</a>
							</li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Samba</a></li>
						</ul>
					</div>
					<div class="box-video-btns-btn">
						<a data-target="#" href="#" class="glyphicon glyphicon-star dropdown-toggle" data-toggle="dropdown"></a>
					</div>
					<div class="box-video-btns-btn">
						<a data-target="#" href="#" class="glyphicon glyphicon-share-alt dropdown-toggle" data-toggle="dropdown"></a>
						<ul class="dropdown-menu dropdown-menu-right" role="menu">
							<li role="presentation">
								<a role="menuitem" tabindex="-1" href="#">
									Facebook
								</a>
							</li>
							<li role="presentation">
								<a role="menuitem" tabindex="-1" href="#">
									Twitter
								</a>
							</li>
							<li role="presentation">
								<a role="menuitem" tabindex="-1" href="#">
									Google+
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
			
	<div class="row box-video-body">
		<div class="col-md-12">
			
			<h4>
				<?= $this->Html->link('I\'m The New Bitch', ['controller' => 'Site', 'action' => 'player']) ?>
				<small>
					<?= $this->Html->link('Iggy Azalea', ['controller' => 'Site', 'action' => 'artistProfile']) ?>
				</small>
			</h4>
			
			<p class="text-muted">
				<small>3 dias atrás</small>
			</p>
		</div>
	</div>
</div>