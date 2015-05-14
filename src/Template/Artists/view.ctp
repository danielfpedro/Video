<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Artist'), ['action' => 'edit', $artist->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Artist'), ['action' => 'delete', $artist->id], ['confirm' => __('Are you sure you want to delete # {0}?', $artist->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Artists'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Artist'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Videos'), ['controller' => 'Videos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Video'), ['controller' => 'Videos', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="artists view large-10 medium-9 columns">
    <h2><?= h($artist->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($artist->name) ?></p>
            <h6 class="subheader"><?= __('Profile Image') ?></h6>
            <p><?= h($artist->profile_image) ?></p>
            <h6 class="subheader"><?= __('Cover Image') ?></h6>
            <p><?= h($artist->cover_image) ?></p>
            <h6 class="subheader"><?= __('Folder Image') ?></h6>
            <p><?= h($artist->folder_image) ?></p>
            <h6 class="subheader"><?= __('Slug') ?></h6>
            <p><?= h($artist->slug) ?></p>
            <h6 class="subheader"><?= __('Website') ?></h6>
            <p><?= h($artist->website) ?></p>
            <h6 class="subheader"><?= __('Facebook Page') ?></h6>
            <p><?= h($artist->facebook_page) ?></p>
            <h6 class="subheader"><?= __('Twitter Profile') ?></h6>
            <p><?= h($artist->twitter_profile) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($artist->id) ?></p>
            <h6 class="subheader"><?= __('Is Active') ?></h6>
            <p><?= $this->Number->format($artist->is_active) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($artist->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($artist->modified) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Tags') ?></h4>
    <?php if (!empty($artist->tags)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Name') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($artist->tags as $tags): ?>
        <tr>
            <td><?= h($tags->id) ?></td>
            <td><?= h($tags->name) ?></td>
            <td><?= h($tags->created) ?></td>
            <td><?= h($tags->modified) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Tags', 'action' => 'view', $tags->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Tags', 'action' => 'edit', $tags->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Tags', 'action' => 'delete', $tags->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tags->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Videos') ?></h4>
    <?php if (!empty($artist->videos)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Name') ?></th>
            <th><?= __('Embed') ?></th>
            <th><?= __('Image') ?></th>
            <th><?= __('Image Folder') ?></th>
            <th><?= __('Slug') ?></th>
            <th><?= __('Tags String') ?></th>
            <th><?= __('Is Active') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Descricao') ?></th>
            <th><?= __('Modified') ?></th>
            <th><?= __('Views') ?></th>
            <th><?= __('Destaque') ?></th>
            <th><?= __('Destaque Ordem') ?></th>
            <th><?= __('Tag Search') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($artist->videos as $videos): ?>
        <tr>
            <td><?= h($videos->id) ?></td>
            <td><?= h($videos->name) ?></td>
            <td><?= h($videos->embed) ?></td>
            <td><?= h($videos->image) ?></td>
            <td><?= h($videos->image_folder) ?></td>
            <td><?= h($videos->slug) ?></td>
            <td><?= h($videos->tags_string) ?></td>
            <td><?= h($videos->is_active) ?></td>
            <td><?= h($videos->created) ?></td>
            <td><?= h($videos->descricao) ?></td>
            <td><?= h($videos->modified) ?></td>
            <td><?= h($videos->views) ?></td>
            <td><?= h($videos->destaque) ?></td>
            <td><?= h($videos->destaque_ordem) ?></td>
            <td><?= h($videos->tag_search) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Videos', 'action' => 'view', $videos->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Videos', 'action' => 'edit', $videos->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Videos', 'action' => 'delete', $videos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $videos->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
