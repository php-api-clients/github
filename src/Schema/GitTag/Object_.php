<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\GitTag;

final readonly class Object_
{
    public const SCHEMA_JSON         = '{"required":["sha","type","url"],"type":"object","properties":{"sha":{"type":"string"},"type":{"type":"string"},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"sha":"generated_sha_null","type":"generated_type_null","url":"https:\\/\\/example.com\\/"}';

    public function __construct(public string $sha, public string $type, public string $url)
    {
    }
}
