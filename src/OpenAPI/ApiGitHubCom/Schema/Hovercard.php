<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class Hovercard
{
    public const SCHEMA_TITLE = 'Hovercard';
    public const SPL_HASH = '00000000207013250000000042193899';
    public const SCHEMA_DESCRIPTION = 'Hovercard';
    private array $contexts;
    public function contexts() : array
    {
        return $this->contexts;
    }
}
