
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            echo $this->Form->control('email');
            echo $this->Form->control('password');
            echo $this->Form->control('role_id', ['options' => $roles]);
            echo $this->Form->control('status');
            echo $this->Form->control('name');
            echo $this->Form->control('last_name');
            echo $this->Form->control('telephone');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
