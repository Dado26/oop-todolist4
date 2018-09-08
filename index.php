<?php

require 'task.php';

require 'List.php';

$task = new Task('idi programiraj');
$task1 = new Task('bice bolje');


$todo = new TodoList();

$todo->addTask($task);
$todo->addTask($task1);

var_dump($todo->getTasks());

require 'view.php';


        
