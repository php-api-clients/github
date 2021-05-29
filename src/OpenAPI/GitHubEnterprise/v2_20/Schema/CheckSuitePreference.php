<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema;

final class CheckSuitePreference
{
    public const SCHEMA_TITLE       = 'Check Suite Preference';
    public const SCHEMA_DESCRIPTION = 'Check suite configuration preferences for a repository.';
    private array $preferences      = [];
    /**
     * Minimal Repository
     */
    private array $repository = [];

    public function preferences(): array
    {
        return $this->preferences;
    }

    public function repository(): array
    {
        return $this->repository;
    }
}
