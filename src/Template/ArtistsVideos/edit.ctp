<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $artistsVideo->video_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $artistsVideo->video_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Artists Videos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Videos'), ['controller' => 'Videos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Video'), ['controller' => 'Videos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Artists'), ['controller' => 'Artists', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Artist'), ['controller' => 'Artists', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="artistsVideos form large-10 medium-9 columns">
    <?= $this->Form->create($artistsVideo); ?>
    <fieldset>
        <legend><?= __('Edit Artists Video') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
