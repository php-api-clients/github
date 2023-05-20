<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema;

final readonly class BranchShort
{
    public const SCHEMA_JSON         = '{"title":"Branch Short","required":["name","commit","protected"],"type":"object","properties":{"name":{"type":"string"},"commit":{"required":["sha","url"],"type":"object","properties":{"sha":{"type":"string"},"url":{"type":"string"}}},"protected":{"type":"boolean"}},"description":"Branch Short"}';
    public const SCHEMA_TITLE        = 'Branch Short';
    public const SCHEMA_DESCRIPTION  = 'Branch Short';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"generated","commit":{"sha":"generated","url":"generated"},"protected":false}';

    public function __construct(public string $name, public Schema\BranchShort\Commit $commit, public bool $protected)
    {
    }
}
