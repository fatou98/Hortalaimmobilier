<?php

namespace HTL\ImmobilierBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AdminControllerTest extends WebTestCase
{
    public function testLog()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/admin/login');
    }

}
