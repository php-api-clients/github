<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookCustomPropertyDeleted;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Definition
{
    public const SCHEMA_JSON         = '{
    "required": [
        "property_name"
    ],
    "type": "object",
    "properties": {
        "property_name": {
            "type": "string",
            "description": "The name of the property that was deleted."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "property_name": "generated"
}';

    /**
     * propertyName: The name of the property that was deleted.
     */
    public function __construct(#[MapFrom('property_name')]
    public string $propertyName,)
    {
    }
}
