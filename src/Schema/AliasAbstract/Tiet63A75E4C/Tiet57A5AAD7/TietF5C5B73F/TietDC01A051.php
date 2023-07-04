<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\Tiet63A75E4C\Tiet57A5AAD7\TietF5C5B73F;

abstract readonly class TietDC01A051
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"from":{"type":["string","null"],"format":"date-time"},"to":{"type":["string","null"],"format":"date-time"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"from":"1970-01-01T00:00:00+00:00","to":"1970-01-01T00:00:00+00:00"}';

    public function __construct(public string|null $from, public string|null $to)
    {
    }
}
