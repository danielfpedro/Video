<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Playlists'), ['controller' => 'Playlists', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Playlist'), ['controller' => 'Playlists', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Starreds'), ['controller' => 'Starreds', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Starred'), ['controller' => 'Starreds', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="users view large-10 medium-9 columns">
    <h2><?= h($user->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($user->name) ?></p>
            <h6 class="subheader"><?= __('Email') ?></h6>
            <p><?= h($user->email) ?></p>
            <h6 class="subheader"><?= __('Password') ?></h6>
            <p><?= h($user->password) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($user->id) ?></p>
            <h6 class="subheader"><?= __('Is Active') ?></h6>
            <p><?= $this->Number->format($user->is_active) ?></p>
            <h6 class="subheader"><?= __('Is Deleted') ?></h6>
            <p><?= $this->Number->format($user->is_deleted) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($user->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($user->modified) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Playlists') ?></h4>
    <?php if (!empty($user->playlists)): ?>
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
        <?php foreach ($user->playlists as $playlists): ?>
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
    <h4 class="subheader"><?= __('Related Starreds') ?></h4>
    <?php if (!empty($user->starreds)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('User Id') ?></th>
            <th><?= __('Video Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($user->starreds as $starreds): ?>
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
