<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema\Hovercard\Contexts;

final class Hovercard
{
    public const SCHEMA_TITLE       = 'Hovercard';
    public const SCHEMA_DESCRIPTION = 'Hovercard';
    /**
     * @var array<Contexts>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema\Hovercard\Contexts::class)
     */
    private array $contexts = [];

    /**
     * @return array<Contexts>
     */
    public function contexts(): array
    {
        return $this->contexts;
    }
}
