<?php


namespace app\algorithms;


class SortSliv
{
    public function sortSliv($arr)
    {
        $arr = $this->sliv($arr);
        return $arr;
    }

    protected function sliv($arr)
    {

        $count = count($arr);

        //если один элемент, то массив считается упорядоченным
        if ($count <= 1) {
            return $arr;
        }

        //делим массив на подмассивы(исходный становится многомерным)
        $arr = array_chunk($arr, intdiv($count+1, 2));

        // получаем упорядоченные массивы, рекурсией на подмассивы
        $arr1 = $this->sliv($arr[0]);
        $arr2 = $this->sliv($arr[1]);

        // слияние в общий массив
        for ($i = 0; $i < $count; $i++) {

            if ((!empty($arr1))&&(!empty($arr2))) {
                if ($arr1[0] < $arr2[0]) {
                    $arr[$i] = array_shift($arr1);
                } else {
                    $arr[$i] = array_shift($arr2);
                }
            }else{ // если один из массивов пустой
               if (empty($arr1)){
                   $arr[$i] = array_shift($arr2);
               } else{
                   $arr[$i] = array_shift($arr1);
               }
            }
        }
        return $arr;

}

}