<?php

namespace Foodcheri\BatchBundle\Service;

use Foodcheri\Batch\Client;

class BatchService
{
    private $batchClient;

    public function __construct($restApiKey, $apiKey)
    {
        $this->batchClient = new Client(['rest_api_key' => $restApiKey, 'api_key' => $apiKey]);
    }

    public function getTransactional()
    {
        return $this->batchClient->getApi('transactional');
    }

    public function getCustomData()
    {
        return $this->batchClient->getApi('custom_data');
    }

}
