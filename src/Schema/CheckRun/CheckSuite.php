<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\CheckRun;

final readonly class CheckSuite
{
    public const SCHEMA_JSON         = '{"required":["id"],"type":["object","null"],"properties":{"id":{"type":"integer"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"id":2}';

    public function __construct(public int $id)
    {
    }
}
