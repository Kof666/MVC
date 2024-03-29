<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Routes to control the report web-site
 */
class myPageController extends AbstractController
{
    #[Route('/me', name: 'me')]
    public function me(): Response
    {
        $number = random_int(0, 100);

        $data = [
            'number' => $number
        ];

        return $this->render('/me.html.twig', $data);
    }

    #[Route('/about', name: 'about')]
    public function about(): Response
    {
        $number = random_int(0, 100);

        $data = [
            'number' => $number
        ];

        return $this->render('/about.html.twig', $data);
    }

    #[Route('/report', name: 'report')]
    public function report(): Response
    {
        $number = random_int(0, 100);

        $data = [
            'number' => $number
        ];

        return $this->render('/report.html.twig', $data);
    }

    #[Route('/lucky', name: 'lucky')]
    public function lucky(): Response
    {
        $number = random_int(0, 100);

        $data = [
            'number' => $number
        ];

        return $this->render('/lucky.html.twig', $data);
    }

    #[Route('/')]
    public function start(): Response
    {
        $number = random_int(0, 100);

        $data = [
            'number' => $number
        ];

        return $this->render('/me.html.twig', $data);
    }
}