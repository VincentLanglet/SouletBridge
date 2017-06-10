<?php

namespace DefaultBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * Class DefaultControllerTest
 */
class DefaultControllerTest extends WebTestCase
{
    public function testHome()
    {
        $client = static::createClient();

        $client->request('GET', '/');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testPresentation()
    {
        $client = static::createClient();

        $client->request('GET', '/presentation');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testSchedule()
    {
        $client = static::createClient();

        $client->request('GET', '/schedule');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testPrizes()
    {
        $client = static::createClient();

        $client->request('GET', '/prizes');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testParners()
    {
        $client = static::createClient();

        $client->request('GET', '/partners');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testContact()
    {
        $client = static::createClient();

        $client->request('GET', '/contact');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testSwitchLocale()
    {
        $client = static::createClient();

        $client->request('GET', '/switch_locale/fr');
        $this->assertEquals(302, $client->getResponse()->getStatusCode());

        $client->followRedirect();
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertEquals('/', $client->getRequest()->getRequestUri());
    }
}
