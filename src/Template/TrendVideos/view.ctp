<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Trend Video'), ['action' => 'edit', $trendVideo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Trend Video'), ['action' => 'delete', $trendVideo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $trendVideo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Trend Videos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Trend Video'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Videos'), ['controller' => 'Videos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Video'), ['controller' => 'Videos', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="trendVideos view large-10 medium-9 columns">
    <h2><?= h($trendVideo->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Video') ?></h6>
            <p><?= $trendVideo->has('video') ? $this->Html->link($trendVideo->video->name, ['controller' => 'Videos', 'action' => 'view', $trendVideo->video->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($trendVideo->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($trendVideo->created) ?></p>
        </div>
    </div>
</div>
