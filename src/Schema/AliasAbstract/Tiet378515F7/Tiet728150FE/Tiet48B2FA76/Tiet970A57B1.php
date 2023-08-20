<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\Tiet378515F7\Tiet728150FE\Tiet48B2FA76;

use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class Tiet970A57B1
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "message": {
            "type": "string"
        },
        "documentation_url": {
            "type": "string"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "message": "generated",
    "documentation_url": "generated"
}';

    public function __construct(public string|null $message, #[MapFrom('documentation_url')]
    public string|null $documentationUrl,)
    {
    }
}
