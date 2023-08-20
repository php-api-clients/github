<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\Tiet50219D5A\TietA7CA62E1\TietD2A60B5B;

abstract readonly class Tiet86219BF7
{
    public const SCHEMA_JSON         = '{
    "required": [
        "ecosystem",
        "name"
    ],
    "type": [
        "object",
        "null"
    ],
    "properties": {
        "ecosystem": {
            "enum": [
                "rubygems",
                "npm",
                "pip",
                "maven",
                "nuget",
                "composer",
                "go",
                "rust",
                "erlang",
                "actions",
                "pub",
                "other",
                "swift"
            ],
            "type": "string",
            "description": "The package\'s language or package management ecosystem."
        },
        "name": {
            "type": [
                "string",
                "null"
            ],
            "description": "The unique package name within its ecosystem."
        }
    },
    "description": "The name of the package affected by the vulnerability."
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'The name of the package affected by the vulnerability.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "ecosystem": "rubygems",
    "name": "generated"
}';

    /**
     * ecosystem: The package's language or package management ecosystem.
     * name: The unique package name within its ecosystem.
     */
    public function __construct(public string $ecosystem, public string|null $name)
    {
    }
}
