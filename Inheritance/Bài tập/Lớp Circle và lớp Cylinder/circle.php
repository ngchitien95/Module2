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
    class Circle
    {
        private $radius;
        private $color;
        function __construct($radius, $color)
        {
            $this->radius = $radius;
            $this->color = $color;
        }

        function setColor($newColor)
        {
            $this->color = $newColor;
         }
         function setRadius($newRadius)
         {
         $this->radius = $newRadius;
         }

         function getRadius()
         {
             return $this->radius;
         }
         function getColor()
         {
             return $this->color;
         }

         function acreage()
         {
             return ( round( pi() * 2 * $this->radius * $this->radius ,2 ) );
         }
         function __toString()
         {
             return ( "Hình tròn có màu là". $this->color . "Bán kính là " . $this->radius );
         }
    }


    ?>
</body>

</html>