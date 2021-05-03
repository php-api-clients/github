<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class CheckSuitePreference
{
    public const SCHEMA_TITLE = 'Check Suite Preference';
    public const SPL_HASH = '0000000054d5e5630000000071115dec';
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
