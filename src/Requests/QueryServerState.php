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

    public function createDtoFromResponse(Response $response): ?QueryServerStateResponse
    {
        $data = $response->json('data.serverGameState', []);
        if (empty($data)) {
            return null;
        }

        return new QueryServerStateResponse(
            activeSessionName: $data['activeSessionName'],
            connectedPlayerCount: $data['numConnectedPlayers'],
            techTier: $data['techTier'],
            activeSchematic: $data['activeSchematic'],
            gamePhase: $data['gamePhase'],
            isGameRunning: $data['isGameRunning'],
            totalGameDuration: $data['totalGameDuration'],
            isGamePaused: $data['isGamePaused'],
            averageTickRate: $data['averageTickRate'],
            autoLoadSessionName: $data['autoLoadSessionName'],
        );
    }
}