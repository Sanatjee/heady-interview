<?php

require_once 'interfaces/EnvironmentInterface.php';

// importing terrains
require_once 'LandEnvironment.php';
require_once 'ForestEnvironment.php';
require_once 'SeaEnvironment.php';

class Earth implements EnvironmentInterface{
    private $land;
    private $forest;
    private $sea;

    public function __construct() {
        $this->land = new LandEnvironment();
        $this->forest = new ForestEnvironment();
        $this->sea = new SeaEnvironment();
    }


    public function explore(){
        echo $this->land->describe();
        echo"<br>";
        echo $this->forest->describe();
        echo"<br>";
        echo $this->sea->describe();
    }
}