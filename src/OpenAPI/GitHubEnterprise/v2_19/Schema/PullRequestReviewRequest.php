<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema;

final class PullRequestReviewRequest
{
    public const SCHEMA_TITLE = 'Pull Request Review Request';
    public const SCHEMA_DESCRIPTION = 'Pull Request Review Request';
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema\SimpleUser>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema\SimpleUser::class)
     */
    private array $users = array();
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema\Team>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema\Team::class)
     */
    private array $teams = array();
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema\SimpleUser>
     */
    public function users() : array
    {
        return $this->users;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema\Team>
     */
    public function teams() : array
    {
        return $this->teams;
    }
}
