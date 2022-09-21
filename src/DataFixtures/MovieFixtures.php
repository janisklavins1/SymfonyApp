<?php

namespace App\DataFixtures;

use App\Entity\Movie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MovieFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $movie = new Movie();
        $movie->setTitle('Dark Night');
        $movie->setReleaseDate(2008);
        $movie->setDescription('This is description');
        $movie->setImagePath('https://cdn.mos.cms.futurecdn.net/m6txc3A6HUa22VqX5QGALc.jpg');
        $movie->addActor($this->getReference('actor_1'));
        $movie->addActor($this->getReference('actor_2'));
        $manager->persist($movie);

        $movie2 = new Movie();
        $movie2->setTitle('Spider Man');
        $movie2->setReleaseDate(2010);
        $movie2->setDescription('More decsirption');
        $movie2->setImagePath('https://www.notebookcheck.net/fileadmin/Notebooks/News/_nc3/marvels_spider_man_header.jpg');
        $movie2->addActor($this->getReference('actor_1'));
        $movie2->addActor($this->getReference('actor_3'));
        $manager->persist($movie2);

        $manager->flush();
    }
}
