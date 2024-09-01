<?php

namespace App\tests\Controller;

use PHPUnit\Framework\TestCase;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * Test cases for class LibraryController.
 *
 * @SuppressWarnings(PHPMD)
 */
class testLibraryController extends WebTestCase
{
    #[Route("/game", name: "card_21")]
    public function testIndex(): void
    {

        $client = static::createClient();

        $crawler = $client->request('GET', '/library');

        $this->assertResponseIsSuccessful();
        // $this->assertSelectorTextContains('h1', "MVC Rapporter");
    }

    public function testReset(): void
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/library/reset');

        $this->assertResponseIsSuccessful();
    }

    public function testCreate(): void
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/library/create');

        $this->assertResponseIsSuccessful();
    }

    public function testViewAllLibrary(): void
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/library/view');

        $this->assertResponseIsSuccessful();
    }

    public function testViewLibraryById(): void
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/library/view');

        $this->assertResponseIsSuccessful();
    }

    public function testDeleteLibraryById(): void
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/library/view');

        $this->assertResponseIsSuccessful();
    }
}
