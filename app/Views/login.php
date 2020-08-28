<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<?php
    $username = [
        'name' => 'username',
        'id' => 'username',
        'value' => null,
        'class' => 'form-control'
    ];

    $password = [
        'name' => 'password',
        'id' => 'password',
        'class' => 'form-control'
    ];
?>
    <h1>Login Form</h1>
    <?= form_open('Auth/register') ?>
        <div class="form-group">
            <?= form_label("Username","username") ?>
            <?= form_input($username) ?>
        </div>
        <div class="form-group">
            <?= form_label("Password","password") ?>
            <?= form_password($password) ?>
        </div>
        <div class="text-right">
            <?= form_submit('login', 'Login', ['class'=>'btn btn-primary']) ?>
        </div>
    <?= form_close() ?>
<?= $this->endSection() ?>