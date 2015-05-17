<div class="row">
	<?php foreach ($videos as $video): ?>
		<div class="col-md-12">
			<?= $this->element('Site/box_video_horizontal', [
				'video' => $video,
				'imageSize' => 120,
				'headerSize' => 4
			]) ?>
		</div>
	<?php endforeach ?>
</div>