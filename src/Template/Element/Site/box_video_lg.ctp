<div class="box-video box-video-lg">
	<div class="row">
		<div class="col-md-12">
			<div class="box-video-lg-action-btns text-right">
				<a href="#modal-playlists" data-toggle="modal">
					<span class="glyphicon glyphicon-plus"></span>
				</a>
				<a
					data-target="#"
					href="#"
					class="glyphicon glyphicon-star dropdown-toggle"
					data-toggle="dropdown">
				</a>
				<a href="#modal-share" data-toggle="modal">
					<span class="glyphicon glyphicon-share-alt"></span>
				</a>
			</div>
		</div>
	</div>
	<div class="row box-video-image-row">
		<div class="col-md-12">
			<div class="image-wrap">
				<?= $this->Html->image($video->imageFullPath, [
					'url' => [
						'action' => 'player',
						$video->slug
					], 'class' => 'img-responsive']) ?>
				<div class="img-overlay" style="display: none;"></div>	
			</div>
		</div>
	</div>
			
	<div class="row box-video-body">
		<div class="col-md-12">
			
			<h1 class="box-video-lg-title">
				<?= $this->Html->link($video->name, [
					'action' => 'player',
					$video->slug
				]) ?>
				<small>
					<?php foreach ($video->artists as $artist): ?>
						<?= $this->Html->link($artist->name, [
							'action' => 'artistProfile',
							$artist->slug
						]) ?>	
					<?php endforeach ?>
				</small>
			</h3>
		</div>
	</div>
</div>