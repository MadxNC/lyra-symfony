<?php

namespace App\Services;

interface EpayInterface
{
    public function getEndpoint();
    public function getPublicKey();
    public function checkHash();
    public function getParsedFormAnswer();
    public function createPayment(array $store);
}