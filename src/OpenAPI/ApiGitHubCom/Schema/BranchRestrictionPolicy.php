<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BranchRestrictionPolicy\Apps;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BranchRestrictionPolicy\Teams;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BranchRestrictionPolicy\Users;

final class BranchRestrictionPolicy
{
    public const SCHEMA_TITLE       = 'Branch Restriction Policy';
    public const SCHEMA_DESCRIPTION = 'Branch Restriction Policy';
    private ?string $url            = null;
    private ?string $users_url      = null;
    private ?string $teams_url      = null;
    private ?string $apps_url       = null;
    private array $users            = [];
    private array $teams            = [];
    private array $apps             = [];

    public function url(): ?string
    {
        return $this->url;
    }

    public function users_url(): ?string
    {
        return $this->users_url;
    }

    public function teams_url(): ?string
    {
        return $this->teams_url;
    }

    public function apps_url(): ?string
    {
        return $this->apps_url;
    }

    /**
     * @return array<Users>
     */
    public function users(): array
    {
        return $this->users;
    }

    /**
     * @return array<Teams>
     */
    public function teams(): array
    {
        return $this->teams;
    }

    /**
     * @return array<Apps>
     */
    public function apps(): array
    {
        return $this->apps;
    }
}
