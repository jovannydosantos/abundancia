<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tupper $tupper
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tupper'), ['action' => 'edit', $tupper->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tupper'), ['action' => 'delete', $tupper->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tupper->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tuppers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tupper'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Food Orders'), ['controller' => 'FoodOrders', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Food Order'), ['controller' => 'FoodOrders', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tuppers view large-9 medium-8 columns content">
    <h3><?= h($tupper->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Food Order') ?></th>
            <td><?= $tupper->has('food_order') ? $this->Html->link($tupper->food_order->id, ['controller' => 'FoodOrders', 'action' => 'view', $tupper->food_order->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($tupper->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Delivery Status') ?></th>
            <td><?= $this->Number->format($tupper->delivery_status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Return Status') ?></th>
            <td><?= $this->Number->format($tupper->return_status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tupper Charge') ?></th>
            <td><?= $this->Number->format($tupper->tupper_charge) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= $this->Number->format($tupper->price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= $this->Number->format($tupper->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= $this->Number->format($tupper->modified) ?></td>
        </tr>
    </table>
</div>
