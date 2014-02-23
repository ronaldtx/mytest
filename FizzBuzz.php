<?php 

$fizzbuzz = new FizzBuzz();
$fizzbuzz->input = array(12,13,14,15,16);

$fizzbuzz->output();
foreach($fizzbuzz->input as $z){
    echo $z." ";
}

class FizzBuzz{
    var $input = array();
    public function output(){
        $i = 0;
        foreach ($this->input as $v) {
            $o = "";
            if($v%3 == 0){
                $o="Fizz";
            }
            if($v%5 == 0){
                $o.="Buzz";
            }
            if($o == ""){
                $o = $v;
            }
            
            $this->input[$i] = $o;
            $i++;
        }
    }
}

?>