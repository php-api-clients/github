<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookRegistryPackagePublished\RegistryPackage;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Registry
{
    public const SCHEMA_JSON         = '{
    "type": [
        "object",
        "null"
    ],
    "properties": {
        "about_url": {
            "type": "string"
        },
        "name": {
            "type": "string"
        },
        "type": {
            "type": "string"
        },
        "url": {
            "type": "string"
        },
        "vendor": {
            "type": "string"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "about_url": "generated",
    "name": "generated",
    "type": "generated",
    "url": "generated",
    "vendor": "generated"
}';

    public function __construct(#[MapFrom('about_url')]
    public string|null $aboutUrl, public string|null $name, public string|null $type, public string|null $url, public string|null $vendor,)
    {
    }
}
