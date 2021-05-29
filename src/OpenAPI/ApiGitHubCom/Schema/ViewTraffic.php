<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class ViewTraffic
{
    public const SCHEMA_TITLE       = 'View Traffic';
    public const SCHEMA_DESCRIPTION = 'View Traffic';
    private ?int $count             = null;
    private ?int $uniques           = null;
    private array $views            = [];

    public function count(): ?int
    {
        return $this->count;
    }

    public function uniques(): ?int
    {
        return $this->uniques;
    }

    /**
     * @return array<Traffic>
     */
    public function views(): array
    {
        return $this->views;
    }
}
