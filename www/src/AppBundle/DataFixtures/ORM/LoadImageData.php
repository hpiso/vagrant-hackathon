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
        $image->setStation('Strasbourg Saint-Denis');
        $image->setUrl('strasbourg-1.jpg');
        $image->setPrincipal(true);
        $manager->persist($image);

        $image2 = new Image();
        $image2->setLabel('Tour Eiffel 2');
        $image2->setStation('Strasbourg Saint-Denis');
        $image2->setUrl('strasbourg-2.jpg');
        $manager->persist($image2);

        $image3 = new Image();
        $image3->setLabel('Tour Eiffel 3');
        $image3->setStation('Strasbourg Saint-Denis');
        $image3->setUrl('strasbourg-3.jpg');
        $manager->persist($image3);

        $manager->flush();
    }
}