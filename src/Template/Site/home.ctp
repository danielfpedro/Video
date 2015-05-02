<div class="container">

	<div class="row home-row-header">
		<div class="col-md-5">
			<div class="row">
				<div class="col-md-2">
					<?= $this->Html->image('logo.png', ['class' => 'img-responsive']) ?>		
				</div>
				<div class="col-md-10" style="margin-top: 8px;">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Pesquisar...">
						<span class="input-group-btn">
							<button class="btn btn-danger" type="button">
								<span class="glyphicon glyphicon-search"></span>
							</button>
						</span>
					</div>	
				</div>
			</div>
		</div>
		<div class="col-md-7" style="margin-top: 8px;">
			<ul class="nav nav-pills">
				<li>
					<?= $this->Html->link('Home', []) ?>	
				</li>
				<li>
					<?= $this->Html->link('Estações', []) ?>	
				</li>
				<li>
					<?= $this->Html->link('Playlists', []) ?>	
				</li>
			</ul>
		</div>
	</div>

	<div class="row home-row-tags">
		<div class="col-md-12 text-center">
			<div>
			<?php foreach (['Hip-Hop', 'Pop', 'Soul', 'Bossa Nova'] as $tag): ?>
				<span class="label label-custom-primary home-label-tag"><?= $tag ?></span>
			<?php endforeach ?>
			</div>
			<div style="margin-top: 10px;">
			<?php foreach (['R&B', 'Eletrônica', 'Dub-step', 'House', 'Punk', 'Rock'] as $tag): ?>
				<span class="label label-custom-primary home-label-tag"><?= $tag ?></span>
			<?php endforeach ?>
			</div>
		</div>
	</div>
	<div class="row" style="margin-bottom: 60px;">
		<div class="col-md-6">
			<?= $this->element('Site/box_video_lg') ?>
		</div>
		<div class="col-md-6">
			<?= $this->element('Site/box_video_lg') ?>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<h2 class="title">
				Artistas no topo
			</h2>
			<div class="row">
				<?php foreach ([0, 0, 0, 0, 0, 0] as $key => $value): ?>
					<div class="col-md-2">
						<?= $this->element('Site/box_artists') ?>
					</div>
				<?php endforeach ?>
			</div>
		</div>
	</div>

<!-- 	<div class="row" style="margin-top: 60px;">
		<div class="col-md-9">
			<h2 class="title">
				Artistas no top
			</h2>

			<div class="row">
				<div class="col-md-12">
					<div class="row">
						<?php foreach ([0, 1, 2, 3, 4, 5] as $item): ?>
							<div class="col-md-4">
								<?= $this->element('Site/box_video', ['size' => 'md']) ?>
							</div>
						<?php endforeach ?>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<h2 class="title">
				Artistas no top
			</h2>
			<?php foreach ([0, 1, 2, 3, 4] as $item): ?>
				<div class="row home-row-artists">
					<div class="col-md-12">
						<?= $this->element('Site/box_artists') ?>
					</div>
				</div>
			<?php endforeach ?>
			<br>
			<div class="text-center">
				<button type="button" class="btn btn-primary">Ver todos</button>	
			</div>
		</div>
	</div>
 -->
	<div class="row" style="margin-top: 60px;">
		<div class="col-md-12">
			<h2 class="title">
				Artistas no top
			</h2>
		</div>
		<div class="row">
			<?php foreach ([0, 1, 2, 3, 4, 5, 6, 7, 0, 0, 0, 0] as $item): ?>
				<div class="col-md-3">
					<?= $this->element('Site/box_video', ['size' => 'md']) ?>
				</div>
			<?php endforeach ?>
		</div>
	</div>

</div>