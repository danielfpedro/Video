<?= $this->element('Site/header') ?>

<div style="background-color: #FFF;background-image: url(../img/bg-topo.fw.png); background-size: cover; background-position: top center">
	<div class="container" style="padding: 80px 0 0 0;">
		<!--<?= $this->element('Site/tags_header') ?>-->
		
		
			<div class="row" style="margin-top: 10px; font-size: #FFF;">
				<div class="col-md-6">
					<?= $this->element('Site/box_video_lg') ?>
				</div>
				<div class="col-md-6">
					<?= $this->element('Site/box_video_lg') ?>
				</div>
			</div>
		
	</div>
</div>

<div class="container" style="margin-top: 30px;">

	<div class="row">
		<div class="col-md-12">
			<h2 class="title">
				Artistas no topo
			</h2>
			<div class="row">
				<?php foreach (['Eminem', 'Kanye West', 'Cone Crew Diretoria', 'Lil Wayne', 'Drake', 'Madonna'] as $key => $value): ?>
					<div class="col-md-2">
						<?= $this->element('Site/box_artists', ['artistName' => $this->Text->truncate($value, 10), 'imageSize' => 60, 'fontSize' => '16px']) ?>
					</div>
				<?php endforeach ?>
			</div>
		</div>
	</div>

	<div class="row" style="margin-bottom: 60px; margin-top: 60px;">
		<div class="col-md-12">
			<?= $this->element('Site/ad_horizontal') ?>
		</div>
	</div>

	<div class="row">
		<div class="col-md-4">
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
		<div class="col-md-5">
			<h2 class="title">
				#Trends
			</h2>
		
			<div class="row">
				<?php foreach ([0, 1, 2, 3, 4, 5, 6, 7, 0, 0, 0, 0] as $item): ?>
					<div class="col-md-12" style="margin-bottom: 15px;">
						<?= $this->element('Site/box_video', ['size' => 'lg']) ?>
					</div>
				<?php endforeach ?>
			</div>
		</div>
	</div>

</div>