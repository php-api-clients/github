<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema;

final class Link
{
    public const SCHEMA_TITLE = 'Link';
    public const SPL_HASH = '00000000269f22f100000000005e85e5';
    public const SCHEMA_DESCRIPTION = 'Hypermedia Link';
    private ?string $href = null;
    public function href() : ?string
    {
        return $this->href;
    }
}
