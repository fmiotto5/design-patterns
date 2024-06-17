<?php

require_once "../autoloader.php";

$roundHole = new \Adapter\RoundHole(12);

$cylinder = new \Adapter\Cylinder(12.5, 25);
$sphere = new \Adapter\Sphere(11);

// Cube doesn't implement GeometricRoundSolidInterface. Need to use the adapter instead.
$cube = new \Adapter\Adapters\SquareToRoundAdapter(new \Adapter\Cube(15));
// Same to Tetrahedron
$equilateralTetrahedron = new \Adapter\Adapters\EquilateralTetrahedronToRoundAdapter(
    new \Adapter\EquilateralTetrahedron(20)   
);

echo "*** Hole with radius equals to {$roundHole->getRadius()} ***<br/>";
echo "Cylinder with radius equals to {$cylinder->getRadius()} fits into the hole? " .  ($roundHole->fits($cylinder) ? "yes" : "no") . "<br/>";
echo "Sphere with radius equals to {$sphere->getRadius()} fits into the hole? " .  ($roundHole->fits($sphere) ? "yes" : "no") . "<br/>";
echo "Cube with side equals to {$cube->getOriginalObject()->getSide()} fits into the hole? " .  ($roundHole->fits($cube) ? "yes" : "no") . "<br/>";
echo "Equilateral tetraheadron with side equals to {$equilateralTetrahedron->getOriginalObject()->getSide()} fits into the hole? " .  ($roundHole->fits($equilateralTetrahedron) ? "yes" : "no") . "<br/>";