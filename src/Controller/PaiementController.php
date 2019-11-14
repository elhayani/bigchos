<?php

namespace App\Controller;

use Stripe\PaymentIntent;
use Stripe\Stripe;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

// Available since PHP 7.0.7 and cURL 7.47.0
if (!defined('CURL_HTTP_VERSION_2TLS')) {
    define('CURL_HTTP_VERSION_2TLS', 4);
}

class PaiementController extends AbstractController
{

    /**
     * @Route("/paiement", name="paiement")
     */
    public function index()
    {

        return $this->render('paiement/index.html.twig');
    }

    /**
     * @Route("/check", name="check")
     */
    public function check(Request $request)
    {        // Set your secret key: remember to change this to your live secret key in production
                // See your keys here: https://dashboard.stripe.com/account/apikeys
        \Stripe\Stripe::setApiKey('sk_test_84dtkv2GAuJi2z6RrWQaH8tX00DVe2T4WR');

        $intent = \Stripe\PaymentIntent::create([
            'amount' => 1099,
            'currency' => 'eur',
        ]);
        return $this->render('paiement/check.html.twig', ['client_secret' => $request->get('client_secret')]);
    }
}
