<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PackageOrder $packageOrder
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Package Order'), ['action' => 'edit', $packageOrder->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Package Order'), ['action' => 'delete', $packageOrder->id], ['confirm' => __('Are you sure you want to delete # {0}?', $packageOrder->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Package Orders'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Package Order'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Packages'), ['controller' => 'Packages', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Package'), ['controller' => 'Packages', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Directions'), ['controller' => 'Directions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Direction'), ['controller' => 'Directions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Payments'), ['controller' => 'Payments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Payment'), ['controller' => 'Payments', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="packageOrders view large-9 medium-8 columns content">
    <h3><?= h($packageOrder->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Package') ?></th>
            <td><?= $packageOrder->has('package') ? $this->Html->link($packageOrder->package->id, ['controller' => 'Packages', 'action' => 'view', $packageOrder->package->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $packageOrder->has('user') ? $this->Html->link($packageOrder->user->email, ['controller' => 'Users', 'action' => 'view', $packageOrder->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Direction') ?></th>
            <td><?= $packageOrder->has('direction') ? $this->Html->link($packageOrder->direction->id, ['controller' => 'Directions', 'action' => 'view', $packageOrder->direction->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($packageOrder->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Delivery') ?></th>
            <td><?= $this->Number->format($packageOrder->delivery) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price Delivery') ?></th>
            <td><?= $this->Number->format($packageOrder->price_delivery) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Total Packages') ?></th>
            <td><?= $this->Number->format($packageOrder->total_packages) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($packageOrder->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($packageOrder->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($packageOrder->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Payments') ?></h4>
        <?php if (!empty($packageOrder->payments)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Type Order') ?></th>
                <th scope="col"><?= __('Order Id') ?></th>
                <th scope="col"><?= __('Package Order Id') ?></th>
                <th scope="col"><?= __('Type Pay') ?></th>
                <th scope="col"><?= __('Total') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($packageOrder->payments as $payments): ?>
            <tr>
                <td><?= h($payments->id) ?></td>
                <td><?= h($payments->type_order) ?></td>
                <td><?= h($payments->order_id) ?></td>
                <td><?= h($payments->package_order_id) ?></td>
                <td><?= h($payments->type_pay) ?></td>
                <td><?= h($payments->total) ?></td>
                <td><?= h($payments->user_id) ?></td>
                <td><?= h($payments->created) ?></td>
                <td><?= h($payments->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Payments', 'action' => 'view', $payments->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Payments', 'action' => 'edit', $payments->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Payments', 'action' => 'delete', $payments->id], ['confirm' => __('Are you sure you want to delete # {0}?', $payments->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
