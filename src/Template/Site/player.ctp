<?= $this->assign('title', 'Player') ?>

<script>
	$(function(){
		var h = $('#video').height();
		$('#playlist').css('height', h);
	});
</script>

<?= $this->element('Site/header') ?>

<div class="container" style="margin-top: 40px;">

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
					<h4 class="title" style="margin-top: 0; margin-bottom: px;">
						Playlist - <small>Churrasco</small>
					</h4>
				</div>
			</div>
		</div>
	<?php endif ?>
	<div class="row">
		<div class="col-md-9" id="video">
			<div
				id="player-wrap"
				class="embed-responsive embed-responsive-16by9"
				style="background-color: #E7E7E7; background-image: url(../img/iggy-video.jpg); background-size: cover">

				<iframe data-url="https://www.youtube.com/embed/_zR6ROjoOX0?autoplay=1&modestbranding=1" id="player" class="embed-responsive-item" src="" frameborder="0" allowfullscreen></iframe>

				<div id="player-placeholder" style="width: 84px; left: 50%; top: 50%; position:absolute;margin-left: -42px; margin-top: -42px; ">
					<?= $this->Html->image('play.png', ['width' => 84]) ?>
				</div>
			</div>

			<div class="row">
				<div class="col-md-9">
					<h2>Work</h2>
					<p class="text-muted">123 Visualizações</p>
					<?= $this->element('Site/box_artists', ['artistName' => 'Iggy Azalea', 'imageSize' => '40']) ?>
				</div>
				<div class="col-md-3">
					<button type="button" class="btn btn-primary btn-block" style="margin-top: 20px;" data-toggle="dropdown">
						Compartilhar <span class="glyphicon glyphicon-share-alt"></span>
					</button>
					<ul class="dropdown-menu dropdown-menu-right" role="menu">
						<li role="presentation">
							<a role="menuitem" tabindex="-1" href="#">
								Facebook
							</a>
						</li>
						<li role="presentation">
							<a role="menuitem" tabindex="-1" href="#">
								Twitter
							</a>
						</li>
						<li role="presentation">
							<a role="menuitem" tabindex="-1" href="#">
								Google+
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<?php if ($this->request->query('playlist')): ?>
			<div class="col-md-3" id="playlist">
				<div style="overflow: auto; height: 100%;">
					<?php foreach ([0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0] as $key => $value): ?>
						<?= $this->element('Site/box_video_horizontal', ['imageSize' => 90])?>
					<?php endforeach ?>
				</div>
			</div>
		<?php else: ?>
			<div class="col-md-3">
				<?php foreach ([0, 0, 0, 0, 0, 0] as $key => $value): ?>
					<?= $this->element('Site/box_video_horizontal', ['imageSize' => 90])?>
				<?php endforeach ?>
			</div>
		<?php endif ?>
	</div>

	<div class="row" style="margin-top: 80px;">
		<div class="col-md-12">
			<h2 class="title">
				Parecidos com Iggy
			</h2>
			<div class="row">
				<?php foreach ([0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0] as $key => $value): ?>
					<div class="col-md-3">
						<?= $this->element('Site/box_video') ?>
					</div>
				<?php endforeach ?>
			</div>
		</div>
	</div>
</div>