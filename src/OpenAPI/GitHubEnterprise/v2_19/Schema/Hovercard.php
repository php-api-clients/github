<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema\Hovercard\Contexts;

final class Hovercard
{
    public const SCHEMA_TITLE       = 'Hovercard';
    public const SCHEMA_DESCRIPTION = 'Hovercard';
    private array $contexts         = [];

    /**
     * @return array<Contexts>
     */
    public function contexts(): array
    {
        return $this->contexts;
    }
}
