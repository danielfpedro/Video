<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Trend Video'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Videos'), ['controller' => 'Videos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Video'), ['controller' => 'Videos', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="trendVideos index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('created') ?></th>
            <th><?= $this->Paginator->sort('video_id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($trendVideos as $trendVideo): ?>
        <tr>
            <td><?= $this->Number->format($trendVideo->id) ?></td>
            <td><?= h($trendVideo->created) ?></td>
            <td>
                <?= $trendVideo->has('video') ? $this->Html->link($trendVideo->video->name, ['controller' => 'Videos', 'action' => 'view', $trendVideo->video->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $trendVideo->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $trendVideo->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $trendVideo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $trendVideo->id)]) ?>
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
