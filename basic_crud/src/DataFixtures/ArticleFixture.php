<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Article;
class ArticleFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
    	for ($i = 1; $i <= 10; $i++) {
    		$article = new Article();
		    $article->setName(sprintf('foo%d', $i));
		    $manager->persist($article);
    	}
        $manager->flush();
    }
}
