<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Playlist'), ['action' => 'edit', $playlist->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Playlist'), ['action' => 'delete', $playlist->id], ['confirm' => __('Are you sure you want to delete # {0}?', $playlist->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Playlists'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Playlist'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="playlists view large-10 medium-9 columns">
    <h2><?= h($playlist->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($playlist->name) ?></p>
            <h6 class="subheader"><?= __('Description') ?></h6>
            <p><?= h($playlist->description) ?></p>
            <h6 class="subheader"><?= __('User') ?></h6>
            <p><?= $playlist->has('user') ? $this->Html->link($playlist->user->name, ['controller' => 'Users', 'action' => 'view', $playlist->user->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($playlist->id) ?></p>
            <h6 class="subheader"><?= __('Is Active') ?></h6>
            <p><?= $this->Number->format($playlist->is_active) ?></p>
            <h6 class="subheader"><?= __('Random') ?></h6>
            <p><?= $this->Number->format($playlist->random) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($playlist->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($playlist->modified) ?></p>
        </div>
    </div>
</div>
