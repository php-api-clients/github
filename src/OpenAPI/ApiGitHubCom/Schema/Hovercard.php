<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class Hovercard
{
    public const SCHEMA_TITLE = 'Hovercard';
    public const SPL_HASH = '00000000084e19d90000000020f58f84';
    public const SCHEMA_DESCRIPTION = 'Hovercard';
    private array $contexts = array();
    public function contexts() : array
    {
        return $this->contexts;
    }
}
