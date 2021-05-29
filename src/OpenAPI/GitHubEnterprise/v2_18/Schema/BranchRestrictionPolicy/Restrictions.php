<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema\BranchRestrictionPolicy;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema\BranchRestrictionPolicy\Restrictions\Teams;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema\BranchRestrictionPolicy\Restrictions\Users;

final class Restrictions
{
    public const SCHEMA_TITLE       = 'branch-restriction-policy::restrictions';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $url            = null;
    private ?string $users_url      = null;
    private ?string $teams_url      = null;
    private array $users            = [];
    private array $teams            = [];

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
}
