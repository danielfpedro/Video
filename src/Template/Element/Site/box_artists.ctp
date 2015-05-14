<div class="media">
	<div class="media-left">
		<?php $url = ['controller' => 'Site', 'action' => 'artistProfile'] ?>
		<?= $this->Html->image('kanye-avatar.jpg', [
			'class' => 'media-object img-circle',
			'width' => $imageSize,
			'url' => $url
		]) ?>
	</div>
	<div class="media-body">
		<h3 class="media-heading truncate box-artists-title">
			<?= $this->Html->link($artistName, $url, ['style' => 'font-weight: bold;']) ?>
		</h3>
		<button type="button" class="btn btn-success btn-xs" style="text-transform: none;">Seguir</button>
	</div>
</div>
