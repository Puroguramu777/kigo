<?php

namespace App\DataFixtures;

use App\Entity\Section;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $sectionType = ['Web', 'Animation 2D', 'Animation 3D', 'Audiovisuel', 'Graphique Design' ];

        foreach($sectionType as $sec){
            $section = new Section();
            $section->setLabel($sec);
            $manager->persist($section);
        }
    
        $manager->flush();
    }
}
