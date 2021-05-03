<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema;

final class LinkWithType
{
    public const SCHEMA_TITLE = 'Link With Type';
    public const SPL_HASH = '0000000065d65f59000000007ce49c9a';
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
