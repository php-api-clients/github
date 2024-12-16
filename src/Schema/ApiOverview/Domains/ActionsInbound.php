<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\ApiOverview\Domains;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ActionsInbound
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "full_domains": {
            "type": "array",
            "items": {
                "type": "string",
                "examples": [
                    "example.com"
                ]
            }
        },
        "wildcard_domains": {
            "type": "array",
            "items": {
                "type": "string",
                "examples": [
                    "example.com"
                ]
            }
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "full_domains": [
        "generated",
        "generated"
    ],
    "wildcard_domains": [
        "generated",
        "generated"
    ]
}';

    public function __construct(#[MapFrom('full_domains')]
    public array|null $fullDomains, #[MapFrom('wildcard_domains')]
    public array|null $wildcardDomains,)
    {
    }
}
