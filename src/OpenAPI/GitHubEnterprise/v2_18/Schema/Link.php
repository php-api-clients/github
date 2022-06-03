<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema;

final class Link
{
    public const SCHEMA_TITLE = 'Link';
    public const SCHEMA_DESCRIPTION = 'Hypermedia Link';
    private string $href;
    public function href() : string
    {
        return $this->href;
    }
}
