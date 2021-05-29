<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class ViewTraffic
{
    public const SCHEMA_TITLE       = 'View Traffic';
    public const SCHEMA_DESCRIPTION = 'View Traffic';
    private ?int $count             = null;
    private ?int $uniques           = null;
    /**
     * @var array<Traffic>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Traffic::class)
     */
    private array $views = [];

    public function count(): ?int
    {
        return $this->count;
    }

    public function uniques(): ?int
    {
        return $this->uniques;
    }

    public function views(): array
    {
        return $this->views;
    }
}
