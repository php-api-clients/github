<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\TietD40F0DA1\TietF52E1633\Tiet9644A5F8;

use ApiClients\Client\GitHub\Schema;

abstract readonly class TietE59F6EA8
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

    public function __construct(public Schema\WebhookIssueCommentEdited\Changes\Body|null $body)
    {
    }
}
