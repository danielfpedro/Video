<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $artist->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $artist->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Artists'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Videos'), ['controller' => 'Videos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Video'), ['controller' => 'Videos', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="artists form large-10 medium-9 columns">
    <?= $this->Form->create($artist); ?>
    <fieldset>
        <legend><?= __('Edit Artist') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('profile_image');
            echo $this->Form->input('cover_image');
            echo $this->Form->input('folder_image');
            echo $this->Form->input('slug');
            echo $this->Form->input('is_active');
            echo $this->Form->input('website');
            echo $this->Form->input('facebook_page');
            echo $this->Form->input('twitter_profile');
            echo $this->Form->input('tags._ids', ['options' => $tags]);
            echo $this->Form->input('videos._ids', ['options' => $videos]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
