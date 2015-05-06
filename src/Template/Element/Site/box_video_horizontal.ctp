<div class="box-video" >
	<div class="row"  style="margin-bottom: 15px;">
		<div class="col-md-12" >
			<div class="media" >
				<div class="media-left" >
					<div style="width: 120px; position: relative">
						<?= $this->Html->image('iggy-video.jpg', ['url' => ['action' => 'player'], 'class' => 'media-object img-responsive']) ?>
						<div class="img-overlay" style="display: none;"></div>
					</div>
				</div>
				<div class="media-body" >
					<h4 class="media-heading" >
						<?= $this->Html->link('Work', ['action' => 'player']) ?>
						<small>
							<?= $this->Html->link('Iggy Azalea', ['action' => 'artistProfile']) ?>
						</small>
					</h4>
					<p class="text-muted">
						<small>1 dia atrás</small>
					</p>
					<div class="video-btns-action" style="margin-top: -2px; position: absolute;">
						<a href="#modal-share">
							<span class="glyphicon glyphicon-share-alt"></span>
						</a>
						<a href="#">
							<span class="glyphicon glyphicon-star"></span>
						</a>
						<a href="#modal-playlists">
							<span class="glyphicon glyphicon-plus"></span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>