<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Videos Playlist'), ['action' => 'edit', $videosPlaylist->videos_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Videos Playlist'), ['action' => 'delete', $videosPlaylist->videos_id], ['confirm' => __('Are you sure you want to delete # {0}?', $videosPlaylist->videos_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Videos Playlists'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Videos Playlist'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Videos'), ['controller' => 'Videos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Video'), ['controller' => 'Videos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Playlists'), ['controller' => 'Playlists', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Playlist'), ['controller' => 'Playlists', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="videosPlaylists view large-10 medium-9 columns">
    <h2><?= h($videosPlaylist->videos_id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Video') ?></h6>
            <p><?= $videosPlaylist->has('video') ? $this->Html->link($videosPlaylist->video->name, ['controller' => 'Videos', 'action' => 'view', $videosPlaylist->video->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Playlist') ?></h6>
            <p><?= $videosPlaylist->has('playlist') ? $this->Html->link($videosPlaylist->playlist->name, ['controller' => 'Playlists', 'action' => 'view', $videosPlaylist->playlist->id]) : '' ?></p>
        </div>
    </div>
</div>
