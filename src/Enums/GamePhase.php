<?php

namespace SatisfactoryAPI\Enums;

enum GamePhase: string
{
    case Unknown = 'Unknown';
    case OnBoarding = "/Script/FactoryGame.FGGamePhase'/Game/FactoryGame/GamePhases/GP_Project_Assembly_Phase_0.GP_Project_Assembly_Phase_0'";
    case DistributionPlatform = "/Script/FactoryGame.FGGamePhase'/Game/FactoryGame/GamePhases/GP_Project_Assembly_Phase_1.GP_Project_Assembly_Phase_1'";
    case ConstructionDock = "/Script/FactoryGame.FGGamePhase'/Game/FactoryGame/GamePhases/GP_Project_Assembly_Phase_2.GP_Project_Assembly_Phase_2'";
    case MainBody = "/Script/FactoryGame.FGGamePhase'/Game/FactoryGame/GamePhases/GP_Project_Assembly_Phase_3.GP_Project_Assembly_Phase_3'";
    case PropulsionSystems = "/Script/FactoryGame.FGGamePhase'/Game/FactoryGame/GamePhases/GP_Project_Assembly_Phase_4.GP_Project_Assembly_Phase_4'";
    case Assembly = "/Script/FactoryGame.FGGamePhase'/Game/FactoryGame/GamePhases/GP_Project_Assembly_Phase_5.GP_Project_Assembly_Phase_5'";
    case Launch = "/Script/FactoryGame.FGGamePhase'/Game/FactoryGame/GamePhases/GP_Project_Assembly_Phase_6.GP_Project_Assembly_Phase_6'";
    case Completed = "/Script/FactoryGame.FGGamePhase'/Game/FactoryGame/GamePhases/GP_Project_Assembly_Phase_7.GP_Project_Assembly_Phase_7'";

    public function name(): string
    {
        return match ($this) {
            static::OnBoarding => 'OnBoarding',
            static::DistributionPlatform => 'Distribution Platform',
            static::ConstructionDock => 'Construction Dock',
            static::MainBody => 'Main Body',
            static::PropulsionSystems => 'Propulsion Systems',
            static::Assembly => 'Assembly',
            static::Launch => 'Launch',
            static::Completed => 'Completed',
            default => 'Unknown'
        };
    }

    public function phase(): int
    {
        return match ($this) {
            static::DistributionPlatform => 1,
            static::ConstructionDock => 2,
            static::MainBody => 3,
            static::PropulsionSystems => 4,
            static::Assembly, static::Launch, static::Completed => 5,
            default => 0
        };
    }

    public function description(): string
    {
        return $this->name() . ' (' . $this->phase() . ')';
    }
}