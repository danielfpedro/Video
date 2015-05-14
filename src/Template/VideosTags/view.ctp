<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Videos Tag'), ['action' => 'edit', $videosTag->video_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Videos Tag'), ['action' => 'delete', $videosTag->video_id], ['confirm' => __('Are you sure you want to delete # {0}?', $videosTag->video_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Videos Tags'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Videos Tag'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Videos'), ['controller' => 'Videos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Video'), ['controller' => 'Videos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="videosTags view large-10 medium-9 columns">
    <h2><?= h($videosTag->video_id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Video') ?></h6>
            <p><?= $videosTag->has('video') ? $this->Html->link($videosTag->video->name, ['controller' => 'Videos', 'action' => 'view', $videosTag->video->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Tag') ?></h6>
            <p><?= $videosTag->has('tag') ? $this->Html->link($videosTag->tag->name, ['controller' => 'Tags', 'action' => 'view', $videosTag->tag->id]) : '' ?></p>
        </div>
    </div>
</div>
