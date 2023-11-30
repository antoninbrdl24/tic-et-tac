<?php

namespace App\DataFixtures;

use App\Entity\Squirell;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class SquirellFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 5; $i++) {
            $squirell = new Squirell();
            $squirell->setName('name' . $i);
            $manager->persist($squirell);
        }
        $manager->flush();
    }
}
