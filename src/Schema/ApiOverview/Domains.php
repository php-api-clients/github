<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\ApiOverview;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class Domains
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "website": {
            "type": "array",
            "items": {
                "type": "string",
                "examples": [
                    "example.com"
                ]
            }
        },
        "codespaces": {
            "type": "array",
            "items": {
                "type": "string",
                "examples": [
                    "example.com"
                ]
            }
        },
        "copilot": {
            "type": "array",
            "items": {
                "type": "string",
                "examples": [
                    "example.com"
                ]
            }
        },
        "packages": {
            "type": "array",
            "items": {
                "type": "string",
                "examples": [
                    "example.com"
                ]
            }
        },
        "actions": {
            "type": "array",
            "items": {
                "type": "string",
                "examples": [
                    "example.com"
                ]
            }
        },
        "artifact_attestations": {
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
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "website": [
        "generated",
        "generated"
    ],
    "codespaces": [
        "generated",
        "generated"
    ],
    "copilot": [
        "generated",
        "generated"
    ],
    "packages": [
        "generated",
        "generated"
    ],
    "actions": [
        "generated",
        "generated"
    ],
    "artifact_attestations": {
        "trust_domain": "example",
        "services": [
            "generated",
            "generated"
        ]
    }
}';

    public function __construct(public array|null $website, public array|null $codespaces, public array|null $copilot, public array|null $packages, public array|null $actions, #[MapFrom('artifact_attestations')]
    public Schema\ApiOverview\Domains\ArtifactAttestations|null $artifactAttestations,)
    {
    }
}
