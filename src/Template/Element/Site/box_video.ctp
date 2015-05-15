<div class="box-video box-video-md">
	<div class="row box-video-image-row">
		<div class="col-md-12">
			<div class="image-wrap">
				<?= $this->Html->image('iggy-video.jpg', [
					'url' => $video->player_url,
					'class' => 'img-responsive'])
				?>

				<div class="img-overlay" style="display: none;"></div>
				
			</div>
		</div>
	</div>
			
	<div class="row box-video-body">
		<div class="col-md-12">
			<h<?= $headerSize ?> class="box-video-title">
				<?= $this->Html->link($video->name, $video->player_url) ?>
				<small>
					<?= $this->Html->link($video->artist->slug, $video->artist->profile_url) ?>
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
				<small>
					<?= $this->Time->timeAgoInWords($video->created) ?>
				</small>
			</p>
		</div>
	</div>
</div>