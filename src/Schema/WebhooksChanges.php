<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema;

final readonly class WebhooksChanges
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "body": {
            "required": [
                "from"
            ],
            "type": "object",
            "properties": {
                "from": {
                    "type": "string",
                    "description": "The previous version of the body."
                }
            }
        }
    },
    "description": "The changes to the comment."
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'The changes to the comment.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "body": {
        "from": "generated"
    }
}';

    public function __construct(public Schema\WebhooksChanges\Body|null $body)
    {
    }
}
