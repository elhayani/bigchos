<?php

namespace App\Controller;

use App\Service\Panier;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CommandController extends AbstractController
{
    /**
     * @Route("/command", name="command")
     * @param Panier $panier
     * @return Response
     */
    public function index(Panier $panier)
    {
        $message = $panier->getHappyMessage();
        return new Response('noconnect');
    }
}
