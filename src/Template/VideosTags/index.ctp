<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Videos Tag'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Videos'), ['controller' => 'Videos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Video'), ['controller' => 'Videos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="videosTags index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('video_id') ?></th>
            <th><?= $this->Paginator->sort('tag_id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($videosTags as $videosTag): ?>
        <tr>
            <td>
                <?= $videosTag->has('video') ? $this->Html->link($videosTag->video->name, ['controller' => 'Videos', 'action' => 'view', $videosTag->video->id]) : '' ?>
            </td>
            <td>
                <?= $videosTag->has('tag') ? $this->Html->link($videosTag->tag->name, ['controller' => 'Tags', 'action' => 'view', $videosTag->tag->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $videosTag->video_id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $videosTag->video_id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $videosTag->video_id], ['confirm' => __('Are you sure you want to delete # {0}?', $videosTag->video_id)]) ?>
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
