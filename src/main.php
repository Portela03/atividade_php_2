<?php

include_once __DIR__. "/../vendor/autoload.php";

use App\model\Carro;


$carro1 = new Carro("Civic", "Honda", 150, 200);
$carro2 = new Carro("Mustang", "Ford", 450, 600);
$carro3 = new Carro("Camry", "Toyota", 200, 250);
$carro4 = new Carro("A4", "Audi", 220, 280);
$carro5 = new Carro("Accord", "Honda", 170, 220);
$carro6 = new Carro("Model S", "Tesla", 500, 650);





$carros = [$carro1, $carro2, $carro3, $carro4, $carro5, $carro6];

foreach ($carros as $indice => $carro) {
    echo "Carro " . ($indice + 1) . ": <br> ";
    echo "Nome: " . $carro->nome . ",<br> ";
    echo "Marca: " . $carro->marca . ", <br>";
    echo "Potência: " . $carro->potencia . " HP, ";
    echo "Torque: " . $carro->torque . " lb-ft";
    echo "<br><br>";
}