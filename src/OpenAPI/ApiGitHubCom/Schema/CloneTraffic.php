<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class CloneTraffic
{
    public const SCHEMA_TITLE       = 'Clone Traffic';
    public const SCHEMA_DESCRIPTION = 'Clone Traffic';
    private ?int $count             = null;
    private ?int $uniques           = null;
    private array $clones           = [];

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
    public function clones(): array
    {
        return $this->clones;
    }
}
