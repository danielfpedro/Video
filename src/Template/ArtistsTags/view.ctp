<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Artists Tag'), ['action' => 'edit', $artistsTag->artistas_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Artists Tag'), ['action' => 'delete', $artistsTag->artistas_id], ['confirm' => __('Are you sure you want to delete # {0}?', $artistsTag->artistas_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Artists Tags'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Artists Tag'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Artists'), ['controller' => 'Artists', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Artist'), ['controller' => 'Artists', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="artistsTags view large-10 medium-9 columns">
    <h2><?= h($artistsTag->artistas_id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Artist') ?></h6>
            <p><?= $artistsTag->has('artist') ? $this->Html->link($artistsTag->artist->name, ['controller' => 'Artists', 'action' => 'view', $artistsTag->artist->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Tag') ?></h6>
            <p><?= $artistsTag->has('tag') ? $this->Html->link($artistsTag->tag->name, ['controller' => 'Tags', 'action' => 'view', $artistsTag->tag->id]) : '' ?></p>
        </div>
    </div>
</div>
