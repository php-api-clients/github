<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class LinkWithType
{
    public const SCHEMA_TITLE = 'Link With Type';
    public const SCHEMA_DESCRIPTION = 'Hypermedia Link with Type';
    private string $href;
    private string $type;
    public function href() : string
    {
        return $this->href;
    }
    public function type() : string
    {
        return $this->type;
    }
}
