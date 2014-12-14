<div class="users view">
<h2><?php echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($user['User']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($user['User']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), array(), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Likes'), array('controller' => 'user_likes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Like'), array('controller' => 'user_likes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related User Likes'); ?></h3>
	<?php if (!empty($user['UserLike'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Article Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['UserLike'] as $userLike): ?>
		<tr>
			<td><?php echo $userLike['id']; ?></td>
			<td><?php echo $userLike['user_id']; ?></td>
			<td><?php echo $userLike['article_id']; ?></td>
			<td><?php echo $userLike['created']; ?></td>
			<td><?php echo $userLike['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'user_likes', 'action' => 'view', $userLike['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'user_likes', 'action' => 'edit', $userLike['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'user_likes', 'action' => 'delete', $userLike['id']), array(), __('Are you sure you want to delete # %s?', $userLike['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User Like'), array('controller' => 'user_likes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
