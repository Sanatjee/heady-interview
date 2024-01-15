<?php 
require_once 'Earth.php';
require_once 'Mars.php';
require_once 'Titan.php';

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
        echo $this->enviroment->explore();
    }

    public function bombardingStrength(){
        echo $this->actor->bombardingStrength();
    }
}


$earthEnv = new Earth();
$marsEnv = new Mars();
$titanEnv = new Titan();

$archer = new Archer();
$laserCanon = new LaserCanon();

$army = new Army();
$army->addActor($archer);
$army->addActor($laserCanon);



echo "On earth <br>";
// Client on Earth
$clientOnEarth = new Client($earthEnv, $laserCanon);
echo "Landscapes : ";$clientOnEarth->see();
echo "<br>";
echo "Strength : "; $clientOnEarth->bombardingStrength();
echo "<br><br><br>";

echo "On mars <br>";
// Client on Mars
$clientOnMars = new Client($marsEnv, $archer);
echo "Landscape : ";$clientOnMars->see();
echo "<br>";
echo "Strength : ";$clientOnMars->bombardingStrength();

echo "<br><br><br>";

echo "On mars Army<br>";
// Client on Mars
$clientOnMars = new Client($marsEnv, $army);
echo "Landscape : ";$clientOnMars->see();
echo "<br>";
echo "Strength : ";$clientOnMars->bombardingStrength();

echo "<br><br><br>";

echo "On Titan Army<br>";
// Client on Titan
$clientOnMars = new Client($titanEnv, $archer);
echo "Landscape : ";$clientOnMars->see();
echo "<br>";
echo "Strength : ";$clientOnMars->bombardingStrength();
?>