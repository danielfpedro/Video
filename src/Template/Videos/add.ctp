<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Videos'), ['action' => 'index']) ?></li>
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
<div class="videos form large-10 medium-9 columns">
    <?= $this->Form->create($video, ['type' => 'file']); ?>
    <fieldset>
        <legend><?= __('Add Video') ?></legend>
        <?php
            echo $this->Form->input('embed');
            echo $this->Form->input('photo', ['type' => 'file']);
            echo $this->Form->input('name');
            echo $this->Form->input('is_active');
            echo $this->Form->input('destaque');
            echo $this->Form->input('destaque_ordem');
            echo $this->Form->input('artist_id');
            echo $this->Form->input('artists._ids', ['options' => $artists]);
            echo $this->Form->input('tags._ids', ['options' => $tags]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
