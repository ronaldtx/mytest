<?php 
// After FizzBuzz not print Bazz, because i just put if Fizz or Buzz only

class FizzBuzzBazz{
    var $input = array();
    public function output(){
        $i = 0;
        foreach ($this->input as $v) {
            $o = "";
            $chk = true;
            if($v%3 == 0){
                $chk = false;
                $o="Fizz";
            }
            if($v%5 == 0){
                $chk = false;
                $o.="Buzz";
            }
            if($o == ""){
                $o = $v;
            }
            $this->input[$i] = $o;
            if($i > 0){
                if(($this->input[$i-1] == 'Buzz' || $this->input[$i-1] == 'Fizz') && $chk){
                    $this->input[$i] = "Bazz";
                }
            }
            $i++;
        }
    }
}

?>