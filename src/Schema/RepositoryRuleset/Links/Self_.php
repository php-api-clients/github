<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\RepositoryRuleset\Links;

final readonly class Self_
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "href": {
            "type": "string",
            "description": "The URL of the ruleset"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "href": "generated"
}';

    /**
     * href: The URL of the ruleset
     */
    public function __construct(public string|null $href)
    {
    }
}
