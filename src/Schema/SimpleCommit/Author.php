<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\SimpleCommit;

final readonly class Author
{
    public const SCHEMA_JSON         = '{"required":["name","email"],"type":["object","null"],"properties":{"name":{"type":"string"},"email":{"type":"string"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"generated","email":"generated"}';

    public function __construct(public string $name, public string $email)
    {
    }
}
