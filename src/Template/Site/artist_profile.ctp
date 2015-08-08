<?= $this->element('Site/header') ?>
<?= $this->Html->script('Site/home', ['inline' => false]) ?>

<div style="background-color: #111; margin-top: 65px;">
		<div class="profile-cover" style="background-image: url(<?= $artist->cover_image_regular ?>)">
			<div style="background-color: rgba(0, 0, 0, .6); height: 100%; width: 100%;">
				
			</div>
		</div>
</div>

<div class="container">

			<div class="row">
				<div class="col-md-3 text-center" style="margin-top: -60px;">
					<?= $this->Html->image($artist->profile_image_sq, ['class' => 'img-circle', 'width' => '50%', 'style' => 'border: 0 solid #FFF;']) ?>
					<h3>
						<?= $artist->name ?>
					</h3>
					<?php if ($artist->facebook_page): ?>
						<span class="fa fa-facebook"></span>&nbsp;
						<a href="<?= $artist->facebook_page_href ?>" target="_blank">
							/<?= $artist->facebook_page ?>
						</a>
						<br>
					<?php endif ?>
					<?php if ($artist->twitter_profile): ?>
						<span class="fa fa-twitter"></span>&nbsp;
						<a href="<?= $artist->twitter_profile_href ?>" target="_blank">
							@<?= $artist->twitter_profile ?>
						</a>
						<br>
					<?php endif ?>
					<?php if ($artist->website): ?>
						<span class="fa fa-link"></span>&nbsp;
						<a href="http://<?= $artist->website ?>" target="_blank">
							<?= $artist->website ?>
						</a>
						<br>
					<?php endif ?>
					<br>
					<button id="btn-like" class="btn btn-success btn-xs" style="width: 60%;">Seguir</button>
				</div>
				<div class="col-md-9">
					<div class="row" style="margin: 40px 0 80px 0;">
						<div class="col-md-12">
							<form action="/videos/site/search" method="GET" class="pull-right" style="width: 350px;">
								<div class="input-group">
									<input type="text" class="form-control" name="q" placeholder="Pesquisar vídeos de Ariana grande...">
									<span class="input-group-btn">
										<button class="btn btn-primary" type="button">
											<span class="glyphicon glyphicon-search"></span>
										</button>
									</span>
								</div>
							</form>
						</div>
					</div>
					<div class="row">
						<?php foreach ($videos as $video): ?>
							<div class="col-md-4">
								<?= $this->element('Site/box_video', ['video' => $video, 'headerSize' => 5]) ?>
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