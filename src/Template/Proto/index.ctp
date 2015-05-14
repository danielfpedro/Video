<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Proto'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="proto index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th><?= $this->Paginator->sort('created') ?></th>
            <th><?= $this->Paginator->sort('modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($proto as $proto): ?>
        <tr>
            <td><?= $this->Number->format($proto->id) ?></td>
            <td><?= h($proto->name) ?></td>
            <td><?= h($proto->created) ?></td>
            <td><?= h($proto->modified) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $proto->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $proto->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $proto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $proto->id)]) ?>
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
