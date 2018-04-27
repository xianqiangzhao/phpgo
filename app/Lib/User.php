<?php
namespace App\Lib;
 

class User  
{
 
    private $name = "this is user name";
 
    public function __construct($logger = null)
    {
        if ($logger != NULL) {
            var_dump($logger);
            $logger->warning('Foo');
            $logger->error('Bar');
            //var_dump($logger);
        }
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var  string
     */
    public  function showName() {
     
        return $this->name;
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var  string
     */
    public  function setName($name) {
        $this->name = $name;
    }

    
}
