<?php

namespace Zenapply\Bandwidth;

class Bandwidth
{
    public function __construct($auth_id, $auth_token)
    {
        $this->auth_id = $auth_id;
        $this->auth_token = $auth_token;
    }
}
