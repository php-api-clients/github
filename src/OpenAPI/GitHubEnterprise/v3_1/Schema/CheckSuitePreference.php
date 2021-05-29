<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class CheckSuitePreference
{
    public const SCHEMA_TITLE       = 'Check Suite Preference';
    public const SCHEMA_DESCRIPTION = 'Check suite configuration preferences for a repository.';
    private array $preferences      = [];
    /**
     * Minimal Repository
     *
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\MinimalRepository::class)
     */
    private ?MinimalRepository $repository = null;

    public function preferences(): array
    {
        return $this->preferences;
    }

    /**
     * Minimal Repository
     */
    public function repository(): ?MinimalRepository
    {
        return $this->repository;
    }
}
