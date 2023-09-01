<?php


spl_autoload_register(function($calssName){
    include dirname(__FILE__).'/'.str_replace('\\','/',$calssName).'.php';
});

