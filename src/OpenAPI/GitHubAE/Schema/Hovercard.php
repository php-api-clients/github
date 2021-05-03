<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class Hovercard
{
    public const SCHEMA_TITLE = 'Hovercard';
    public const SPL_HASH = '000000000c1ce8230000000065732ccc';
    public const SCHEMA_DESCRIPTION = 'Hovercard';
    private array $contexts;
    public function contexts() : array
    {
        return $this->contexts;
    }
}
