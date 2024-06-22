<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Operations\Repos\CreateAttestation\Response\ApplicationJson;

final readonly class Created
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "id": {
            "type": "integer",
            "description": "The ID of the attestation."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "id": 2
}';

    /**
     * id: The ID of the attestation.
     */
    public function __construct(public int|null $id)
    {
    }
}
