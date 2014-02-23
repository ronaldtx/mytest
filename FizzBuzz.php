<?php 

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