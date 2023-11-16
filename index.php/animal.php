<?php
class Animal

{
    public $name;
    public $legs = 4;
    public $cold_blooded = "no";

    public function __construct($name) {
        $this->name = $name;
    }
    }
 
    public function get_name()
    {
        return $this->name;
    }
    public function get_legs()
    {
        return $this->legs;

    }
    public function get_cold_blooded()
    {
        return $this->cold_blooded;
    }
    
    require_once 'animal.php';
    sheep = new Animal("shaun");
    echo$sheep->get_name();
    echo $sheep->get_legs();
    echo $sheep->get_cold_bloodee();
    
    // index.php
require_once('animal.php');
require_once('Frog.php');
require_once('Ape.php');

$sheep = new Animal("shaun");
echo "Nama: " . $sheep->name . "<br>"; // "shaun"
echo "Jumlah kaki: " . $sheep->legs . "<br>"; // 4
echo "Cold-blooded: " . $sheep->cold_blooded . "<br>"; // "no"
echo "<br>";

$sungokong = new Ape("kera sakti");
echo "Suara: " . $sungokong->yell() . "<br>"; // "Auooo"
echo "<br>";

$kodok = new Frog("buduk");
echo "Lompat: " . $kodok->jump() . "<br>"; // "hop hop"
 ?>