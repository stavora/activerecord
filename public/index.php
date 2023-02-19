<?php 

require '../vendor/autoload.php';

use app\database\models\User;


 $user = new User;
 $user->firstName = 'Sylvio';
 $user->lastName = 'Tavora';
 $user->id = 1;

 var_dump($user);
