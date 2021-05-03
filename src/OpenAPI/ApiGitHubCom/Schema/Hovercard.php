<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class Hovercard
{
    public const SCHEMA_TITLE = 'Hovercard';
    public const SPL_HASH = '0000000054d5ebaf0000000071115dec';
    public const SCHEMA_DESCRIPTION = 'Hovercard';
    private array $contexts;
    public function contexts() : array
    {
        return $this->contexts;
    }
}
