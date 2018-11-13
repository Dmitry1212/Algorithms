<?php


namespace app\algorithms;


class ClosureTable
{
    public  function getTree(){

        $str = '';
        $str .= $this->renderUlLiStart();
        $conn = mysqli_connect("localhost", "root", "", "lesson03");

        $str .= $this->getBranch($conn, 0, 1);

        mysqli_close($conn);
        $str .= $this->renderUlLiEnd();
        return $str;
    }

    protected function getBranch($conn, $level, $pid){


        $sql = "SELECT * FROM categories AS c INNER JOIN category_links AS cl ON c.id_category=cl.child_id
                WHERE cl.level =$level AND cl.parent_id= $pid";

        $result = mysqli_query($conn,$sql);
        $str='';

        while (true){
            if ($row = mysqli_fetch_row($result)){
                $str .= '<li>';
                $str .= $row[1];
                $temp = $this->getBranch($conn,$level+1, $row[3]);
                if ($temp != '' ){
                    $str .= $this->renderUlLiStart() . $temp . $this->renderUlLiEnd();
                }
                $str .= '</li>';
            } else {
                break;
            }
        }

        return $str;

    }

    protected function renderUlLiStart (){
        return '<ul>';
    }

    protected function renderUlLiEnd(){
        return '</ul>';
    }
}