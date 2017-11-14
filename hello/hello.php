<?php

class Movie
{
    private $name = 'Nom du film';
    private $duration = 120;
    private $description = "une description";
    
    function getName()
    {
        return $this->name;
    }
    
    function getDuration()
    {
        return $this->duration;
    }
        
    function getDescription()
    {
        return $this->description;
    }
    
    public function setName($name = "")
    {
        $this->name = $name;
    }
    
    public function setDuration($duration = 0)
    {
        $this->duration = $duration;
    }
    
    public function setDescription($description = "")
    {
        $this->description = $description;
    }
}
    
    $movie = new Movie;
    
    
    $movie->setName("Taxi 3");
    $movie->setDuration(100);
    $movie->setDescription("Wlh");
    echo 'Film: '.$movie->getName().'<br>Durée: '.$movie->getDuration().'<br>Description: '.$movie->getDescription();

?>