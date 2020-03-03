<?php

namespace App\Controller;

use App\Services\EpayService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class EpayServiceController extends AbstractController
{
    /**
     * @Route("/epay", name="epay")
     */
    public function epay(EpayService $epay)
    {

        // dd($epay);    
        return $this->render('epay_service/index.html.twig', [
            'controller_name' => 'EpayServiceController',
                'publicKey' => $epay->getPublicKey(),
                'endpoint' => $epay->getEndpoint(),
                'response' => $epay->createPayment([
                    "amount" => 01,
                    "currency" => "EUR",
                    "orderId" => uniqid("MyOrderId"),
                    "customer" => ["email" => "joe@doe.nc"],
                    ]),

        ]);
    }
}
