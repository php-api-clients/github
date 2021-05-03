<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class Hovercard
{
    public const SCHEMA_TITLE = 'Hovercard';
    public const SPL_HASH = '000000005dfddcb30000000040885a06';
    public const SCHEMA_DESCRIPTION = 'Hovercard';
    private array $contexts = array();
    public function contexts() : array
    {
        return $this->contexts;
    }
}
