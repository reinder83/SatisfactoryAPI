<?php

namespace SatisfactoryAPI\Enums;

enum Schematic: string
{
    case None = 'None';
    case Unknown = 'Unknown';

    // Tier 1
    case BaseBuilding = "/Script/Engine.BlueprintGeneratedClass'/Game/FactoryGame/Schematics/Progression/Schematic_1-1.Schematic_1-1_C'";
    case Logistics = "/Script/Engine.BlueprintGeneratedClass'/Game/FactoryGame/Schematics/Progression/Schematic_1-2.Schematic_1-2_C'";
    case FieldResearch = "/Script/Engine.BlueprintGeneratedClass'/Game/FactoryGame/Schematics/Progression/Schematic_1-3.Schematic_1-3_C'";

    // Tier 2
    case PartAssembly = "/Script/Engine.BlueprintGeneratedClass'/Game/FactoryGame/Schematics/Progression/Schematic_2-1.Schematic_2-1_C'";
    case ObstacleClearing = "/Script/Engine.BlueprintGeneratedClass'/Game/FactoryGame/Schematics/Progression/Schematic_2-2.Schematic_2-2_C'";
    case JumpPads = "/Script/Engine.BlueprintGeneratedClass'/Game/FactoryGame/Schematics/Progression/Schematic_2-3.Schematic_2-3_C'";
    case ResourceSinkBonusProgram = "/Script/Engine.BlueprintGeneratedClass'/Game/FactoryGame/Schematics/Progression/Schematic_2-5.Schematic_2-5_C'";
    case LogisticsMk2 = "/Script/Engine.BlueprintGeneratedClass'/Game/FactoryGame/Schematics/Progression/Schematic_3-2.Schematic_3-2_C'";

    // Tier 3
    case CoalPower = "/Script/Engine.BlueprintGeneratedClass'/Game/FactoryGame/Schematics/Progression/Schematic_3-1.Schematic_3-1_C'";
    case VehicularTransport = "/Script/Engine.BlueprintGeneratedClass'/Game/FactoryGame/Schematics/Progression/Schematic_3-3.Schematic_3-3_C'";
    case BasicSteelProduction = "/Script/Engine.BlueprintGeneratedClass'/Game/FactoryGame/Schematics/Progression/Schematic_3-4.Schematic_3-4_C'";
    case EnhancedAssetSecurity = "/Script/Engine.BlueprintGeneratedClass'/Game/FactoryGame/Schematics/Progression/Schematic_4-2.Schematic_4-2_C'";

    // Tier 4
    case FicsitBlueprints = "/Script/Engine.BlueprintGeneratedClass'/Game/FactoryGame/Schematics/Progression/Schematic_4-5.Schematic_4-5_C'";
    case LogisticsMk3 = "/Script/Engine.BlueprintGeneratedClass'/Game/FactoryGame/Schematics/Progression/Schematic_5-3.Schematic_5-3_C'";
    case AdvancedSteelProduction = "/Script/Engine.BlueprintGeneratedClass'/Game/FactoryGame/Schematics/Progression/Schematic_4-1.Schematic_4-1_C'";
    case ExpandedPowerInfrastructure = "/Script/Engine.BlueprintGeneratedClass'/Game/FactoryGame/Schematics/Progression/Schematic_4-3.Schematic_4-3_C'";
    case Hypertubes = "/Script/Engine.BlueprintGeneratedClass'/Game/FactoryGame/Schematics/Progression/Schematic_4-4.Schematic_4-4_C'";

    // Tier 5
    case Jetpack = "/Script/Engine.BlueprintGeneratedClass'/Game/FactoryGame/Schematics/Progression/Schematic_6-2.Schematic_6-2_C'";
    case OilProcessing = "/Script/Engine.BlueprintGeneratedClass'/Game/FactoryGame/Schematics/Progression/Schematic_5-1.Schematic_5-1_C'";
    case LogisticsMk4 = "/Script/Engine.BlueprintGeneratedClass'/Game/FactoryGame/Schematics/Progression/Schematic_6-1.Schematic_6-1_C'";
    case FluidPackaging = "/Script/Engine.BlueprintGeneratedClass'/Game/FactoryGame/Schematics/Progression/Schematic_5-4.Schematic_5-4_C'";
    case PetroleumPower = "/Script/Engine.BlueprintGeneratedClass'/Game/FactoryGame/Schematics/Progression/Schematic_5-5.Schematic_5-5_C'";

