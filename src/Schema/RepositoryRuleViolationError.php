<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class RepositoryRuleViolationError
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "message": {
            "type": "string"
        },
        "documentation_url": {
            "type": "string"
        },
        "status": {
            "type": "string"
        },
        "metadata": {
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
        }
    },
    "description": "Repository rule violation was detected"
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'Repository rule violation was detected';
    public const SCHEMA_EXAMPLE_DATA = '{
    "message": "generated",
    "documentation_url": "generated",
    "status": "generated",
    "metadata": {
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
    }
}';

    public function __construct(public string|null $message, #[MapFrom('documentation_url')]
    public string|null $documentationUrl, public string|null $status, public Schema\RepositoryRuleViolationError\Metadata|null $metadata,)
    {
    }
}
