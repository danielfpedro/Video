<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Artists Video'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Videos'), ['controller' => 'Videos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Video'), ['controller' => 'Videos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Artists'), ['controller' => 'Artists', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Artist'), ['controller' => 'Artists', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="artistsVideos index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('video_id') ?></th>
            <th><?= $this->Paginator->sort('artist_id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($artistsVideos as $artistsVideo): ?>
        <tr>
            <td>
                <?= $artistsVideo->has('video') ? $this->Html->link($artistsVideo->video->name, ['controller' => 'Videos', 'action' => 'view', $artistsVideo->video->id]) : '' ?>
            </td>
            <td>
                <?= $artistsVideo->has('artist') ? $this->Html->link($artistsVideo->artist->name, ['controller' => 'Artists', 'action' => 'view', $artistsVideo->artist->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $artistsVideo->video_id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $artistsVideo->video_id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $artistsVideo->video_id], ['confirm' => __('Are you sure you want to delete # {0}?', $artistsVideo->video_id)]) ?>
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
