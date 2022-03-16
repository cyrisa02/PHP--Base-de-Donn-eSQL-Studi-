<?php

// Game.php
class Game
{
    private int $id;
    private string $name;
    private string $description;

    public function getFullDescription()
    {
        return $this->name.' - '.$this->description;
    }
}

//CREATE TABLE games(
   // id INTEGER(11) PRIMARY KEY AUTO_INCREMENT,
   // name VARCHAR(500),
   // description VARCHAR(500)
//);
//INSERT INTO games(name, description) VALUES 
//('Super Moria World', 'Parcourez le monde pour jeter une tortue dans la lave !'),
//('Super Moria World 2 : les deux Boos', 'Une nouvelle aventure vous attend.'),
//('Super Moria World 3 : Le retour du Koopa', 'Le dernier volet de la trilogie.'),
//('The legend of Zebda', 'Une épopée musicale où vous devez vaincre les forces du mal, Manau a Manau'),
//('The legend of Zebda : Gojira''s Mask', 'Empechez le ciel de vous tomber sur la tête !'),
//('The legend of Zebda : Queen''s awakening', 'Le spectacle doit continuer');