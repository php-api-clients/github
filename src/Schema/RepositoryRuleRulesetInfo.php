<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class RepositoryRuleRulesetInfo
{
    public const SCHEMA_JSON         = '{
    "title": "repository ruleset data for rule",
    "properties": {
        "ruleset_source_type": {
            "enum": [
                "Repository",
                "Organization"
            ],
            "type": "string",
            "description": "The type of source for the ruleset that includes this rule."
        },
        "ruleset_source": {
            "type": "string",
            "description": "The name of the source of the ruleset that includes this rule."
        },
        "ruleset_id": {
            "type": "integer",
            "description": "The ID of the ruleset that includes this rule."
        }
    },
    "description": "User-defined metadata to store domain-specific information limited to 8 keys with scalar values."
}';
    public const SCHEMA_TITLE        = 'repository ruleset data for rule';
    public const SCHEMA_DESCRIPTION  = 'User-defined metadata to store domain-specific information limited to 8 keys with scalar values.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "ruleset_source_type": "Repository",
    "ruleset_source": "generated",
    "ruleset_id": 10
}';

    /**
     * rulesetSourceType: The type of source for the ruleset that includes this rule.
     * rulesetSource: The name of the source of the ruleset that includes this rule.
     * rulesetId: The ID of the ruleset that includes this rule.
     */
    public function __construct(#[MapFrom('ruleset_source_type')]
    public string|null $rulesetSourceType, #[MapFrom('ruleset_source')]
    public string|null $rulesetSource, #[MapFrom('ruleset_id')]
    public int|null $rulesetId,)
    {
    }
}
