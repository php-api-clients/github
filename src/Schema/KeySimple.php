<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

final readonly class KeySimple
{
    public const SCHEMA_JSON         = '{"title":"Key Simple","required":["key","id"],"type":"object","properties":{"id":{"type":"integer"},"key":{"type":"string"}},"description":"Key Simple"}';
    public const SCHEMA_TITLE        = 'Key Simple';
    public const SCHEMA_DESCRIPTION  = 'Key Simple';
    public const SCHEMA_EXAMPLE_DATA = '{"id":2,"key":"generated"}';

    public function __construct(public int $id, public string $key)
    {
    }
}
