<div class="box-video" >
	<div class="row"  style="margin-bottom: 15px;">
		<div class="col-md-12" >
			<div class="media" >
				<div class="media-left" >
					<div style="width: 120px; position: relative">
						<?= $this->Html->image($video->photo_md, [
							'url' => $video->player_url,
							'class' => 'media-object img-responsive'
						]) ?>
						<div class="img-overlay" style="display: none;"></div>
					</div>
				</div>
				<div class="media-body" >
					<h<?= $headerSize?> class="box-video-title" style="margin-top: 0; margin-bottom: 0;">
						<?= $this->Html->link($video->name, $video->player_url) ?>
						<small>
							<?= $this->Html->link($video->artist->name, $video->artist->profile_url) ?>
						</small>
					</h<?= $headerSize?>>
					<p>
						<small>
							<?= $this->Time->timeAgoInWords($video->created) ?>
						</small>
					</p>
					<div class="video-btns-action" style="margin-top: -2px; position: absolute;">
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
				</div>
			</div>
		</div>
	</div>
</div>