<?php 
use App\Lib\User;
use App\Lib\Golf;
use App\Lib\Log;
use Monolog\Logger;

require_once __DIR__.'/../vendor/autoload.php';


Log::write('asfad ', Logger::WARNING);


//echo  "\n user \n";
$user = new \App\Lib\User();
//var_dump($user);
echo $user->showName();

//echo  "\n user1 \n";
$user1 = new User();
//var_dump($user1);


//echo  "\n golf \n";
$golf = new Golf();
//var_dump($golf);

