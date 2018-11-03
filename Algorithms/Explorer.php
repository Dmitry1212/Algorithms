<?php

namespace app\algorithms;


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

    public function renderUlLiForDir ($fileinfo){
        $str ='';
        $id = $fileinfo->current() . mt_rand() ;
        $str .= "<li onClick=\"toggle_show('{$id}')\"><b>{$fileinfo->current()}</b>";
        $str .= "<ul id=\"{$id}\" style=\"display: none\">";
        $str .= $this->getDirContent($fileinfo->getPathname());
        $str .= '</ul> </li>';

        return $str;
    }

    public function renderUlLiForFile($fileinfo){
        return '<li>' . $fileinfo->current() . '</li>';
    }

    public function renderUlLiStart (){
        return '<ul>';
    }

    public function renderUlLiEnd(){
        return '</ul>';
    }
}


