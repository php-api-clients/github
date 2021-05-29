<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class CloneTraffic
{
    public const SCHEMA_TITLE       = 'Clone Traffic';
    public const SCHEMA_DESCRIPTION = 'Clone Traffic';
    private ?int $count             = null;
    private ?int $uniques           = null;
    /**
     * @var array<Traffic>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Traffic::class)
     */
    private array $clones = [];

    public function count(): ?int
    {
        return $this->count;
    }

    public function uniques(): ?int
    {
        return $this->uniques;
    }

    public function clones(): array
    {
        return $this->clones;
    }
}
