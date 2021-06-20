<?php

namespace N11Integration\Services;

class ShipmentService
{
    public $url = 'https://api.n11.com/ws/ShipmentService.wsdl';

    public function getShipmentTemplateList($client)
    {
        return $client->sendRequest('GetShipmentTemplateList');
    }

    public function getShipmentTemplate($client, $name)
    {
        return $client->sendRequest('GetShipmentTemplate', array('name' => $name));
    }

    public function createOrUpdateShipmentTemplate($client, $data)
    {
        return array();
    }

}