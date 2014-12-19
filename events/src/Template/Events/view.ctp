<div class="actions columns large-2 medium-3">
	<h3><?= __('Actions') ?></h3>
	<ul class="side-nav">
		<li><?= $this->Html->link(__('Edit Event'), ['action' => 'edit', $event->id]) ?> </li>
		<li><?= $this->Form->postLink(__('Delete Event'), ['action' => 'delete', $event->id], ['confirm' => __('Are you sure you want to delete # {0}?', $event->id)]) ?> </li>
		<li><?= $this->Html->link(__('List Events'), ['action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('New Event'), ['action' => 'add']) ?> </li>
	</ul>
</div>
<div class="events view large-10 medium-9 columns">
	<h2><?= h($event->title) ?></h2>
	<div class="row">
		<div class="large-5 columns strings">
			<h6 class="subheader"><?= __('Title') ?></h6>
			<p><?= h($event->title) ?></p>
		</div>
		<div class="large-2 columns numbers end">
			<h6 class="subheader"><?= __('Id') ?></h6>
			<p><?= $this->Number->format($event->id) ?></p>
		</div>
		<div class="large-2 columns dates end">
			<h6 class="subheader"><?= __('Start') ?></h6>
			<p><?= h($event->start) ?></p>
			<h6 class="subheader"><?= __('End') ?></h6>
			<p><?= h($event->end) ?></p>
			<h6 class="subheader"><?= __('Created') ?></h6>
			<p><?= h($event->created) ?></p>
			<h6 class="subheader"><?= __('Modified') ?></h6>
			<p><?= h($event->modified) ?></p>
		</div>
		<div class="large-2 columns booleans end">
			<h6 class="subheader"><?= __('All Day') ?></h6>
			<p><?= $event->all_day ? __('Yes') : __('No'); ?></p>
		</div>
	</div>
	<div class="row texts">
		<div class="columns large-9">
			<h6 class="subheader"><?= __('Description') ?></h6>
			<?= $this->Text->autoParagraph(h($event->description)); ?>

		</div>
	</div>
<div class="related row">
	<div class="column large-12">
	<h4 class="subheader"><?= __('Invited users') ?></h4>
	<?php if (!empty($event->users)): ?>
		<ul>
			<?php foreach ($event->users as $user): ?>
				<li><?= h($user->name) ?> (<?= h($user->email) ?>)</li>
			<?php endforeach;?>
		</ul>
	</table>
	<?php endif; ?>
	</div>	
</div>
