<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tupper[]|\Cake\Collection\CollectionInterface $tuppers
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tupper'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Food Orders'), ['controller' => 'FoodOrders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Food Order'), ['controller' => 'FoodOrders', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tuppers index large-9 medium-8 columns content">
    <h3><?= __('Tuppers') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('food_order_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('delivery_status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('return_status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tupper_charge') ?></th>
                <th scope="col"><?= $this->Paginator->sort('price') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tuppers as $tupper): ?>
            <tr>
                <td><?= $this->Number->format($tupper->id) ?></td>
                <td><?= $tupper->has('food_order') ? $this->Html->link($tupper->food_order->id, ['controller' => 'FoodOrders', 'action' => 'view', $tupper->food_order->id]) : '' ?></td>
                <td><?= $this->Number->format($tupper->delivery_status) ?></td>
                <td><?= $this->Number->format($tupper->return_status) ?></td>
                <td><?= $this->Number->format($tupper->tupper_charge) ?></td>
                <td><?= $this->Number->format($tupper->price) ?></td>
                <td><?= $this->Number->format($tupper->created) ?></td>
                <td><?= $this->Number->format($tupper->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tupper->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tupper->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tupper->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tupper->id)]) ?>
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
