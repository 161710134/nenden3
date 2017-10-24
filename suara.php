<?php

require_once 'robot.php';

$robot1 = new robot ('bipbip',33);
$robot2 = new robot ('ninoninonino',10);
$robot1->set_berat(50);
$robot2->set_suara ('pipopipopipo');
echo "berat robot :".$robot1->get_berat() . '<br>';
echo "suara robot :".$robot2->get_suara() . '<br>';



?>