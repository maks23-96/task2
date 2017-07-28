<?php
include('config.php');
class Calculator
  {
    private $a;
    private $b;
    private $mem;
    
    function __construct()
    {
      $this -> a = $a;
      $this -> b = $b;
      $this -> mem = $mem;
    }
    public function __destruct()
    {
    
    }


    public function setA($a)
    {
      $this -> a = $a; 
    }
    public function getA()
    { 
      echo "a= ";
      return $this -> a;
    }
    public function setB($b)
    {
      $this -> b = $b;
    }
    public function getB()
    { 
      echo "b= ";
      return $this -> b;
	  
    }
    public function setMem($mem)
    {
      $this -> mem = $mem;
    }
    public function getMem()
    {
       echo "Memory= ";
       return $this -> mem;
    }

    public function plus($a, $b)
    {
      echo "a+b= ";
      return $a+$b."<br>";
    }
    public function minus($a,$b)
    { echo "a-b= ";
       return $a-$b."<br>";
    }
    public function mult($a,$b)
    {
       echo "a*b= ";
       return $a*$b."<br>";}
    public function div($a,$b)
    {
      if($b == 0)
      {
        echo "div on zero "."<br>" ;
      }else
      {
        echo "a/b= ";
        return $a/$b."<br>";
      }  
    }
    public function koren($a)
    {
      echo "sqrt s chisla $a = ";
      return sqrt($a)."<br>";
    }
    public function percent($a,$p)
    { 
      echo "$p% ot $a = "; 
      return (($a*$p)/100)."<br>";
    }
    public function MS($mem)
    {
      $this -> mem = $mem; 
      echo "record to memory(MS) $mem<br>";
    }
    public function Mplus($a)
    {  
        echo "after M+ ";
        return $this-> mem+$a."<br>";
    }
    public function Mminus($a)
    {
      echo "after M- ";
      return $this-> mem-$a."<br>";
    }
    public function MC()
    {
      echo "after MC, memory =";
      return $mem=0;       
    } 

  }
?>
