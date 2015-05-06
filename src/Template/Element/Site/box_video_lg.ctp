<div class="box-video">
	<div class="row">
		<div class="col-md-12">
			<div class="box-video-lg-action-btns">
				<div class="box-video-btns-btn">
					<a href="#modal-playlists" >
						<span class="glyphicon glyphicon-plus"></span>
					</a>
					
				</div>
				<div class="box-video-btns-btn">
					<a data-target="#" href="#" class="glyphicon glyphicon-star dropdown-toggle" data-toggle="dropdown"></a>
				</div>
				<div class="box-video-btns-btn">
					<a href="#modal-share" >
						<span class="glyphicon glyphicon-share-alt"></span>
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="row box-video-image-row">
		<div class="col-md-12">
			<div class="image-wrap">
				<?= $this->Html->image('iggy-video.jpg', ['url' => 	['action' => 'player'], 'class' => 'img-responsive']) ?>
				<div class="img-overlay" style="display: none;"></div>	
			</div>
		</div>
	</div>
			
	<div class="row box-video-body">
		<div class="col-md-12">
			
			<h3>
				<?= $this->Html->link('I\'m The New Bitch', ['action' => 'player']) ?>
				<small>
					<?= $this->Html->link('Iggy Azalea', ['action' => 'artistProfile']) ?>
				</small>
			</h3>
		</div>
	</div>
</div>