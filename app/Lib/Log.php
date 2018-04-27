<?php 
namespace App\Lib;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
 

/**
* 
*/
class Log  extends Logger
{
	private  static $logger;

	private static function init()
    {
    	if (self::$logger == NULL) {
	       self::$logger = new Logger('name');
		   self::$logger->pushHandler(new StreamHandler(__DIR__.'/../../data/log/20180428.log', Logger::WARNING));
		}

    }

	public static function write($msg, $level = Logger::WARNING)
    {
        self::init();
 		switch ($level) {
 			case Logger::WARNING: 		
 			var_dump(self::$logger);	
 				self::$logger->warning($msg);
 				break;
			case Logger::INFO:
				self::$logger->info($msg);
				break;
 			default:
 				# code...
 				break;
 		}
    }

}
 