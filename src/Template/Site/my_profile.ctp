<div class="container">

	<?= $this->element('Site/header') ?>

	<div class="row">
		<div class="col-md-2 text-center">
			<?= $this->Html->image('ariana-avatar.jpg', ['class' => 'img-circle', 'width' => '60%']) ?>
			<h4>Daniel Pedro</h4>

			<hr>

			<ul class="nav nav-pills nav-stacked text-left">
				<li class="active">
					<?= $this->Html->link('Artistas', []) ?>
				</li>
				<li>
					<?= $this->Html->link('Favoritos', []) ?>
				</li>
				<li>
					<?= $this->Html->link('Playlists', []) ?>
				</li>
			</ul>
		</div>
		<div class="col-md-10">
			<div class="row">
				<?php foreach ([0, 0, 0, 0, 0, 0, 0, 0] as $key => $value): ?>
					<div class="col-md-3">
						<?= $this->element('Site/box_artists_full') ?>
					</div>
				<?php endforeach ?>
			<div class="col-md-10"></div>
		</div>
	</div>

</div>