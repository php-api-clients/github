<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class OrganizationActionsSecret
{
    public const SCHEMA_TITLE       = 'Actions Secret for an Organization';
    public const SCHEMA_DESCRIPTION = 'Secrets for GitHub Actions for an organization.';
    /**
     * The name of the secret.
     */
    private ?string $name       = null;
    private ?string $created_at = null;
    private ?string $updated_at = null;
    /**
     * Visibility of a secret
     */
    private ?string $visibility                = null;
    private ?string $selected_repositories_url = null;

    public function name(): ?string
    {
        return $this->name;
    }

    public function created_at(): ?string
    {
        return $this->created_at;
    }

    public function updated_at(): ?string
    {
        return $this->updated_at;
    }

    public function visibility(): ?string
    {
        return $this->visibility;
    }

    public function selected_repositories_url(): ?string
    {
        return $this->selected_repositories_url;
    }
}
