<div class="media">
	<div class="media-left">
		<?= $this->Html->image($artist->profile_image_sq, [
			'class' => 'media-object img-circle',
			'width' => $imageSize,
			'url' => $artist->profile_url
		]) ?>
	</div>
	<div class="media-body">
		<h3 class="media-heading truncate box-artists-title">
			<?= $this->Html->link($artist->name, $artist->profile_url, ['style' => 'font-weight: bold;']) ?>
		</h3>
		<button
			id="btn-like"
			type="button"
			class="btn btn-default btn-xs"
			data-liked="0"
			style="text-transform: none;">
			Seguir
		</button>
	</div>
</div>
