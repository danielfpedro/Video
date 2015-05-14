<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Video'), ['action' => 'edit', $video->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Video'), ['action' => 'delete', $video->id], ['confirm' => __('Are you sure you want to delete # {0}?', $video->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Videos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Video'), ['action' => 'add']) ?> </li>
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
<div class="videos view large-10 medium-9 columns">
    <h2><?= h($video->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($video->name) ?></p>
            <h6 class="subheader"><?= __('Embed') ?></h6>
            <p><?= h($video->embed) ?></p>
            <h6 class="subheader"><?= __('Image') ?></h6>
            <p><?= h($video->image) ?></p>
            <h6 class="subheader"><?= __('Image Folder') ?></h6>
            <p><?= h($video->image_folder) ?></p>
            <h6 class="subheader"><?= __('Slug') ?></h6>
            <p><?= h($video->slug) ?></p>
            <h6 class="subheader"><?= __('Tags String') ?></h6>
            <p><?= h($video->tags_string) ?></p>
            <h6 class="subheader"><?= __('Descricao') ?></h6>
            <p><?= h($video->descricao) ?></p>
            <h6 class="subheader"><?= __('Tag Search') ?></h6>
            <p><?= h($video->tag_search) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($video->id) ?></p>
            <h6 class="subheader"><?= __('Is Active') ?></h6>
            <p><?= $this->Number->format($video->is_active) ?></p>
            <h6 class="subheader"><?= __('Views') ?></h6>
            <p><?= $this->Number->format($video->views) ?></p>
            <h6 class="subheader"><?= __('Destaque') ?></h6>
            <p><?= $this->Number->format($video->destaque) ?></p>
            <h6 class="subheader"><?= __('Destaque Ordem') ?></h6>
            <p><?= $this->Number->format($video->destaque_ordem) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($video->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($video->modified) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Starreds') ?></h4>
    <?php if (!empty($video->starreds)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('User Id') ?></th>
            <th><?= __('Video Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($video->starreds as $starreds): ?>
        <tr>
            <td><?= h($starreds->user_id) ?></td>
            <td><?= h($starreds->video_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Starreds', 'action' => 'view', $starreds->user_id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Starreds', 'action' => 'edit', $starreds->user_id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Starreds', 'action' => 'delete', $starreds->user_id], ['confirm' => __('Are you sure you want to delete # {0}?', $starreds->user_id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Artists') ?></h4>
    <?php if (!empty($video->artists)): ?>
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
        <?php foreach ($video->artists as $artists): ?>
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
    <h4 class="subheader"><?= __('Related Playlists') ?></h4>
    <?php if (!empty($video->playlists)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Name') ?></th>
            <th><?= __('Description') ?></th>
            <th><?= __('Is Active') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th><?= __('Random') ?></th>
            <th><?= __('User Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($video->playlists as $playlists): ?>
        <tr>
            <td><?= h($playlists->id) ?></td>
            <td><?= h($playlists->name) ?></td>
            <td><?= h($playlists->description) ?></td>
            <td><?= h($playlists->is_active) ?></td>
            <td><?= h($playlists->created) ?></td>
            <td><?= h($playlists->modified) ?></td>
            <td><?= h($playlists->random) ?></td>
            <td><?= h($playlists->user_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Playlists', 'action' => 'view', $playlists->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Playlists', 'action' => 'edit', $playlists->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Playlists', 'action' => 'delete', $playlists->id], ['confirm' => __('Are you sure you want to delete # {0}?', $playlists->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Tags') ?></h4>
    <?php if (!empty($video->tags)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Name') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($video->tags as $tags): ?>
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
