<?= $this->assign('title', 'Home') ?>
<?= $this->element('Site/header') ?>

<div class="container">
    
    <div class="row" style="margin-top: 120px; margin-bottom: 100px;">
        <div class="col-md-4 col-md-offset-4">
            <div class="row">
                <div class="col-md-12">
                    <h4>Entrar</h4>
                    <br>
                    <?= $this->Form->create() ?>
                        <?= $this->Form->input('email', ['placeholder' => 'Email', 'label' => false]) ?>
                        <?= $this->Form->input('password', ['label' => 'Senha', 'placeholder' => 'Senha', 'label' => false]) ?>
                        <?= $this->Form->submit('Entrar', ['bootstrap-type' => 'primary', 'class' => 'btn-block']) ?>
                    <?= $this->Form->end() ?>
                    <div class="row" style="padding: 0 0 40px 0;">
                        <div class="col-md-12">
                            <?= $this->Html->link('Esqueceu a sua senha?', []) ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 text-center">
                    <h6>OU</h6>
                </div>
            </div>

            <button class="btn btn-primary btn-block">
                <span class="fa fa-facebook"></span> Entrar com Facebook
            </button>
            <button class="btn btn-danger btn-block">
                <span class="fa fa-google"></span> Entrar com Gmail
            </button>

            <br>

            <p class="text-muted text-center">
            	Novo no app? <?= $this->Html->link('Registre-se!', ['controller' => 'Users', 'action' => 'add']) ?>
            </p>

        </div>
    </div>  
    </div>