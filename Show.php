<?php
namespace ovidiupop\test;

use Yii;
use yii\bootstrap\Widget;

class Show extends Widget{
    
<<<<<<< HEAD
    public $var = "ceva variabila";
    
    public function run(){
        return $this->render('uploader', ['var'=>$this->var]);;
=======
    public function run(){
        echo "yes";
>>>>>>> 5152e03eb2d322bb77a76e152854187b8660f229
    }
}
