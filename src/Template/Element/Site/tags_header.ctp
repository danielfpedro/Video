	<div class="row home-row-tags">
		<div class="col-md-12 text-center">
			<div>
			<?php foreach (['Hip-Hop', 'Pop', 'Soul', 'Bossa Nova'] as $tag): ?>
				<?= $this->Html->link('<span>'.$tag.'</span>',[], ['class' => 'label label-custom-primary home-label-tag', 'escape' => false]) ?>
			<?php endforeach ?>
			</div>
			<div style="margin-top: 10px;">
			<?php foreach (['R&B', 'Eletrônica', 'Dub-step', 'House', 'Punk', 'Rock'] as $tag): ?>
				<?= $this->Html->link('<span>'.$tag.'</span>',[], ['class' => 'label label-custom-primary home-label-tag', 'escape' => false]) ?>
			<?php endforeach ?>
			</div>
		</div>
	</div>