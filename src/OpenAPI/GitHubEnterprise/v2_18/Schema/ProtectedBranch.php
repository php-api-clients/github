<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema;

final class ProtectedBranch
{
    public const SCHEMA_TITLE       = 'Protected Branch';
    public const SCHEMA_DESCRIPTION = 'Branch protections protect branches';
    private ?string $url            = null;
    /**
     * Status Check Policy
     */
    private array $required_status_checks        = [];
    private array $required_pull_request_reviews = [];
    private array $required_signatures           = [];
    private array $enforce_admins                = [];
    private array $required_linear_history       = [];
    private array $allow_force_pushes            = [];
    private array $allow_deletions               = [];
    /**
     * Branch Restriction Policy
     */
    private array $restrictions                     = [];
    private array $required_conversation_resolution = [];

    public function url(): ?string
    {
        return $this->url;
    }

    public function required_status_checks(): array
    {
        return $this->required_status_checks;
    }

    public function required_pull_request_reviews(): array
    {
        return $this->required_pull_request_reviews;
    }

    public function required_signatures(): array
    {
        return $this->required_signatures;
    }

    public function enforce_admins(): array
    {
        return $this->enforce_admins;
    }

    public function required_linear_history(): array
    {
        return $this->required_linear_history;
    }

    public function allow_force_pushes(): array
    {
        return $this->allow_force_pushes;
    }

    public function allow_deletions(): array
    {
        return $this->allow_deletions;
    }

    public function restrictions(): array
    {
        return $this->restrictions;
    }

    public function required_conversation_resolution(): array
    {
        return $this->required_conversation_resolution;
    }
}
