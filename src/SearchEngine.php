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
        return [
            [
                'keywords' => $keywords,
                'ranking' => 1,
                'promoted' => true,
                'link' => 'https://bankonus.com',
                'title' => 'Bankonus',
                'description' => 'Bankonus is very good website'
            ],
            [
                'keywords' => $keywords,
                'ranking' => 1,
                'promoted' => true,
                'link' => 'https://minhaj.com',
                'title' => 'Minhaj Khan',
                'description' => 'Minhaj is very good person.'
            ],
            [
                'keywords' => $keywords,
                'ranking' => 1,
                'promoted' => true,
                'link' => 'https://abdullah-rahim.com',
                'title' => 'Abdullah Rahim',
                'description' => 'Abdullah is very good developer'
            ]
        ];
    }
}