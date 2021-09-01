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
echo $avatar->titolo . ', ' . '<br>';
echo $avatar->regista . ', '. '<br>';
echo $avatar->location . ', '. '<br>';
echo $avatar->durata . '.' . '<hr>';


$pinocchio= new Movie ('Pinocchio','Regista Pinocchio');
$pinocchio->setDurata(1);
$pinocchio->location = 'fantasilandia';
//var_dump($pinocchio);
echo $pinocchio->titolo . ',' . '<br>';
echo $pinocchio->regista . ', ' . '<br>';
echo $pinocchio->location . ', ' . '<br>';
echo $pinocchio->durata . '.' . '<hr>';
