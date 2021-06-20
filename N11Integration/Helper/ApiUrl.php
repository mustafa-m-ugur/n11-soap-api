<?php

namespace N11Integration\Helper;

class ApiUrl
{
    public $apiKey;
    public $apiPassword;

    protected $serviceClasses = array(
        'city' => 'CityService',
        'shipmentcompany' => 'ShipmentCompanyService',
        'shipment' => 'ShipmentService',
        'category' => 'CategoryService',
        'product' => 'ProductService',
        'selling' => 'ProductSellingService',
        'stock' => 'ProductStockService',
        'order' => 'OrderService',
        'webhook' => 'WebHookService',
    );

    /**
     *
     * @param string
     * @return service
     *
     */
    public function __get($name)
    {
        if (!isset($this->serviceClasses[$name])) {
            throw new Exception("Invalid!");
        }
        if (isset($this->$name)) {
            return $this->$name;
        }
        $this->$name = new BaseApiCall($this->serviceClasses[$name], $this->apiKey, $this->apiPassword);
        return $this->$name;
    }

}