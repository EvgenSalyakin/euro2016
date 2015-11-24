<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class TeamsControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/team/1');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains('Team', $crawler->filter('h1')->text());
    }
}
