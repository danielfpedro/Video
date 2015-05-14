<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Artists Tag'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Artists'), ['controller' => 'Artists', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Artist'), ['controller' => 'Artists', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="artistsTags index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('artistas_id') ?></th>
            <th><?= $this->Paginator->sort('tags_id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($artistsTags as $artistsTag): ?>
        <tr>
            <td>
                <?= $artistsTag->has('artist') ? $this->Html->link($artistsTag->artist->name, ['controller' => 'Artists', 'action' => 'view', $artistsTag->artist->id]) : '' ?>
            </td>
            <td>
                <?= $artistsTag->has('tag') ? $this->Html->link($artistsTag->tag->name, ['controller' => 'Tags', 'action' => 'view', $artistsTag->tag->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $artistsTag->artistas_id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $artistsTag->artistas_id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $artistsTag->artistas_id], ['confirm' => __('Are you sure you want to delete # {0}?', $artistsTag->artistas_id)]) ?>
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
