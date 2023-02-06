<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class LinkWithType
{
    public const SCHEMA_JSON = '{"title":"Link With Type","required":["href","type"],"type":"object","properties":{"href":{"type":"string"},"type":{"type":"string"}},"description":"Hypermedia Link with Type"}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'Link With Type';
    public const SCHEMA_DESCRIPTION = 'Hypermedia Link with Type';
    public readonly string $href;
    public readonly string $type;
    public function __construct(string $href, string $type)
    {
        $this->href = $href;
        $this->type = $type;
    }
}
