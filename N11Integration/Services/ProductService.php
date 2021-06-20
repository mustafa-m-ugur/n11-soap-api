<?php

namespace N11Integration\Services;

class ProductService
{
    public $url = 'https://api.n11.com/ws/ProductService.wsdl';

    public function getProductByProductId($client, $productId)
    {
        return $client->sendRequest('GetProductByProductId', array('productId' => $productId));
    }

    public function getProductBySellerCode($client, $sellerCode)
    {
        return $client->sendRequest('GetProductBySellerCode', array('sellerCode' => $sellerCode));
    }

    public function getProductList($client, $pagination = array())
    {
        return $client->sendRequest('GetProductList', array('pagingData' => $pagination));
    }

    public function SaveProduct($client, $product = array())
    {
        return $client->sendRequest('SaveProduct', array('product' => $product));
    }

    public function deleteProductById($client, $productId)
    {
        return $client->sendRequest('DeleteProductById', array('productId' => $productId));
    }

    public function deleteProductBySellerCode($client, $productSellerCode)
    {
        return $client->sendRequest('DeleteProductBySellerCode', array('productSellerCode' => $productSellerCode));
    }
}