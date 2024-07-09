<?php

namespace SatisfactoryAPI\Requests;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;

abstract class Request extends \Saloon\Http\Request implements HasBody
{
    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '';
    }
}