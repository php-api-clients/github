<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

final readonly class Traffic
{
    public const SCHEMA_JSON         = '{"title":"Traffic","required":["timestamp","uniques","count"],"type":"object","properties":{"timestamp":{"type":"string","format":"date-time"},"uniques":{"type":"integer"},"count":{"type":"integer"}}}';
    public const SCHEMA_TITLE        = 'Traffic';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"timestamp":"1970-01-01T00:00:00+00:00","uniques":13,"count":13}';

    public function __construct(public string $timestamp, public int $uniques, public int $count)
    {
    }
}
