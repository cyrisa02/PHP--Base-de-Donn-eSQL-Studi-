<?php

// Game.php
class Game
{
    private int $id;
    private string $name;
    private string $description;

    public function getFullDescription()
    {
        return $this->name.' - '.$this->description.'<br>';
    }
}
