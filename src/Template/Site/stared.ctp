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
				<li class="active">
					<?= $this->Html->link('Favoritos', []) ?>
				</li>
				<li>
					<?= $this->Html->link('Playlists', []) ?>
				</li>
			</ul>
		</div>
		<div class="col-md-10">
			<div class="media">
				<div class="media-left">
					<?php $url = ['controller' => 'site', 'action' => 'action'] ?>
					<?= $this->Html->image('kanye-avatar.jpg', [
						'class' => 'media-object img-circle',
						'width' => 50,
					]) ?>
				</div>
				<div class="media-body">
					<h4 class="media-heading" style="margin-top: 15px;">
						<?= $this->Html->link('Iggy Azalea', []) ?>
					</h4>
				</div>
			</div>
			<hr>
			<div class="row">
				<?php foreach ([0, 0, 0, 0, 0, 0, 0, 0] as $key => $value): ?>
					<div class="col-md-3">
						<?= $this->element('Site/box_video') ?>
					</div>
				<?php endforeach ?>
			</div>

			<div class="media">
				<div class="media-left">
					<?php $url = ['controller' => 'site', 'action' => 'action'] ?>
					<?= $this->Html->image('kanye-avatar.jpg', [
						'class' => 'media-object img-circle',
						'width' => 50,
					]) ?>
				</div>
				<div class="media-body">
					<h4 class="media-heading" style="margin-top: 15px;">
						<?= $this->Html->link('Iggy Azalea', []) ?>
					</h4>
				</div>
			</div>
			<hr>
			<div class="row">
				<?php foreach ([0, 0, 0, 0, 0, 0, 0, 0] as $key => $value): ?>
					<div class="col-md-3">
						<?= $this->element('Site/box_video') ?>
					</div>
				<?php endforeach ?>
			</div>

		</div>
	</div>

</div>