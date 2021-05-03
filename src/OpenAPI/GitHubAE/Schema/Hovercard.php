<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class Hovercard
{
    public const SCHEMA_TITLE = 'Hovercard';
    public const SPL_HASH = '000000001d5ba37600000000544e0d87';
    public const SCHEMA_DESCRIPTION = 'Hovercard';
    private array $contexts = array();
    public function contexts() : array
    {
        return $this->contexts;
    }
}
