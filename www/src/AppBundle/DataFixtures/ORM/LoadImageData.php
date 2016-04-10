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

        $image4 = new Image();
        $image4->setLabel('Tour Eiffel 4');
        $image4->setStation('Strasbourg Saint-Denis');
        $image4->setUrl('strasbourg-4.jpg');
        $manager->persist($image4);









        $image4 = new Image();
        $image4->setLabel('Sacré coeur 1');
        $image4->setStation('Réaumur - Sébastopol');
        $image4->setUrl('reaumur-1.jpg');
        $manager->persist($image4);


        $image5 = new Image();
        $image5->setLabel('Sacré coeur 2');
        $image5->setStation('Réaumur - Sébastopol');
        $image5->setUrl('reaumur-2.jpg');
        $image5->setPrincipal(true);
        $manager->persist($image5);


        $image6 = new Image();
        $image6->setLabel('Sacré coeur 3');
        $image6->setStation('Réaumur - Sébastopol');
        $image6->setUrl('reaumur-3.jpg');
        $manager->persist($image6);

        $image7 = new Image();
        $image7->setLabel('Sacré coeur 4');
        $image7->setStation('Réaumur - Sébastopol');
        $image7->setUrl('reaumur-4.jpg');
        $manager->persist($image7);

        $manager->flush();
    }
}