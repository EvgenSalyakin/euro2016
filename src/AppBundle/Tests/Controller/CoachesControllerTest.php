<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CoachesControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/coach/1');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains('Coach', $crawler->filter('h1')->text());
    }
}