    // Tier 6
    case IndustrialManufacturing = "/Script/Engine.BlueprintGeneratedClass'/Game/FactoryGame/Schematics/Progression/Schematic_5-2.Schematic_5-2_C'";
    case MonorailTrainTechnology = "/Script/Engine.BlueprintGeneratedClass'/Game/FactoryGame/Schematics/Progression/Schematic_6-3.Schematic_6-3_C'";
    case RailwaySignaling = "/Script/Engine.BlueprintGeneratedClass'/Game/FactoryGame/Schematics/Progression/Schematic_6-7.Schematic_6-7_C'";
    case PipelineEngineeringMk2 = "/Script/Engine.BlueprintGeneratedClass'/Game/FactoryGame/Schematics/Progression/Schematic_6-5.Schematic_6-5_C'";
    case FicsitBlueprintsMk2 = "/Script/Engine.BlueprintGeneratedClass'/Game/FactoryGame/Schematics/Progression/Schematic_6-6.Schematic_6-6_C'";

    // Tier 7
    case BauxiteRefinement = "/Script/Engine.BlueprintGeneratedClass'/Game/FactoryGame/Schematics/Progression/Schematic_7-1.Schematic_7-1_C'";
    case Hoverpack = "/Script/Engine.BlueprintGeneratedClass'/Game/FactoryGame/Schematics/Progression/Schematic_8-3.Schematic_8-3_C'";
    case LogisticsMk5 = "/Script/Engine.BlueprintGeneratedClass'/Game/FactoryGame/Schematics/Progression/Schematic_7-2.Schematic_7-2_C'";
    case HazmatSuit = "/Script/Engine.BlueprintGeneratedClass'/Game/FactoryGame/Schematics/Progression/Schematic_7-3.Schematic_7-3_C'";
    case ControlSystemDevelopment = "/Script/Engine.BlueprintGeneratedClass'/Game/FactoryGame/Schematics/Progression/Schematic_7-5.Schematic_7-5_C'";

    // Tier 8
    case AeronauticalEngineering = "/Script/Engine.BlueprintGeneratedClass'/Game/FactoryGame/Schematics/Progression/Schematic_7-4.Schematic_7-4_C'";
    case NuclearPower = "/Script/Engine.BlueprintGeneratedClass'/Game/FactoryGame/Schematics/Progression/Schematic_8-1.Schematic_8-1_C'";
    case AdvancedAluminumProduction = "/Script/Engine.BlueprintGeneratedClass'/Game/FactoryGame/Schematics/Progression/Schematic_8-2.Schematic_8-2_C'";
    case LeadingEdgeProduction = "/Script/Engine.BlueprintGeneratedClass'/Game/FactoryGame/Schematics/Progression/Schematic_8-4.Schematic_8-4_C'";
    case ParticleEnrichment = "/Script/Engine.BlueprintGeneratedClass'/Game/FactoryGame/Schematics/Progression/Schematic_8-5.Schematic_8-5_C'";

    // Tier 9
    case MatterConversion = "/Script/Engine.BlueprintGeneratedClass'/Game/FactoryGame/Schematics/Progression/Schematic_9-1.Schematic_9-1_C'";
    case QuantumEncoding = "/Script/Engine.BlueprintGeneratedClass'/Game/FactoryGame/Schematics/Progression/Schematic_9-2.Schematic_9-2_C'";
    case FicsitBlueprintsMk3 = "/Script/Engine.BlueprintGeneratedClass'/Game/FactoryGame/Schematics/Progression/Schematic_9-3.Schematic_9-3_C'";
    case SpatialEnergyRegulation = "/Script/Engine.BlueprintGeneratedClass'/Game/FactoryGame/Schematics/Progression/Schematic_9-4.Schematic_9-4_C'";
    case PeakEfficiency = "/Script/Engine.BlueprintGeneratedClass'/Game/FactoryGame/Schematics/Progression/Schematic_9-5.Schematic_9-5_C'";


