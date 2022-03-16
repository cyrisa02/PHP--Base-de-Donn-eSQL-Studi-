<?php

class Message
{
    private int $id;
    private string $content;
    private string $date;

    public function getContent(): string
    {
        return $this->content;
    }

    public function getDate(): string
    {
        return $this->date;
    }
}