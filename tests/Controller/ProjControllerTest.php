<?php

namespace App\tests\Controller;

use PHPUnit\Framework\TestCase;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * Test cases for class ProjController.
 *
 * @SuppressWarnings(PHPMD)
 */
class testProjController extends WebTestCase
{
    #[Route("/proj", name: "proj")]
    public function testHomeBj(): void
    {

        $client = static::createClient();

        $crawler = $client->request('GET', '/proj');

        $this->assertResponseIsSuccessful();
    }

    #[Route("/proj/about", name: "about_proj")]
    public function testAbout(): void
    {

        $client = static::createClient();

        $crawler = $client->request('GET', '/proj/about');

        $this->assertResponseIsSuccessful();
    }

    #[Route("/proj/api", name: "api_proj")]
    public function testApiBj(): void
    {

        $client = static::createClient();

        $crawler = $client->request('GET', '/proj/api');

        $this->assertResponseIsSuccessful();
    }

    #[Route("/proj/about/database", name: "database_proj")]
    public function testDatabaseBj(): void
    {

        $client = static::createClient();

        $crawler = $client->request('GET', '/proj/about/database');

        $this->assertResponseIsSuccessful();
    }

    #[Route("/proj/init", name: "init_get", methods: ['GET'])]
    public function testInit(): void
    {

        $client = static::createClient();

        $crawler = $client->request('GET', '/proj/init');

        $this->assertResponseIsSuccessful();
    }

    #[Route("/proj/init", name: "init_post", methods: ['POST'])]
    public function testInitCallback(): void
    {

        $client = static::createClient();

        $crawler = $client->request('GET', '/proj/init');

        $this->assertResponseIsSuccessful();
    }

}
