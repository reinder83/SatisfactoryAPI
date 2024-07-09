<?php

namespace SatisfactoryAPI\Requests;


use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use SatisfactoryAPI\Responses\QueryServerStateResponse;

class RenameServer extends Request
{
    use HasJsonBody;

    public function __construct(protected string $name)
    {
    }

    protected function defaultBody(): array
    {
        return [
            'function' => 'RenameServer',
            'data' => [
                'serverName' => $this->name
            ]
        ];
    }
}