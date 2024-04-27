<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class WebhooksProjectChanges
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "archived_at": {
            "type": "object",
            "properties": {
                "from": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "format": "date-time"
                },
                "to": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "format": "date-time"
                }
            }
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "archived_at": {
        "from": "1970-01-01T00:00:00+00:00",
        "to": "1970-01-01T00:00:00+00:00"
    }
}';

    public function __construct(#[MapFrom('archived_at')]
    public Schema\WebhooksProjectChanges\ArchivedAt|null $archivedAt,)
    {
    }
}
