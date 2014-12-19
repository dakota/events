<div class="actions columns large-2 medium-3">
	<h3><?= __('Actions') ?></h3>
	<ul class="side-nav">
		<li><?= $this->Html->link(__('New Event'), ['action' => 'add']) ?></li>
	</ul>
</div>
<div class="events index large-10 medium-9 columns">
	<table cellpadding="0" cellspacing="0">
	<thead>
		<tr>
			<th><?= $this->Paginator->sort('id') ?></th>
			<th><?= $this->Paginator->sort('title') ?></th>
			<th><?= $this->Paginator->sort('start') ?></th>
			<th><?= $this->Paginator->sort('end') ?></th>
			<th><?= $this->Paginator->sort('all_day') ?></th>
			<th><?= $this->Paginator->sort('created') ?></th>
			<th><?= $this->Paginator->sort('modified') ?></th>
			<th class="actions"><?= __('Actions') ?></th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($events as $event): ?>
		<tr>
			<td><?= $this->Number->format($event->id) ?></td>
			<td><?= h($event->title) ?></td>
			<td><?= h($event->start) ?></td>
			<td><?= h($event->end) ?></td>
			<td><?= h($event->all_day) ?></td>
			<td><?= h($event->created) ?></td>
			<td><?= h($event->modified) ?></td>
			<td class="actions">
				<?= $this->Html->link(__('View'), ['action' => 'view', $event->id]) ?>
				<?= $this->Html->link(__('Edit'), ['action' => 'edit', $event->id]) ?>
				<?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $event->id], ['confirm' => __('Are you sure you want to delete # {0}?', $event->id)]) ?>
			</td>
		</tr>

	<?php endforeach; ?>
	</tbody>
	</table>
	<div class="paginator">
		<ul class="pagination">
			<?= $this->Paginator->prev('< ' . __('previous')); ?>
			<?= $this->Paginator->numbers(); ?>
			<?=	$this->Paginator->next(__('next') . ' >'); ?>
		</ul>
		<p><?= $this->Paginator->counter(); ?></p>
	</div>
</div>
