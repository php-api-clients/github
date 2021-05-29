<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema;

final class Hovercard
{
    public const SCHEMA_TITLE       = 'Hovercard';
    public const SCHEMA_DESCRIPTION = 'Hovercard';
    private array $contexts         = [];

    public function contexts(): array
    {
        return $this->contexts;
    }
}
