<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Food $food
 */
?>

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Foods'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Food Types'), ['controller' => 'FoodTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Food Type'), ['controller' => 'FoodTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Food Garnishes'), ['controller' => 'FoodGarnishes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Food Garnish'), ['controller' => 'FoodGarnishes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Food Orders'), ['controller' => 'FoodOrders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Food Order'), ['controller' => 'FoodOrders', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="foods form large-9 medium-8 columns content">
    <?= $this->Form->create($food) ?>
    <fieldset>
        <legend><?= __('Add Food') ?></legend>
        <?php
            echo $this->Form->control('food');
            echo $this->Form->control('price');
            echo $this->Form->control('description');
            echo $this->Form->control('status');
            echo $this->Form->control('food_type_id', ['options' => $foodTypes]);
            echo $this->Form->control('sale_date');
        ?>
        <div class="col-md-12">
            <div class="panel panel-default panel-table pre-scrollable">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col col-md-6">
                            <h3 class="panel-title">Agreagar guarniciones al platillo</h3>
                        </div>
                        <div class="col col-md-6 text-right">
                            <button type="button" class="btn btn-sm btn-primary btn-create" id="clonarGuarnicion"><i class="fa fa-plus"></i> Nueva Guarnición</button>
                        </div>
                    </div>
                </div>
                <div class="panel-body" id="contenedorGuarniciones">
                    <div class="col-md-4 enumerar" id="clonOriginal">
                        <label>Guarnición</label>
                        <?= $this->Form->control('garnishes_id[0]', ['options' => $garnishes,'label'=>false,]); ?>
                    </div>
                </div>
                <div class="panel-footer">
                </div>
            </div>
        </div>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
