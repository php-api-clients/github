<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema;

final class LinkWithType
{
    public const SCHEMA_TITLE = 'Link With Type';
    public const SPL_HASH = '000000004a4ba1770000000021d13a21';
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
