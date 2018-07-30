<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Order $order
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Order'), ['action' => 'edit', $order->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Order'), ['action' => 'delete', $order->id], ['confirm' => __('Are you sure you want to delete # {0}?', $order->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Orders'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Directions'), ['controller' => 'Directions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Direction'), ['controller' => 'Directions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Deliveries'), ['controller' => 'Deliveries', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Delivery'), ['controller' => 'Deliveries', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Drink Orders'), ['controller' => 'DrinkOrders', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Drink Order'), ['controller' => 'DrinkOrders', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Extra Garnishes'), ['controller' => 'ExtraGarnishes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Extra Garnish'), ['controller' => 'ExtraGarnishes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Food Orders'), ['controller' => 'FoodOrders', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Food Order'), ['controller' => 'FoodOrders', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Payments'), ['controller' => 'Payments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Payment'), ['controller' => 'Payments', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="orders view large-9 medium-8 columns content">
    <h3><?= h($order->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $order->has('user') ? $this->Html->link($order->user->email, ['controller' => 'Users', 'action' => 'view', $order->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Direction') ?></th>
            <td><?= $order->has('direction') ? $this->Html->link($order->direction->id, ['controller' => 'Directions', 'action' => 'view', $order->direction->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($order->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Delivery') ?></th>
            <td><?= $this->Number->format($order->delivery) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price Delivery') ?></th>
            <td><?= $this->Number->format($order->price_delivery) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Total Vegan Food') ?></th>
            <td><?= $this->Number->format($order->total_vegan_food) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Total Normal Food') ?></th>
            <td><?= $this->Number->format($order->total_normal_food) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($order->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($order->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($order->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Deliveries') ?></h4>
        <?php if (!empty($order->deliveries)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Order Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($order->deliveries as $deliveries): ?>
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
        <h4><?= __('Related Drink Orders') ?></h4>
        <?php if (!empty($order->drink_orders)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Order Id') ?></th>
                <th scope="col"><?= __('Drink Id') ?></th>
                <th scope="col"><?= __('Total') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($order->drink_orders as $drinkOrders): ?>
            <tr>
                <td><?= h($drinkOrders->id) ?></td>
                <td><?= h($drinkOrders->order_id) ?></td>
                <td><?= h($drinkOrders->drink_id) ?></td>
                <td><?= h($drinkOrders->total) ?></td>
                <td><?= h($drinkOrders->created) ?></td>
                <td><?= h($drinkOrders->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'DrinkOrders', 'action' => 'view', $drinkOrders->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'DrinkOrders', 'action' => 'edit', $drinkOrders->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'DrinkOrders', 'action' => 'delete', $drinkOrders->id], ['confirm' => __('Are you sure you want to delete # {0}?', $drinkOrders->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Extra Garnishes') ?></h4>
        <?php if (!empty($order->extra_garnishes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Garnish Id') ?></th>
                <th scope="col"><?= __('Order Id') ?></th>
                <th scope="col"><?= __('Total') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($order->extra_garnishes as $extraGarnishes): ?>
            <tr>
                <td><?= h($extraGarnishes->id) ?></td>
                <td><?= h($extraGarnishes->garnish_id) ?></td>
                <td><?= h($extraGarnishes->order_id) ?></td>
                <td><?= h($extraGarnishes->total) ?></td>
                <td><?= h($extraGarnishes->created) ?></td>
                <td><?= h($extraGarnishes->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ExtraGarnishes', 'action' => 'view', $extraGarnishes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ExtraGarnishes', 'action' => 'edit', $extraGarnishes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ExtraGarnishes', 'action' => 'delete', $extraGarnishes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $extraGarnishes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Food Orders') ?></h4>
        <?php if (!empty($order->food_orders)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Food Id') ?></th>
                <th scope="col"><?= __('Order Id') ?></th>
                <th scope="col"><?= __('Silverware Id') ?></th>
                <th scope="col"><?= __('Special Requirements') ?></th>
                <th scope="col"><?= __('Price Special Requirements') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($order->food_orders as $foodOrders): ?>
            <tr>
                <td><?= h($foodOrders->id) ?></td>
                <td><?= h($foodOrders->food_id) ?></td>
                <td><?= h($foodOrders->order_id) ?></td>
                <td><?= h($foodOrders->silverware_id) ?></td>
                <td><?= h($foodOrders->special_requirements) ?></td>
                <td><?= h($foodOrders->price_special_requirements) ?></td>
                <td><?= h($foodOrders->created) ?></td>
                <td><?= h($foodOrders->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'FoodOrders', 'action' => 'view', $foodOrders->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'FoodOrders', 'action' => 'edit', $foodOrders->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'FoodOrders', 'action' => 'delete', $foodOrders->id], ['confirm' => __('Are you sure you want to delete # {0}?', $foodOrders->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Payments') ?></h4>
        <?php if (!empty($order->payments)): ?>
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
            <?php foreach ($order->payments as $payments): ?>
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
