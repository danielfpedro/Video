<?= $this->element('Site/header') ?>
<?= $this->Html->script('Site/home', ['inline' => false]) ?>

<div style="background-color: #111;">
	<div class="container">
		<div class="profile-cover">
			<div class="row">
				<div class="col-md-2 col-md-offset-10">
					<div class="row text-center">
						<div class="col-md-6">
							<h5>Seguidores</h5>
							<h2>3K</h2>
						</div>
						<div class="col-md-6">
							<h5>Vídeos</h5>
							<h2>200</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container">

			<div class="row">
				<div class="col-md-3 text-center" style="margin-top: -60px;">
					<?= $this->Html->image('ariana-avatar.jpg', ['class' => 'img-circle', 'width' => '45%', 'style' => 'border: 0px solid #FFF;']) ?>
					<h3>Ariana Grande</h3>
					<span class="fa fa-facebook"></span> <a href="#">/ariana-grande</a>
					<br>
					<span class="fa fa-twitter"></span> <a href="#">@ariana_grande</a>
					<br>
					<span class="fa fa-link"></span> <a href="#">arianagrande.com</a>
					<br>

					<br>
					<button class="btn btn-primary btn-xs" style="width: 60%;">Seguir</button>
				</div>
				<div class="col-md-9">
					<div class="row" style="margin-top: 35px; margin-bottom: 15px;">
						<div class="col-md-12">
							<form action="/videos/site/search" method="GET" class="pull-right" style="width: 350px;">
								<div class="input-group">
									<input type="text" class="form-control" name="q" placeholder="Pesquisar vídeos de Ariana grande...">
									<span class="input-group-btn">
										<button class="btn btn-default" type="button">
											<span class="glyphicon glyphicon-search"></span>
										</button>
									</span>
								</div>
							</form>
							<h2 class="title">Vídeos</h2>
						</div>
					</div>
					<div class="row">
						<?php foreach ([0,0 ,0,0,0,0,0,0,0,0,0, 0] as $key => $value): ?>
							<div class="col-md-3">
								<?= $this->element('Site/box_video') ?>
							</div>
						<?php endforeach ?>
					</div>

					<div class="row">
						<div class="col-md-12 text-center">
							<nav>
  <ul class="pagination" style="margin-top: 40px;">
    <li>
      <a href="#" aria-label="Previous">
        <span class="glyphicon glyphicon-chevron-left"></span>
      </a>
    </li>
    <li>
      <a href="#" aria-label="Next">
        <span class="glyphicon glyphicon-chevron-right"></span>
      </a>
    </li>
  </ul>
</nav>
						</div>
					</div>
				</div>
			</div>
	

</div>