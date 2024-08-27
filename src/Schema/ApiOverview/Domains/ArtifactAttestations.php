<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\ApiOverview\Domains;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ArtifactAttestations
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "trust_domain": {
            "type": "string",
            "examples": [
                "example"
            ]
        },
        "services": {
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
    "trust_domain": "example",
    "services": [
        "generated",
        "generated"
    ]
}';

    public function __construct(#[MapFrom('trust_domain')]
    public string|null $trustDomain, public array|null $services,)
    {
    }
}
