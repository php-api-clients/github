<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class Environment
{
    public const SCHEMA_TITLE       = 'Environment';
    public const SCHEMA_DESCRIPTION = 'Details of a deployment environment';
    /**
     * The id of the environment.
     */
    private ?int $id         = null;
    private ?string $node_id = null;
    /**
     * The name of the environment.
     */
    private ?string $name     = null;
    private ?string $url      = null;
    private ?string $html_url = null;
    /**
     * The time that the environment was created, in ISO 8601 format.
     */
    private ?string $created_at = null;
    /**
     * The time that the environment was last updated, in ISO 8601 format.
     */
    private ?string $updated_at     = null;
    private array $protection_rules = [];
    /**
     * The type of deployment branch policy for this environment. To allow all branches to deploy, set to `null`.
     */
    private array $deployment_branch_policy = [];

    public function id(): ?int
    {
        return $this->id;
    }

    public function node_id(): ?string
    {
        return $this->node_id;
    }

    public function name(): ?string
    {
        return $this->name;
    }

    public function url(): ?string
    {
        return $this->url;
    }

    public function html_url(): ?string
    {
        return $this->html_url;
    }

    public function created_at(): ?string
    {
        return $this->created_at;
    }

    public function updated_at(): ?string
    {
        return $this->updated_at;
    }

    public function protection_rules(): array
    {
        return $this->protection_rules;
    }

    public function deployment_branch_policy(): array
    {
        return $this->deployment_branch_policy;
    }
}
