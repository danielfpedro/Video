<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Artists Video'), ['action' => 'edit', $artistsVideo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Artists Video'), ['action' => 'delete', $artistsVideo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $artistsVideo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Artists Videos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Artists Video'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Videos'), ['controller' => 'Videos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Video'), ['controller' => 'Videos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Artists'), ['controller' => 'Artists', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Artist'), ['controller' => 'Artists', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="artistsVideos view large-10 medium-9 columns">
    <h2><?= h($artistsVideo->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Video') ?></h6>
            <p><?= $artistsVideo->has('video') ? $this->Html->link($artistsVideo->video->name, ['controller' => 'Videos', 'action' => 'view', $artistsVideo->video->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Artist') ?></h6>
            <p><?= $artistsVideo->has('artist') ? $this->Html->link($artistsVideo->artist->name, ['controller' => 'Artists', 'action' => 'view', $artistsVideo->artist->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($artistsVideo->id) ?></p>
            <h6 class="subheader"><?= __('Participacao') ?></h6>
            <p><?= $this->Number->format($artistsVideo->participacao) ?></p>
        </div>
    </div>
</div>
