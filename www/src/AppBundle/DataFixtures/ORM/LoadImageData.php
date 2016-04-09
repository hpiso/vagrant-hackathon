<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Image;
use AppBundle\Entity\Place;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadImageData extends AbstractFixture implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $image = new Image();
        $image->setLabel('Tour Eiffel 1');
        $image->setStation('Réaumur - Sébastopol');
        $manager->persist($image);

        $image2 = new Image();
        $image2->setLabel('Tour Eiffel 2');
        $image2->setStation('Strasbourg Saint-Denis');
        $manager->persist($image2);

        $manager->flush();
    }
}