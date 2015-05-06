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
		<p class="media-heading" style="font-size: 15px; margin-top: 6px;">
			<?= $this->Html->link($artistName, $url) ?>
		</p>
		<button type="button" class="btn btn-danger btn-xs">Seguir</button>
	</div>
</div>