<?php

namespace App\DataFixtures;

use App\Entity\Actor;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ActorFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $actor = new Actor();
        $actor->setName('Janis');
        $manager->persist($actor);

        $actor1 = new Actor();
        $actor1->setName('Justin');
        $manager->persist($actor1);

        $actor2 = new Actor();
        $actor2->setName('John');
        $manager->persist($actor2);

        $manager->flush();

        $this->addReference('actor_1', $actor);
        $this->addReference('actor_2', $actor1);
        $this->addReference('actor_3', $actor2);
    }
}
