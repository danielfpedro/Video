<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $video->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $video->id)]
            )
        ?></li>
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
    <?= $this->Form->create($video); ?>
    <fieldset>
        <legend><?= __('Edit Video') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('embed');
            echo $this->Form->input('image');
            echo $this->Form->input('image_folder');
            echo $this->Form->input('slug');
            echo $this->Form->input('tags_string');
            echo $this->Form->input('is_active');
            echo $this->Form->input('descricao');
            echo $this->Form->input('views');
            echo $this->Form->input('destaque');
            echo $this->Form->input('destaque_ordem');
            echo $this->Form->input('tag_search');
            echo $this->Form->input('artists._ids', ['options' => $artists]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
