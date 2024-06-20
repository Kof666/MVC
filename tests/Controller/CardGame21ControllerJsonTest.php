<?php

namespace App\tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * Test cases for class Game21Controller.
 *
 * @SuppressWarnings(PHPMD)
 */
class test21GameControllerJson extends WebTestCase
{

    public function testApiGame(): void {

        $client = static::createClient();

        $crawler = $client->request('GET', '/api/game');

        $this->assertResponseIsSuccessful();
    }

    public function testApiSchuffle(): void {

        $client = static::createClient();

        $crawler = $client->request('GET', '/api/deck/shuffle');

        $this->assertResponseIsSuccessful();
    }
}
