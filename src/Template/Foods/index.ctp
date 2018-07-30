<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Food[]|\Cake\Collection\CollectionInterface $foods
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Food'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Food Types'), ['controller' => 'FoodTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Food Type'), ['controller' => 'FoodTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Food Garnishes'), ['controller' => 'FoodGarnishes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Food Garnish'), ['controller' => 'FoodGarnishes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Food Orders'), ['controller' => 'FoodOrders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Food Order'), ['controller' => 'FoodOrders', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="foods index large-9 medium-8 columns content">
    <h3><?= __('Foods') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('food') ?></th>
                <th scope="col"><?= $this->Paginator->sort('price') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('food_type_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sale_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($foods as $food): ?>
            <tr>
                <td><?= $this->Number->format($food->id) ?></td>
                <td><?= h($food->food) ?></td>
                <td><?= $this->Number->format($food->price) ?></td>
                <td><?= $this->Number->format($food->status) ?></td>
                <td><?= $food->has('food_type') ? $this->Html->link($food->food_type->id, ['controller' => 'FoodTypes', 'action' => 'view', $food->food_type->id]) : '' ?></td>
                <td><?= h($food->sale_date) ?></td>
                <td><?= h($food->created) ?></td>
                <td><?= h($food->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $food->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $food->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $food->id], ['confirm' => __('Are you sure you want to delete # {0}?', $food->id)]) ?>
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
