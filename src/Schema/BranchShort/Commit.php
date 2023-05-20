<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\BranchShort;

final readonly class Commit
{
    public const SCHEMA_JSON         = '{"required":["sha","url"],"type":"object","properties":{"sha":{"type":"string"},"url":{"type":"string"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"sha":"generated","url":"generated"}';

    public function __construct(public string $sha, public string $url)
    {
    }
}
