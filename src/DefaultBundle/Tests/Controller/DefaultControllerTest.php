<?php

namespace DefaultBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testHome()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testPresentation()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/presentation');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testSchedule()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/schedule');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testPrizes()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/prizes');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testParners()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/partners');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testContact()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/contact');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testSwitchLocale()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/switch_locale/fr');
        $this->assertEquals(302, $client->getResponse()->getStatusCode());

        $crawler = $client->followRedirect();
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertEquals('/', $client->getRequest()->getRequestUri());
    }
}
