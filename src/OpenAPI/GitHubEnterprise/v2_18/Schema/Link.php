<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema;

final class Link
{
    public const SCHEMA_TITLE = 'Link';
    public const SPL_HASH = '000000000c92e74d000000006ad867a6';
    public const SCHEMA_DESCRIPTION = 'Hypermedia Link';
    private ?string $href = null;
    public function href() : ?string
    {
        return $this->href;
    }
}
