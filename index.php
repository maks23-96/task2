<?php
include('config.php');
include('libs/Calculator.php');
$calc = new Calculator();
echo $calc ->setA(20);
echo $calc ->setB(10);
echo $calc ->setMem(0);
echo $calc ->getA()."<br>";
echo $calc ->getB()."<br>";
echo $calc ->getMem()."<br>";
echo '<hr>';
echo $calc -> plus(1,1);
echo $calc -> div(12,3);
echo $calc -> minus(12,3);
echo $calc -> mult(12,3);
echo $calc -> koren(121);
echo $calc -> percent(1000,4);
echo '<hr>';
echo $calc -> MS(2000);
echo $calc -> Mplus(10);
echo $calc -> Mminus(60);
echo $calc -> MC();
echo '<hr>';
include('templates/index.php');
   ?>


