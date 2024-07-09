<?php

namespace SatisfactoryAPI\Tests\Requests;

use Saloon\Http\Faking\MockResponse;
use SatisfactoryAPI\Responses\QueryServerStateResponse;
use SatisfactoryAPI\Tests\TestCase;

class QueryServerStateTest extends TestCase
{

    public function testResponse(): void
    {
        $this->mock->addResponse(new MockResponse(
            '{"data":{"serverGameState":{"activeSessionName":"PIE209", "numConnectedPlayers":0,"techTier":2,"activeSchematic": "None", "gamePhase": "/Script/FactoryGame.FGGamePhase\'/Game/FactoryGame/GamePhases/GP_Project_Assembly_Phase_0.GP_Project_Assembly_Phase_0\'","isGameRunning":true,"totalGameDuration":2176,"isGamePaused":true,"averageTickRate":30.286127090454102,"autoLoadSessionName":"PIE209"}}}',
            200,
            ['Content-Type' => 'application/json'],
        ));

        $response = $this->client->queryServerState();

        $this->assertInstanceOf(QueryServerStateResponse::class, $response);
        $this->assertEquals('PIE209', $response->activeSessionName);
        $this->assertEquals('PIE209', $response->autoLoadSessionName);
        $this->assertEquals('None', $response->activeSchematic);

        // This should be an enum later
        $this->assertEquals("/Script/FactoryGame.FGGamePhase'/Game/FactoryGame/GamePhases/GP_Project_Assembly_Phase_0.GP_Project_Assembly_Phase_0'", $response->gamePhase);

        $this->assertEquals(0, $response->connectedPlayerCount);
        $this->assertEquals(2, $response->techTier);
        $this->assertEquals(2176, $response->totalGameDuration);
        $this->assertEquals(30.286127090454102, $response->averageTickRate);

        $this->assertTrue($response->isGameRunning);
        $this->assertTrue($response->isGamePaused);
    }
}