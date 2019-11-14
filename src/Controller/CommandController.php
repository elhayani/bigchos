<?php

namespace App\Controller;

use App\Service\Adresse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CommandController extends AbstractController
{
    /**
     * @Route("/command", name="command")
     * @param Adresse $adresse
     * @return Response
     */
    public function index(Adresse $adresse, Request $request)
    {//https://api-adresse.data.gouv.fr/search/?q=rue+gambeta
        return $this->render('command/index.html.twig', [
            'controller_name' => 'HomeController','id'=> $request->query->get('id')
        ]);
    }
}

