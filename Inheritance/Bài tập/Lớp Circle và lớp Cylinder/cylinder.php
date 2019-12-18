<?php
    include_once ("circle.php");
    class Cylinder extends Circle
    {
        private $height;
        function __construct($radius,$color, $height)
        {
            parent::__construct($radius, $color);
            $this->height = $height;
        }
        function volume()
        {
            return ( round( parent::acreage() * $this->height,3 ) );
        }
        function __toString()
        {
            return ( "Hình trụ có màu là". parent::getColor() . "Bán kính là " . parent::getRadius());
        }
    }
    
?>