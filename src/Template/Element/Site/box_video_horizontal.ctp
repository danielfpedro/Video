<div class="box-video" >
	<div class="row" style="margin-bottom: 15px;">
		<div class="col-md-12">
			<div class="media">
				<div class="media-left">
					<?= $this->Html->image('iggy-video.jpg', ['url' => ['action' => 'player'], 'class' => 'media-object', 'width' => $imageSize]) ?>
				</div>
				<div class="media-body">
					<h4 class="media-heading">
						<?= $this->Html->link('Work', ['action' => 'player']) ?>
						<small>
							<?= $this->Html->link('Iggy Azalea', ['action' => 'artistProfile']) ?>
						</small>
					</h4>
					<p class="text-muted"><small>1 dia atrás</small></p>
					<div class="text-muted" style="font-size: 12px;">
						<span class="glyphicon glyphicon-share-alt"></span>
						<span class="glyphicon glyphicon-heart"></span>
						<span class="glyphicon glyphicon-plus"></span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>