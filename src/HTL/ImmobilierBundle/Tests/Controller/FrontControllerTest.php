<?php

namespace HTL\ImmobilierBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class FrontControllerTest extends WebTestCase
{
    public function testSearchbien()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/front/bien/search');
    }

    public function testReserverbien()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/front/bien/reserver');
    }

}
