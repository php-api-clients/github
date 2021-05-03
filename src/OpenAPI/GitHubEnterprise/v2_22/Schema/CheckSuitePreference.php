<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema;

final class CheckSuitePreference
{
    public const SCHEMA_TITLE = 'Check Suite Preference';
    public const SPL_HASH = '000000004a4ba4cd0000000021d13a21';
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
