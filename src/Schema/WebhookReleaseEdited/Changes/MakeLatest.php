<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookReleaseEdited\Changes;

final readonly class MakeLatest
{
    public const SCHEMA_JSON         = '{
    "required": [
        "to"
    ],
    "type": "object",
    "properties": {
        "to": {
            "type": "boolean",
            "description": "Whether this release was explicitly `edited` to be the latest."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "to": false
}';

    /**
     * to: Whether this release was explicitly `edited` to be the latest.
     */
    public function __construct(public bool $to)
    {
    }
}
