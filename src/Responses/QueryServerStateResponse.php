<?php

namespace SatisfactoryAPI\Responses;

readonly class QueryServerStateResponse
{
        public function __construct(
            public string $activeSessionName,
            public int $connectedPlayerCount,
            public int $techTier,
            public string $activeSchematic,
            public string $gamePhase,
            public bool $isGameRunning,
            public int $totalGameDuration,
            public bool $isGamePaused,
            public float $averageTickRate,
            public string $autoLoadSessionName
        )
        {
        }
}