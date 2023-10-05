<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

final readonly class PreventSelfReview
{
    public const SCHEMA_JSON         = '{
    "type": "boolean",
    "description": "Whether or not a user who created the job is prevented from approving their own job.",
    "examples": [
        false
    ]
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'Whether or not a user who created the job is prevented from approving their own job.';
    public const SCHEMA_EXAMPLE_DATA = '[]';

    public function __construct()
    {
    }
}
