<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Repos\CreateInOrg\Request\ApplicationJson;

final readonly class CustomProperties
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "description": "The custom properties for the new respository. The keys are the custom property names, and the values are the corresponding custom property values.",
    "additionalProperties": true
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'The custom properties for the new respository. The keys are the custom property names, and the values are the corresponding custom property values.';
    public const SCHEMA_EXAMPLE_DATA = '[]';

    public function __construct()
    {
    }
}
