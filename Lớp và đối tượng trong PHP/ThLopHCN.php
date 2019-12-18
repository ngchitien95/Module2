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
class Rectangle
{
    public $width;
    public $hight;
    public function __construct($width,$hight)
    {
        $this->width = $width;
        $this->hight = $hight;
        
    }
    public function getArea()
    {
        return($this->width * $this->hight);
    }
    public function getPerimeter()
    {
        return(($this->width + $this->width)*2);
    }

    public function display()
    {
        return "Rectangle{" . "width=" . $this->width . ", height=" . $this->height . "}";
    }
}

$width = 10;
$hight = 20;
$rectangle = new Rectangle($width,$hight);

echo $rectangle->width;
echo "<br>";
echo $rectangle->hight;

$rectangle->width = 20;
echo "<br>";
$rectangle->hight = 30;
echo "<br>";
echo $rectangle->width;
echo "<br>";
echo $rectangle->hight;
echo "<br>";
echo $rectangle->getArea();
echo "<br>";
echo $rectangle->getPerimeter()

    ?>
</body>
</html>