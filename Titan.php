<?php

require_once 'interfaces/EnvironmentInterface.php';

require_once 'LandEnvironment.php';
require_once 'SeaEnvironment.php';

class Titan implements EnvironmentInterface{
    protected $land;
    protected $sea;

    public function __construct() {
        $this->land = new LandEnvironment;
        $this->sea = new SeaEnvironment;
    }

    function explore()
    {
        "<br>";
        echo $this->land->describe();
        echo $this->sea->describe();
    }
}