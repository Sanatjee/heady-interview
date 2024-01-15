<?php 
require_once 'interfaces/TerrainInterface.php';

class SeaEnvironment implements TerrainInterface{
    public function describe()
    {
        return "Welcome to the sea! Are you ready to release the kraken";   
    }
}