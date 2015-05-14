<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Starred'), ['action' => 'edit', $starred->user_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Starred'), ['action' => 'delete', $starred->user_id], ['confirm' => __('Are you sure you want to delete # {0}?', $starred->user_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Starreds'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Starred'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Videos'), ['controller' => 'Videos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Video'), ['controller' => 'Videos', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="starreds view large-10 medium-9 columns">
    <h2><?= h($starred->user_id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('User') ?></h6>
            <p><?= $starred->has('user') ? $this->Html->link($starred->user->name, ['controller' => 'Users', 'action' => 'view', $starred->user->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Video') ?></h6>
            <p><?= $starred->has('video') ? $this->Html->link($starred->video->name, ['controller' => 'Videos', 'action' => 'view', $starred->video->id]) : '' ?></p>
        </div>
    </div>
</div>
