<div class="container">

	<?= $this->element('Site/header') ?>

	<?= $this->element('Site/tags_header') ?>

	<div class="row">
		<div class="col-md-9">
			<h2 class="title">
				Resultado para "<?= h($this->request->query('q')) ?>"
			</h2>
			<div class="row">
				<?php foreach ([0,0,0,0,0,0,0] as $key => $value): ?>
					<div class="col-md-3">
						<?= $this->element('Site/box_video') ?>
					</div>
				<?php endforeach ?>
			</div>
		</div>
		<div class="col-md-3">
			<h2 class="title">
				Artistas relacionados
			</h2>
			<div class="row">
				<?php foreach (['Iggy Azalea', 'Cone Crew Diretoria', 'Eminem', 'Ariana Grande'] as $key => $value): ?>
					<div class="col-md-12" style="margin-bottom: 15px;">
						<?= $this->element('Site/box_artists', ['artistName' => $value, 'imageSize' => 50]) ?>
					</div>
				<?php endforeach ?>
			</div>
		</div>
	</div>
</div>