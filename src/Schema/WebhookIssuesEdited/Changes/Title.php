<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookIssuesEdited\Changes;

final readonly class Title
{
    public const SCHEMA_JSON         = '{
    "required": [
        "from"
    ],
    "type": "object",
    "properties": {
        "from": {
            "type": "string",
            "description": "The previous version of the title."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "from": "generated"
}';

    /**
     * from: The previous version of the title.
     */
    public function __construct(public string $from)
    {
    }
}
