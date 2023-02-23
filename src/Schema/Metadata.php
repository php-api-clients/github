<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

final readonly class Metadata
{
    public const SCHEMA_JSON = '{"title":"metadata","maxProperties":8,"type":"object","description":"User-defined metadata to store domain-specific information limited to 8 keys with scalar values.","additionalProperties":{"type":["null","string","number","boolean"],"anyOf":[{"type":"string"},{"type":"number"},{"type":"boolean"}]}}';
    public const SCHEMA_TITLE = 'metadata';
    public const SCHEMA_DESCRIPTION = 'User-defined metadata to store domain-specific information limited to 8 keys with scalar values.';
    public function __construct()
    {
    }
}
