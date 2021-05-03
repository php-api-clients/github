<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class LinkWithType
{
    public const SCHEMA_TITLE = 'Link With Type';
    public const SPL_HASH = '000000001ef899e6000000007fdcfded';
    public const SCHEMA_DESCRIPTION = 'Hypermedia Link with Type';
    private ?string $href = null;
    private ?string $type = null;
    public function href() : ?string
    {
        return $this->href;
    }
    public function type() : ?string
    {
        return $this->type;
    }
}
