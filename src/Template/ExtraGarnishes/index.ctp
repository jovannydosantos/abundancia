<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ExtraGarnish[]|\Cake\Collection\CollectionInterface $extraGarnishes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Extra Garnish'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Garnishes'), ['controller' => 'Garnishes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Garnish'), ['controller' => 'Garnishes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="extraGarnishes index large-9 medium-8 columns content">
    <h3><?= __('Extra Garnishes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('garnish_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('order_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('total') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($extraGarnishes as $extraGarnish): ?>
            <tr>
                <td><?= $this->Number->format($extraGarnish->id) ?></td>
                <td><?= $extraGarnish->has('garnish') ? $this->Html->link($extraGarnish->garnish->id, ['controller' => 'Garnishes', 'action' => 'view', $extraGarnish->garnish->id]) : '' ?></td>
                <td><?= $extraGarnish->has('order') ? $this->Html->link($extraGarnish->order->id, ['controller' => 'Orders', 'action' => 'view', $extraGarnish->order->id]) : '' ?></td>
                <td><?= $this->Number->format($extraGarnish->total) ?></td>
                <td><?= h($extraGarnish->created) ?></td>
                <td><?= h($extraGarnish->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $extraGarnish->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $extraGarnish->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $extraGarnish->id], ['confirm' => __('Are you sure you want to delete # {0}?', $extraGarnish->id)]) ?>
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
