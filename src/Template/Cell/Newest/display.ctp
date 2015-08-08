<div class="row">
	<?php foreach ($videos as $video): ?>
		<div class="col-md-12" style="margin-bottom: 27px;">
			<?= $this->element('Site/box_video', [
				'video' => $video,
				'imageSize' => 180,
				'headerSize' => 4
			]) ?>
		</div>
	<?php endforeach ?>
</div>