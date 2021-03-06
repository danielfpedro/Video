<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Proto'), ['action' => 'edit', $proto->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Proto'), ['action' => 'delete', $proto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $proto->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Proto'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Proto'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="proto view large-10 medium-9 columns">
    <h2><?= h($proto->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($proto->name) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($proto->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($proto->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($proto->modified) ?></p>
        </div>
    </div>
</div>
