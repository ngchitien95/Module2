<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form method="post">
        <label>Phương trình bật 2 có dạng</label><br>
        <label>ax2 + bx + c = 0</label><br>
        <input type="text" name="NumA" placeholder="enter the Num a"><br>
        <input type="text" name="NumB" placeholder="enter the Num b"><br>
        <input type="text" name="NumC" placeholder="enter the Num C"><br>
        <input type="submit" value="TÍNH">
    </form>

    <?php
    class QuadraticEquation
    {
        private  $a;
        private  $b;
        private  $c;
        public function __construct($a, $b, $c)
        {
            $this->a = $a;
            $this->b = $b;
            $this->c = $c;
        }
        public function getA()
        {
            return $this->a;
        }
        public function getB()
        {
            return $this->b;
        }
        public function getC()
        {
            return $this->C;
        }
        public function getDiscriminant()
        {
            return (($this->b)** 2 - (4 * ($this->a)*($this->c)));
        }
        public function discre0()
        {
            return (-$this->b) / (2* $this->a);
        }
        public function getRoot1()
        {
            return (((-$this->b) + sqrt(($this->b)** 2 - 4 * ($this->a)*($this->c))) / (2 * $this->a));
        }
        public function getRoot2()
        {
            return (((-$this->b) - sqrt(($this->b)** 2 - 4 * ($this->a)*($this->c))) / (2 * $this->a));
        }
    }
   
    if (($_SERVER["REQUEST_METHOD"] == "POST")) {
        $numA = $_POST["NumA"];
        $numB = $_POST["NumB"];
        $numC = $_POST["NumC"];
        $quadraticEquation = new QuadraticEquation($numA, $numB, $numC);

        $detal = $quadraticEquation->getDiscriminant();
        // echo $detal;
        if ($detal >= 0)
        {
            if($detal > 0)
            {
            echo "x1 :".$quadraticEquation->getRoot1()."<br>";
            echo "x2 :" . $quadraticEquation->getRoot2();
            }else
            echo "x1 = x2 = " . $quadraticEquation->discre0();
        } elseif ($detal < 0 )
        {
            echo "Phương trình vô nghiệm";
        }

        }
        // if ($quadraticEquation->getDiscriminant() > 0) {
        //     echo "x1 :" . $quadraticEquation->getRoot1();
        //     echo "x2 :" . $quadraticEquation->getRoot2();
        // }
        // if ($quadraticEquation->getDiscriminant() === 0) {
        //     echo "x1 = x2 = " . $quadraticEquation->discre0();
        // } else {
        //     echo $quadraticEquation->discreAm();
        // }
    

    ?>
</body>

</html>