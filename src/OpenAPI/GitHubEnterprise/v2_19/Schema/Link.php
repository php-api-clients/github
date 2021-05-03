<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema;

final class Link
{
    public const SCHEMA_TITLE = 'Link';
    public const SCHEMA_DESCRIPTION = 'Hypermedia Link';
    private ?string $href = null;
    public function href() : ?string
    {
        return $this->href;
    }
}
