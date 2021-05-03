<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema;

final class CheckSuitePreference
{
    public const SCHEMA_TITLE = 'Check Suite Preference';
    public const SPL_HASH = '000000005d4c990d000000005494ca51';
    public const SCHEMA_DESCRIPTION = 'Check suite configuration preferences for a repository.';
    private ?object $preferences = null;
    /**
     * Minimal Repository
     */
    private ?object $repository = null;
    public function preferences() : ?object
    {
        return $this->preferences;
    }
    public function repository() : ?object
    {
        return $this->repository;
    }
}
