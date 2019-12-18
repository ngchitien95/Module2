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
    public $radius;
    public $name;

    public function __construct($radius, $name)
    {
        $this->radius = $radius;
        $this->name = $name;
    }
    public function setName($newName)
    {
        $this->name = $newName;
    }
    public function setRadius($newRadius)
    {
        $this->radius = $newRadius;
    }

    public function getName()
    {
        return $this->name;
    }
    public function getRadius()
    {
        return $this->radius;
    }
}

?>
</body>
</html>