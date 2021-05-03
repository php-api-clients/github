<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema;

final class LinkWithType
{
    public const SCHEMA_TITLE = 'Link With Type';
    public const SPL_HASH = '000000000c92ea7f000000006ad867a6';
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
