<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema;

final class LinkWithType
{
    public const SCHEMA_TITLE = 'Link With Type';
    public const SPL_HASH = '0000000045a0e95d0000000057b08344';
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
