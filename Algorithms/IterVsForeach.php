<?php


namespace app\algorithms;


class IterVsForeach
{
    public function checkTime(  $count = 100000,  $step = 10000, $start = 1)
    {
        $tempCount = $start;
        //$arr = [];
        while( $tempCount<=$count ){

            $arr = $this->getArray($tempCount);

            $t1 = microtime(true);
            $arr = $this->incForeach($arr);
            $dtFreach = (microtime(true) - $t1)*1000;
            //var_dump($dtFreach);


            $t1 = microtime(true);
            $arr = $this->incIterator($arr);
            $dtIter = (microtime(true) - $t1)*1000;
            //var_dump($dtIter);

            echo "Массив размером {$tempCount}: <br>";
            echo "Foreach отработал за: {$dtFreach} мс, Iterator за: {$dtIter}мс <br> <br>";

            $tempCount += $step;
        }

    }

    protected function getArray(int $count, $arr = [])
    {
        $var = 0;
        for ($i = 1; $i <= $count; $i++) {
            $arr[] = $var;
        }
        return $arr;
    }

    protected function incForeach(array $arr)
    {

        foreach ($arr as &$item) {
            $item++;
        }
        return $arr;
    }

    protected function incIterator( array $arr)
    {

        $obj = new \ArrayObject($arr);
        $iter = $obj->getIterator();

        while ($iter->valid()) {
            //$arr[$iter->key()] ++;    // еще больше нагружает итератор
            $iter->next();
        }
        return $iter;

    }

}