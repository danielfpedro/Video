<?= $this->assign('title', 'Home') ?>
<?= $this->element('Site/header') ?>

<div class="container">
    
    <div class="row" style="margin-top: 120px; margin-bottom: 100px;">
        <div class="col-md-4 col-md-offset-4">
            <div class="row">
                <div class="col-md-12">
                    <h4>Entrar</h4>
                    <br>
                    <?= $this->Form->create($user) ?>
                        <?= $this->Form->input('name', ['placeholder' => 'Nome', 'label' => false]) ?>
                        <?= $this->Form->input('birth_day', ['placeholder' => 'Data de Nascimento', 'label' => 'Data de Nascimento', 'type' => 'date']) ?>
                        <?= $this->Form->input('email', ['placeholder' => 'Email', 'label' => false]) ?>
                        <?= $this->Form->input('password', ['label' => 'Senha', 'placeholder' => 'Senha', 'label' => false]) ?>
                        <?= $this->Form->submit('Criar conta', ['bootstrap-type' => 'primary', 'class' => 'btn-block']) ?>
                    <?= $this->Form->end() ?>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 text-center">
                    <h6>OU</h6>
                </div>
            </div>

            <button class="btn btn-primary btn-block">
                <span class="fa fa-facebook"></span> Registrar-se com Facebook
            </button>
            <button class="btn btn-danger btn-block">
                <span class="fa fa-google"></span> Registrar-se com Gmail
            </button>
        </div>
    </div>  
    </div>