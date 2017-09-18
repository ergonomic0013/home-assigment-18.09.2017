<?php
//model
class Photo{
    public $status = 0;
    public $photodir;
    
    function __construct(){
        $conn = mysqli_connect('localhost', 'root', 'start', 'fotoalbum');
    }
    
    function nikon(){
        if($status == 0){
            $status = 1; //turn on the camera
        }
     //find place
     $this->click();//make foto
    }
    
    function click(){
        $rating = rand(1, 5);
        
        $fotoalbum = new Fotoalbum();
        
        if($rating >= 3){
            $this->save();
        }
    }
    
    function save(){
        $path = 'i/';
        if (!@copy($_FILES['picture']['tmp_name'], $path . $_FILES['picture']['name']))
            echo 'Что-то пошло не так';
        else
            echo 'Загрузка удачна';
            $this->photodir = $path . $_FILES['picture']['name'];
    }
}

?>