    public function name(): string
    {
        return match ($this) {
            // Tier 1
            static::BaseBuilding => 'Base Building',
            static::Logistics => 'Logistics',
            static::FieldResearch => 'Field Research',
            // Tier 2
            static::PartAssembly => 'Part Assembly',
            static::ObstacleClearing => 'Obstacle Clearing',
            static::JumpPads => 'Jump Pads',
            static::ResourceSinkBonusProgram => 'Resource Sink Bonus Program',
            static::LogisticsMk2 => 'Logistics Mk.2',
            // Tier 3
            static::CoalPower => 'Coal Power',
            static::VehicularTransport => 'Vehicular Transport',
            static::BasicSteelProduction => 'Basic Steel Production',
            static::EnhancedAssetSecurity => 'Enhanced Asset Security',
            // Tier 4
            static::FicsitBlueprints => 'FICSIT Blueprints',
            static::LogisticsMk3 => 'Logistics Mk.3',
            static::AdvancedSteelProduction => 'Advanced Steel Production',
            static::ExpandedPowerInfrastructure => 'Expanded Power Infrastructure',
            static::Hypertubes => 'Hypertubes',
            // Tier 5
            static::Jetpack => 'Jetpack',
            static::OilProcessing => 'Oil Processing',
            static::LogisticsMk4 => 'Logistics Mk.4',
            static::FluidPackaging => 'Fluid Packaging',
            static::PetroleumPower => 'Petroleum Power',
            // Tier 6
            static::IndustrialManufacturing => 'Industrial Manufacturing',
            static::MonorailTrainTechnology => 'Monorail Train Technology',
            static::RailwaySignaling => 'Railway Signaling',
            static::PipelineEngineeringMk2 => 'Pipeline Engineering Mk.2',
            static::FicsitBlueprintsMk2 => 'Ficsit Blueprints Mk.2',
            // Tier 7
            static::BauxiteRefinement => 'Bauxite Refinement',
            static::Hoverpack => 'Hoverpack',
            static::LogisticsMk5 => 'Logistics Mk.5',
            static::HazmatSuit => 'Hazmat Suit',
            static::ControlSystemDevelopment => 'Control System Development',
            // Tier 8
            static::AeronauticalEngineering => 'Aeronautical Engineering',
            static::NuclearPower => 'Nuclear Power',
            static::AdvancedAluminumProduction => 'Advanced Aluminum Production',
            static::LeadingEdgeProduction => 'Leading-Edge Production',
            static::ParticleEnrichment => 'Particle Enrichment',
            // Tier 9
            static::MatterConversion => 'Matter Conversion',
            static::QuantumEncoding => 'Quantum Encoding',
            static::FicsitBlueprintsMk3 => 'FICSIT Blueprints Mk.3',
            static::SpatialEnergyRegulation => 'Spatial Energy Regulation',
            static::PeakEfficiency => 'Peak Efficiency',

            default => $this->value
        };
    }

    public function tier(): int
    {
        return match ($this) {
            static::BaseBuilding,
            static::Logistics,
            static::FieldResearch => 1,

            static::PartAssembly,
            static::ObstacleClearing,
            static::JumpPads,
            static::ResourceSinkBonusProgram,
            static::LogisticsMk2 => 2,

            static::CoalPower,
            static::VehicularTransport,
            static::BasicSteelProduction,
            static::EnhancedAssetSecurity => 3,

            static::FicsitBlueprints,
            static::LogisticsMk3,
            static::AdvancedSteelProduction,
            static::ExpandedPowerInfrastructure,
            static::Hypertubes => 4,

            static::Jetpack,
            static::OilProcessing,
            static::LogisticsMk4,
            static::FluidPackaging,
            static::PetroleumPower => 5,

            static::IndustrialManufacturing,
            static::MonorailTrainTechnology,
            static::RailwaySignaling,
            static::PipelineEngineeringMk2,
            static::FicsitBlueprintsMk2 => 6,

            static::BauxiteRefinement,
            static::Hoverpack,
            static::LogisticsMk5,
            static::HazmatSuit,
            static::ControlSystemDevelopment => 7,

            static::AeronauticalEngineering,
            static::NuclearPower,
            static::AdvancedAluminumProduction,
            static::LeadingEdgeProduction,
            static::ParticleEnrichment => 8,

            static::MatterConversion,
            static::QuantumEncoding,
            static::FicsitBlueprintsMk3,
            static::SpatialEnergyRegulation,
            static::PeakEfficiency => 9,

            default => 0
        };
    }

    public function subtier(): int
    {
        return match ($this) {
            static::BaseBuilding,
            static::PartAssembly,
            static::CoalPower,
            static::FicsitBlueprints,
            static::Jetpack,
            static::IndustrialManufacturing,
            static::BauxiteRefinement,
            static::AeronauticalEngineering,
            static::MatterConversion => 1,

            static::Logistics,
            static::ObstacleClearing,
            static::VehicularTransport,
            static::LogisticsMk3,
            static::OilProcessing,
            static::MonorailTrainTechnology,
            static::Hoverpack,
            static::NuclearPower,
            static::QuantumEncoding => 2,

            static::FieldResearch,
            static::JumpPads,
            static::BasicSteelProduction,
            static::AdvancedSteelProduction,
            static::LogisticsMk4,
            static::RailwaySignaling,
            static::LogisticsMk5,
            static::AdvancedAluminumProduction,
            static::FicsitBlueprintsMk3 => 3,

            static::ResourceSinkBonusProgram,
            static::EnhancedAssetSecurity,
            static::ExpandedPowerInfrastructure,
            static::FluidPackaging,
            static::PipelineEngineeringMk2,
            static::HazmatSuit,
            static::LeadingEdgeProduction,
            static::SpatialEnergyRegulation => 4,

            static::LogisticsMk2,
            static::Hypertubes,
            static::PetroleumPower,
            static::FicsitBlueprintsMk2,
            static::ControlSystemDevelopment,
            static::ParticleEnrichment,
            static::PeakEfficiency => 5,

            default => 0
        };
    }

    public function description(): string
    {
        return $this->name() . ($this->tier() > 0 ? ' (' . $this->tier() . '.' . $this->subtier() . ')' : '');
    }
}