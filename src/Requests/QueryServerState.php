<?php

namespace SatisfactoryAPI\Requests;


use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use SatisfactoryAPI\Responses\QueryServerStateResponse;

class QueryServerState extends Request
{
    use HasJsonBody;

    protected function defaultBody(): array
    {
        return [
            'function' => 'QueryServerState',
        ];
    }

    public function createDtoFromResponse(Response $response): QueryServerStateResponse
    {
        return QueryServerStateResponse::make($response->json('data.serverGameState'));
    }
}