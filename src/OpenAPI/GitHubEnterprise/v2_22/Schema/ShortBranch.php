<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema;

final class ShortBranch
{
    public const SCHEMA_TITLE       = 'Short Branch';
    public const SCHEMA_DESCRIPTION = 'Short Branch';
    private string $name;
    private array $commit = [];
    private bool $protected;
    /**
     * Branch Protection
     *
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema\BranchProtection::class)
     */
    private BranchProtection $protection = [];
    private string $protection_url;

    public function name(): string
    {
        return $this->name;
    }

    public function commit(): array
    {
        return $this->commit;
    }

    public function protected(): bool
    {
        return $this->protected;
    }

    /**
     * Branch Protection
     */
    public function protection(): BranchProtection
    {
        return $this->protection;
    }

    public function protection_url(): string
    {
        return $this->protection_url;
    }
}
