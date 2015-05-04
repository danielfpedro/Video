<div class="media">
	<div class="media-left">
		<?php $url = ['controller' => 'site', 'action' => 'action'] ?>
		<?= $this->Html->image('kanye-avatar.jpg', [
			'class' => 'media-object img-circle',
			'width' => $imageSize,
			'url' => $url
		]) ?>
	</div>
	<div class="media-body">
		<h5 class="media-heading">
			<?= $this->Html->link($artistName, $url) ?>
		</h5>
		<button type="button" class="btn btn-danger btn-xs">Seguir</button>
	</div>
</div>