<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class CodespacesSecret
{
    public const SCHEMA_TITLE = 'Codespaces Secret';
    public const SCHEMA_DESCRIPTION = 'Secrets for a GitHub Codespace.';
    /**
     * The name of the secret.
     */
    private string $name;
    private string $created_at;
    private string $updated_at;
    /**
     * Visibility of a secret
     */
    private string $visibility;
    private string $selected_repositories_url;
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
    /**
     * Visibility of a secret
     */
    public function visibility() : string
    {
        return $this->visibility;
    }
    public function selected_repositories_url() : string
    {
        return $this->selected_repositories_url;
    }
}
