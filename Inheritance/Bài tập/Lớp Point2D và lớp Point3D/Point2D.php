<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
<?php
class Point2D {
    public $x;
    public $y;
    public function __construct(float $x ,float $y){
        $this->x = $x;
        $this->y = $y;
    }
    public function getX(){
        return $this->x;
    }
    public function getY(){
        return $this->y;
    }
    public function setX(float $newx) {
        $this->x = $newx;
    }
    public function setY(float $newy) {
        $this->y = $newy;
    }
    public function setXY(float $newx , float $newy) {
        $this->x = $newx;
        $this->y = $newy;
    }
    public function getXY(){
        $xy = [$this->x,$this->y];
        return $xy;
    }
    public function toString() {
        return "position x is : $this->x, position y is : $this->y";
    }
}
?>
</body>

</html>