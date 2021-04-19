<?php

class printCondition
    {
 
         public $mData=array();

         public function compare($mPairs, $num){

             $this->mData[$num]=$num;

             foreach ($mPairs as $k=>$v){
                if(is_int($num/$k)){

                    $this->mData[$num]=str_replace($num,"",$this->mData[$num]);
                    $this->mData[$num].=$v;
                    //$this->mData[$num] = 'Integraciones';
                }
            }


        }
    }

    $obj = new printCondition();

    for ($x=1; $x<=100 ; $x++ ){

        $obj->compare([3=>"Falabella",5=>"IT"], $x);
        print $obj->mData[$x];
        print PHP_EOL;
    }
?>
