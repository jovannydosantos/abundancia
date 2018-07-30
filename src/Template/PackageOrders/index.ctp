<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PackageOrder[]|\Cake\Collection\CollectionInterface $packageOrders
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Package Order'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Packages'), ['controller' => 'Packages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Package'), ['controller' => 'Packages', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Directions'), ['controller' => 'Directions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Direction'), ['controller' => 'Directions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Payments'), ['controller' => 'Payments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Payment'), ['controller' => 'Payments', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="packageOrders index large-9 medium-8 columns content">
    <h3><?= __('Package Orders') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('package_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('delivery') ?></th>
                <th scope="col"><?= $this->Paginator->sort('price_delivery') ?></th>
                <th scope="col"><?= $this->Paginator->sort('total_packages') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('direction_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($packageOrders as $packageOrder): ?>
            <tr>
                <td><?= $this->Number->format($packageOrder->id) ?></td>
                <td><?= $packageOrder->has('package') ? $this->Html->link($packageOrder->package->id, ['controller' => 'Packages', 'action' => 'view', $packageOrder->package->id]) : '' ?></td>
                <td><?= $packageOrder->has('user') ? $this->Html->link($packageOrder->user->email, ['controller' => 'Users', 'action' => 'view', $packageOrder->user->id]) : '' ?></td>
                <td><?= $this->Number->format($packageOrder->delivery) ?></td>
                <td><?= $this->Number->format($packageOrder->price_delivery) ?></td>
                <td><?= $this->Number->format($packageOrder->total_packages) ?></td>
                <td><?= $this->Number->format($packageOrder->status) ?></td>
                <td><?= $packageOrder->has('direction') ? $this->Html->link($packageOrder->direction->id, ['controller' => 'Directions', 'action' => 'view', $packageOrder->direction->id]) : '' ?></td>
                <td><?= h($packageOrder->created) ?></td>
                <td><?= h($packageOrder->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $packageOrder->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $packageOrder->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $packageOrder->id], ['confirm' => __('Are you sure you want to delete # {0}?', $packageOrder->id)]) ?>
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
