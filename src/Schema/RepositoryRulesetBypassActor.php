<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class RepositoryRulesetBypassActor
{
    public const SCHEMA_JSON         = '{"title":"Repository Ruleset Bypass Actor","type":"object","properties":{"actor_id":{"type":"integer","description":"The ID of the actor that can bypass a ruleset"},"actor_type":{"enum":["Team","Integration"],"type":"string","description":"The type of actor that can bypass a ruleset"}},"description":"An actor that can bypass rules in a ruleset"}';
    public const SCHEMA_TITLE        = 'Repository Ruleset Bypass Actor';
    public const SCHEMA_DESCRIPTION  = 'An actor that can bypass rules in a ruleset';
    public const SCHEMA_EXAMPLE_DATA = '{"actor_id":13,"actor_type":"Team"}';

    /**
     * actorId: The ID of the actor that can bypass a ruleset
     * actorType: The type of actor that can bypass a ruleset
     */
    public function __construct(#[MapFrom('actor_id')] public ?int $actorId, #[MapFrom('actor_type')] public ?string $actorType)
    {
    }
}
