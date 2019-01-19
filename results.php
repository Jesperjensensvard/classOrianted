<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<style>
    img {
        width: 5em;
        height: 8em;
    } 

    body {
        background-image: url("./zoo.jpg");
        display: flex;
        margin-top: 6em;
        text-align: center;
        flex-wrap: wrap;
        flex-direction: row !important;
       justify-content: center;
    }

    p {
        color: black;
        font-size:1em;
        margin-top:4em;
    }
        
    
</style>

<?php
$mainApor = $_POST['apor'];
$mainTiger = $_POST['tiger'];
$mainGiraff = $_POST['giraff'];
$mainNUt = $_POST['nut'];

abstract class Animal {
    protected $type;
    abstract function sound();
}


class apa extends Animal {

    private $bild;

    function __construct( $bild){
        $this->type = $bild;
    }

  
    public function get_type() {
        return $this->type;
    }

    function sound() {
        return " <p>my sound is:</p> <br>" ." <p>hohohohoohoho</p>";
    }

}

class tiger extends Animal {
    
    private $bild; 

    function __construct($bild) {
        $this->type = $bild;
    }

    public function get_bild() {
        return $this->type;
    }

    function sound() {
        return " <p>my sound is:</p> <br>" ." <p>rawwwr</p>";
    }
}

class giraff extends Animal {

    private $bild;

    function __construct($bild) {
        $this->type = $bild;
    }

    public function get_giraff() {
        return $this->type;
    }

    function sound() {
        return " <p>my sound is:</p> <br>" ." <p>pfffffff</p>";

    }
}

class nuts extends Animal {
    private $bild;

    function __construct($bild){
        $this->type = $bild;
    }

    public function get_TheNuts() {
        return $this->type; 
    }

    function sound() {
        return "<p> my sound is: </p>" . "<p>puuffffff</p>" . "<p> But only if i fall </P>";
    }
}

$newApa = new apa( '<img src="apa.jpg"> <br>');
$newTiger = new tiger('<img src="tiger.jpg"> <br>');
$newGiraff = new giraff('<img src="giraff.jpg"> <br>');
$newNut = new nuts('<img src="nut.jpg"> <br>');

$finalape =  $newApa->get_type() . "" . $newApa->sound();
$finaltiger = $newTiger->get_bild() . "" . $newTiger->sound();
$finalgiraff = $newGiraff->get_giraff() ."". $newGiraff->sound();
$finalnut = $newNut->get_TheNuts() ."". $newNut->sound();

for ($i=0; $i < $mainApor; $i++) { 
    echo $finalape;
}

for ($i=0; $i < $mainTiger; $i++) { 
    echo $finaltiger;
}

for ($i=0; $i < $mainGiraff; $i++) { 
    echo $finalgiraff;
}

for ($i=0; $i < $mainNUt; $i++) { 
    echo $finalnut;
}

?>
</body>
</html>
