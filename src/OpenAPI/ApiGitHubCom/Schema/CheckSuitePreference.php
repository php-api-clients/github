<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class CheckSuitePreference
{
    public const SCHEMA_TITLE = 'Check Suite Preference';
    public const SPL_HASH = '000000000cd53c610000000040effa88';
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
