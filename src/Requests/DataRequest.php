<?php

namespace SatisfactoryAPI\Requests;

use Saloon\Traits\Body\HasMultipartBody;

abstract class DataRequest extends Request
{
    use HasMultipartBody;

    protected function defaultBody(): array
    {
        return [
            'function' => $this->getFunction(),
        ];
    }
}