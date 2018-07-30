<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DrinkOrder $drinkOrder
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Drink Order'), ['action' => 'edit', $drinkOrder->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Drink Order'), ['action' => 'delete', $drinkOrder->id], ['confirm' => __('Are you sure you want to delete # {0}?', $drinkOrder->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Drink Orders'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Drink Order'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Drinks'), ['controller' => 'Drinks', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Drink'), ['controller' => 'Drinks', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="drinkOrders view large-9 medium-8 columns content">
    <h3><?= h($drinkOrder->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Order') ?></th>
            <td><?= $drinkOrder->has('order') ? $this->Html->link($drinkOrder->order->id, ['controller' => 'Orders', 'action' => 'view', $drinkOrder->order->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Drink') ?></th>
            <td><?= $drinkOrder->has('drink') ? $this->Html->link($drinkOrder->drink->id, ['controller' => 'Drinks', 'action' => 'view', $drinkOrder->drink->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($drinkOrder->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Total') ?></th>
            <td><?= $this->Number->format($drinkOrder->total) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($drinkOrder->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($drinkOrder->modified) ?></td>
        </tr>
    </table>
</div>
