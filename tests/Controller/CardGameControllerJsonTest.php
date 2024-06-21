<?php

namespace App\tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * Test cases for class Game21Controller.
 *
 * @SuppressWarnings(PHPMD)
 */
class testGameControllerJson extends WebTestCase
{
    public function testApiDeck(): void
    {

        $client = static::createClient();

        $crawler = $client->request('GET', '/api/deck');

        $this->assertResponseIsSuccessful();
    }

    public function testApiSchuffle(): void
    {

        $client = static::createClient();

        $crawler = $client->request('GET', '/api/deck/shuffle');

        $this->assertResponseIsSuccessful();
    }
}
