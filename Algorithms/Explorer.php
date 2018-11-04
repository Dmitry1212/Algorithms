<?php

namespace app\algorithms;
include ROOT_DIR . "algorithms/scriptTemplate.php";


class Explorer
{

    public function getDirContent (string $dir){
        $iterator = new \DirectoryIterator($dir);

        $str = '';
        $str .= $this->renderUlLiStart();
        foreach ($iterator as $fileinfo) {
            if (!$fileinfo->isDot()) {
                if ($fileinfo->isDir()){
                    $str .= $this->renderUlLiForDir($fileinfo);
                } else {
                    $str .= $this->renderUlLiForFile($fileinfo);
                }
            }
        }

        $str .= $this->renderUlLiEnd();
        return $str;
    }

    protected function renderUlLiForDir ($fileinfo){
        $str ='';
        $id = $fileinfo->current() . mt_rand() ;
        $str .= "<li onClick=\"toggle_show('{$id}')\"><b>{$fileinfo->current()}</b>";
        $str .= "<ul id=\"{$id}\" style=\"display: none\">";
        $str .= $this->getDirContent($fileinfo->getPathname());
        $str .= '</ul> </li>';

        return $str;
    }

    protected function renderUlLiForFile($fileinfo){
        return '<li>' . $fileinfo->current() . '</li>';
    }

    protected function renderUlLiStart (){
        return '<ul>';
    }

    protected function renderUlLiEnd(){
        return '</ul>';
    }
}


