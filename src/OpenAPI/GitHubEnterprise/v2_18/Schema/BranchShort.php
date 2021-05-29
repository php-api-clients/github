<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema;

final class BranchShort
{
    public const SCHEMA_TITLE       = 'Branch Short';
    public const SCHEMA_DESCRIPTION = 'Branch Short';
    private ?string $name           = null;
    private array $commit           = [];
    private ?bool $protected        = null;

    public function name(): ?string
    {
        return $this->name;
    }

    public function commit(): array
    {
        return $this->commit;
    }

    public function protected(): ?bool
    {
        return $this->protected;
    }
}
