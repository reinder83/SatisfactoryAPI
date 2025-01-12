<?php

namespace SatisfactoryAPI\Responses\Auth;

use SatisfactoryAPI\Responses\Response;

class PasswordLessLoginResponse extends Response
{
    public function __construct(public string $authenticationToken)
    {
    }
}