<?php

namespace ApiClients\Client\Github\OpenAPI\Schema;

final class Hovercard
{
    public const SCHEMA_TITLE = 'Hovercard';
    public const SCHEMA_DESCRIPTION = 'Hovercard';
    private array $contexts;
    public function contexts() : array
    {
        return $this->contexts;
    }
}
