<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema;

final class OrganizationActionsSecret
{
    public const SCHEMA_TITLE = 'Actions Secret for an Organization';
    public const SPL_HASH = '0000000031ee5ceb00000000484d7fbe';
    public const SCHEMA_DESCRIPTION = 'Secrets for GitHub Actions for an organization.';
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
    public function visibility() : string
    {
        return $this->visibility;
    }
    public function selected_repositories_url() : string
    {
        return $this->selected_repositories_url;
    }
}
