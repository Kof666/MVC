<?php

namespace App\tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * Test cases for class Game21Controller.
 *
 * @SuppressWarnings(PHPMD)
 */
class MyPageControllerJsonTest extends WebTestCase
{
    public function testQuote(): void
    {

        $client = static::createClient();

        $crawler = $client->request('GET', '/api/quote');

        $this->assertResponseIsSuccessful();
    }

}
