<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\RepositoryRuleViolationError;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class Metadata
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "secret_scanning": {
            "type": "object",
            "properties": {
                "bypass_placeholders": {
                    "type": "array",
                    "items": {
                        "type": "object",
                        "properties": {
                            "placeholder_id": {
                                "type": "string",
                                "description": "The ID of the push protection bypass placeholder. This value is returned on any push protected routes."
                            },
                            "token_type": {
                                "type": "string"
                            }
                        }
                    }
                }
            }
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "secret_scanning": {
        "bypass_placeholders": [
            {
                "placeholder_id": "generated",
                "token_type": "generated"
            },
            {
                "placeholder_id": "generated",
                "token_type": "generated"
            }
        ]
    }
}';

    public function __construct(#[MapFrom('secret_scanning')]
    public Schema\RepositoryRuleViolationError\Metadata\SecretScanning|null $secretScanning,)
    {
    }
}
