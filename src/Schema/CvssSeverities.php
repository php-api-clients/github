<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class CvssSeverities
{
    public const SCHEMA_JSON         = '{
    "type": [
        "object",
        "null"
    ],
    "properties": {
        "cvss_v3": {
            "required": [
                "vector_string",
                "score"
            ],
            "type": [
                "object",
                "null"
            ],
            "properties": {
                "vector_string": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "description": "The CVSS 3 vector string."
                },
                "score": {
                    "maximum": 10,
                    "minimum": 0,
                    "type": [
                        "number",
                        "null"
                    ],
                    "description": "The CVSS 3 score.",
                    "readOnly": true
                }
            }
        },
        "cvss_v4": {
            "required": [
                "vector_string",
                "score"
            ],
            "type": [
                "object",
                "null"
            ],
            "properties": {
                "vector_string": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "description": "The CVSS 4 vector string."
                },
                "score": {
                    "maximum": 10,
                    "minimum": 0,
                    "type": [
                        "number",
                        "null"
                    ],
                    "description": "The CVSS 4 score.",
                    "readOnly": true
                }
            }
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "cvss_v3": {
        "vector_string": "generated",
        "score": 0.5
    },
    "cvss_v4": {
        "vector_string": "generated",
        "score": 0.5
    }
}';

    public function __construct(#[MapFrom('cvss_v3')]
    public Schema\CvssSeverities\CvssVThree|null $cvssVThree, #[MapFrom('cvss_v4')]
    public Schema\CvssSeverities\CvssVFour|null $cvssVFour,)
    {
    }
}
