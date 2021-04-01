<?php

namespace Entity;

use App\Entity\Stagiaire;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class StagiaireTest extends WebTestCase
{

    public function testCount()
    {
        self::bootKernel();

        // returns the real and unchanged service container
        $container = self::$kernel->getContainer();

        // gets the special container that allows fetching private services
        $container = self::$container;

        $stagiaires = self::$container->get('doctrine')->getRepository(Stagiaire::class)->Count([]);
       $this->assertEquals(8,$stagiaires);

    }
}
