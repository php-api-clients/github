<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

final readonly class AllowedActions
{
    public const SCHEMA_JSON         = '{
    "enum": [
        "all",
        "local_only",
        "selected"
    ],
    "type": "string",
    "description": "The permissions policy that controls the actions and reusable workflows that are allowed to run."
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'The permissions policy that controls the actions and reusable workflows that are allowed to run.';
    public const SCHEMA_EXAMPLE_DATA = '[]';

    public function __construct()
    {
    }
}
