<div class="container">

	<?= $this->element('Site/header') ?>

	<?= $this->element('Site/tags_header') ?>

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
				<?php foreach (['Eminem', 'Kanye West', 'Cone Crew Diretoria', 'Lil Wayne', 'Drake', 'Madonna'] as $key => $value): ?>
					<div class="col-md-2">
						<?= $this->element('Site/box_artists', ['artistName' => $value, 'imageSize' => 70]) ?>
					</div>
				<?php endforeach ?>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row" style="margin-top: 60px; ">
		<div class="col-md-3">
			<h2 class="title">
				Novidades
			</h2>
		
			<div class="row" style="">
				<?php foreach ([0, 1, 2, 3, 4, 5, 6, 7, 0, 0, 0, 0] as $item): ?>
					<div class="col-md-12">
						<?= $this->element('Site/box_video_horizontal', ['imageSize' => 120]) ?>
					</div>
				<?php endforeach ?>
			</div>
		</div>
		<div class="col-md-3">
			<h2 class="title">
				Subindo
			</h2>
		
			<div class="row">
				<?php foreach ([0, 1, 2, 3, 4, 5, 6, 7, 0, 0, 0, 0] as $item): ?>
					<div class="col-md-12">
						<?= $this->element('Site/box_video', ['size' => 'md']) ?>
					</div>
				<?php endforeach ?>
			</div>
		</div>
		<div class="col-md-6">
			<h2 class="title">
				#Trends
			</h2>
		
			<div class="row">
				<?php foreach ([0, 1, 2, 3, 4, 5, 6, 7, 0, 0, 0, 0] as $item): ?>
					<div class="col-md-12">
						<?= $this->element('Site/box_video', ['size' => 'md']) ?>
					</div>
				<?php endforeach ?>
			</div>
		</div>
	</div>

</div>