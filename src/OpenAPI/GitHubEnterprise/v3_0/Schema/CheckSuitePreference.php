<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema;

final class CheckSuitePreference
{
    public const SCHEMA_TITLE = 'Check Suite Preference';
    public const SPL_HASH = '0000000008b926e000000000412ebbda';
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
