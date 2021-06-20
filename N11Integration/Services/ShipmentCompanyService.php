<?php

namespace N11Integration\Services;

Class ShipmentCompanyService
{
	public $url = 'https://api.n11.com/ws/ShipmentCompanyService.wsdl';

	public function getShipmentCompanies($client)
	{
		return $client->sendRequest('GetShipmentCompanies');
	}
}