<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FoodType $foodType
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Food Type'), ['action' => 'edit', $foodType->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Food Type'), ['action' => 'delete', $foodType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $foodType->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Food Types'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Food Type'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Foods'), ['controller' => 'Foods', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Food'), ['controller' => 'Foods', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="foodTypes view large-9 medium-8 columns content">
    <h3><?= h($foodType->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Food Type') ?></th>
            <td><?= h($foodType->food_type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($foodType->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Foods') ?></h4>
        <?php if (!empty($foodType->foods)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Food') ?></th>
                <th scope="col"><?= __('Price') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Food Type Id') ?></th>
                <th scope="col"><?= __('Sale Date') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($foodType->foods as $foods): ?>
            <tr>
                <td><?= h($foods->id) ?></td>
                <td><?= h($foods->food) ?></td>
                <td><?= h($foods->price) ?></td>
                <td><?= h($foods->description) ?></td>
                <td><?= h($foods->status) ?></td>
                <td><?= h($foods->food_type_id) ?></td>
                <td><?= h($foods->sale_date) ?></td>
                <td><?= h($foods->created) ?></td>
                <td><?= h($foods->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Foods', 'action' => 'view', $foods->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Foods', 'action' => 'edit', $foods->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Foods', 'action' => 'delete', $foods->id], ['confirm' => __('Are you sure you want to delete # {0}?', $foods->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
