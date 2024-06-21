<?php

namespace App\tests\Controller;

use PHPUnit\Framework\TestCase;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * Test cases for class LibraryController.
 *
 * @SuppressWarnings(PHPMD)
 */
class testMyPageController extends WebTestCase
{
    // #[Route("/game", name: "card_21")]
    public function testMeRoute(): void
    {

        $client = static::createClient();

        $crawler = $client->request('GET', '/me');

        $this->assertResponseIsSuccessful();
        // $this->assertSelectorTextContains('h1', "MVC Rapporter");
    }

    public function testAbout(): void
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/about');

        $this->assertResponseIsSuccessful();
    }

    public function testReport(): void
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/report');

        $this->assertResponseIsSuccessful();
    }

    public function testLycky(): void
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/lucky');

        $this->assertResponseIsSuccessful();
    }

    public function testStart(): void
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');

        $this->assertResponseIsSuccessful();
    }

    public function testApi(): void
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/api');

        $this->assertResponseIsSuccessful();
    }

    public function testMetrics(): void
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/metrics');

        $this->assertResponseIsSuccessful();
    }
}
