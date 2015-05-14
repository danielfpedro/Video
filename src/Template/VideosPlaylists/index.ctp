<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Videos Playlist'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Videos'), ['controller' => 'Videos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Video'), ['controller' => 'Videos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Playlists'), ['controller' => 'Playlists', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Playlist'), ['controller' => 'Playlists', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="videosPlaylists index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('videos_id') ?></th>
            <th><?= $this->Paginator->sort('playlists_id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($videosPlaylists as $videosPlaylist): ?>
        <tr>
            <td>
                <?= $videosPlaylist->has('video') ? $this->Html->link($videosPlaylist->video->name, ['controller' => 'Videos', 'action' => 'view', $videosPlaylist->video->id]) : '' ?>
            </td>
            <td>
                <?= $videosPlaylist->has('playlist') ? $this->Html->link($videosPlaylist->playlist->name, ['controller' => 'Playlists', 'action' => 'view', $videosPlaylist->playlist->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $videosPlaylist->videos_id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $videosPlaylist->videos_id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $videosPlaylist->videos_id], ['confirm' => __('Are you sure you want to delete # {0}?', $videosPlaylist->videos_id)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
