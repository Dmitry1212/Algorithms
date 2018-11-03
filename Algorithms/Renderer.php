<?php

namespace app\algorithms;

class Renderer
{
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
