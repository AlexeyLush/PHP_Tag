<?php

require_once 'classes/BaseTag.php';

//$div = new Tag('div');
//$div->setBody('Hello');
//
//
//echo $div->toString();

//$div = (new Tag('div'))
//    ->prependBody('Hello')
//    ->appendBody(' world!');
//
//echo $div->toString();

//$link = new Tag('a');
//$link->attributes()
//    ->set('href', '//google.com')
//    ->set('target', '_blank');
//$link->appendBody('Google');
//echo $link;

//$container = new Tag('div');
//$container->setAttr('class', 'container');
//
//$link = new Tag('a');
//$link->setAttr('href', '//google.com')
//    ->appendBody('Google');
//$container->appendBody($link);
//
//$container->setAttr('target', '_blank');
//echo $container;

//echo (new Tag('a'))
//    ->appendBody('Google')
//    ->href('//google.com')
//    ->target('_blank');

//$link = new Tag('a');
//$link->href = '//google.com';

//$link = new Tag('input');
//$link->type = 'password';
//
//echo $link;

//class One {
//    static $name = 'John';
//
//    function name(){
//        return self::$name;
//    }
//
//}
//echo (new One)->name();



// Namespace
//use Tag\Name;
//require_once "autoload.php";
//$container = Tag::div()
//    ->class('container');

//require_once "autoload.php";

//class One{
//    public $name = 'Bob';
//}
//
//class Two extends One{
//
//}
//
//echo (new Two)->name;

use kl\PHP\Link;

require_once "autoload.php";

echo Link();