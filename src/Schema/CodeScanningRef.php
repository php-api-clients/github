<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

final readonly class CodeScanningRef
{
    public const SCHEMA_JSON         = '{
    "type": "string",
    "description": "The Git reference, formatted as `refs\\/pull\\/<number>\\/merge`, `refs\\/pull\\/<number>\\/head`,\\n`refs\\/heads\\/<branch name>` or simply `<branch name>`."
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'The Git reference, formatted as `refs/pull/<number>/merge`, `refs/pull/<number>/head`,
`refs/heads/<branch name>` or simply `<branch name>`.';
    public const SCHEMA_EXAMPLE_DATA = '[]';

    public function __construct()
    {
    }
}
