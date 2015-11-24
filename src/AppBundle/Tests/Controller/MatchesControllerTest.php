<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class MatchesControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/match/1');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains('Match', $crawler->filter('h1')->text());
    }
}
