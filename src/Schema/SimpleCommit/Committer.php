<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\SimpleCommit;

final readonly class Committer
{
    public const SCHEMA_JSON         = '{
    "required": [
        "name",
        "email"
    ],
    "type": [
        "object",
        "null"
    ],
    "properties": {
        "name": {
            "type": "string",
            "description": "Name of the commit\'s committer",
            "examples": [
                "Monalisa Octocat"
            ]
        },
        "email": {
            "type": "string",
            "description": "Git email address of the commit\'s committer",
            "format": "email",
            "examples": [
                "monalisa.octocat@example.com"
            ]
        }
    },
    "description": "Information about the Git committer"
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'Information about the Git committer';
    public const SCHEMA_EXAMPLE_DATA = '{
    "name": "Monalisa Octocat",
    "email": "monalisa.octocat@example.com"
}';

    /**
     * name: Name of the commit's committer
     * email: Git email address of the commit's committer
     */
    public function __construct(public string $name, public string $email)
    {
    }
}
