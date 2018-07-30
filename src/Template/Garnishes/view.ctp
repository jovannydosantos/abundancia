<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Garnish $garnish
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Garnish'), ['action' => 'edit', $garnish->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Garnish'), ['action' => 'delete', $garnish->id], ['confirm' => __('Are you sure you want to delete # {0}?', $garnish->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Garnishes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Garnish'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Extra Garnishes'), ['controller' => 'ExtraGarnishes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Extra Garnish'), ['controller' => 'ExtraGarnishes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="garnishes view large-9 medium-8 columns content">
    <h3><?= h($garnish->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Garnish') ?></th>
            <td><?= h($garnish->garnish) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($garnish->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($garnish->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= $this->Number->format($garnish->price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($garnish->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($garnish->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Extra Garnishes') ?></h4>
        <?php if (!empty($garnish->extra_garnishes)): ?>
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
            <?php foreach ($garnish->extra_garnishes as $extraGarnishes): ?>
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
</div>
