<?php

namespace App\DataFixtures;

use App\Entity\Running;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class RunningFixtures extends Fixture {

    /**
     * @param ObjectManager $manager
     * 
     * @return void
     */
    public function load(ObjectManager $manager) : void
    {
        $theRun = new Runs();
    
        $manager->flush();
    }
    
    /**
     * @return array 
     */
    public function getDependencies(): array
    {
        return [
            RunningFixtures::class,
        ];
    }

}