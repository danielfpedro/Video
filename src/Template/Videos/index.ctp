<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Video'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Starreds'), ['controller' => 'Starreds', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Starred'), ['controller' => 'Starreds', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Artists'), ['controller' => 'Artists', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Artist'), ['controller' => 'Artists', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Playlists'), ['controller' => 'Playlists', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Playlist'), ['controller' => 'Playlists', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="videos index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th><?= $this->Paginator->sort('embed') ?></th>
            <th><?= $this->Paginator->sort('image') ?></th>
            <th><?= $this->Paginator->sort('image_folder') ?></th>
            <th><?= $this->Paginator->sort('slug') ?></th>
            <th><?= $this->Paginator->sort('tags_string') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($videos as $video): ?>
        <tr>
            <td><?= $this->Number->format($video->id) ?></td>
            <td><?= h($video->name) ?></td>
            <td><?= h($video->embed) ?></td>
            <td><?= h($video->image) ?></td>
            <td><?= h($video->image_folder) ?></td>
            <td><?= h($video->slug) ?></td>
            <td><?= h($video->tags_string) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $video->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $video->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $video->id], ['confirm' => __('Are you sure you want to delete # {0}?', $video->id)]) ?>
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
