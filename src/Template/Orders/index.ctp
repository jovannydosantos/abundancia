<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Order[]|\Cake\Collection\CollectionInterface $orders
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Order'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Directions'), ['controller' => 'Directions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Direction'), ['controller' => 'Directions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Deliveries'), ['controller' => 'Deliveries', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Delivery'), ['controller' => 'Deliveries', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Drink Orders'), ['controller' => 'DrinkOrders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Drink Order'), ['controller' => 'DrinkOrders', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Extra Garnishes'), ['controller' => 'ExtraGarnishes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Extra Garnish'), ['controller' => 'ExtraGarnishes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Food Orders'), ['controller' => 'FoodOrders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Food Order'), ['controller' => 'FoodOrders', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Payments'), ['controller' => 'Payments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Payment'), ['controller' => 'Payments', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="orders index large-9 medium-8 columns content">
    <h3><?= __('Orders') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('direction_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('delivery') ?></th>
                <th scope="col"><?= $this->Paginator->sort('price_delivery') ?></th>
                <th scope="col"><?= $this->Paginator->sort('total_vegan_food') ?></th>
                <th scope="col"><?= $this->Paginator->sort('total_normal_food') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($orders as $order): ?>
            <tr>
                <td><?= $this->Number->format($order->id) ?></td>
                <td><?= $order->has('user') ? $this->Html->link($order->user->email, ['controller' => 'Users', 'action' => 'view', $order->user->id]) : '' ?></td>
                <td><?= $order->has('direction') ? $this->Html->link($order->direction->id, ['controller' => 'Directions', 'action' => 'view', $order->direction->id]) : '' ?></td>
                <td><?= $this->Number->format($order->delivery) ?></td>
                <td><?= $this->Number->format($order->price_delivery) ?></td>
                <td><?= $this->Number->format($order->total_vegan_food) ?></td>
                <td><?= $this->Number->format($order->total_normal_food) ?></td>
                <td><?= $this->Number->format($order->status) ?></td>
                <td><?= h($order->created) ?></td>
                <td><?= h($order->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $order->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $order->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $order->id], ['confirm' => __('Are you sure you want to delete # {0}?', $order->id)]) ?>
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
