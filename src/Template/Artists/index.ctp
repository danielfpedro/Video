<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Artist'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Videos'), ['controller' => 'Videos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Video'), ['controller' => 'Videos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="artists index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th><?= $this->Paginator->sort('profile_image') ?></th>
            <th><?= $this->Paginator->sort('cover_image') ?></th>
            <th><?= $this->Paginator->sort('folder_image') ?></th>
            <th><?= $this->Paginator->sort('slug') ?></th>
            <th><?= $this->Paginator->sort('is_active') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($artists as $artist): ?>
        <tr>
            <td><?= $this->Number->format($artist->id) ?></td>
            <td><?= h($artist->name) ?></td>
            <td><?= h($artist->profile_image) ?></td>
            <td><?= h($artist->cover_image) ?></td>
            <td><?= h($artist->folder_image) ?></td>
            <td><?= h($artist->slug) ?></td>
            <td><?= $this->Number->format($artist->is_active) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $artist->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $artist->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $artist->id], ['confirm' => __('Are you sure you want to delete # {0}?', $artist->id)]) ?>
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
