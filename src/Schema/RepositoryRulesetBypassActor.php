<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class RepositoryRulesetBypassActor
{
    public const SCHEMA_JSON         = '{
    "title": "Repository Ruleset Bypass Actor",
    "required": [
        "actor_type",
        "bypass_mode"
    ],
    "type": "object",
    "properties": {
        "actor_id": {
            "type": [
                "integer",
                "null"
            ],
            "description": "The ID of the actor that can bypass a ruleset. If `actor_type` is `OrganizationAdmin`, this should be `1`. If `actor_type` is `DeployKey`, this should be null. `OrganizationAdmin` is not applicable for personal repositories.\\n"
        },
        "actor_type": {
            "enum": [
                "Integration",
                "OrganizationAdmin",
                "RepositoryRole",
                "Team",
                "DeployKey"
            ],
            "type": "string",
            "description": "The type of actor that can bypass a ruleset.\\n"
        },
        "bypass_mode": {
            "enum": [
                "always",
                "pull_request"
            ],
            "type": "string",
            "description": "When the specified actor can bypass the ruleset. `pull_request` means that an actor can only bypass rules on pull requests. `pull_request` is not applicable for the `DeployKey` actor type.\\n"
        }
    },
    "description": "An actor that can bypass rules in a ruleset"
}';
    public const SCHEMA_TITLE        = 'Repository Ruleset Bypass Actor';
    public const SCHEMA_DESCRIPTION  = 'An actor that can bypass rules in a ruleset';
    public const SCHEMA_EXAMPLE_DATA = '{
    "actor_id": 8,
    "actor_type": "DeployKey",
    "bypass_mode": "always"
}';

    /**
     * actorId: The ID of the actor that can bypass a ruleset. If `actor_type` is `OrganizationAdmin`, this should be `1`. If `actor_type` is `DeployKey`, this should be null. `OrganizationAdmin` is not applicable for personal repositories.
     * actorType: The type of actor that can bypass a ruleset.
     * bypassMode: When the specified actor can bypass the ruleset. `pull_request` means that an actor can only bypass rules on pull requests. `pull_request` is not applicable for the `DeployKey` actor type.
     */
    public function __construct(#[MapFrom('actor_id')]
    public int|null $actorId, #[MapFrom('actor_type')]
    public string $actorType, #[MapFrom('bypass_mode')]
    public string $bypassMode,)
    {
    }
}
