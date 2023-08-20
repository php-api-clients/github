<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\Tiet370EB938\Tiet2544BE96\Tiet0D047C4F;

abstract readonly class TietF5CB2139
{
    public const SCHEMA_JSON         = '{
    "required": [
        "login",
        "type"
    ],
    "type": "object",
    "properties": {
        "login": {
            "type": "string",
            "description": "The username of the user credited."
        },
        "type": {
            "enum": [
                "analyst",
                "finder",
                "reporter",
                "coordinator",
                "remediation_developer",
                "remediation_reviewer",
                "remediation_verifier",
                "tool",
                "sponsor",
                "other"
            ],
            "type": "string",
            "description": "The type of credit the user is receiving."
        }
    },
    "additionalProperties": false
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "login": "generated",
    "type": "other"
}';

    /**
     * login: The username of the user credited.
     * type: The type of credit the user is receiving.
     */
    public function __construct(public string $login, public string $type)
    {
    }
}
