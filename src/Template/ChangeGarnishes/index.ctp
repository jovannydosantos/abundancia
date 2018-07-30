<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ChangeGarnish[]|\Cake\Collection\CollectionInterface $changeGarnishes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Change Garnish'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Food Orders'), ['controller' => 'FoodOrders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Food Order'), ['controller' => 'FoodOrders', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="changeGarnishes index large-9 medium-8 columns content">
    <h3><?= __('Change Garnishes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('food_order_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('actual_garnish_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('new_garnish_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($changeGarnishes as $changeGarnish): ?>
            <tr>
                <td><?= $this->Number->format($changeGarnish->id) ?></td>
                <td><?= $changeGarnish->has('food_order') ? $this->Html->link($changeGarnish->food_order->id, ['controller' => 'FoodOrders', 'action' => 'view', $changeGarnish->food_order->id]) : '' ?></td>
                <td><?= $this->Number->format($changeGarnish->actual_garnish_id) ?></td>
                <td><?= $this->Number->format($changeGarnish->new_garnish_id) ?></td>
                <td><?= h($changeGarnish->created) ?></td>
                <td><?= h($changeGarnish->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $changeGarnish->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $changeGarnish->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $changeGarnish->id], ['confirm' => __('Are you sure you want to delete # {0}?', $changeGarnish->id)]) ?>
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
