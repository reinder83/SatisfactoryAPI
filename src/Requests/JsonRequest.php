<?php

namespace SatisfactoryAPI\Requests;

use Saloon\Traits\Body\HasJsonBody;

abstract class JsonRequest extends Request
{
    use HasJsonBody;

    protected function defaultBody(): array
    {
        return [
            'function' => $this->getFunction(),
        ];
    }
}