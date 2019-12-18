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
    include "Circle.php";
    include "Comparable.php";

    class ComparableCircle extends Circle implements Comparable
    {
        public function __construct($name, $radius)
        {
            parent::__construct($name, $radius);
        }

        public function compareTo($circleOther)
        {
            $circleOtherRadius = $circleOther->getRadius();

            if ($this->getRadius() > $circleOtherRadius) {
                return 1;
            } else if ($this->getRadius() < $circleOtherRadius) {
                return -1;
            } else {
                return 0;
            }
        }
    }

    $circleOne = new ComparableCircle('circleOne', 8);
    $circleTwo = new ComparableCircle('circleTwo', 2);

    var_dump($circleOne->compareTo($circleTwo));

    ?>
</body>

</html>