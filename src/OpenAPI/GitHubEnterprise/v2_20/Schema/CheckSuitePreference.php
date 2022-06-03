<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema;

final class CheckSuitePreference
{
    public const SCHEMA_TITLE = 'Check Suite Preference';
    public const SCHEMA_DESCRIPTION = 'Check suite configuration preferences for a repository.';
    private array $preferences = array();
    /**
     * Minimal Repository
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema\MinimalRepository::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema\MinimalRepository $repository;
    public function preferences() : array
    {
        return $this->preferences;
    }
    /**
     * Minimal Repository
     */
    public function repository() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema\MinimalRepository
    {
        return $this->repository;
    }
}
