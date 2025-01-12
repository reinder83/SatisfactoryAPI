<?php

namespace SatisfactoryAPI\Resources;

use Saloon\Http\BaseResource;
use SatisfactoryAPI\Requests\Auth\PasswordLessLogin;
use SatisfactoryAPI\Responses\Auth\PasswordLessLoginResponse;

class Auth extends BaseResource
{

    public function passwordLessLogin(): ?PasswordLessLoginResponse
    {
        return $this->connector->send(new PasswordLessLogin())->dto();
    }
}