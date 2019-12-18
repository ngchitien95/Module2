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
    class stopWatch
    {
        private $startTime;
        private $endTime;
        public function __construct($startTime,$endTime)
        {
          $this->startTime = $startTime;
          $this->endTime = $endTime;
        }
        public function getStartTime()
        {
            return $this->startTime;
        }
        public function getEndTime()
        {
            return $this->endTime;
        }
        public function setEndTime($newEndtime)
        {
            $this->endTime = $newEndtime;
        }
        public function setStartTime($newStarttime)
        {
            $this->endTime = $newStarttime;
        }
    }
    ?>
</body>
</html>