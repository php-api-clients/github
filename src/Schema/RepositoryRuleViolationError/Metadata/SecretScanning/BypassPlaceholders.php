<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\RepositoryRuleViolationError\Metadata\SecretScanning;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class BypassPlaceholders
{
    public const SCHEMA_JSON         = '{
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
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "placeholder_id": "generated",
    "token_type": "generated"
}';

    /**
     * placeholderId: The ID of the push protection bypass placeholder. This value is returned on any push protected routes.
     */
    public function __construct(#[MapFrom('placeholder_id')]
    public string|null $placeholderId, #[MapFrom('token_type')]
    public string|null $tokenType,)
    {
    }
}
