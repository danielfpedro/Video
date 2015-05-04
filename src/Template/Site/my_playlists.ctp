<div class="container">

	<?= $this->element('Site/header') ?>

	<div class="row">
		<div class="col-md-2 text-center">
			<?= $this->Html->image('ariana-avatar.jpg', ['class' => 'img-circle', 'width' => '60%']) ?>
			<h3>Daniel Pedro</h3>

			<hr>

			<ul class="nav nav-pills nav-stacked text-left">
				<li>
					<?= $this->Html->link('Artistas', ['action' => 'myProfile']) ?>
				</li>
				<li>
					<?= $this->Html->link('Favoritos', []) ?>
				</li>
				<li class="active">
					<?= $this->Html->link('Playlists', []) ?>
				</li>
			</ul>
		</div>
		<div class="col-md-10">
			<h2 class="title">Playlists</h2>
			<div class="row">
				<?php foreach ([0, 0, 0, 0, 0, 0] as $key => $value): ?>
					<div class="col-md-2">
						<?= $this->element('Site/box_playlist') ?>
					</div>
				<?php endforeach ?>
			</div>
		</div>
	</div>

</div>