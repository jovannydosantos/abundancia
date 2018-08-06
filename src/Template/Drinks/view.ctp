<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Drink $drink
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Drink'), ['action' => 'edit', $drink->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Drink'), ['action' => 'delete', $drink->id], ['confirm' => __('Are you sure you want to delete # {0}?', $drink->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Drinks'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Drink'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Drink Orders'), ['controller' => 'DrinkOrders', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Drink Order'), ['controller' => 'DrinkOrders', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="drinks view large-9 medium-8 columns content">
    <h3><?= h($drink->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Drink') ?></th>
            <td><?= h($drink->drink) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Size') ?></th>
            <td><?= h($drink->size) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($drink->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= $this->Number->format($drink->price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($drink->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($drink->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($drink->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Drink Orders') ?></h4>
        <?php if (!empty($drink->drink_orders)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Order Id') ?></th>
                <th scope="col"><?= __('Drink Id') ?></th>
                <th scope="col"><?= __('Total') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($drink->drink_orders as $drinkOrders): ?>
            <tr>
                <td><?= h($drinkOrders->id) ?></td>
                <td><?= h($drinkOrders->order_id) ?></td>
                <td><?= h($drinkOrders->drink_id) ?></td>
                <td><?= h($drinkOrders->total) ?></td>
                <td><?= h($drinkOrders->created) ?></td>
                <td><?= h($drinkOrders->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'DrinkOrders', 'action' => 'view', $drinkOrders->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'DrinkOrders', 'action' => 'edit', $drinkOrders->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'DrinkOrders', 'action' => 'delete', $drinkOrders->id], ['confirm' => __('Are you sure you want to delete # {0}?', $drinkOrders->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
