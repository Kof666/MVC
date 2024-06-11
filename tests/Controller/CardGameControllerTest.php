<?php

namespace App\tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * Test cases for class Game21Controller.
 *
 * @SuppressWarnings(PHPMD)
 */
class testGameController extends WebTestCase
{
    public function testHome(): void {

        $client = static::createClient();

        $crawler = $client->request('GET', '/card');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', "MVC Rapporter");


    }

    public function testTest(): void {
        $client = static::createClient();
        $crawler = $client->request('GET', '/card/test');
        $this->assertResponseIsSuccessful();
    }

    public function testPlay(): void {
        $client = static::createClient();
        $crawler = $client->request('GET', '/session');
        $this->assertResponseIsSuccessful();
    }

    public function testSessionDestroy(): void {
        $client = static::createClient();
        $crawler = $client->request('GET', '/session/delete');
        $this->assertResponseIsSuccessful();
    }

    public function testDeck(): void {
        $client = static::createClient();
        $crawler = $client->request('GET', '/card/deck');
        $this->assertResponseIsSuccessful();
    }

    public function testShuffle(): void {
        $client = static::createClient();
        $crawler = $client->request('GET', '/card/deck/shuffle');
        $this->assertResponseIsSuccessful();
    }
}
