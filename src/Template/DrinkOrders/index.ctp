<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DrinkOrder[]|\Cake\Collection\CollectionInterface $drinkOrders
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Drink Order'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Drinks'), ['controller' => 'Drinks', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Drink'), ['controller' => 'Drinks', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="drinkOrders index large-9 medium-8 columns content">
    <h3><?= __('Drink Orders') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('order_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('drink_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('total') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($drinkOrders as $drinkOrder): ?>
            <tr>
                <td><?= $this->Number->format($drinkOrder->id) ?></td>
                <td><?= $drinkOrder->has('order') ? $this->Html->link($drinkOrder->order->id, ['controller' => 'Orders', 'action' => 'view', $drinkOrder->order->id]) : '' ?></td>
                <td><?= $drinkOrder->has('drink') ? $this->Html->link($drinkOrder->drink->id, ['controller' => 'Drinks', 'action' => 'view', $drinkOrder->drink->id]) : '' ?></td>
                <td><?= $this->Number->format($drinkOrder->total) ?></td>
                <td><?= h($drinkOrder->created) ?></td>
                <td><?= h($drinkOrder->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $drinkOrder->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $drinkOrder->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $drinkOrder->id], ['confirm' => __('Are you sure you want to delete # {0}?', $drinkOrder->id)]) ?>
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
