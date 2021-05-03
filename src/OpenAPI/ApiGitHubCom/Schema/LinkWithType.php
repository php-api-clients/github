<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class LinkWithType
{
    public const SCHEMA_TITLE = 'Link With Type';
    public const SPL_HASH = '0000000054d5fbe10000000071115dec';
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
