<?php 
require_once 'interfaces/TerrainInterface.php';

class LandEnvironment implements TerrainInterface{
    public function describe()
    {
        return "Welcome to the land! You puny human";
    }
}