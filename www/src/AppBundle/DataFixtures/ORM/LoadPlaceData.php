<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Place;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadPlaceData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $place = new Place();
        $place->setName('Tour Eiffel');
        $manager->persist($place);

        $place3 = new Place();
        $place3->setName('Sacré Coeur');
        $manager->persist($place3);

        $manager->flush();
    }
}