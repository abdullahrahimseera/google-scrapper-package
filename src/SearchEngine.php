<?php

namespace AbdullahRahim\GoogleScrapperPackage;

class SearchEngine
{
    private $engine;

    public function __construct()
    {
    }

    /**
     * @param mixed $engine
     */
    public function setEngine($engine): void
    {
        $this->engine = $engine;
    }

    /**
     * @return mixed
     */
    public function getEngine()
    {
        return $this->engine;
    }


    public function search(array $keywords = [])
    {
        return [];
    }
}