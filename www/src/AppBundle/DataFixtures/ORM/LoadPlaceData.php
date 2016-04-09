<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Place;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadPlaceData extends AbstractFixture implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $place = new Place();
        $place->setName('Tour Eiffel');
        $manager->persist($place);

        $place2 = new Place();
        $place2->setName('Musée du louvre');
        $manager->persist($place2);

        $place3 = new Place();
        $place3->setName('Sacré Coeur');
        $manager->persist($place3);

        $manager->flush();
    }
}