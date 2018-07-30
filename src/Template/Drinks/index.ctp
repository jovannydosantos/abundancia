<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Drink[]|\Cake\Collection\CollectionInterface $drinks
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Drink'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Drink Orders'), ['controller' => 'DrinkOrders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Drink Order'), ['controller' => 'DrinkOrders', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="drinks index large-9 medium-8 columns content">
    <h3><?= __('Drinks') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('drink') ?></th>
                <th scope="col"><?= $this->Paginator->sort('price') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($drinks as $drink): ?>
            <tr>
                <td><?= $this->Number->format($drink->id) ?></td>
                <td><?= h($drink->drink) ?></td>
                <td><?= $this->Number->format($drink->price) ?></td>
                <td><?= $this->Number->format($drink->status) ?></td>
                <td><?= h($drink->created) ?></td>
                <td><?= h($drink->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $drink->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $drink->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $drink->id], ['confirm' => __('Are you sure you want to delete # {0}?', $drink->id)]) ?>
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
