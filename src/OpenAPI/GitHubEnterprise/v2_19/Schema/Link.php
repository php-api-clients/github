<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema;

final class Link
{
    public const SCHEMA_TITLE = 'Link';
    public const SPL_HASH = '0000000015935833000000001856c88e';
    public const SCHEMA_DESCRIPTION = 'Hypermedia Link';
    private string $href;
    public function href() : string
    {
        return $this->href;
    }
}
