<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Silverware[]|\Cake\Collection\CollectionInterface $silverwares
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Silverware'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Food Orders'), ['controller' => 'FoodOrders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Food Order'), ['controller' => 'FoodOrders', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="silverwares index large-9 medium-8 columns content">
    <h3><?= __('Silverwares') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('food_order_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('silverware_type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('total_silverware') ?></th>
                <th scope="col"><?= $this->Paginator->sort('price') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($silverwares as $silverware): ?>
            <tr>
                <td><?= $this->Number->format($silverware->id) ?></td>
                <td><?= $silverware->has('food_order') ? $this->Html->link($silverware->food_order->id, ['controller' => 'FoodOrders', 'action' => 'view', $silverware->food_order->id]) : '' ?></td>
                <td><?= $this->Number->format($silverware->silverware_type) ?></td>
                <td><?= $this->Number->format($silverware->total_silverware) ?></td>
                <td><?= $this->Number->format($silverware->price) ?></td>
                <td><?= h($silverware->created) ?></td>
                <td><?= h($silverware->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $silverware->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $silverware->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $silverware->id], ['confirm' => __('Are you sure you want to delete # {0}?', $silverware->id)]) ?>
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
