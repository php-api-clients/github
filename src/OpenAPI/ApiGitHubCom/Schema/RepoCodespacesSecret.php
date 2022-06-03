<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class RepoCodespacesSecret
{
    public const SCHEMA_TITLE = 'Codespaces Secret';
    public const SCHEMA_DESCRIPTION = 'Set repository secrets for GitHub Codespaces.';
    /**
     * The name of the secret.
     */
    private string $name;
    private string $created_at;
    private string $updated_at;
    /**
     * The name of the secret.
     */
    public function name() : string
    {
        return $this->name;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function updated_at() : string
    {
        return $this->updated_at;
    }
}
