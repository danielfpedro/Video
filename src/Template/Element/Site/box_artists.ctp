<div class="media">
	<div class="media-left">
		<?= $this->Html->image('kanye-avatar.jpg', [
			'class' => 'media-object img-circle',
			'width' => $imageSize,
			'url' => $artist->profile_url
		]) ?>
	</div>
	<div class="media-body">
		<h3 class="media-heading truncate box-artists-title">
			<?= $this->Html->link($artist->name, $artist->profile_url, ['style' => 'font-weight: bold;']) ?>
		</h3>
		<button type="button" class="btn btn-success btn-xs" style="text-transform: none;">Seguir</button>
	</div>
</div>
