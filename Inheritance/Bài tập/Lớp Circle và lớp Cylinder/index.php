<?php
include_once "cylinder.php";
$cylinder = new Cylinder(3,"blue",4);
$circle = new Circle(4,"Yellow");
echo $circle->__toString();
echo "<br/>";
echo "Area is : " .$circle->acreage();
echo "<br/>";
echo $cylinder->__toString();
echo "<br/>";
echo "Volume is : " .$cylinder->volume();


?>