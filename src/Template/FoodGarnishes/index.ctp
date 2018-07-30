<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FoodGarnish[]|\Cake\Collection\CollectionInterface $foodGarnishes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Food Garnish'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Foods'), ['controller' => 'Foods', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Food'), ['controller' => 'Foods', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Garnishes'), ['controller' => 'Garnishes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Garnish'), ['controller' => 'Garnishes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="foodGarnishes index large-9 medium-8 columns content">
    <h3><?= __('Food Garnishes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('food_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('garnishes_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($foodGarnishes as $foodGarnish): ?>
            <tr>
                <td><?= $this->Number->format($foodGarnish->id) ?></td>
                <td><?= $foodGarnish->has('food') ? $this->Html->link($foodGarnish->food->id, ['controller' => 'Foods', 'action' => 'view', $foodGarnish->food->id]) : '' ?></td>
                <td><?= $foodGarnish->has('garnish') ? $this->Html->link($foodGarnish->garnish->id, ['controller' => 'Garnishes', 'action' => 'view', $foodGarnish->garnish->id]) : '' ?></td>
                <td><?= h($foodGarnish->created) ?></td>
                <td><?= $this->Number->format($foodGarnish->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $foodGarnish->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $foodGarnish->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $foodGarnish->id], ['confirm' => __('Are you sure you want to delete # {0}?', $foodGarnish->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
