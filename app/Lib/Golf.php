<?php
namespace App\Lib;
 
class Golf  
{
 
    private $name = "this is user Golf";
    /**
     * The attributes that are mass assignable.
     *
     * @var  string
     */
    public  function showGolf() {
        return $this->name;
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var  string
     */
    public  function setGolf($name) {
        $this->name = $name;
    }

    
}
