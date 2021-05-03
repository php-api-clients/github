<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema;

final class Link
{
    public const SCHEMA_TITLE = 'Link';
    public const SPL_HASH = '000000005d4c99ed000000005494ca51';
    public const SCHEMA_DESCRIPTION = 'Hypermedia Link';
    private ?string $href = null;
    public function href() : ?string
    {
        return $this->href;
    }
}
