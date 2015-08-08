<?= $this->assign('title', 'Home') ?>
<?= $this->element('Site/header') ?>
<?= $this->Html->script('Site/home', ['inline' => false]) ?>

<div style="background-color: #F2F2F2; background-size: cover; background-position: top center">
	<div class="container" style="padding: 80px 0 0 0;">
		<!--<?= $this->element('Site/tags_header') ?>-->
		
		
		<div class="row" style="margin-top: 10px;">
			<?php foreach ($destaques as $destaque): ?>
				<div class="col-md-6">
					<?= $this->element('Site/box_video_lg', ['video' => $destaque]) ?>
				</div>
			<?php endforeach ?>
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
				<?php foreach ($artists as $artist): ?>
					<div class="col-md-2 col-sm-2 col-xs-2">
						<?= $this->element('Site/box_artists', [
							'artist' => $artist,
							'imageSize' => 60,
							'fontSize' => '16px'
						]) ?>
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
		<div class="col-md-3">
			<h2 class="title">
				Novidades
			</h2>
			<?= $this->cell('Newest', ['limit' => 15]) ?>
		</div>
		<div class="col-md-4">
			<h2 class="title">
				#Trends
			</h2>
		
			<div class="row">
				<?php foreach ($trends as $trend): ?>
					<div class="col-md-12 col-sm-4" style="margin-bottom: 25px;">
						<?= $this->element('Site/box_video', ['headerSize' => 3, 'video' => $trend]) ?>
					</div>
				<?php endforeach ?>
			</div>
		</div>
		<div class="col-md-5">
			<h2 class="title">
				Subindo
			</h2>
		
			<div class="row">
				<?php foreach ($risings as $rising): ?>
					<div class="box-video-rising">
						<div class="col-md-12 col-sm-4">
							<?= $this->element('Site/box_video', ['headerSize' => 4, 'video' => $rising]) ?>
						</div>
					</div>
				<?php endforeach ?>
			</div>
		</div>
	</div>

</div>