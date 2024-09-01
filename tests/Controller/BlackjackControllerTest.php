<?php

namespace App\tests\Controller;

use PHPUnit\Framework\TestCase;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * Test cases for class ProjController.
 *
 * @SuppressWarnings(PHPMD)
 */
class testBlackjackController extends WebTestCase
{
    #[Route('/blackjack', name: 'app_blackjack')]
    public function testIndex(): void
    {

        $client = static::createClient();

        $crawler = $client->request('GET', '/blackjack');

        $this->assertResponseIsSuccessful();
    }

    #[Route('/blackjack/create', name: 'blackjack_create')]
    public function testCreateBlackjack(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/proj/players/view');
        $this->assertResponseIsSuccessful();

    }

    #[Route('/blackjack/show', name: 'blackjack_show_all')]
    public function testShowAllPlayer(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/blackjack/show');
        $this->assertResponseIsSuccessful();

    }

    #[Route('/proj/player/reset', name: 'reset')]
    public function testReset(): void
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/proj/players/view');

        $this->assertResponseIsSuccessful();
    }

    // #[Route('/proj/players/view/hand/{id}', name: 'hand_by_id')]
    // public function testviewt(): void
    // {
    //     $blackjack = new BlackJack();

    //     $client = static::createClient();

    //     $crawler = $client->request('GET', '/proj/players/view/hand/0');

    //     $this->assertResponseIsSuccessful();
    // }



}
