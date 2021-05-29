<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class CommitActivity
{
    public const SCHEMA_TITLE       = 'Commit Activity';
    public const SCHEMA_DESCRIPTION = 'Commit Activity';
    private array $days             = [];
    private ?int $total             = null;
    private ?int $week              = null;

    public function days(): array
    {
        return $this->days;
    }

    public function total(): ?int
    {
        return $this->total;
    }

    public function week(): ?int
    {
        return $this->week;
    }
}
