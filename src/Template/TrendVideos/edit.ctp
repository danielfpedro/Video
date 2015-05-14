<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $trendVideo->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $trendVideo->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Trend Videos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Videos'), ['controller' => 'Videos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Video'), ['controller' => 'Videos', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="trendVideos form large-10 medium-9 columns">
    <?= $this->Form->create($trendVideo); ?>
    <fieldset>
        <legend><?= __('Edit Trend Video') ?></legend>
        <?php
            echo $this->Form->input('video_id', ['options' => $videos]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
