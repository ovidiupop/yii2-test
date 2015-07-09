<?php
namespace ovidiupop\test;

use Yii;
use yii\bootstrap\Widget;

class Show extends Widget{
    
    public $var = "ceva variabila";
    
    public function run(){
        return $this->render('uploader', ['var'=>$this->var]);;
    }
}
