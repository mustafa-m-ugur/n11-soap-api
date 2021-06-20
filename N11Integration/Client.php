<?php

namespace N11Integration;

use N11Integration\Helper\ApiUrl;
use N11Integration\Helper\Exception;

Class Client extends ApiUrl
{
    /**
     *
     * @param string $apiKey
     *
     */
    public function setApiKey($apiKey)
    {
        $this->apiKey = $apiKey;
    }

    /**
     *
     * @param string $apiPassword
     *
     */
    public function setApiPassword($apiPassword)
    {
        $this->apiPassword = $apiPassword;
    }

}