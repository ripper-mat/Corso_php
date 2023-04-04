<?php

use crud\TaskCRUD;
use models\Task;

$crud= new TaskCRUD();
$task = new Task();

$task->name="Uccidere tutti";
$task->due_date= 2023-04-04;
$task->done=false;
$task->user_id=null;

$crud->read();
$crud->create($task);
