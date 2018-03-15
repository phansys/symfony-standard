<?php

namespace Tests\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class OtherControllerTest extends WebTestCase
{
    public function testOther()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/other-path');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains('Welcome to Symfony', $crawler->filter('#container h1')->text());
    }
}
