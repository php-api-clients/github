<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

final readonly class EnabledRepositories
{
    public const SCHEMA_JSON         = '{
    "enum": [
        "all",
        "none",
        "selected"
    ],
    "type": "string",
    "description": "The policy that controls the repositories in the organization that are allowed to run GitHub Actions."
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'The policy that controls the repositories in the organization that are allowed to run GitHub Actions.';
    public const SCHEMA_EXAMPLE_DATA = '[]';

    public function __construct()
    {
    }
}
