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
    class Fan
    {
        const SLOW = 1;
        const MEDIUM = 2;
        const FAST = 3;
        private $speed;
        private $on;
        private $radius;
        private $color;
        public function __construct()
        {
            $this->speed = self::SLOW;
            $this->radius = 5;
            $this->on = false;
            $this->color = 'Blue';
            // $this->speed = $speed;
            // $this->on = $on;
            // $this->radius = $radius;
            // $this->color = $color;
        }
        public function getSpeed()
        {
            return $this->speed;
        }
        public function getOn()
        {
            return $this->on;
        }
        public function getRadius()
        {
            return $this->radius;
        }
        public function getColor()
        {
            return $this->color;
        }
        public function setSpeed($newspeed)
        {
            if ($newspeed === 1) {
                $this->speed = Fan::SLOW;
            }
            if ($newspeed === 2) {
                $this->speed = Fan::MEDIUM;
            }
            if ($newspeed === 3) {
                $this->speed = Fan::FAST;
            }
        }
        public function setOn($on)
        {
            $this->on = $on;
        }
        public function setRadius($newradius)
        {
            $this->radius = $newradius;
        }
        public function setColor($newColor)
        {
            $this->color = $newColor;
        }
        public function hoatDong()
        {
            if ($this->getOn() === false) {
                return " Fan is off ." . "Color : " . $this->getColor() . " Radius : " . $this->getRadius() . "  ";
            } else {
                // var_dump($this->speed);
                return " Fan is on ." . " Speed : " . $this->getSpeed() . " Color " . $this->getColor() . " Radius : " . $this->getRadius();
            }
        }
    }
    $fan1 = new Fan();
    $fan2 = new Fan();
    echo $fan1->hoatDong();
    echo "<br>";

    $fan2->setOn(true);
    $fan2->setRadius(10);
    $fan2->setColor("yellow");
    echo $fan2->hoatDong();
    echo "<br>";
    
    $fan1->setOn(true);
    $fan1->setRadius(5);
    $fan1->setColor("blue");
    $fan1->setSpeed(Fan::FAST);
    echo $fan1->hoatDong();

    ?>
</body>

</html>