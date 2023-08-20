<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

final readonly class SecurityAdvisoryEcosystems
{
    public const SCHEMA_JSON         = '{
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
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'The package\'s language or package management ecosystem.';
    public const SCHEMA_EXAMPLE_DATA = '[]';

    public function __construct()
    {
    }
}
