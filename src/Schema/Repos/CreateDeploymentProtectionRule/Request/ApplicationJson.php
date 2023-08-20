<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Repos\CreateDeploymentProtectionRule\Request;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "integration_id": {
            "type": "integer",
            "description": "The ID of the custom app that will be enabled on the environment."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "integration_id": 14
}';

    /**
     * integrationId: The ID of the custom app that will be enabled on the environment.
     */
    public function __construct(#[MapFrom('integration_id')]
    public int|null $integrationId,)
    {
    }
}
