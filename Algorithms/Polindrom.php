<?php

namespace app\algorithms;

class Polindrom
{
    public function isPolindrom($string)
    {
        $result = $this->isPoli($string);
        return $result;
    }

    protected function isPoli($string){
         if (strlen($string)<=1) {
             return true;
         }

         if (mb_substr($string,0,1) == mb_substr($string,-1)){
             return ($this->isPoli(mb_substr($string, 1, strlen($string)-2)));
         }
    }
}