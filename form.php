<?php

require_once 'classes/form.php';

$form = new Form();

$form->label('Username: ');
$form->input('Username', 'text', NULL, 'Username');
$form->br();

$form->label('Password: ');
$form->input('password', 'password', null, 'Password');
$form->br();

$form->label('Description: ');
$form->textarea('description', array('style' => 'width: 200px;'));
$form->br();

$form->label('Colour: ');
$form->select('colour', array('red' => 'Red', 'blue' => 'Blue'));
$form->br();

$form->custom('HEY HOW YOU DOING');
$form->br();

$form->submit();

echo $form->show();