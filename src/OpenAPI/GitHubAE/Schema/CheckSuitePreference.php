<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class CheckSuitePreference
{
    public const SCHEMA_TITLE = 'Check Suite Preference';
    public const SPL_HASH = '000000000c1ce0350000000065732ccc';
    public const SCHEMA_DESCRIPTION = 'Check suite configuration preferences for a repository.';
    private object $preferences;
    /**
     * Minimal Repository
     */
    private object $repository;
    public function preferences() : object
    {
        return $this->preferences;
    }
    public function repository() : object
    {
        return $this->repository;
    }
}
