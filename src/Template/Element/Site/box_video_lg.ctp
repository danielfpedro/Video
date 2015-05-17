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
					'url' => $video->player_url,
					'class' => 'img-responsive'
				]) ?>
				<div class="img-overlay" style="display: none;"></div>	
			</div>
		</div>
	</div>
			
	<div class="row box-video-body">
		<div class="col-md-12">
			
			<h1 class="box-video-lg-title">
				<?= $this->Html->link($video->name, $video->player_url) ?>
				<small>
					<?= $this->Html->link($video->artist->name, $video->artist->profile_url) ?>	
					<?php if ($video->featurings_formated): ?>
						<?= $this->Text->toList($video->featurings_formated) ?>
					<?php endif ?>
				</small>
			</h3>
		</div>
	</div>
</div>