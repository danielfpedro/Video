<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $videosPlaylist->videos_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $videosPlaylist->videos_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Videos Playlists'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Videos'), ['controller' => 'Videos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Video'), ['controller' => 'Videos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Playlists'), ['controller' => 'Playlists', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Playlist'), ['controller' => 'Playlists', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="videosPlaylists form large-10 medium-9 columns">
    <?= $this->Form->create($videosPlaylist); ?>
    <fieldset>
        <legend><?= __('Edit Videos Playlist') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
