<?php

namespace SatisfactoryAPI\Requests\Auth;


use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use SatisfactoryAPI\Enums\PrivilegeLevel;
use SatisfactoryAPI\Requests\Request;
use SatisfactoryAPI\Responses\Auth\PasswordLessLoginResponse;
use SatisfactoryAPI\Responses\QueryServerStateResponse;

class PasswordLessLogin extends Request
{
    use HasJsonBody;

    public function __construct(public PrivilegeLevel $privilegeLevel = PrivilegeLevel::NotAuthenticated)
    {
    }

    protected function defaultBody(): array
    {
        return [
            'function' => 'PasswordLessLogin',
            'data' => [
                'minimumPrivilegeLevel' => $this->privilegeLevel->value
            ]
        ];
    }

    public function createDtoFromResponse(Response $response): ?PasswordLessLoginResponse
    {
        $token = $response->json('data.authenticationToken');
        if (empty($token)) {
            return null;
        }

        return new PasswordLessLoginResponse($token);
    }
}