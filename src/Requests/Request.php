<?php

namespace SatisfactoryAPI\Requests;

use Saloon\Enums\Method;

abstract class Request extends \Saloon\Http\Request
{
    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '';
    }

    protected function defaultBody(): array
    {
        return [
            'function' => get_called_class(),
        ];
    }

    /**
     * The function that will be called.
     * By default, it's the Class name without namespace,
     * but you overwrite this method when needed.
     *
     * @return string
     */
    public function getFunction(): string
    {
        return basename(get_called_class());
    }
}