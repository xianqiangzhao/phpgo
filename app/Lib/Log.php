<?php 
namespace App\Lib;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;


/**
*  date log write
*/
class Log  extends Logger
{
	private  static $logger;

	/*
	* init 
	*/
	private static function init()
    {
    	if (self::$logger == NULL) {
	       self::$logger = new Logger('phpgo');
	       $fileName = date('Y-m-d') . '.log';
		   self::$logger->pushHandler(new StreamHandler(__DIR__.'/../../data/log/' . $fileName));
		}

    }

	/*
	* write by log devel 
	*/
	public static function write($msg, $level = Logger::WARNING)
    {
        self::init();
 		switch ($level) {
 			case Logger::WARNING: 		
 				self::$logger->warning($msg);
 				break;
			case Logger::INFO:
				self::$logger->info($msg);
				break; 
 			default:
				self::$logger->debug($msg);
 				break;
 		}
    }

}
 