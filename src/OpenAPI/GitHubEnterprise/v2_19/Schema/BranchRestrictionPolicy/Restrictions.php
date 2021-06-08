<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema\BranchRestrictionPolicy;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema\BranchRestrictionPolicy\Restrictions\Apps;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema\BranchRestrictionPolicy\Restrictions\Teams;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema\BranchRestrictionPolicy\Restrictions\Users;

final class Restrictions
{
    public const SCHEMA_TITLE       = 'branch-restriction-policy::restrictions';
    public const SCHEMA_DESCRIPTION = '';
    private string $url;
    private string $users_url;
    private string $teams_url;
    private string $apps_url;
    /**
     * @var array<Users>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema\BranchRestrictionPolicy\Restrictions\Users::class)
     */
    private array $users = [];
    /**
     * @var array<Teams>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema\BranchRestrictionPolicy\Restrictions\Teams::class)
     */
    private array $teams = [];
    /**
     * @var array<Apps>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema\BranchRestrictionPolicy\Restrictions\Apps::class)
     */
    private array $apps = [];

    public function url(): string
    {
        return $this->url;
    }

    public function users_url(): string
    {
        return $this->users_url;
    }

    public function teams_url(): string
    {
        return $this->teams_url;
    }

    public function apps_url(): string
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
