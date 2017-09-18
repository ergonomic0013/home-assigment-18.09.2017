<?php
//controller
class Photographer{
    public $camera;
    
    function makecamera($camera){
        $photo = new Photo();
        if($camera == 'Nikon'){
            $photo->nikon();
        }
        ifelse($camera == 'Canon'){
            //make camera Canon
        }
        else{
            //make other camera
        }
    }
}

?>