<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class RulesetVersion
{
    public const SCHEMA_JSON         = '{
    "title": "Ruleset version",
    "required": [
        "version_id",
        "actor",
        "updated_at"
    ],
    "type": "object",
    "properties": {
        "version_id": {
            "type": "integer",
            "description": "The ID of the previous version of the ruleset"
        },
        "actor": {
            "type": "object",
            "properties": {
                "id": {
                    "type": "integer"
                },
                "type": {
                    "type": "string"
                }
            },
            "description": "The actor who updated the ruleset"
        },
        "updated_at": {
            "type": "string",
            "format": "date-time"
        }
    },
    "description": "The historical version of a ruleset"
}';
    public const SCHEMA_TITLE        = 'Ruleset version';
    public const SCHEMA_DESCRIPTION  = 'The historical version of a ruleset';
    public const SCHEMA_EXAMPLE_DATA = '{
    "version_id": 10,
    "actor": {
        "id": 2,
        "type": "generated"
    },
    "updated_at": "1970-01-01T00:00:00+00:00"
}';

    /**
     * versionId: The ID of the previous version of the ruleset
     * actor: The actor who updated the ruleset
     */
    public function __construct(#[MapFrom('version_id')]
    public int $versionId, public Schema\RulesetVersion\Actor $actor, #[MapFrom('updated_at')]
    public string $updatedAt,)
    {
    }
}
