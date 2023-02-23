<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

final readonly class LinkWithType
{
    public const SCHEMA_JSON = '{"title":"Link With Type","required":["href","type"],"type":"object","properties":{"href":{"type":"string"},"type":{"type":"string"}},"description":"Hypermedia Link with Type"}';
    public const SCHEMA_TITLE = 'Link With Type';
    public const SCHEMA_DESCRIPTION = 'Hypermedia Link with Type';
    public ?string $href;
    public ?string $type;
    public function __construct(string $href, string $type)
    {
        $this->href = $href;
        $this->type = $type;
    }
}
