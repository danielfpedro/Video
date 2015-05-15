<?= $this->element('Site/header') ?>

<div class="container" style="margin-top: 100px;">

	<div class="row">
		<div class="col-md-9">
			<h2 class="title">
				Resultado para "<?= h($this->request->query('q')) ?>"
			</h2>
			<div class="row">
				<?php if ($videos): ?>
					<?php foreach ($videos as $video): ?>
						<div class="col-md-3">
							<?= $this->element('Site/box_video', ['video' => $video, 'headerSize' => 4]) ?>
						</div>
					<?php endforeach ?>
				<?php else: ?>
					<h5><em>Nenhum resultado encontrado.</em></h5>
				<?php endif ?>
			</div>
		</div>
		<div class="col-md-3">
			<h2 class="title">
				Artistas relacionados
			</h2>
			<div class="row">
				<?php foreach ($artists as $artist): ?>
					<div class="col-md-12" style="margin-bottom: 15px;">
						<?= $this->element('Site/box_artists', ['artist' => $artist, 'imageSize' => 60]) ?>
					</div>
				<?php endforeach ?>
			</div>
		</div>
	</div>
</div>