<?php
include 'PasswordValidator.php';

$contrasenia = $_POST['pass'];

$test = new PasswordValidator();

$test->isValid($contrasenia);