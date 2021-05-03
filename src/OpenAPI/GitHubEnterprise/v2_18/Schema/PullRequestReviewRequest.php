<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema;

final class PullRequestReviewRequest
{
    public const SCHEMA_TITLE = 'Pull Request Review Request';
    public const SPL_HASH = '000000000c929ca0000000006ad867a6';
    public const SCHEMA_DESCRIPTION = 'Pull Request Review Request';
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema\SimpleUser>
     */
    private array $users = array();
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema\TeamSimple>
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
