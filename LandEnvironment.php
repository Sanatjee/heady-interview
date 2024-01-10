<?php 
require_once 'interfaces/EnvironmentInterface.php';

class LandEnvironment implements EnvironmentInterface{
    public function describe()
    {
        return "Welcome to the land! You puny human";
    }
}