<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\Tiet86F9A480\Tiet277FEAC6\TietCB8279F9;

use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class TietBB12F394
{
    public const SCHEMA_JSON         = '{
    "required": [
        "reviewer_id",
        "reviewer_type"
    ],
    "type": "object",
    "properties": {
        "reviewer_id": {
            "type": "integer",
            "description": "The ID of the team or role selected as a bypass reviewer"
        },
        "reviewer_type": {
            "enum": [
                "TEAM",
                "ROLE"
            ],
            "type": "string",
            "description": "The type of the bypass reviewer"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "reviewer_id": 11,
    "reviewer_type": "TEAM"
}';

    /**
     * reviewerId: The ID of the team or role selected as a bypass reviewer
     * reviewerType: The type of the bypass reviewer
     */
    public function __construct(#[MapFrom('reviewer_id')]
    public int $reviewerId, #[MapFrom('reviewer_type')]
    public string $reviewerType,)
    {
    }
}
