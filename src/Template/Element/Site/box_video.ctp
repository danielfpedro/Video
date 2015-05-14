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
			<h<?= $headerSize ?> class="box-video-title">
				<?= $this->Html->link('Black Widow', [
						'controller' => 'Site',
						'action' => 'player'
					],
					[
						'class' => ''

				]) ?>
				<small>
					<?= $this->Html->link('Iggy Azalea', ['controller' => 'Site', 'action' => 'artistProfile']) ?> <span>part.</span> 
					<?= $this->Html->link('Rita Ora', ['controller' => 'Site', 'action' => 'artistProfile']) ?> 
				</small>
			</h<?= $headerSize ?>>
			
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