<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Simplon;

class LoadSimplon implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $manu = new Simplon();
        $manu->setFirstname('emmanuel');
        $manu->setLastname('euchin');
        $manu->setFonction('formateur');
        $manager->persist($manu);

        $max = new Simplon();
        $max->setFirstname('maxime');
        $max->setLastname('sénécal');
        $max->setFonction('formateur');
        $manager->persist($max);

        $enzo = new Simplon();
        $enzo->setFirstname('enzo');
        $enzo->setLastname('esteves');
        $enzo->setFonction('apprenant');
        $manager->persist($enzo);

        $sam = new Simplon();
        $sam->setFirstname('samuel');
        $sam->setLastname('nait');
        $sam->setFonction('apprenant');
        $manager->persist($sam);

        $morgan = new Simplon();
        $morgan->setFirstname('morgan');
        $morgan->setLastname('marcq');
        $morgan->setFonction('apprenant');
        $manager->persist($morgan);

        $justin = new Simplon();
        $justin->setFirstname('justin');
        $justin->setLastname('baroux');
        $justin->setFonction('apprenant');
        $manager->persist($justin);


        $manager->flush();
    }
}
