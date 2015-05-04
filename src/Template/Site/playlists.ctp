<div class="container">
	<?= $this->element('Site/header') ?>

	<div class="row" style="margin-top: 80px;">
		<div class="col-md-12">
			<h2 class="title">
				Playlists
			</h2>
		</div>
	</div>
	<div class="row">

		<div class="col-md-3">
			<input type="text" class="form-control" placeholder="Pesquisar Playlists">

			<br>

			<?php foreach (['Rock', 'Samba', 'Hip-Hop', 'R&B'] as $key => $value): ?>
				<a href="#" class="label label label-custom-primary home-label-tag">
					<span class="">
						<?= $value ?>
					</span>
				</a>
			<?php endforeach ?>

			<hr>

			<h5 class="text-muted">Publicidade</h5>

			<?= $this->Html->image('tomorrowland-ad.jpg', ['class' => 'img-responsive']) ?>
		</div>
		<div class="col-md-9">
			<div class="row">
				<div class="col-md-12">
					<h2 class="title">Destaques</h2>
					<div class="row">
						<?php foreach ([0, 0, 0, 0 ,0, 0] as $key => $value): ?>
							<div class="col-md-4">
								<?= $this->element('Site/box_playlist') ?>
							</div>
						<?php endforeach ?>
					</div>		
				</div>
				<div class="col-md-12">
					<h2 class="title">Públicas</h2>
					<div class="row">
						<?php foreach ([0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0] as $key => $value): ?>
							<div class="col-md-3">
								<?= $this->element('Site/box_playlist') ?>
							</div>
						<?php endforeach ?>
					</div>	
				</div>
			</div>	
		</div>
	</div>
</div>