<?php

namespace App\tests\Controller;

use App\Entity\Library;
use Doctrine\Persistence\ManagerRegistry;
use App\Repository\LibraryRepository;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * Test cases for class Game21Controller.
 *
 * @SuppressWarnings(PHPMD)
 */
class LibraryControllerJsonTest extends WebTestCase
{
    public function testApiShowAllBooks(): void
    {

        $client = static::createClient();

        $crawler = $client->request('GET', '/api/library/books');

        $this->assertResponseIsSuccessful();
    }

    public function testFindByIsbn(): void
    {

        $client = static::createClient();

        $crawler = $client->request('GET', '/library/view/245');

        $this->assertResponseIsSuccessful();
    }

}
