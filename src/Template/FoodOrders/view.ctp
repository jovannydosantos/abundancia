<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FoodOrder $foodOrder
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Food Order'), ['action' => 'edit', $foodOrder->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Food Order'), ['action' => 'delete', $foodOrder->id], ['confirm' => __('Are you sure you want to delete # {0}?', $foodOrder->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Food Orders'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Food Order'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Foods'), ['controller' => 'Foods', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Food'), ['controller' => 'Foods', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Change Garnishes'), ['controller' => 'ChangeGarnishes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Change Garnish'), ['controller' => 'ChangeGarnishes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Silverwares'), ['controller' => 'Silverwares', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Silverware'), ['controller' => 'Silverwares', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tuppers'), ['controller' => 'Tuppers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tupper'), ['controller' => 'Tuppers', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="foodOrders view large-9 medium-8 columns content">
    <h3><?= h($foodOrder->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Food') ?></th>
            <td><?= $foodOrder->has('food') ? $this->Html->link($foodOrder->food->id, ['controller' => 'Foods', 'action' => 'view', $foodOrder->food->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Order') ?></th>
            <td><?= $foodOrder->has('order') ? $this->Html->link($foodOrder->order->id, ['controller' => 'Orders', 'action' => 'view', $foodOrder->order->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($foodOrder->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Silverware Id') ?></th>
            <td><?= $this->Number->format($foodOrder->silverware_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price Special Requirements') ?></th>
            <td><?= $this->Number->format($foodOrder->price_special_requirements) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= $this->Number->format($foodOrder->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($foodOrder->created) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Special Requirements') ?></h4>
        <?= $this->Text->autoParagraph(h($foodOrder->special_requirements)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Change Garnishes') ?></h4>
        <?php if (!empty($foodOrder->change_garnishes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Food Order Id') ?></th>
                <th scope="col"><?= __('Actual Garnish Id') ?></th>
                <th scope="col"><?= __('New Garnish Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($foodOrder->change_garnishes as $changeGarnishes): ?>
            <tr>
                <td><?= h($changeGarnishes->id) ?></td>
                <td><?= h($changeGarnishes->food_order_id) ?></td>
                <td><?= h($changeGarnishes->actual_garnish_id) ?></td>
                <td><?= h($changeGarnishes->new_garnish_id) ?></td>
                <td><?= h($changeGarnishes->created) ?></td>
                <td><?= h($changeGarnishes->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ChangeGarnishes', 'action' => 'view', $changeGarnishes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ChangeGarnishes', 'action' => 'edit', $changeGarnishes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ChangeGarnishes', 'action' => 'delete', $changeGarnishes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $changeGarnishes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Silverwares') ?></h4>
        <?php if (!empty($foodOrder->silverwares)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Food Order Id') ?></th>
                <th scope="col"><?= __('Silverware Type') ?></th>
                <th scope="col"><?= __('Total Silverware') ?></th>
                <th scope="col"><?= __('Price') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($foodOrder->silverwares as $silverwares): ?>
            <tr>
                <td><?= h($silverwares->id) ?></td>
                <td><?= h($silverwares->food_order_id) ?></td>
                <td><?= h($silverwares->silverware_type) ?></td>
                <td><?= h($silverwares->total_silverware) ?></td>
                <td><?= h($silverwares->price) ?></td>
                <td><?= h($silverwares->created) ?></td>
                <td><?= h($silverwares->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Silverwares', 'action' => 'view', $silverwares->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Silverwares', 'action' => 'edit', $silverwares->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Silverwares', 'action' => 'delete', $silverwares->id], ['confirm' => __('Are you sure you want to delete # {0}?', $silverwares->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Tuppers') ?></h4>
        <?php if (!empty($foodOrder->tuppers)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Order Id') ?></th>
                <th scope="col"><?= __('Delivery Status') ?></th>
                <th scope="col"><?= __('Return Status') ?></th>
                <th scope="col"><?= __('Tupper Charge') ?></th>
                <th scope="col"><?= __('Price Charge') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($foodOrder->tuppers as $tuppers): ?>
            <tr>
                <td><?= h($tuppers->id) ?></td>
                <td><?= h($tuppers->order_id) ?></td>
                <td><?= h($tuppers->delivery_status) ?></td>
                <td><?= h($tuppers->return_status) ?></td>
                <td><?= h($tuppers->tupper_charge) ?></td>
                <td><?= h($tuppers->price_charge) ?></td>
                <td><?= h($tuppers->created) ?></td>
                <td><?= h($tuppers->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Tuppers', 'action' => 'view', $tuppers->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Tuppers', 'action' => 'edit', $tuppers->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Tuppers', 'action' => 'delete', $tuppers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tuppers->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
