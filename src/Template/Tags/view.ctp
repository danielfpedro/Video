<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Tag'), ['action' => 'edit', $tag->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tag'), ['action' => 'delete', $tag->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tag->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tags'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tag'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Artists'), ['controller' => 'Artists', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Artist'), ['controller' => 'Artists', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Videos'), ['controller' => 'Videos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Video'), ['controller' => 'Videos', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="tags view large-10 medium-9 columns">
    <h2><?= h($tag->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($tag->name) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($tag->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($tag->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($tag->modified) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Artists') ?></h4>
    <?php if (!empty($tag->artists)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Name') ?></th>
            <th><?= __('Profile Image') ?></th>
            <th><?= __('Cover Image') ?></th>
            <th><?= __('Folder Image') ?></th>
            <th><?= __('Slug') ?></th>
            <th><?= __('Is Active') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th><?= __('Website') ?></th>
            <th><?= __('Facebook Page') ?></th>
            <th><?= __('Twitter Profile') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($tag->artists as $artists): ?>
        <tr>
            <td><?= h($artists->id) ?></td>
            <td><?= h($artists->name) ?></td>
            <td><?= h($artists->profile_image) ?></td>
            <td><?= h($artists->cover_image) ?></td>
            <td><?= h($artists->folder_image) ?></td>
            <td><?= h($artists->slug) ?></td>
            <td><?= h($artists->is_active) ?></td>
            <td><?= h($artists->created) ?></td>
            <td><?= h($artists->modified) ?></td>
            <td><?= h($artists->website) ?></td>
            <td><?= h($artists->facebook_page) ?></td>
            <td><?= h($artists->twitter_profile) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Artists', 'action' => 'view', $artists->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Artists', 'action' => 'edit', $artists->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Artists', 'action' => 'delete', $artists->id], ['confirm' => __('Are you sure you want to delete # {0}?', $artists->id)]) ?>

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
    <?php if (!empty($tag->videos)): ?>
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
            <th><?= __('Artist Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($tag->videos as $videos): ?>
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
            <td><?= h($videos->artist_id) ?></td>

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
