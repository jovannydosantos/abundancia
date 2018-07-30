<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Food $food
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Food'), ['action' => 'edit', $food->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Food'), ['action' => 'delete', $food->id], ['confirm' => __('Are you sure you want to delete # {0}?', $food->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Foods'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Food'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Food Types'), ['controller' => 'FoodTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Food Type'), ['controller' => 'FoodTypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Food Garnishes'), ['controller' => 'FoodGarnishes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Food Garnish'), ['controller' => 'FoodGarnishes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Food Orders'), ['controller' => 'FoodOrders', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Food Order'), ['controller' => 'FoodOrders', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="foods view large-9 medium-8 columns content">
    <h3><?= h($food->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Food') ?></th>
            <td><?= h($food->food) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Food Type') ?></th>
            <td><?= $food->has('food_type') ? $this->Html->link($food->food_type->id, ['controller' => 'FoodTypes', 'action' => 'view', $food->food_type->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($food->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= $this->Number->format($food->price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($food->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sale Date') ?></th>
            <td><?= h($food->sale_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($food->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($food->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($food->description)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Food Garnishes') ?></h4>
        <?php if (!empty($food->food_garnishes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Food Id') ?></th>
                <th scope="col"><?= __('Garnishes Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($food->food_garnishes as $foodGarnishes): ?>
            <tr>
                <td><?= h($foodGarnishes->id) ?></td>
                <td><?= h($foodGarnishes->food_id) ?></td>
                <td><?= h($foodGarnishes->garnishes_id) ?></td>
                <td><?= h($foodGarnishes->created) ?></td>
                <td><?= h($foodGarnishes->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'FoodGarnishes', 'action' => 'view', $foodGarnishes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'FoodGarnishes', 'action' => 'edit', $foodGarnishes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'FoodGarnishes', 'action' => 'delete', $foodGarnishes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $foodGarnishes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Food Orders') ?></h4>
        <?php if (!empty($food->food_orders)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Food Id') ?></th>
                <th scope="col"><?= __('Order Id') ?></th>
                <th scope="col"><?= __('Silverware Id') ?></th>
                <th scope="col"><?= __('Special Requirements') ?></th>
                <th scope="col"><?= __('Price Special Requirements') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($food->food_orders as $foodOrders): ?>
            <tr>
                <td><?= h($foodOrders->id) ?></td>
                <td><?= h($foodOrders->food_id) ?></td>
                <td><?= h($foodOrders->order_id) ?></td>
                <td><?= h($foodOrders->silverware_id) ?></td>
                <td><?= h($foodOrders->special_requirements) ?></td>
                <td><?= h($foodOrders->price_special_requirements) ?></td>
                <td><?= h($foodOrders->created) ?></td>
                <td><?= h($foodOrders->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'FoodOrders', 'action' => 'view', $foodOrders->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'FoodOrders', 'action' => 'edit', $foodOrders->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'FoodOrders', 'action' => 'delete', $foodOrders->id], ['confirm' => __('Are you sure you want to delete # {0}?', $foodOrders->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
