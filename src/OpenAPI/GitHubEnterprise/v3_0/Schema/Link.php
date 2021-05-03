<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema;

final class Link
{
    public const SCHEMA_TITLE = 'Link';
    public const SPL_HASH = '0000000008b927d800000000412ebbda';
    public const SCHEMA_DESCRIPTION = 'Hypermedia Link';
    private ?string $href = null;
    public function href() : ?string
    {
        return $this->href;
    }
}
