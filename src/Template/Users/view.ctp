<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Roles'), ['controller' => 'Roles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Role'), ['controller' => 'Roles', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Deliveries'), ['controller' => 'Deliveries', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Delivery'), ['controller' => 'Deliveries', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Directions'), ['controller' => 'Directions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Direction'), ['controller' => 'Directions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Package Orders'), ['controller' => 'PackageOrders', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Package Order'), ['controller' => 'PackageOrders', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Payments'), ['controller' => 'Payments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Payment'), ['controller' => 'Payments', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Role') ?></th>
            <td><?= $user->has('role') ? $this->Html->link($user->role->id, ['controller' => 'Roles', 'action' => 'view', $user->role->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($user->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Name') ?></th>
            <td><?= h($user->last_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telephone') ?></th>
            <td><?= h($user->telephone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($user->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $user->status ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Deliveries') ?></h4>
        <?php if (!empty($user->deliveries)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Order Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->deliveries as $deliveries): ?>
            <tr>
                <td><?= h($deliveries->id) ?></td>
                <td><?= h($deliveries->user_id) ?></td>
                <td><?= h($deliveries->order_id) ?></td>
                <td><?= h($deliveries->created) ?></td>
                <td><?= h($deliveries->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Deliveries', 'action' => 'view', $deliveries->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Deliveries', 'action' => 'edit', $deliveries->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Deliveries', 'action' => 'delete', $deliveries->id], ['confirm' => __('Are you sure you want to delete # {0}?', $deliveries->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Directions') ?></h4>
        <?php if (!empty($user->directions)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('State') ?></th>
                <th scope="col"><?= __('City') ?></th>
                <th scope="col"><?= __('Subdivision') ?></th>
                <th scope="col"><?= __('Zip') ?></th>
                <th scope="col"><?= __('Street') ?></th>
                <th scope="col"><?= __('Deparment') ?></th>
                <th scope="col"><?= __('Apartment Floor') ?></th>
                <th scope="col"><?= __('Door') ?></th>
                <th scope="col"><?= __('Arrival Option') ?></th>
                <th scope="col"><?= __('Latitude') ?></th>
                <th scope="col"><?= __('Longitude') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->directions as $directions): ?>
            <tr>
                <td><?= h($directions->id) ?></td>
                <td><?= h($directions->user_id) ?></td>
                <td><?= h($directions->state) ?></td>
                <td><?= h($directions->city) ?></td>
                <td><?= h($directions->subdivision) ?></td>
                <td><?= h($directions->zip) ?></td>
                <td><?= h($directions->street) ?></td>
                <td><?= h($directions->deparment) ?></td>
                <td><?= h($directions->apartment_floor) ?></td>
                <td><?= h($directions->door) ?></td>
                <td><?= h($directions->arrival_option) ?></td>
                <td><?= h($directions->latitude) ?></td>
                <td><?= h($directions->longitude) ?></td>
                <td><?= h($directions->created) ?></td>
                <td><?= h($directions->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Directions', 'action' => 'view', $directions->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Directions', 'action' => 'edit', $directions->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Directions', 'action' => 'delete', $directions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $directions->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Orders') ?></h4>
        <?php if (!empty($user->orders)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Direction Id') ?></th>
                <th scope="col"><?= __('Delivery') ?></th>
                <th scope="col"><?= __('Price Delivery') ?></th>
                <th scope="col"><?= __('Total Vegan Food') ?></th>
                <th scope="col"><?= __('Total Normal Food') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->orders as $orders): ?>
            <tr>
                <td><?= h($orders->id) ?></td>
                <td><?= h($orders->user_id) ?></td>
                <td><?= h($orders->direction_id) ?></td>
                <td><?= h($orders->delivery) ?></td>
                <td><?= h($orders->price_delivery) ?></td>
                <td><?= h($orders->total_vegan_food) ?></td>
                <td><?= h($orders->total_normal_food) ?></td>
                <td><?= h($orders->status) ?></td>
                <td><?= h($orders->created) ?></td>
                <td><?= h($orders->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Orders', 'action' => 'view', $orders->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Orders', 'action' => 'edit', $orders->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Orders', 'action' => 'delete', $orders->id], ['confirm' => __('Are you sure you want to delete # {0}?', $orders->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Package Orders') ?></h4>
        <?php if (!empty($user->package_orders)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Pacakes Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Deposit') ?></th>
                <th scope="col"><?= __('Delivery') ?></th>
                <th scope="col"><?= __('Price Delivery') ?></th>
                <th scope="col"><?= __('Total Packages') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->package_orders as $packageOrders): ?>
            <tr>
                <td><?= h($packageOrders->id) ?></td>
                <td><?= h($packageOrders->pacakes_id) ?></td>
                <td><?= h($packageOrders->user_id) ?></td>
                <td><?= h($packageOrders->deposit) ?></td>
                <td><?= h($packageOrders->delivery) ?></td>
                <td><?= h($packageOrders->price_delivery) ?></td>
                <td><?= h($packageOrders->total_packages) ?></td>
                <td><?= h($packageOrders->status) ?></td>
                <td><?= h($packageOrders->created) ?></td>
                <td><?= h($packageOrders->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'PackageOrders', 'action' => 'view', $packageOrders->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'PackageOrders', 'action' => 'edit', $packageOrders->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'PackageOrders', 'action' => 'delete', $packageOrders->id], ['confirm' => __('Are you sure you want to delete # {0}?', $packageOrders->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Payments') ?></h4>
        <?php if (!empty($user->payments)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Type Order') ?></th>
                <th scope="col"><?= __('Order Id') ?></th>
                <th scope="col"><?= __('Type Pay') ?></th>
                <th scope="col"><?= __('Total') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->payments as $payments): ?>
            <tr>
                <td><?= h($payments->id) ?></td>
                <td><?= h($payments->type_order) ?></td>
                <td><?= h($payments->order_id) ?></td>
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
