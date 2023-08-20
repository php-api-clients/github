<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class MarketplaceAccount
{
    public const SCHEMA_JSON         = '{
    "title": "Marketplace Account",
    "required": [
        "url",
        "id",
        "type",
        "login"
    ],
    "type": "object",
    "properties": {
        "url": {
            "type": "string",
            "format": "uri"
        },
        "id": {
            "type": "integer"
        },
        "type": {
            "type": "string"
        },
        "node_id": {
            "type": "string"
        },
        "login": {
            "type": "string"
        },
        "email": {
            "type": [
                "string",
                "null"
            ],
            "format": "email"
        },
        "organization_billing_email": {
            "type": [
                "string",
                "null"
            ],
            "format": "email"
        }
    }
}';
    public const SCHEMA_TITLE        = 'Marketplace Account';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "url": "https:\\/\\/example.com\\/",
    "id": 2,
    "type": "generated",
    "node_id": "generated",
    "login": "generated",
    "email": "hi@example.com",
    "organization_billing_email": "hi@example.com"
}';

    public function __construct(public string $url, public int $id, public string $type, #[MapFrom('node_id')]
    public string|null $nodeId, public string $login, public string|null $email, #[MapFrom('organization_billing_email')]
    public string|null $organizationBillingEmail,)
    {
    }
}
