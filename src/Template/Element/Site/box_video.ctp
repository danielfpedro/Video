<div class="box-video box-video-md" >
	<div class="row box-video-image-row">
		<div class="col-md-12">
			<div class="image-wrap">
				<?= $this->Html->image('iggy-video.jpg',
					['url' => ['controller' => 'Site', 'action' => 'player'], 'class' => 'img-responsive']) ?>		

				<div class="img-overlay" style="display: none;"></div>
				
			</div>
		</div>
	</div>
			
	<div class="row box-video-body">
		<div class="col-md-12">
			
			<?php switch ($size) {
							case 'lg':
								$openH = '<h3>';
								$closeH = '</h3>';
								break;
							
							default:
								$openH = '<h4>';
								$closeH = '</h4>';
								break;
						} ?>
						<?= $openH ?>
							<?= $this->Html->link('I\'m The New Bitch', ['controller' => 'Site', 'action' => 'player']) ?>
							<small><?= $this->Html->link('Iggy Azalea', ['controller' => 'Site', 'action' => 'artistProfile']) ?></small>
						<?= $closeH ?>
						
						<p class="text-muted" style="margin-top: -3px;">
							<div class="video-btns-action pull-right">				
								<a href="#modal-share" data-toggle="modal">
									<span class="glyphicon glyphicon-share-alt"></span>
								</a>
								<a href="#">
									<span class="glyphicon glyphicon-star"></span>
								</a>
								<a href="#modal-playlists" data-toggle="modal">
									<span class="glyphicon glyphicon-plus"></span>
								</a>
							</div>
							<small>3 dias atrás</small>
						</p>
		</div>
	</div>
</div>