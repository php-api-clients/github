<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

final readonly class ActionsEnabled
{
    public const SCHEMA_JSON         = '{"type":"boolean","description":"Whether GitHub Actions is enabled on the repository."}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'Whether GitHub Actions is enabled on the repository.';
    public const SCHEMA_EXAMPLE_DATA = '[]';

    public function __construct()
    {
    }
}
