<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Direction $direction
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Direction'), ['action' => 'edit', $direction->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Direction'), ['action' => 'delete', $direction->id], ['confirm' => __('Are you sure you want to delete # {0}?', $direction->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Directions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Direction'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="directions view large-9 medium-8 columns content">
    <h3><?= h($direction->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $direction->has('user') ? $this->Html->link($direction->user->email, ['controller' => 'Users', 'action' => 'view', $direction->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('State') ?></th>
            <td><?= h($direction->state) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('City') ?></th>
            <td><?= h($direction->city) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subdivision') ?></th>
            <td><?= h($direction->subdivision) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Street') ?></th>
            <td><?= h($direction->street) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Deparment') ?></th>
            <td><?= h($direction->deparment) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Door') ?></th>
            <td><?= h($direction->door) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($direction->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Zip') ?></th>
            <td><?= $this->Number->format($direction->zip) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Apartment Floor') ?></th>
            <td><?= $this->Number->format($direction->apartment_floor) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Arrival Option') ?></th>
            <td><?= $this->Number->format($direction->arrival_option) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Latitude') ?></th>
            <td><?= $this->Number->format($direction->latitude) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Longitude') ?></th>
            <td><?= $this->Number->format($direction->longitude) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($direction->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($direction->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Orders') ?></h4>
        <?php if (!empty($direction->orders)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Direction Id') ?></th>
                <th scope="col"><?= __('Delivery') ?></th>
                <th scope="col"><?= __('Price Delivery') ?></th>
                <th scope="col"><?= __('Total Vegan Food') ?></th>
                <th scope="col"><?= __('Total Normal Food') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($direction->orders as $orders): ?>
            <tr>
                <td><?= h($orders->id) ?></td>
                <td><?= h($orders->user_id) ?></td>
                <td><?= h($orders->direction_id) ?></td>
                <td><?= h($orders->delivery) ?></td>
                <td><?= h($orders->price_delivery) ?></td>
                <td><?= h($orders->total_vegan_food) ?></td>
                <td><?= h($orders->total_normal_food) ?></td>
                <td><?= h($orders->status) ?></td>
                <td><?= h($orders->created) ?></td>
                <td><?= h($orders->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Orders', 'action' => 'view', $orders->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Orders', 'action' => 'edit', $orders->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Orders', 'action' => 'delete', $orders->id], ['confirm' => __('Are you sure you want to delete # {0}?', $orders->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
