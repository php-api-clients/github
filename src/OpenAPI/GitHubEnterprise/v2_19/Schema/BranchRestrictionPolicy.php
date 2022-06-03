<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema;

final class BranchRestrictionPolicy
{
    public const SCHEMA_TITLE = 'Branch Restriction Policy';
    public const SCHEMA_DESCRIPTION = 'Branch Restriction Policy';
    private string $url;
    private string $users_url;
    private string $teams_url;
    private string $apps_url;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema\BranchRestrictionPolicy\Users>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema\BranchRestrictionPolicy\Users::class)
     */
    private array $users = array();
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema\BranchRestrictionPolicy\Teams>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema\BranchRestrictionPolicy\Teams::class)
     */
    private array $teams = array();
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema\BranchRestrictionPolicy\Apps>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema\BranchRestrictionPolicy\Apps::class)
     */
    private array $apps = array();
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema\BranchRestrictionPolicy\Restrictions>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema\BranchRestrictionPolicy\Restrictions::class)
     */
    private array $restrictions = array();
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
    public function apps_url() : string
    {
        return $this->apps_url;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema\BranchRestrictionPolicy\Users>
     */
    public function users() : array
    {
        return $this->users;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema\BranchRestrictionPolicy\Teams>
     */
    public function teams() : array
    {
        return $this->teams;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema\BranchRestrictionPolicy\Apps>
     */
    public function apps() : array
    {
        return $this->apps;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema\BranchRestrictionPolicy\Restrictions>
     */
    public function restrictions() : array
    {
        return $this->restrictions;
    }
}
