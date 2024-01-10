<?php 

require_once 'interfaces/EnvironmentInterface.php';

class ForestEnvironment implements EnvironmentInterface{
    public function describe()
    {
        return "Welcome to the forest! Ready to find the legend of the hidden temple?";   
    }
}