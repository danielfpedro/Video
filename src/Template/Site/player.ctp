<?= $this->assign('title', $video->name) ?>

<script>
	$(function(){
		var h = $('#video').height();
		$('#playlist').css('height', h);
	});
</script>

<?= $this->element('Site/header') ?>

<div style="background-color: #111;margin-top: 65px;">
	<div class="container">
		<div class="row">
			<div class="col-md-9 col-md-offset-1" id="video">
				<div
					id="player-wrap"
					class="embed-responsive embed-responsive-16by9"
					style="background-color: #E7E7E7; background-image: url(../../img/<?= $video->photo_lg ?>); background-size: cover">

					<iframe data-url="https://www.youtube.com/embed/<?= $video->embed ?>?autoplay=1&modestbranding=1" id="player" class="embed-responsive-item" src="" frameborder="0" allowfullscreen></iframe>

					<div id="player-placeholder" style="width: 84px; left: 50%; top: 50%; position:absolute;margin-left: -42px; margin-top: -42px; ">
						<?= $this->Html->image('play.png', ['width' => 84]) ?>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>
<div class="container">
	<?php if ($this->request->query('playlist')): ?>
			<div class="row">
				<div class="col-md-12">
					<div style="padding: 10px 0;">
						<div class="btn-group pull-right">
							<button class="btn btn-default btn-sm" title="Próximo vídeo da Playlist">
								<span class="glyphicon glyphicon-step-backward"></span>
							</button>
							<button class="btn btn-default btn-sm" title="Vídeo anterior da Playlist">
								<span class="glyphicon glyphicon-step-forward"></span>
							</button>
						</div>
						<h5 class="title" style="margin-top: 0; margin-bottom: px;">
							Playlist - <small>Churrasco</small>
						</h5>
					</div>
				</div>
			</div>
		<?php endif ?>
		<div class="row">
			<div class="col-md-6 col-md-offset-1">
				<h3><?= $video->name ?></h3>
				<p class="text-muted">123 Visualizações</p>
				<div class="row">
					<div class="col-md-4">
						<?= $this->element('Site/box_artists', [
							'artist' => $video->artist,
							'imageSize' => 60,
							'header' => 'h5'
						]) ?>							
					</div>
					<?php if ($video->featurings): ?>
						<?php foreach ($video->featurings as $featuring): ?>
							<div class="col-md-4">
								<?= $this->element('Site/box_artists', [
									'artist' => $featuring,
									'imageSize' => 60,
									'header' => 'h5'
								]) ?>
							</div>
						<?php endforeach ?>
					<?php endif ?>
				</div>
			</div>
			<div class="col-md-3">
				<a href="#modal-share" data-toggle="modal" class="btn btn-primary btn-block" style="margin-top: 20px;">
					Compartilhar <span class="glyphicon glyphicon-share-alt"></span>
				</a>
			</div>
		</div>
			<?php if ($this->request->query('playlist')): ?>
				<div class="col-md-3 col-md-offset-3" id="playlist">
					<div style="overflow: auto; height: 100%;">
						<?php foreach ([0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0] as $key => $value): ?>
							<?= $this->element('Site/box_video_horizontal', ['imageSize' => 80, 'headerSize' => 5])?>
						<?php endforeach ?>
					</div>
				</div>
			<?php endif ?>
		</div>
</div>

<div class="container">

	<div class="row" style="margin-top: 80px;">
		<div class="col-md-12">
			<h2 class="title">
				Parecidos com Iggy
			</h2>
			<div class="row">
				<?php foreach ($videos as $video): ?>
					<div class="col-md-3">
						<?= $this->element('Site/box_video', ['video' => $video, 'headerSize' => 4]) ?>
					</div>
				<?php endforeach ?>
			</div>
		</div>
	</div>
</div>