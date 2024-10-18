<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\RepositoryRuleset;

use ApiClients\Client\GitHub\Schema;

final readonly class Links
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "self": {
            "type": "object",
            "properties": {
                "href": {
                    "type": "string",
                    "description": "The URL of the ruleset"
                }
            }
        },
        "html": {
            "type": [
                "object",
                "null"
            ],
            "properties": {
                "href": {
                    "type": "string",
                    "description": "The html URL of the ruleset"
                }
            }
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "self": {
        "href": "generated"
    },
    "html": {
        "href": "generated"
    }
}';

    public function __construct(public Schema\RepositoryRuleset\Links\Self_|null $self, public Schema\RepositoryRuleset\Links\Html|null $html)
    {
    }
}
