<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class Hovercard
{
    public const SCHEMA_TITLE = 'Hovercard';
    public const SPL_HASH = '000000007ee6e06d0000000021479ea3';
    public const SCHEMA_DESCRIPTION = 'Hovercard';
    private array $contexts;
    public function contexts() : array
    {
        return $this->contexts;
    }
}
