<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CountriesControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/country/1');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains('Country', $crawler->filter('h1')->text());
    }
}
