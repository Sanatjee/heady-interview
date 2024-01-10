<?php 
require_once 'LandEnvironment.php';
require_once 'SeaEnvironment.php';
require_once 'ForestEnvironment.php';

require_once 'Archer.php';
require_once 'LaserCanon.php';
require_once 'Army.php';

require_once 'interfaces/EnvironmentInterface.php';
require_once 'interfaces/ActorInterface.php';

class Client{
    private $enviroment;
    private $actor;

    public function __construct(EnvironmentInterface $enviroment,ActorInterface $actor){
        $this->enviroment = $enviroment;
        $this->actor = $actor;
    }

    public function see(){
        echo $this->enviroment->describe();
    }

    public function bombardingStrength(){
        echo $this->actor->bombardingStrength();
    }
}


$earth = new SeaEnvironment();
$mars = new LandEnvironment();
$marsForest = new ForestEnvironment();

$archer = new Archer();
$laserCanon = new LaserCanon();

$army = new Army();
$army->addActor($archer);
$army->addActor($laserCanon);



echo "On earth <br>";
// Client on Earth
$clientOnEarth = new Client($earth, $laserCanon);
echo "Landscape : ";$clientOnEarth->see();
echo "<br>";
echo "Strength : "; $clientOnEarth->bombardingStrength();
echo "<br><br><br>";

echo "On mars <br>";
// Client on Mars
$clientOnMars = new Client($mars, $archer);
echo "Landscape : ";$clientOnMars->see();
echo "<br>";
echo "Strength : ";$clientOnMars->bombardingStrength();

echo "<br><br><br>";

echo "On mars Army<br>";
// Client on Mars
$clientOnMars = new Client($marsForest, $army);
echo "Landscape : ";$clientOnMars->see();
echo "<br>";
echo "Strength : ";$clientOnMars->bombardingStrength();
?>