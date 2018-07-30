<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FoodOrder[]|\Cake\Collection\CollectionInterface $foodOrders
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Food Order'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Foods'), ['controller' => 'Foods', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Food'), ['controller' => 'Foods', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Change Garnishes'), ['controller' => 'ChangeGarnishes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Change Garnish'), ['controller' => 'ChangeGarnishes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Silverwares'), ['controller' => 'Silverwares', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Silverware'), ['controller' => 'Silverwares', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tuppers'), ['controller' => 'Tuppers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tupper'), ['controller' => 'Tuppers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="foodOrders index large-9 medium-8 columns content">
    <h3><?= __('Food Orders') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('food_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('order_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('silverware_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('price_special_requirements') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($foodOrders as $foodOrder): ?>
            <tr>
                <td><?= $this->Number->format($foodOrder->id) ?></td>
                <td><?= $foodOrder->has('food') ? $this->Html->link($foodOrder->food->id, ['controller' => 'Foods', 'action' => 'view', $foodOrder->food->id]) : '' ?></td>
                <td><?= $foodOrder->has('order') ? $this->Html->link($foodOrder->order->id, ['controller' => 'Orders', 'action' => 'view', $foodOrder->order->id]) : '' ?></td>
                <td><?= $this->Number->format($foodOrder->silverware_id) ?></td>
                <td><?= $this->Number->format($foodOrder->price_special_requirements) ?></td>
                <td><?= h($foodOrder->created) ?></td>
                <td><?= $this->Number->format($foodOrder->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $foodOrder->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $foodOrder->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $foodOrder->id], ['confirm' => __('Are you sure you want to delete # {0}?', $foodOrder->id)]) ?>
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
