<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class Hovercard
{
    public const SCHEMA_TITLE = 'Hovercard';
    public const SPL_HASH = '00000000252f4cd10000000029de5079';
    public const SCHEMA_DESCRIPTION = 'Hovercard';
    private array $contexts = array();
    public function contexts() : array
    {
        return $this->contexts;
    }
}
