<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

final readonly class SearchResultTextMatches
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"object_url":{"type":"string"},"object_type":{"type":["string","null"]},"property":{"type":"string"},"fragment":{"type":"string"},"matches":{"type":"array","items":{"type":"object","properties":{"text":{"type":"string"},"indices":{"type":"array","items":{"type":"integer"}}}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?string $object_url;
    public ?string $object_type;
    public ?string $property;
    public ?string $fragment;
    public ?array $matches;
    public function __construct(string $object_url, string $object_type, string $property, string $fragment, array $matches)
    {
        $this->object_url = $object_url;
        $this->object_type = $object_type;
        $this->property = $property;
        $this->fragment = $fragment;
        $this->matches = $matches;
    }
}
