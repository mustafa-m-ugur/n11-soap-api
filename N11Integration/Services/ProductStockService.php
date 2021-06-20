<?php

namespace N11Integration\Services;

class ProductStockService
{
    public $url = 'https://api.n11.com/ws/ProductStockService.wsdl';

    public function getProductStockByProductId($client, $productId)
    {
        return $client->sendRequest('GetProductStockByProductId', array('productId' => $productId));
    }
}