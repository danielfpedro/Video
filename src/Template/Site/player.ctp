<?= $this->assign('title', 'Player') ?>

<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="row">
				<div class="row">
					<div class="col-md-12">
						<div class="embed-responsive embed-responsive-16by9">
							<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/_zR6ROjoOX0" frameborder="0" allowfullscreen></iframe>
						</div>	
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-9">
								<h1>Work <small>Iggy Azalea</small></h1>
								<p>123 Visualizações</p>	
							</div>
							<div class="col-md-3">
								<button type="button" class="btn btn-primary btn-lg btn-block" style="margin-top: 20px;">Compartilhar <span class="glyphicon glyphicon-share-alt"></span></button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



	<div class="row" style="margin-top: 60px;">
		<div class="col-md-12">
			<h2 class="title">
				Um pouco mais de Iggy
			</h2>
			
			<div class="row">
				<?php foreach ([0, 1, 2, 3, 4, 5] as $key => $value): ?>
					<div class="col-md-2">
						<?= $this->element('Site/box_video') ?>
					</div>
				<?php endforeach ?>
			</div>
		</div>
	</div>

	<div class="row" style="margin-top: 40px;">
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