<?php

class Movie{
    public $titolo;
    public $regista;
    public $location;
    public $durata = 'film corto';

    function __construct($_titolo, $_regista){
        $this->titolo = $_titolo;
        $this->regista = $_regista;
    }
    
    public function setDurata($minutaggio){
        if($minutaggio > 1){
            $this->durata = 'film lungo';
        }
    }
    
    public function getDurata(){
        return $this->durata;
    }
}

$avatar = new Movie ('Avatar','Regista Avatar');
$avatar->setDurata(2);
$avatar->location = 'film animazione';
//var_dump($avatar);
echo $avatar->titolo . ', ';
echo $avatar->regista . ', ';
echo $avatar->location . ', ';
echo $avatar->durata . '. // ';


$pinocchio= new Movie ('Pinocchio','Regista Pinocchio');
$pinocchio->setDurata(1);
$pinocchio->location = 'fantasilandia';
//var_dump($pinocchio);
echo $pinocchio->titolo . ', ';
echo $pinocchio->regista . ', ';
echo $pinocchio->location . ', ';
echo $pinocchio->durata . '.';
