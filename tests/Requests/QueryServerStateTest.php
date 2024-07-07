<?php

namespace SatisfactoryAPI\Tests\Requests;

use Saloon\Http\Faking\MockResponse;
use SatisfactoryAPI\Requests\QueryServerState;
use SatisfactoryAPI\Tests\TestCase;

class QueryServerStateTest extends TestCase
{
    public function testFunction(): void
    {
        $request = new QueryServerState();

        $this->assertEquals('QueryServerState', $request->getFunction());
    }

    public function test():void
    {
        $this->mock->addResponse(new MockResponse(
            '{"data":{"serverGameState":{"activeSessionName":"PIE209", "numConnectedPlayers":0,"techTier":2,"activeSchematic": "None", "gamePhase": "/Script/FactoryGame.FGGamePhase\'/Game/FactoryGame/GamePhases/GP_Project_Assembly_Phase_0.GP_Project_Assembly_Phase_0\'","isGameRunning":true,"totalGameDuration":2176,"isGamePaused":true,"averageTickRate":30.286127090454102,"autoLoadSessionName":"PIE209"}}}',
            200,
            ['Content-Type' => 'application/json'],
        ));
    }
}