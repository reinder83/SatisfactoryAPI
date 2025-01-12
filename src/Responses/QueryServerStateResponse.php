<?php

namespace SatisfactoryAPI\Responses;

use SatisfactoryAPI\Enums\GamePhase;
use SatisfactoryAPI\Enums\Schematic;

class QueryServerStateResponse extends Response
{
    public string $activeSessionName = '';
    public int $numConnectedPlayers = 0;
    public int $techTier = 0;
    public Schematic $activeSchematic = Schematic::Unknown;
    public GamePhase $gamePhase = GamePhase::Unknown;
    public bool $isGameRunning = false;
    public int $totalGameDuration = 0;
    public bool $isGamePaused = false;
    public float $averageTickRate = 0.0;
    public string $autoLoadSessionName = '';

    protected function castGamePhase(string $gamePhase): GamePhase
    {
        return GamePhase::tryFrom($gamePhase) ?? GamePhase::Unknown;
    }

    protected function castActiveSchematic(string $schematic): Schematic
    {
        return Schematic::tryFrom($schematic) ?? Schematic::Unknown;
    }

}