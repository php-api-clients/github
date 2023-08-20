<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\TietD34F4F2E\Tiet4FFF1066\TietAA7CD8F5;

use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class Tiet2CC7E7E7
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "allowed_port_privacy_settings": {
            "type": [
                "array",
                "null"
            ],
            "items": {
                "type": "string"
            },
            "description": "The privacy settings a user can select from when forwarding a port."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "allowed_port_privacy_settings": null
}';

    /**
     * allowedPortPrivacySettings: The privacy settings a user can select from when forwarding a port.
     */
    public function __construct(#[MapFrom('allowed_port_privacy_settings')]
    public array|null $allowedPortPrivacySettings,)
    {
    }
}
