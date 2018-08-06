
    <?= $this->Form->create($user) ?>
    <?= $this->Form->input('email',['prepend' => '<i class="glyphicon glyphicon-user"></i>','label'=>false, 'placeholder'=>'Correo electrónico','requered'=>true]) ?>
    <?= $this->Form->input('password',['prepend' => '<i class="glyphicon glyphicon-lock"></i>','label'=>false, 'placeholder'=>'Contraseña']) ?>
    <?= $this->Form->button('<i class="glyphicon glyphicon-log-in"></i> Iniciar Sesión',['class'=>'btn btn-default pull-right']) ?>
    <?= $this->Form->end() ?>
    <?= $this->Html->link('<i class="glyphicon glyphicon-user"></i> Registrar',['controller'=>'Users','action' => 'addClient'],['escape' => false,'class'=>'btn btn-default pull-right']);?>
