<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PlayersControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/player/1');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains('Player', $crawler->filter('h1')->text());
    }
}
