<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

final readonly class IssueEventLabel
{
    public const SCHEMA_JSON         = '{"title":"Issue Event Label","required":["name","color"],"type":"object","properties":{"name":{"type":["string","null"]},"color":{"type":["string","null"]}},"description":"Issue Event Label"}';
    public const SCHEMA_TITLE        = 'Issue Event Label';
    public const SCHEMA_DESCRIPTION  = 'Issue Event Label';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"generated","color":"generated"}';

    public function __construct(public string|null $name, public string|null $color)
    {
    }
}
