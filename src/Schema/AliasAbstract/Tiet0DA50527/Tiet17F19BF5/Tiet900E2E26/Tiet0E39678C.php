<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\Tiet0DA50527\Tiet17F19BF5\Tiet900E2E26;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class Tiet0E39678C
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
    public Schema\WebhookProjectsV2ItemArchived\Changes\ArchivedAt|null $archivedAt,)
    {
    }
}
