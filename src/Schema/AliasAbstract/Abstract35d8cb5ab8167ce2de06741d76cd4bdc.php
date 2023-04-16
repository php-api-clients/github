<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract;

abstract readonly class Abstract35d8cb5ab8167ce2de06741d76cd4bdc
{
    public const SCHEMA_JSON         = '{"required":["identifier"],"type":["object","null"],"properties":{"identifier":{"type":"string"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"identifier":"generated_identifier_null"}';

    public function __construct(public string $identifier)
    {
    }
}
