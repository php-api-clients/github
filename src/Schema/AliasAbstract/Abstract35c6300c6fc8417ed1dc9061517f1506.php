<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract;

abstract readonly class Abstract35c6300c6fc8417ed1dc9061517f1506
{
    public const SCHEMA_JSON         = '{"required":["sha","url"],"type":"object","properties":{"sha":{"type":"string"},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"sha":"generated_sha_null","url":"https:\\/\\/example.com\\/"}';

    public function __construct(public string $sha, public string $url)
    {
    }
}
