<?php
require_once 'interfaces/EnvironmentInterface.php';

require_once 'LandEnvironment.php';
require_once 'SeaEnvironment.php';

class Mars implements EnvironmentInterface{
    
    protected $land;

    public function __construct() {
        $this->land = new LandEnvironment;
    }

    public function explore(){
        echo "<br>";
        return $this->land->describe();
    }

}