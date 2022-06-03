<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema\BranchRestrictionPolicy;

final class Restrictions
{
    public const SCHEMA_TITLE = 'branch-restriction-policy::restrictions';
    public const SCHEMA_DESCRIPTION = '';
    private string $url;
    private string $users_url;
    private string $teams_url;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema\BranchRestrictionPolicy\Restrictions\Users>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema\BranchRestrictionPolicy\Restrictions\Users::class)
     */
    private array $users = array();
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema\BranchRestrictionPolicy\Restrictions\Teams>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema\BranchRestrictionPolicy\Restrictions\Teams::class)
     */
    private array $teams = array();
    public function url() : string
    {
        return $this->url;
    }
    public function users_url() : string
    {
        return $this->users_url;
    }
    public function teams_url() : string
    {
        return $this->teams_url;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema\BranchRestrictionPolicy\Restrictions\Users>
     */
    public function users() : array
    {
        return $this->users;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema\BranchRestrictionPolicy\Restrictions\Teams>
     */
    public function teams() : array
    {
        return $this->teams;
    }
}
