<?php

// tests/Entity/ArticleTest.php
namespace App\Tests\Entity;
use App\Entity\Article;
use PHPUnit\Framework\TestCase;
class ArticleTest extends TestCase
{
    public function testTitre()
    {
        $article = new Article();
        $titre = "Test 2";
        
        $article->setTitre($titre);
        $this->assertEquals("Test 2", $article->getTitre());
    }
}