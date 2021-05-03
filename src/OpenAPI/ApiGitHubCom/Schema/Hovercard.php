<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class Hovercard
{
    public const SCHEMA_TITLE = 'Hovercard';
    public const SPL_HASH = '000000000cd532ad0000000040effa88';
    public const SCHEMA_DESCRIPTION = 'Hovercard';
    private array $contexts = array();
    public function contexts() : array
    {
        return $this->contexts;
    }
}
