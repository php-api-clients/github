<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema;

final class PullRequestReviewRequest
{
    public const SCHEMA_TITLE = 'Pull Request Review Request';
    public const SCHEMA_DESCRIPTION = 'Pull Request Review Request';
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema\SimpleUser>
     */
    private array $users = array();
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema\TeamSimple>
     */
    private array $teams = array();
    public function users() : array
    {
        return $this->users;
    }
    public function teams() : array
    {
        return $this->teams;
    }
}
