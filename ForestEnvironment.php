<?php 

require_once 'interfaces/TerrainInterface.php';

class ForestEnvironment implements TerrainInterface{
    public function describe()
    {
        return "Welcome to the forest! Ready to find the legend of the hidden temple?";   
    }
}