<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema;

final class LinkWithType
{
    public const SCHEMA_TITLE = 'Link With Type';
    public const SPL_HASH = '000000005d4c92bc000000005494ca51';
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
